<div class='container'>
	<h1><?php echo $project->name; ?></h1>
	<p class='lead'><?php echo $project->notes; ?></p>
	<h2>Tasks <small class='completed-count'><?php echo $project->completedPercent; ?>% Completed</small></h2>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th>Task</th>
			<th>Assigned To</th>
			<th>Due On</th>
			<th>Status</th>
		</tr>
		</thead>
		<?php foreach($project->tasks as $task) {
			if(substr($task->name,-1) == ':') {?> <tr><td colspan="4" class="sectionHeader"><?php echo $task->name; ?></td></tr><?php continue; }
		?>
			<tr class="<?php echo $task->status; ?>">
				<td><?php echo $task->name; ?></td>
				<td><?php echo ($task->assignee != NULL ? $task->assignee->name : 'Unassigned'); ?></td>
				<td><?php echo date('M d, Y',strtotime($task->due_on)); ?></td>
				<td><?php echo $task->status; ?></td>
			</tr>
		<?php } ?>
	</table>
	<h2>Meetings</h2>
	<?php if(count($project->meetings) > 0) { ?>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Meeting</th>
				<th>Date</th>
				<th>Host</th>
			</tr>
		</thead>
		<?php foreach($project->meetings as $meeting) { ?>
			<tr class="<?php echo ( $meeting->completed ? 'past' : 'future'); ?>">
				<td><?php echo $meeting->name; ?></td>
				<td><?php echo $meeting->due_on; ?></td>
				<td><?php echo ($task->assignee != NULL ? $task->assignee->name : 'Unassigned'); ?></td>
			</tr>
		<?php } ?>
	</table>
	<?php } else { ?>
	<p>There are no meetings scheduled at this time.</p>
	<?php } ?>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>