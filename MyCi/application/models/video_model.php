<?php
class Video_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->db2 = $this->load->database('cnfolCMS',TRUE);
	}
    //轮播图片
	public function get_block($num,$slug = FALSE)
	{
        $this->db2->select('BlockId,BlockName,Type,TemplateCode,Data,PublishedTime,Num,GroupId');
        $this->db2->order_by('updatetime', 'asc');
        $this->db2->limit($num);
		if($slug === FALSE)
		{
			$query=$this->db2->get('cnfol_block');
		}else{
            $query = $this->db2->get_where('cnfol_block',array('BlockId'=>$slug));
        }
        return $query->result_array();
	}
    //首页推荐内容和列表页
    public function get_hot_video($num,$slug = FALSE)
    {
        $date = date('Ym');
        $tableName = 'cnfol_arcontent_'.$date;
       // $tableName = 'cnfol_arcontent_201311';
        $this->db2->select('*');
        $this->db2->order_by('ModifiedTime', 'asc');
        $this->db2->limit($num);
        if($slug === FALSE)
        {
            $err= 'need a param';
            $return_array =array('err'=>$err);
            return $return_array;
        }else{
            $query = $this->db2->get_where($tableName,array('CatId'=>$slug));
            return $query->result_array();
        }
    }
//获取某一条内容
    public function get_contents($slug = FALSE)
    {
        if($slug === FALSE)
        {
            echo 'need a param';die;
        }else{
            $date = date('Ym');
            $tableName = 'cnfol_arcontent_'.$date;
            $this->db2->select('*');
            $query = $this->db2->get_where($tableName,array('ContId'=>$slug));
            return $query->row_array();
        }
    }
    //热门文章
    public function get_recommend()
    {
        $tableName = 'confol_arcontent'.date('Ym');
        $arr = array(3622,3623,3624,3631,1819);
        $this->db->select('*');
        $this->db->order_by('view','asc');
        $this->db->where_in('CatId',$arr);
        $this->db->limit(10);
        $query = $this->get($tableName);
        return $query->result_array();
    }
}