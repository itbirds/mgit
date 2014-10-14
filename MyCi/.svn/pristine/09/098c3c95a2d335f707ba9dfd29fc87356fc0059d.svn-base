<?php
class Picture extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('picture_model');
	}
	public function index()
	{
		$data['parts'] = $this->picture_model->get_part();
		$data['title'] = 'parts';
		$this->load->view('templates/header',$data);
		$this->load->view('picture/index',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view()
	{
		$id = $this->input->get();
		$data['contents '] = $this->picture_model->get_contents();
		$data['title'] = 'content item';
		$this->load->view('templates/header',$data);
		$this->load->view('picture/view',$data);
		$this->load->view('templates/footer',$data);

	}
    //图说财经
	public function pictures()
	{
		$data['title'] = 'this is two pictures';
		$data['pictures'] = $this->picture_model->get_pic('1164');
		$this->load->view('templates/header',$data);
		$this->load->view('picture/picture',$data);
		$this->load->view('templates/footer',$data);
	}
	private function channel($slug=2)
	{
		
		$data = $this->picture_model->get_channel($slug);
        return $data;
	}
    //金牌解股
    public function descant($slug)
    {
        $data['title'] = 'this is descant';
        $data['descant'] = $this->channel($slug=12);
        $this->load->view('templates/header',$data);
        $this->load->view('picture/descant',$data);
        $this->load->view('picture/footer',$data);
    }
    //图解期货
    public function futures()
    {
        $data['title'] = 'this is futures';
        $data['futures'] = $this->channel($slug=11);
        $this->load->view('templates/header',$data);
        $this->load->view('picture/futures',$data);
        $this->load->view('templates/footer',$data);
    }
    //香车靓影
    public function Cars()
    {
        $data['title'] = 'this is cars';
        $data['big_pic'] = $this->channel($slug=10);
        $data['cool_car'] = $this->channel($slug=9);
        $data['funs'] = $this->channel($slug=8);
        $this->load->view('templates/header',$data);
        $this->load->view('picture/cars',$data);
        $this->load->view('templates/footer',$data);
    }
    //文章页面
    public function articles($id,$pid)
    {
        $data['title'] = 'this is articles';
        $data['one'] = $this->picture_model->get_onehot($id);
        $data['recommend'] = $this->picture_model->get_recommend($pid);
        $data['hot_article'] = $this->picture_model->get_hot_article();
        $this->load->view('templates/header',$data);
        $this->load->view('picture/articles',$data);
        $this->load->view('templates/footer',$data);
    }
}
