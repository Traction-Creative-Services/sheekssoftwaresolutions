<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Project extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id)
	{
		$this->load->model('Asanamodel','Asana');
		$data['project'] = $this->Asana->get_project_detail($id);
		$data['title'] = $data['project']->name;
		$this->loadPage('project',$data);
	}

	public function loadPage($page,$data) 
	{
		if(!isset($data['title'])) $data['title'] = 'S3 Summit';
		$this->load->view('parts/header',$data);
		$this->load->view($page,$data);
		$this->load->view('parts/footer',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */