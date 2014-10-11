<?php
class Picture_model extends CI_Model{
	public function __construct()
	{
		parent :: __construct();
		$this->load->database();
	}
	public function get_part($slug = FALSE)
	{
		if($slug === FALSE)
		{
		
			$query = $this->db->get('cnfol_part');
			return $query->result_array();
		}
		$query = $this->db->get_where('cnfol_part',array('Id'=>$slug));
		return $query->row_array();
	}
	public function get_contents($slug = FALSE)
	{
		if($slug === FALSE)
		{
			$query=$this->db->get('cnfol_content');
			return $query->result_array();
		}
		$query = $this->db->get_where('cnfol_content',array('partId'=>$slug));
		return $query->row_array();
	}
    //首页图片
	public function get_pic($slug = FALSE)
	{
        $this->db->select('id,articleId,src,memo,updatetime,pic_order');
        $this->db->order_by('updatetime', 'asc');
        $this->db->limit(2);
		if($slug === FALSE)
		{
			$query = $this->db->get('cnfol_pic');
		}else{
            $query = $this->db->get_where('cnfol_pic',array('articleId'=>$slug));
        }
		return  $query->result_array();
	}
    //首页一张图片
	public function get_onepic($slug = FALSE)
	{
		if($slug === FALSE)
		{
			$err = 'error sql ';
			return $err;
		}
		$query = $this->db->get_where('cnfol_pic',array('id'=>$slug));
		return $query->row_array();

	}
    //首页推荐内容
	public function get_channel($slug)
	{
        $this->db->select('articleId,partId,title,intro,show,updatetime,status,image_url,source_url,recommend,hit');
        $this->db->order_by('updatetime','asc');
        $this->db->limit(6);
		if($slug === FALSE)
		{
			$query = $this->db->get('cnfol_content');
		}else{
            $query = $this->db->get_where('cnfol_content',array('partId'=>$slug));
        }
		return  $query->result_array();
	}
    //某条图片内容
	public function get_onehot($slug = FALSE)
	{
		if($slug === FALSE)
		{
			$err = 'error sql';
			return $err;
		}
		$query = $this->db->get_where('cnfol_content',array('articleId'=>$slug));
		return $query->row_array();
	}
    //推荐内容
	public function get_recommed($slug = FALSE)
	{
		if($slug === FALSE){
			$err = 'error sql';
			return $err;
		}
		$this->db->select('articleId,partId,title,intro,show,updatetime,status,image_url,source_url,recommend,hit');
		$this->db->order_by('updatetime','asc');
		$this->db->limit(8);
		$query = $this->db->get_where('cnfol_content',array('partId'=>$slug));
		return $query-->result_array();
	}
    //热门文章
	public function get_hot_article()
	{
		$arr = array(1,2,4,14);
		$this->db->select('articleId,partId,title,intro,show,updatetime,status,image_url,source_url,recommend,hit');
		$this->db->order_by('hit','asc');
		$this->db->where_in('partId',$arr);
		$this->db->limit(10);
		$query = $this->get('cnfol_content');
		return $query->result_array();
	}
	
}