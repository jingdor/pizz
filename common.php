<?php

//本地化函数
function lang($words){
	$from=Config::get('app.local');
	$key="lang_".App::getLocale();
	if(Cache::has($key)){  //判断语言是否存在
		$lang=cache::get($key); //获取语言
		if (!isset($lang[$words])) { 
			$lang[$words]=translate($words);
			cache::forever($key,$lang);  //保存键
		}
		return $lang[$words];
	}else{
		Cache::forever($key,array());
		return lang($words);
	}
}
//翻译函数
function translate($words){
	$qwords=($words);
	$from=Config::get('app.local');
	$client_id='XQKh727lbPAIXmPw41wB5bjW';
	$url='http://openapi.baidu.com/public/2.0/bmt/translate?client_id='.$client_id.'&q='.$qwords.'&from=auto&to='.App::getLocale();
	$a=file_get_contents($url);
	$res=json_decode($a);
	return $res->trans_result[0]->dst;	
}
