<?php
class Main extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model();
	}
	public function index()
	{
		$data['title'] = 'this is main index pages';
		$this->load->view('templates/header',$data);
		$this->load->view('main/index',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view()
	{
		$data['title'] = 'this is main view pages';
		$this->load->view('templates/header',$data);
		$this->load->view('main/view',$data);
		$this->load->view('templates/footer',$data);
	}
}
?>