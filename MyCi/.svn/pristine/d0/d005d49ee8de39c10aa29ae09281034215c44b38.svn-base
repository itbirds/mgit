<?php
class Video extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('video_model');
    }
    public function index()
    {
        $data['title'] = 'this is index page';
        $data['finance'] = $this->video_model->get_hot_video(5,3622);
        $data['around_corners'] = $this->video_model->get_hot_video(5,3623);
        $data['finance_eye'] = $this->video_model->get_hot_video(5,3624);
        $data['finance_fun'] = $this->video_model->get_hot_video(5,3631);
        $data['finance_first'] = $this->video_model->get_hot_video(5,1819);
        $this->load->view('templates/header',$data);
        $this->load->view('video/index',$data);
        $this->load->view('templates/footer',$data);
    }
    public function vlist($slug)
    {
        $data['title'] = 'this is video list page';
        $data['list'] = $this->video_model->get_hot_video(6,$slug);
        $this->load->view('templates/header',$data);
        $this->load->view('video/vlist',$data);
        $this->load->view('templates/footer',$data);
    }
    //今日财经汇
//    public function today_finance()
//    {
//        $data['title'] = 'this is today finance';
//        $data['today_finance'] = $this->video_model->get_hot_video(6,3622);
//        $this->load->view('template/header',$data);
//        $this->load->view('video/today_finance',$data);
//        $this->load->view('templates/footer',$data);
//    }
    public function contents($slug)
    {
        $data['title'] = 'this is video contents';
        $data['contents'] = $this->video_model->get_contents($slug);
        $data['block'] = $this->video_model->get_block($id=373);
        $data['recommend'] = $this->video_model->get_recommend();
        $this->load->view('templates/header',$data);
        $this->load->view('video/contents',$data);
        $this->load->view('templates/footer',$data);
    }
}