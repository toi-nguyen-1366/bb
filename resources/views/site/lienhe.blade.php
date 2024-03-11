@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<hr>
<section class="p-t-0 lienhe">
	<div class="container">
		{{-- <div class="row">
			<div class="col-md-6">
				<div class="widget clearfix widget-contact-us m-b-10">
					<h3 class="widget-title p-t-10 m-b-10" style="">Thông tin liên hệ</h3>
					{!!$site["doan-thong-tin-lien-he"]!!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="google-maps">{!!$site["ma-nhung-ban-do-google-maps"]!!}</div>
			</div>
		</div> --}}
		{{-- <div class="row"> --}}
			{{-- <div class="col-md-8"> --}}
				{{-- <div class="heading heading-center m-b-10">
					<h1 class="m-b-0">{!!$s['title']!!}</h1>
				</div> --}}
				<div class="chi-tiet-bai-viet m-b-30">
					{!!$s['desc_full'] or ''!!} 
				</div>

			{{-- </div> --}}

			{{-- <div class="col-md-4"> --}}
				@include('module.datphong')
				<div class="fb-comments" data-href="{!!'http://'.$_SERVER['HTTP_HOST']!!}" data-width="100%" data-numposts="5"></div>
			{{-- </div> --}}
		{{-- </div> --}}
	</section>
{{-- <section class="p-t-60 p-b-40 background-grey">
	<div class="container">
		<div class="heading heading-center m-b-20 ">
			<h2 class="m-b-30">Gửi tin nhắn và góp ý</h2>
		</div>
		<form class="widget-contact-form" data-element="mail-to-admin">
			<div class="row m-b-20 ">
				<div class="form-group col-sm-4 m-b-0">
					<label for="name">Tên của bạn</label>
					<input type="text" name="Tên của bạn" class="form-control name" placeholder="">
				</div>
				<div class="form-group col-sm-4 m-b-0">
					<label for="phone">Số điện thoại</label>
					<input type="text" name="Số điện thoại" class="form-control phone" placeholder="">
				</div>
				<div class="form-group col-sm-4 m-b-0">
					<label for="email">Email</label>
					<input type="email" name="Email" class="form-control email" placeholder="">
				</div>
			</div>
			<div class="form-group  m-b-30">
				<label for="message">Lời nhắn</label>
				<textarea type="text" name="Lời nhắn" rows="9" class="form-control" placeholder=""></textarea>
			</div>
			<div class="form-group text-center">
				<input type="hidden" name="mail-to" value="{!!$site['dia-chi-email']!!}">
				<input type="hidden" name="subject" value="Liên hệ và góp ý">
				<button class="btn btn-primary btn-send-mail" data-action="Khách hàng gửi thông tin từ trang liên hệ" type="button"><i class="fa fa-paper-plane"></i>&nbsp;Gửi tin nhắn</button>
			</div>
		</form>
	</div>
</section> --}}
@endsection
