@extends('front.layout.master') 
@section('title',"$page->name | ") 
@section('body')

<div class="container-fluid">
	@if(isset($page))
		<div class="row">
			<div class="terms-conditions-page width100">
				<div class="wow terms-conditions"> 
					<h1 class="text-dark">{{ $page->name }}</h1>
						<hr> 
					{!!  $page->des  !!} 
				</div>
			</div>
		</div>
	@endif
</div>

@endsection