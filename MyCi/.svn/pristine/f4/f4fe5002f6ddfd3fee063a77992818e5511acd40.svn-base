<?php
class Stocks extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Curl');
	}
	public function index()
	{
		$data['title'] = 'this is stocks index page';
		$push_one = $this->curl->GetByCode(1207,'1');  //推荐 
		$push_two = $this->curl->GetByCode(1208,'1');
		$push_three = $this->curl->GetByCode(1209,'1');
		$push_three = $this->curl->GetByCode(1210,'1');
		$data['push'] = '';
		$tag = '%B9%C9%C6%B1%C6%B5%B5%C0%CD%C6%BC%F6';
		$data['market'] = $this->curl->GetByTag($tag1,6); //市场聚焦
		$data['information'] = $this->curl->GetByClass(1764,6);   //最新资讯
		$data['prompt'] = $this->curl->GetByClass(1282,6); // 今日提示
		$data['live'] = $this->curl->GetByClass(1358,6);
		$data['stock_live'] = $this->get_column(1325,6);  //股市直播 ID:1325
		$data['market_analysis'] = $this->get_column(1285,6); // 市场分析 ID:1285
		$data['stock_focus'] = $this->get_column(1455,6); // 股市聚焦 ID:1455
		$data['market_nuggets'] = $this->get_column(1628,6); // 市场掘金 ID:1628
		$data['stock_re'] = $this->get_column(1288,6);	// 个股推荐 ID:1288
		$data['stock_co'] = $this->get_column(1456,6);  	// 个股点评 ID:1456
		$data['block_focus'] = $this->get_column(1329,6);	// 板块聚焦 ID:1329
		$data['main_trends'] = $this->get_column(149,6);	// 主力动向 ID:149
		$data['main_con'] = $this->get_column(2434,6);	// 主力论市 ID:2434
		$data['news_focus'] = $this->get_column(1310,6);	// 新股要闻 ID:1310
		$data['new_stock_co']/ = $this->get_column(2062,6);	// 新股评论 ID:2062
		$data['enship_info'] = $this->get_column(1949,6);	// 创业板资讯 ID:1949
		$data['enship_any'] = $this->get_column(1950,6);	// 创业板分析 ID:1950
		$data['enship_dynamic'] = $this->get_column(1777,6);// 期指动态(期指要闻) ID:1777
		$data['futures_any'] = $this->get_column(1778,6);	// 期指分析 1778
		$this->load->view('templates/header',$data);
		$this->load->view('stocks/index',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view()
	{
		$data['title'] = 'this is stock view page';
		$this->load->view('templates/header',$data);
		$this->load->view('stocks/view',$data);
		$this->load->view('templates/footer',$data);
	}
	public function stocks_list($sid,$cid,$record);
	{
		$data['title'] = 'this is title';
		$data['list'] = $this->get_column($cid,$record);
		$this->load->view('templates/header',$data);
		$this->load->view('stocks/list',$data);
		$this->load->view('templates/footer',$data);
	}
	//获取栏目
	private function get_column($cid,$record)
	{
		$data = array();
		$data = $this->curl->GetByClass($cid,$record);
		return $data;
	}
}
?>