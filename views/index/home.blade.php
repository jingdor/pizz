@extends('layouts.public')

@section('content')
	<div class="slider">
		@include('index.slider')
	</div>
	<div class="summary">
		@include('index.summary')
	</div>
	<div class="howuse">
		@include('index.howuse')
	</div>
@stop

