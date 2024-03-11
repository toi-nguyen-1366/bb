@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section class="productCategory p-b-30 p-t-60">
	<div class=container>
		<div class="row">
			<div class="col-md-9 matchHeight">
				<div class="heading heading-left m-b-50">
					<h1 class="m-b-10 uppercase text-left">{!!$s['title']!!}</h1>
				</div>
				<div class="chi-tiet-bai-viet">
					{!!$s["desc_full"]!!}
				</div>
				@include('module.comment')
				@include('module.allvilla')
				</div>
        @include('module.postSidebar')

				{{-- <div class="col-md-4 matchHeight">
					<div class="pinBox" id="datphong" style="height: 100%">
						@include('module.datphong')
					</div>
				</div> --}}
			</div>

		</div>
	</section>
	@endsection
