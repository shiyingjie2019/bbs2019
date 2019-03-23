<div class="alert alert-primary" role="alert">
		<div class="btn-group" role="group" aria-label="Basic example">
			@foreach($navbars as $navbar)
				<button type="button" class="btn btn-secondary">{{$navbar->SName}}</button>
			@endforeach
		</div>
	</div>