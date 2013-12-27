<div class="ui menu ">
  <i class="item"><i class="home icon"></i></i>

<!--   //变化的  -->
  <a class="active item">首页</a>
  <a class="item">微吧</a>
  <a class="item">频道</a>
  <a class="item">应用商店</a>
  <a class="item">黑板报</a>
  <a class="item">应用</a>
<!--   //变化的  -->
  <div class="right menu">
    <div class="item">
      <div class="ui icon input">
        <input type="text" placeholder="搜索...">
        <i class="search link icon"></i>
      </div>
    </div>
    <div class="item">
      <div class="ui dropdown">
        <div class="text">
<!--           <?php
            $user=Config::get('users');
          ?> -->
          {{ isset($user) ? '<i class="user icon"></i>'.$user: '<i class="user icon"></i>' }}</div>
        <i class="dropdown icon"></i>
              <div class="menu">
                <div class="item dologin">登录</div>
                <div class="item sigein">注册</div>
                <div class="item">退出</div>
              </div>
        </div>
    </div>
     <div class="item">消息</div>
     <div class="item">
      <div class="ui dropdown">
           <div class="text">用户</div>
      <i class="dropdown icon"></i>
            <div class="menu">
                <div class="item dologin">登录</div>
                <div class="item sigein">注册</div>
                <div class="item  logout">退出</div>
            </div>
      </div>

     </div>
  </div>
</div>
