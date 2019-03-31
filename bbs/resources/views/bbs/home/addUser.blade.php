@extends('bbs.layout.master')
@section('title',"用户注册")
@section('content')
	<h1 id="subject">
		<img src="{{url('images\logo.png')}}" alt="">
		<a href="{{asset('bbs/home/login.html')}}" class="add-user"><button type="button" class="btn btn-primary">Login</button></a>&nbsp;&nbsp; 
		<a href="{{asset('/')}}" class="add-user"><button type="button" class="btn btn-primary">首页</button></a>
	</h1>
	@include('bbs.layout.navbar')
	<div class="row">
		
		<form action="{{asset('bbs/home/store.html')}}" method="post" class="form-horizontal">
			{{csrf_field()}}
			<table class="table table-bordered">
				<div class="form-group">
					<lable>用户名</lable>
					<input type="text" class="form-control" name="UName">
				</div>
				<div class="form-group">
					<lable>密&nbsp;码</lable>
					<input type="password" class="form-control" name="UPassword">
				</div>
				<div class="form-group">
					<lable>Email</lable>
					<input type="email" class="form-control" name="UEmail">
				</div>
				<div class="form-group">
					<lable>生日</lable>
					<input type="text" class="form-control" name="UBirthday">
				</div>
				<div class="form-group">
					<lable>性别</lable>
					男<input type="radio" name="USex" value="0" checked>
					女<input type="radio" name="USex" value="1" >
				</div>
				 <button type="submit" class="btn btn-primary">注册</button>
			</table>
		</form>
		
	</div>
@stop