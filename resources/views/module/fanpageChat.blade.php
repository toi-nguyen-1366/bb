@if(!empty($site["link-fanpage-facebook"]))
<div class="fb-livechat"> 
	<a href="{!!str_replace('facebook.com', 'm.me', $site["link-fanpage-facebook"])!!}" target="_blank" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button btn-action" data-action="Khách hàng bấm nút chat trực tuyến"> 
		<div class="bubble">1</div>
		{{-- <div class="bubble-msg">Bạn cần hỗ trợ?</div> --}}
	</a>
</div>
@endif
