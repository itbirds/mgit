<?php
class Picture extends CI_Controller{ 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('picture_model');
		$this->load->helper('url');
		$this->load->library('Curl');
		$this->load->library('channelmap');
	}
	public function index()
	{
		
		$data['parts'] = $this->picture_model->get_part();
		$data['title'] = 'parts';
		//图说财经
		//$url = 'http://shell.cnfol.com/3gcnfol/dynamic.php';//手工编辑块，动态类型
		$id = 1164;
		$record = '2';
		$pic_data = $this->curl->GetById($id,$record);
		foreach ($pic_data as $key => $value) {
			if(!isset($value['src'])){
				unset($pic_data[$key]);
			}
		}
	    	$data['pictures'] = $pic_data;

	    	$data['hot'] = $this->picture_model->get_channel(2,6);
		$data['consumption'] = $this->picture_model->get_channel(14,6);
		$data['life'] = $this->picture_model->get_channel(1,6);
		$data['other'] = $this->picture_model->get_channel(3,6);
		$data['hot_id'] = 2;
		$data['consumption_id'] = 14;
		$data['life_id'] = 1;
		$data['other_id'] = 3;
		$this->load->view('templates/header',$data);
		$this->load->view('picture/index',$data);
		$this->load->view('templates/footer',$data);
	}
	
	//更多页面
	public function channel($channel,$pid,$ajax=FALSE)
	{
	    $data['title'] = 'this is descant';
	    if($this->input->post() ){
			$pid = $this->input->post('pid'); 
			$ajax =  $this->input->is_ajax_request();
			$start = $this->input->post('start'); 
	    }else{
			$pid = $pid;
	    }
	    if($ajax===FALSE||!$ajax){
 		$data['descant_list'] = $this->picture_model->get_channel($pid,18);
 		$data['channel'] = $channel;
 		$data['channel_id'] = $pid;
 		$data['breads'] = $this->channelmap->channel_arr[$channel];
	    	$this->load->view('templates/header',$data);
	    	$this->load->view('picture/channel',$data);
	    	$this->load->view('templates/footer',$data);
	    }else{
	    	$descant_list = $this->picture_model->get_channel($pid,9,$start);
		echo json_encode($descant_list);exit;
	    }
	}
	
	//香车靓影
	public function Cars()
	{
	    $data['title'] = 'this is cars';
	    $data['big_pic'] = $this->picture_model->get_channel(10,6);
	    $data['cool_car'] = $this->picture_model->get_channel(9,6);
	    $data['funs'] = $this->picture_model->get_channel(8,6);
	    $data['pic_id'] = 10;
	    $data['car_id'] = 9;
	    $data['fun_id'] = 8;
	    $this->load->view('templates/header',$data);
	    $this->load->view('picture/Cars',$data);
	    $this->load->view('templates/footer',$data);
	}
	
	//文章页面
	public function articles($id,$pid)
	{
	    $this->load->helper('url');
	    $pid_arr = array(1,2,4,14);
	    $num = 10;
	    $data['title'] = 'this is articles';
	    $data['one'] = $this->picture_model->get_onepic($id);
	    $data['pics'] = $this->picture_model->get_pic($id,0);
	    $data['recommend'] = $this->picture_model->get_recommed($pid);
	    $data['hot_article'] = $this->picture_model->get_hot_article($pid_arr,$num);
	    $this->load->view('templates/header',$data);
	    $this->load->view('picture/articles',$data);
	    $this->load->view('templates/footer',$data);
	}

}
