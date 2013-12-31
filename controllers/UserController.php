<?php

class UserController extends BaseController {

	protected $layout = 'layouts.public';
    public function getDologin()
    {
    	$view=View::make('user.dologin', array(
    			'title' => 'jingdor'.'的个人世界'
    			));
    	return $view;
       // return Response::view('user.dologin')->with('title','标题');
    }
    public function postLogin()
    {
           $user=new user();
           $user->username=Input::get('username');  //用户名
           $user->password=Input::get('password');  //密码
           $user->remember=Input::get('remember');  //登录ip地址
           $user->last_login_ip=$_SERVER['REMOTE_ADDR'];
           $user->last_login_date=time();
           // $user->remember=
           var_dump($user->last_login_date);
           //  if($user->login_valid()){

           //  };
      
    }

    public function postProfile()
    {
       
    }



}