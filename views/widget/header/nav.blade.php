<div class="ui menu ">
	//回到主页 
  <i class="item"><a href="{{Request::root()}}"><i class="home icon gohome" style="text-decoration: none;"></i></a></i>

  //导航菜单
  <a class="active item">{{lang('主页')}}</a>
  <a class="item">{{lang('开始')}}</a>
  <a class="item">{{lang('说明文档')}}</a>
  <a class="item">{{lang('下载')}}</a>
  <a class="item">{{lang('扩展')}}</a>
  <a class="item">{{lang('市场')}}</a>
  <a class="item">{{lang('关于我们')}}</a>

<!--   //变化的  -->
  @include('widget.user', array('some'=>'data'))
</div>

