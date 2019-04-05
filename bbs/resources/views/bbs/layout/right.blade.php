 <div class="col-md-3">
	  <div class="row">
		  <div class="col-md-4">
		  		  <img src="{{asset('images/g.jpg')}}" alt="头像" style="border-radius: 50%;width: 75px;height: 75px;">
		  </div>
		  <div class="col-md-8">
		  		 体验服<br>
		  		  今日: 3726 <br>
		  		  主题: 197237 <br>
		  		  排名: 1
		  </div>
	  </div>
	  <hr>
	  <div>
		 <h3>版主</h3> 
		 <p><a href="">谁睡神</a>,
			 <a href="">迷妹的胖次</a> ,
			 <a href="">爱喝酸奶の螃蟹</a>,
		     <a href="">素锦流年丶</a>, 
		     <a href="">GD林</a>,
		   	<a href="">奈特魅尔</a>, 
			<a href="">异常收集专用</a>,
			 <a href="">Nimmo, 昔阳</a>, 
			 <a href="">Aoy2丶</a>,<a href="">体验服通知专用</a>
		 </p>
	  </div>
	  <hr>
	  <div>
		  <a href="{{asset('bbs/home/create.html')}}"><button type="button" class="btn btn-primary" onclick="return checkLogin()">&nbsp;发布新帖</button></a>
		<button type="button" class="btn btn-primary" onclick="return checkLogin()">收藏本版</button>
		<br><br>
		<button type="button" class="btn btn-primary" onclick="return checkLogin()">管理面板</button>
		<button type="button" class="btn btn-primary" onclick="return checkLogin()">查看版权</button>
	  </div>
  </div>
</div>
	<script>
		function checkLogin(){
			@if(Session::get('user')!=null)
				return ture;
			@else
				alert('请登录后在操作!');
				var url = "{{asset('bbs/home/login.html')}}";
				window.location.href=url;
				return false;
			@endif
				
		}
	</script>
	