<?php

//首页
Route::get('/',function(){
	$lang=Input::get('lang');

	$qwords=urlencode(Input::get('words'));
	$url='http://openapi.baidu.com/public/2.0/bmt/translate?client_id=XQKh727lbPAIXmPw41wB5bjW&q='.$qwords.'&from=auto&to='.$lang;
	var_dump($url);
	$a=file_get_contents($url);
	// var_dump($a);
	$res=json_decode($a);
	var_dump( $res->trans_result[0]->dst);	
	Config::set('users', 'jingdor111');
	return Response::view('index.home');
});
// 用户
Route::controller('users', 'UserController');