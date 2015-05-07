<?php
class WT_input extends CI_Input{
	
	function __construct(){
		parent::__construct();
	}
	
	/**
	 * 继承post方法，处理post数组
	 * 现可如下访问：
	 * $this->input->post('submit/newcase')
	 */
	function post($index = NULL, $xss_clean = FALSE){

		if(is_null($index)){
			return parent::post($index, $xss_clean);
		
		}else{
			
			if(parent::post($index, $xss_clean)!==false){
				return parent::post($index, $xss_clean);
			}
			
			$index_array=explode('/',$index);
			
			$post=parent::post($index_array[0], $xss_clean);
			
			for($i=1;$i<count($index_array);$i++){
				if(isset($post[$index_array[$i]])){
					$post=$post[$index_array[$i]];
				}else{
					return false;
				}
				
			}
			
			return $post;
		}
	}
	
	function _clean_input_keys($str){   
		$config = &get_config('config');   
		if( ! preg_match("/^[".$config['permitted_uri_chars']."]+$/i", rawurlencode($str))){   
		   exit('Disallowed Key Characters.');   
		}   
		return $str;   
	}
}
?>