<html>
<head>
<title>{{ isset($title) ? $title : 'Default' }}</title>
{{HTML::style('css/normalize.css');}}
{{HTML::style('js/semantic-ui/css/semantic.css');}}
{{HTML::style('css/base.css');}}
<?php
$Module='index';
if (Request::path()<>'/') {
    $Module=Request::path();
}
?>
{{HTML::style('css/'.$Module.'.css');}}
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
    	<header class="header">
    		@include('widget.header', array('some'=>'data'))
    	</header>
        <div class="container">

        	 @yield('content')
        </div>
        <footer class="footer">
        	@include('widget.footer', array('some'=>'data'))
        </footer>
        {{HTML::script('js/require.js');}}
        {{HTML::script('js/require.config.js');}}
        {{HTML::script('js/jquery/dist/jquery.js');}}
        {{HTML::script('js/semantic-ui/javascript/semantic.js');}}
        <script type="text/javascript">
              require(['{{Request::root();}}/js/base.js','{{Request::root();}}/js/{{$Module}}.js'], function (app,a) {
                app.init();
              });
        </script>

    </body>
</html>