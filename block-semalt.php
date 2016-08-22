<?php
if(!empty($_SERVER['HTTP_REFERER'])){
	foreach (get_headers($_SERVER['HTTP_REFERER']) as $key => $value) {
		if(preg_match("/semalt\.com/", $value)){
			header('HTTP/1.0 405 Method Not Allowed');
			die("STOP SPAM REFERER");
		}
	}
}