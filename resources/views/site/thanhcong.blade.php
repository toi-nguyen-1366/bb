@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section class="productCategory p-b-30 p-t-60">
	<div class=container>
		<div class="heading heading-left m-b-50">
			<h1 class="m-b-10 uppercase text-left">{!!$s['title']!!}</h1>
		</div>
		<div class="chi-tiet-bai-viet">
			{!!$s["desc_full"]!!}
		</div>
		<p class="m-t-20 text-center"><a href="javascript:" onclick="history.back();" class="btn btn-my"><i class="fa fa-arrow-left"></i> Quay lại trang trước</a></p>
	</div>
</section>
@endsection
