@extends('bbs.layout.master')
@section('title',"BBS2019首页")
@section('content')
	<h1 id="subject">
		<img src="{{url('images\logo.png')}}" alt="">
		<a href="{{asset('bbs/home/login.html')}}" class="add-user"><button type="button" class="btn btn-primary">Login</button></a> &nbsp;&nbsp; 
		<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary">Add</button></a>
	</h1>
	@include('bbs.layout.navbar')
	
	

<div class="row">
  <div class="col-md-9">
	  <table>
	  	<tr>
	  		<td>1</td>
	  		<td>1</td>
	  	</tr>
	  	<tr>
	  		<td>1</td>
	  		<td>1</td>
	  	</tr>
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
		  <a href="{{asset('bbs/home/create.html')}}" class="add-user"><button type="button" class="btn btn-primary" onclick="return checkLogin()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;发布新帖</button></a>
		<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary" onclick="return checkLogin()"> <span class="glyphicon glyphicon-star"></span> 收藏本版</button></a>
		<br><br>
		<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary" onclick="return checkLogin()">管理面板</button></a>
		<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary" onclick="return checkLogin()">查看版权</button></a>
	  </div>
  </div>
</div>
	<script>
		function checkLogin(){
			if({{$request->session()->has('user')}}){
				alert('可以通过');
			
			}else{
				alert('请登录后在操作!');
				return false;
			}
				
		}
	</script>
	
@stop