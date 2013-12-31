@extends('layouts.public')


@section('sidebar')

@stop


@section('content')
    <div class="ui center aligned grid">
		  <div class="five wide column">
		  		<div class="ui one column grid">
  <div class="column">
    <div class="ui fluid form segment" id="loginform">
      <h3 class="ui header">login</h3>
      <div class="field" id='username'>
        <label>username</label>
        <input placeholder="username" type="text" >
      </div>
      <div class="field" id='password'>
        <label>password</label>
        <input type="password" >
      </div>
      <div class="inline field" id="Remember">
        <div class="ui checkbox">
          <input type="checkbox">
          <label for="Remember"></label>
        </div>
        <label>remember</label>
      </div>
      <div class="ui blue submit button" id='login'>Login
      </div>

    </div>
  </div>
  </div>
</div>
		  </div>
	</div>	
@stop