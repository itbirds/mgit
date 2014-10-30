<?php
class Newshares extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->view();
	}
	public function index()
	{
		$data['title'] = 'this is newshares index page';
		$this->load->view('templates/header',$data);
		$this->load->view('newshares/index',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view()
	{
		$data['tilte'] = 'this is newshares view pages';
		$this->load->view('templates/header',$data);
		$this->load->view('newshares/view',$data);
		$this->load->view('templates/footer',$data);
	}
}
?>