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
    public function getLogin()
    {

    }

    public function postProfile()
    {
       
    }



}