<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AsanaModel extends CI_MODEL {
	
	private $project;
	private $projects;
	private $workspace;

	function __construct()
	{
		parent::__construct();
		$this->load->library('asana');
		$this->establishWorkspace();
	}

	public function get_project($id) {
		if(!isset($this->projects) || empty($this->projects)) {
			$this->get_projects();
		}
		foreach($this->projects as $proj) {
			if($proj->id == $id) $this->project = $proj;
		}
		return $this->project;
	}

	public function get_project_detail($id) {
		//get the project details
		$project = json_decode($this->asana->getProject($id));
		$project = $project->data;
		$project->completedCount = 0;
		$project->tasksCount = 0;
		
		//get the associated tasks details
		$taskList = json_decode($this->asana->getProjectTasks($id));
		$taskList = $taskList->data;
		$project->tasks = array();
		$project->meetings = array();
		foreach($taskList as $task) {
			$task = json_decode($this->asana->getTask($task->id));
			$task = $task->data;

			//get the subtasks
			$subtasks = json_decode($this->asana->getSubtasks($task->id));
			$subtasks = $subtasks->data;
			$task->subtasks = $subtasks;

			//get the comments and history
			$stories = json_decode($this->asana->getTaskStories($task->id));
			$stories = $stories->data;
			$comments = array();
			$history = array();
			foreach($stories as $story) {
				if($story->type == 'comment') {
					$comments[] = $story;
				} else {
					$history[] = $story;
				}
			}
			$task->comments = $comments;
			$task->history = $history;

			//set the status
			if($task->completed) {
				$task->status = 'completed';
			} else {
				if(strtotime($task->due_on.' 12:59:59pm') < time()) {
					$task->status = 'late';
				} else {
					$task->status = 'to-do';
				}
			}

			//filter out meetings
			$isMeeting = false;
			foreach($task->tags as $tag) {
				if($tag->name == 'meeting')
					$isMeeting = true;
			}
			if($isMeeting) {
				$project->meetings[] = $task;
			}
			else {
				$project->tasks[] = $task;
				if($task->completed) $project->completedCount++;
				$project->tasksCount++;
			}
		}
		$project->completedPercent = round(($project->completedCount / $project->tasksCount) * 100);
		
		return $project;
	}

	public function get_projects() {
		$this->projects = json_decode($this->asana->getProjectsInWorkspace($this->workspace->id));
		if(isset($this->projects->data))
			$this->projects = $this->projects->data;
		return $this->projects;
	}

	/*** HELPER FUNCTIONS ***/

	private function establishWorkspace() {
		$workspaces = json_decode($this->asana->getWorkspaces());
		$workspaces = $workspaces->data;
		$workspaceName = $this->config->item('asana_workspace');
		foreach($workspaces as $workspace) {
			if($workspace->name == $workspaceName) $this->workspace = $workspace;
		}
	}

}