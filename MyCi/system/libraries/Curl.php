<?php
class Curl{
 
/**
* @请求的host
*/
private $host_;
 
/**
* @curl 句柄
*/
private $ch_;

/**
* @超时限制时间
*/
const time_=30;
/**
* @请求的设置
*/
private $options_;
 
/**
* @保存请求头信息
*/
private $request_header_;
 
/**
* @保存响应头信息
*/
private $response_header_;
 
/**
* @body_ 用于保存curl请求返回的结果
*/
private $body_;
 
/**
* @读取cookie
*/
private $cookie_file_;
 
/**
* @写入cookie
*/
private $cookie_jar_;
 
 //code 加密串
private $code_='ZHP@Q3Al!s9Ca9x';

 //url 手工编辑块 动态类型地址
private $url_dy='http://shell.cnfol.com/3gcnfol/dynamic.php';

//url 栏目接口地址
private $url_cls='http://shell.cnfol.com/3gcnfol/iphoneArticle.php';

//url 手工编辑块 代码类型
private $url_code='http://shell.cnfol.com/3gcnfol/code.php';

//url手工编辑 推送类型地址
private $url_re = 'http://shell.cnfol.com/3gcnfol/recomend.php';

//url标签类型地址
private $url_tag = 'http://tags.js.cnfol.com/tag_new.php';
/**
* @todo proxy
* @构造函数，初始化CURL回话
*/
	public function Start($url){
		$this->ch_ = curl_init($url);
		curl_setopt($this->ch_, CURLOPT_HEADER, 0);
		curl_setopt($this->ch_, CURLOPT_RETURNTRANSFER , 1 );
	}
 
/**
* @返回响应头
*/
	public function ResponseHeader($url){
		if (!function_exists('http_parse_headers')) {
			function http_parse_headers ($raw_headers){
				$headers = array();
				foreach (explode("\n", $raw_headers) as $i => $h) {
					$h = explode(':', $h, 2);
					if (isset($h[1])) {
						if(!isset($headers[$h[0]])) {
							$headers[$h[0]] = trim($h[1]);
						} else if(is_array($headers[$h[0]])) {
							$tmp = array_merge($headers[$h[0]],array(trim($h[1])));
							$headers[$h[0]] = $tmp;
						} else {
							$tmp = array_merge(array($headers[$h[0]]),array(trim($h[1])));
							$headers[$h[0]] = $tmp;
						}
					}
				}
				return $headers;
			}
		}
		$this->Start($url);
		curl_setopt($this->ch_, CURLOPT_TIMEOUT, Curl::time_);
		$this->body_=$this->Execx();
		$header_size = curl_getinfo($this->ch_, CURLINFO_HEADER_SIZE);
		$this->response_header_ = substr($this->body_, $start = 0, $offset = $header_size);
		$this->response_header_ = http_parse_headers($this->response_header_);
		print_r($this->response_header_);
		return $this->Close($this->body_);
	}
/**
* @读取cookie
*/
	public function LoadCookie($url,$cookie_file){
		$this->Start($url);
		curl_setopt($this->ch_, CURLOPT_COOKIE, 1);
		curl_setopt($this->ch_, CURLOPT_COOKIEFILE , $cookie_file);
		$this->body_=$this->Execx();
		return $this->Close($this->body_);
	}
 
/**
* @写入cookie
*/
	public function SaveCookie($url){
		$this->Start($url);
		curl_setopt($this->ch_, CURLOPT_COOKIE, 1);
		curl_setopt($this->ch_, CURLOPT_COOKIEFILE ,'cookie.txt');
		curl_setopt($this->ch_, CURLOPT_COOKIEJAR , 'cookie.txt');
		$this->body_=$this->Execx();
		return $this->Close($this->body_);
	}
 
/**
* @设置HEADER
*/
 
	public function SetHeader($headers = null){
		if (is_array($headers) && count($headers) > 0) {
			curl_setopt($this->ch_, CURLOPT_HTTPHEADER, $headers);
		}
	}
 
/**
* @GET请求
*/
	public function Get($url, array $params = array()) {
		if ($params) {
			if (strpos($url, '?')) {
				$url .= "&".http_build_query($params);
			}
			else {
				$url .= "?".http_build_query($params);
			}
		}
		$this->Start($url);
		curl_setopt($this->ch_, CURLOPT_TIMEOUT, Curl::time_);
		if (strpos($url, 'https') === 0) {
			curl_setopt($this->ch_, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($this->ch_, CURLOPT_SSL_VERIFYPEER, 0);
		}
		$this->body_=$this->Execx();
		return $this->Close($this->body_);
	}
 
/**
* @POST请求
*/
	public function Post($url, array $params = array()) {
		$this->Start($url);
		curl_setopt($this->ch_, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($this->ch_, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded"));
		curl_setopt($this->ch_, CURLOPT_POST, true);
		curl_setopt($this->ch_, CURLOPT_TIMEOUT, Curl::time_);
		if ($params) {
			curl_setopt($this->ch_, CURLOPT_POSTFIELDS, http_build_query($params));
		}
		$this->body_=$this->Execx();
		return $this->Close($this->body_);
	}
 
/**
* @tips: google http head 方法
*/
	public function Head($url, array $params = array()) {
		$this->Start($url);
		curl_setopt($this->ch_, CURLOPT_TIMEOUT, Curl::time_);
		curl_setopt($this->ch_, CURLOPT_RETURNTRANSFER , 0);
		curl_setOpt($this->ch_,CURLOPT_NOBODY, true);
		$this->body_=$this->Execx();
		return $this->Close($this->body_);
	}
 
/**
* @执行CURL会话
*/
	public function Execx(){
		return curl_exec($this->ch_);
	}
 
/**
* @关闭CURL句柄
*/
	public function Close($body_){
		if ($body_ === false) {
			echo "CURL Error: " . curl_error($body_);
			return false;
		}
		curl_close($this->ch_);
		return $body_;
	}

/**
*@根据articleId返回数据（动态类型）
*@id 文章id
*@record 返回是条数
*/
	public function GetById($id,$record){
		$key = MD5($this->code_.$id);
		$param = array('id'=>$id,'apikey'=>$key,'start'=>0,'record'=>$record,'order'=>'','len'=>'');
		$json_data = $this->Get($this->url_dy,$param);
		return  json_decode($json_data,true);
	}

	//根据classId返回数据（栏目） 
	public function GetByClassId($cid,$record){
		$key = MD5('3g.cnfol.com/article/'.$cid.'0');
		$param = array('classid'=>$cid,'start'=>0,'record'=>$record,'order'=>'','apikey'=>$key);
		$json_data = $this->Get($this->url_cls,$param);
		return  unserialize($json_data);
	}
	//根据code返回数据 （代码类型）
	public function GetByCode($id,$record){
		$key = MD5('25yjjSh4pYCr*F&'.$id);
		$param = array('id'=>$id,'start'=>0,'record'=>$record,'order'=>'','apikey'=>$key);
		$json_data = $this->Get($this->url_code,$param);
		return  json_decode($json_data,true);
	}
	//根据id返回数据（推送类型）
	public function GetByRecommend($id,$record){
		$key = MD5('3g.cnfol.com/article/'.$id);
		$param = array('id'=>$id,'start'=>0,'record'=>$record,'apikey'=>$key);
		$json_data = $this->Get($this->url_re,$param);
		return  json_decode($json_data,true);
	}
	//根据tag获取数据（标签类型）
	public function GetByTag($tag,$record){
		$pstr = '';
		$tag = '?tag='.$tag;
		$param = array('record'=>$record,'len'=>44,'ishtml'=>1,'type'=>1,'json'=>1,'charset'=>'utf-8');
		$pstr .=http_build_query($param);
		$url_t = $this->url_tag.$tag.'&'.$pstr;
		$datas = $this->Get($url_t);
		return  json_decode($datas,true);
	}
	

}


?>