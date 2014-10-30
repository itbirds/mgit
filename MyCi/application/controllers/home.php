<?php 
class Home extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('Curl');
		$this->load->model('picture_model');
	}
	public function index()
	{
		$data = $this->get_index_info();
		$this->load->view('templates/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer',$data);
	}
	public function login()
	{
		$this->load->view('home/login');
	}
	public function dologin()
	{
		
	}
	private function get_index_info()
	{
		$data = array();
		$data['title'] = 'this is home page';
		$data['top'] = $this->curl->GetById(953,'1'); //头条
		$data['top_down'] = $this->curl->GetById(954,'10');//头条下面的
		$data['picture_talk'] = $this->curl->GetById(1164,'4');//图说财经
		$data['picture'] = $this->picture_model->get_hot_article(array(1,2,3,14),4);//视图
		$financial_one= $this->curl->GetByClassId(1277,4);
		$financial_two = $this->curl->GetByClassId(1591,4);
		$data['financial_block'] = array_merge($financial_one,$financial_two);//财经块
		$stock_one = $this->curl->GetByCode(1207,'1');//股票头条1
		$stock_two = $this->curl->GetByCode(1209,'1');//股票头条2
		$tag = '%B9%C9%C6%B1%C6%B5%B5%C0%CD%C6%BC%F6';
		$stock_other = $this->curl->GetByTag($tag,6); //股票后6条
		$data['stock'] = '';
		$data['con_ financial_pic'] = $this->curl->GetById(1081,'2');//理财图片
		$con_financiakl_one = $this->curl->GetByCode(684,'1');//头条
		$con_financiakl_two = $this->curl->GetByCode(686,'1');//头条
		$con_financiakl_three = $this->curl->GetByRecommend(699,'2'); //6条数据只有5个id
		$data['gold'] = $this->curl->GetByClassId(1710,'4');//金市直播
		$data['foreign_exchange'] = $this->curl->GetByClassId(1504,'8');//专家汇评
		$data['foundation '] = $this->curl->GetByClassId(1484,'8');//基金焦点
		$fid = '1615|1921';
		$data['futures'] = $this->curl->GetByClassId($fid,'8');//名家论 机构论市
		$house_pic = $this->curl->GetByCode(1127,'2');//房产图文
		$house_pro = $this->curl->GetByClassId(2134,'4');
		$data['house'] = '';
		$car_pic = $this->curl->GetByCode(1137,'2');
		$car_other = $this->curl->GetByClassId(1700,'4');
		$data['car'] = '';
		return $data;
	}
}
?>