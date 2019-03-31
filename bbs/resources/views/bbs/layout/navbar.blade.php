<div class="alert alert-primary" role="alert">
		<div class="btn-group" role="group" aria-label="Basic example">
			@foreach($navbars as $navbar)
				<a href="{{asset('bbs/home/bbssession-'.$navbar->SID)}}"><button type="button" class="btn btn-secondary">{{$navbar->SName}}</button></a>
			@endforeach
		</div>
	</div>