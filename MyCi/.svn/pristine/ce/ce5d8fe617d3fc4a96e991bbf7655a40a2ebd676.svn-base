<?php
class Marlet extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model();
	}
	public function index()
	{
		$data['title'] = 'this is market';
		$this->load->view('templates/header',$data);
		$this->load->view('market/index',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view()
	{
		$data['title'] = 'this is view';
		$this->load->view('templates/header',$data);
		$this->load->view('market/view',$data);
		$this->load->view('templates/footer',$data);
	}
}
?>