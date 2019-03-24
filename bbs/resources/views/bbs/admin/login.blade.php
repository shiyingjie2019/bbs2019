@extends('bbs.layout.master')
@section('title',"后台登录")
@section('content')
	<h1 id="subject">
		后台登录页面
		<!-- <img src="{{url('images\logo.png')}}" alt=""> -->
		<!-- <a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary">Add</button></a>&nbsp;&nbsp; -->
		<!-- <a href="{{asset('/')}}" class="add-user"><button type="button" class="btn btn-primary">首页</button></a> -->
	</h1>
	<!-- @include('bbs.layout.navbar') -->
	<form action="{{asset('bbs/admin/loginCheck.html')}}" method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="UName"></td>
			</tr>
			<tr>
				<td>密&nbsp;码</td>
				<td><input type="password" name="UPassword"></td>
			</tr>
			<!-- <tr>
				<td>验证码</td>
				<td><input type="text" ><img src="" alt=""></td>
			</tr> -->
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="登录">&nbsp; &nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
@stop