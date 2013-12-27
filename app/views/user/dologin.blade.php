@extends('layouts.public')


@section('sidebar')

@stop


@section('content')
    <div class="ui center aligned grid">
		  <div class="five wide column">
		  		<div class="ui one column grid">
  <div class="column">
    <div class="ui fluid form segment" id="loginform">
      <h3 class="ui header">登录</h3>
      <div class="field" id='username'>
        <label>用户名</label>
        <input placeholder="用户名" type="text" >
      </div>
      <div class="field" id='password'>
        <label>密码</label>
        <input type="password" >
      </div>
      <div class="inline field" id="Remember">
        <div class="ui checkbox">
          <input type="checkbox">
          <label for="Remember"></label>
        </div>
        <label>记住密码</label>
      </div>
      <div class="ui blue submit button" id='login'>登录
      </div>

    </div>
  </div>
  </div>
</div>
		  </div>
	</div>	
@stop