<?php
/**
 * 输出1K的空格来强制浏览器输出
 * 使用后在下文执行任何输出，再紧跟flush();即可即时看到
 */
function forceExport(){
	ob_end_clean();   //清空并关闭输出缓冲区
	echo str_repeat(' ',1024);
}

function followButton($uid){
	$CI=&get_instance();
	if($CI->user->hasFollowed($uid)){
?>
<a href="#" class="add-follow btn btn-mini">已关注</a>
<?php
	}elseif($uid==$CI->user->id){
?>
<a href="#" class="add-follow btn btn-mini">我自己</a>
<?php		
	}elseif($CI->user->isLogged()){
?>
<a href="#" class="add-follow btn btn-mini" user="<?=$uid?>" style="background: #00a0e9;color: #FFFFFF;border:0px;width:40px;height: 20px;font-size: 13px;">关注</a>
<?php
	}else{
?>
<a href="/login?<?=http_build_query(array('forward'=>substr($CI->input->server('REQUEST_URI'),1)))?>" class="add-follow btn btn-mini" user="<?=$uid?>" style="background: #00a0e9;color: #FFFFFF;border:0px;width:40px;height: 20px;font-size: 13px;">关注</a>
<?php
	}
}
?>