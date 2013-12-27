
  $(function(){
  	//初始化 生成用户
  	user={
		username:'',
		password:'',
		Remember:false,
		login:function(){
				user.username=$('#loginform #username input').val();
				user.password=$('#loginform #password input').val();
				//提交到服务器
				$.post('./userlogin',{
					username:this.username,
					password:this.password,
					Remember:this.Remember
				},function(res){
					if (res.Status) {
						user.loginSuccess(res.data);
					}else{
						user.loginfail(res.data);
					};
				},'json')
		}, //登录
		loginSuccess:function(data){

		},
		loginfail:function(data){

		},
		logout:function(data){
			$.get('users/logout')
		}
	};
	$('.dologin').click(function(){
		window.location.href=themepath+'/users/dologin';
	});
	$('.logout').bind('click',function(){
		user.logout();
	})
    $('.ui.dropdown').dropdown();
    $('.ui.checkbox').checkbox();

  })
