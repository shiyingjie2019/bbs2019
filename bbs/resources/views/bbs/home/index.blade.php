@extends('bbs.layout.master')
@section('title',"BBS2019首页")
@section('content')
	<h1 id="subject">
		<img src="{{url('images\logo.png')}}" alt="">
		@if(Session::get('user')!=null)
			<a href="{{asset('bbs/home/outLogin.html')}}" class="add-user"><button type="button" class="btn btn-primary">退出登录</button></a>
			<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary">{{session::get('user')['UName']}}</button></a>
		@else
			<a href="{{asset('bbs/home/login.html')}}" class="add-user"><button type="button" class="btn btn-primary">Login</button></a> &nbsp;&nbsp; 
			<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary">Add</button></a>


		@endif
	</h1>
	@include('bbs.layout.navbar')
	

<div class="row">
  <div class="col-md-9">
	  <table>
	  	<tr>
	  		<td>序号&nbsp;</td>
	  		<td>标题</td>
			<td>发表时间</td>
			<td>发帖人</td>
	  	</tr>
		@foreach($records as $record)
	  	<tr>
	  		<td style="width:80px;">{{$loop->iteration}}</td>
	  		<td style="width:200px;"><a href="{{asset('bbs/home/show-'.$record->TID)}}">{{$record->TTOPIC}}&nbsp;</a></td>
			<td style="width:200px;">{{$record->TTime}}&nbsp;</td>
			<td style="width:70px;">{{$record->bbsuser->UName}}</td>
	  	</tr>
		@endforeach
	  </table>
  </div>
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
		  <button type="button" class="btn btn-primary" onclick="return checkLogin(this.value)" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;发布新帖</button>
		<button type="button" class="btn btn-primary" onclick="return checkLogin(this.value)" value="2""> <span class="glyphicon glyphicon-star"></span> 收藏本版</button>
		<br><br>
		<button type="button" class="btn btn-primary" onclick="return checkLogin(this.value)" value="3">管理面板</button>
		<button type="button" class="btn btn-primary" onclick="return checkLogin(this.value)" value="4">查看版权</button>
	  </div>
  </div>
</div>
	<script>
		function checkLogin(data){
			@if(Session::get('user')!=null)
				@switch(data)
					@case(1)
						var url = "{{asset('bbs/home/create.html')}}";
						window.location.href=url;
						@break;
					@case(2)
						@break;
					@case(3)
						@break;
					@case(4)
						@break;

						@default
				@endswitch
			@else
				alert('请登录后在操作!');
				var url = "{{asset('bbs/home/login.html')}}";
				window.location.href=url;
			@endif
				
		}
	</script>
	
@stop