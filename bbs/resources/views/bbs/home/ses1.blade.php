@extends('bbs.layout.master')
@section('title',"title")
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
	  <table class="table table-hover">
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
			<td style="width:70px;"><a href="{{asset('bbs/home/userInfo-'.$record->TUID)}}">{{$record->bbsuser->UName}}</a></td>
	  	</tr>
		@endforeach
	  </table>
  </div>
	 @include('bbs.layout.right')
	
@stop