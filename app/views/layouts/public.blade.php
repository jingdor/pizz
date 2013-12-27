<html>
<head>
<title>{{ isset($title) ? $title : 'Default' }}</title>
{{HTML::style('lib/semantic-ui/css/semantic.css');}}
{{HTML::style('css/base.css');}}
{{HTML::style('css/'.Request::path().'.css');}}
<style type="text/css">
	body,header{
		margin: 0px;
		padding: 0px;
	}
</style>
<script type="text/javascript">
    themepath="{{Request::root();}}";
</script>
</head>
    <body>
    	<header>
    		@include('widget.header', array('some'=>'data'))
    	</header>
        <div class="container">
        	 @yield('content')
        </div>
        <footer>
        	@include('widget.footer', array('some'=>'data'))
        </footer>

        {{HTML::script('lib/jquery/jquery.js');}}
        {{HTML::script('lib/semantic-ui/javascript/semantic.js');}}
        {{HTML::script('js/base.js');}}
        {{HTML::script('js/'.Request::path().'.js');}}
    </body>
</html>