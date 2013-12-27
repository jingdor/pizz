$(function(){
//初始化
	
//事件
	//初始化
	$('#loginform #Remember').click(function(){
		user.Remember=!user.Remember;
	})
	$('#login').click(function(){
		user.login();
	})
})