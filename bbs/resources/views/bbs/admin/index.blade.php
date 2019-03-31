@extends('bbs.layout.master')
@section('title','用户管理首页')
@section('content')
	<h1 id="subject">用户管理</h1>
	<table class="table table-hover">
		<tr>
			<td>序号</td>
			<td>昵称</td>
			<td>性别</td>
			<td>积分</td>
			<td>用户备注</td>
			<td>操作</td>
		</tr>
		@foreach($records as $record)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$record->UName}}</td>
			<td>{{$record->USex?'女':'男'}}</td>
			<td>{{$record->UPoint}}</td>
			<td>{{$record->USatement}}</td>
			<td>
				@if($record->UIsSectioner)
					该用户为版主 &nbsp;|&nbsp;<a href="#">删除</a>
				@else
					<a href="#">提升为版主</a>&nbsp;|&nbsp;<a href="#">删除</a>
				@endif
			</td>
		</tr>
		@endforeach
	</table>
@stop