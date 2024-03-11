{{-- <script src=/public/frontend/js/jquery.elevateZoom-3.0.8.min.js></script>
<script type="text/javascript">
	if (typeof window.orientation !== 'undefined') {
		$('#product-gallery').on('click', 'a', function(event) {
			$('#product-gallery > a').removeClass('active');
			$(this).addClass('active');
			$('.main-product-img').attr('src',$(this).data('image'));
		});
	}else{
		$(".main-product-img").elevateZoom({
			zoomWindowWidth:372,
			zoomWindowHeight:447,
			cursor:'crosshair',
			zoomLens:'false',
			lensOpacity:0,
			galleryActiveClass: 'active',
			gallery:'product-gallery',
		});
	}
</script> --}}
<script type=text/javascript>
	$(function(){
		new WOW().init();

		$('.multiselect').multiselect();

		
		console.log(1); 
		if ($(window).width() > 767) {
			console.log(2); 
			var divWidth = $('.pinBox').width();
			$('.pinBox').css('height',$('.pinBox').height());
			var pinOffset = 300;
      // var pinOffset = $('.pinBox').offset().top-200;
      if(pinOffset > 1100){
      	pinOffset = 1100;
      }
      // console.log('divWidth',divWidth,'pinOffset',pinOffset); 
      $(window).scroll(function(event) {
      	var screenTop = $(document).scrollTop();
      	// console.log(screenTop); 
      	if(screenTop>=pinOffset){
      		$('.pinbox .pinned').css('position','fixed').css('top','80px').css('width',divWidth);
      	}else{
      		$('.pinbox .pinned').css('position','relative').css('top','0');
      	}
      });
    }

    $("table").each(function(index, el) {
    	if(!$(this).hasClass('table') && !$(this).hasClass('ui-datepicker-calendar')){
    		$(this).addClass('table').addClass('table-bordered');
    	}
    });
    $('.carousel-click .carousel-click-item').each(function(index, el) {
    	$(this).on('click', function(event) {
    		event.preventDefault();
    		$('.carousel-click .owl-dot:nth('+index+')').trigger('click');
    	});
    });
    $(".chi-tiet-bai-viet img").wrap("<p class='text-center'></p>");
    $(".chi-tiet-bai-viet table").addClass('table').addClass('table-bordered');
		// $(".chi-tiet-bai-viet p").has('img').css('text-align','center');
		// if(isMobile()){
		// 	$("table").wrap("<div class='table-responsive'></div>");
		// }
		$('.mce-object-video').each(function(index, el) {
			var video = $(this).data('mce-html');
			video = video.replace('%0A%3Csource%20src%3D%22','');
			video = video.replace('%22%20type%3D%22video/mp4%22%20/%3E','');
			$('<video width="550" height="350" controls><source src="'+video+'" type="video/mp4">Your browser does not support the video tag.</video>').insertAfter($(this));
		});

		$('form').on('click', '.btn-send-mail', function(event) {
			if($(this).hasClass('invalid')){
				return;
			}
			event.preventDefault();
			var form = $(this).parents('form');
			var name=form.find('.name').val();
			var phone=form.find('.phone').val();
			var email=form.find('.email').val();
			var xuatphat=form.find('.xuatphat').val();
			var link=form.find('.sp-link').val();
			// if(name!=undefined && (name=='' || name==null)){
				// alert('Vui lòng điền tên của bạn!'); return;
			// } else if(xuatphat!=undefined && (xuatphat=='' || xuatphat==null)){
				// alert('Vui lòng điền điểm xuất phát của bạn!'); return;
			// } else
			if(phone!=undefined && (phone=='' || phone==null)){
				alert('Vui lòng điền số điện thoại của bạn!'); return;
			} else if(phone!=undefined && !isPhone(phone)){
				alert('Vui lòng kiểm tra lại số điện thoại, có thể bạn điền chưa đúng!'); return;
			} else if(form.find('.kenhnao').length && form.find('.kenhnao').val()==null){
				alert('Vui lòng chọn Bạn biết Phạm Tân Villa qua kênh nào'); return;
			} else if(form.find('.dichvunao').length && form.find('.dichvunao').val()==null){
				alert('Vui lòng chọn Bạn sử dụng dịch vụ nào'); return;
			} else if(form.find('.loainao').length && form.find('.loainao').val()==null){
				alert('Vui lòng chọn Bạn thuê villa loại nào'); return;
			} else if(form.find('.ngayden').val()!=undefined && (form.find('.ngayden').val()=='' || form.find('.ngayden').val()==null)){
				alert('Vui lòng chọn ngày đến!'); return;
			} else if(form.find('.ngayve').val()!=undefined && (form.find('.ngayve').val()=='' || form.find('.ngayve').val()==null)){
				alert('Vui lòng chọn ngày về!'); return;
			} else if(form.find('.nguoilon').val()!=undefined && (form.find('.nguoilon').val()=='' || form.find('.nguoilon').val()==null)){
				alert('Vui lòng chọn số người lớn!'); return;
			} else if(form.find('.treem').val()!=undefined && (form.find('.treem').val()=='' || form.find('.treem').val()==null)){
				alert('Vui lòng chọn số trẻ em 6-12 tuổi!'); return;
			} else if(form.find('.treem2').val()!=undefined && (form.find('.treem2').val()=='' || form.find('.treem2').val()==null)){
				alert('Vui lòng chọn số trẻ em 1-5 tuổi!'); return;
			// } else if(email!=undefined && (email=='' || email==null)){
				// alert('Vui lòng điền địa chỉ email của bạn!'); return;
			} else if(email!=undefined && email!='' && email!=null && !isEmail(email)){
				alert('Vui lòng kiểm tra lại địa chỉ email, có thể bạn điền chưa đúng!'); return;
			}

			$(this).text('Đang gửi...');
			
			var element = form.data('element');
			var data = form.serializeArray();
			var json_data = JSON.stringify(data);
			var device = (isMobile())?'Điện thoại':'Máy tính';
			var utm = getUrlParameter('utm_source');
			var action = $(this).data('action');

			$.ajax({
				dataType: "html",
				type: "POST",
				evalScripts: true,
				url: "/ds-add.php",
				data: ({device:device, utm:utm, action:action, json_data:json_data}),
				success: function(){}
			});

			$.ajax({
				dataType: "html",
				type: "POST",
				evalScripts: true,
				url: "{{action('SiteController@updateDataElement')}}",
				data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data)}),
				success: function(){}
			});

			@if(Request::is('/chu-nha'))
			window.location.reload;
			@else

			@if(env('IHAPPY_MAIL_SERVICE'))
			$.ajax({
				dataType: "html",
				type: "POST",
				evalScripts: true,
				url: "//api.ihappy.vn/sendMail",
				data: ({to:'{!!$site['dia-chi-email']!!}',url:window.location.hostname,json_data:json_data}),
				success: function(){
					@if(isset($chunhalist))
					window.location.reload();
					@elseif(isset($s) && isset($s['category']) && in_array(2, $s['categoryParent']) && !empty($s['field8']))
					window.location.href="{!!$s['field8'] or $post[3]['link']!!}?url="+document.referrer;
					@else
					if(link != '' && link != undefined){
						window.location.href=link;
					}else{
						window.location.href="{!!$post[3]['link'] or ''!!}?url="+document.referrer;
					}
					@endif
				}
			});
			@else
			@if(isset($chunhalist))
			window.location.reload();
			@elseif(isset($s) && isset($s['category']) && in_array(2, $s['categoryParent']) && !empty($s['field8']))
			window.location.href="{!!$s['field8'] or $post[3]['link']!!}?url="+document.referrer;
			@else
			if(link != '' && link != undefined){
				window.location.href=link;
			}else{
				window.location.href="{!!$post[3]['link'] or ''!!}?url="+document.referrer;
			}
			@endif
			@endif
			
			@endif
		});

$('.btn-action').click(function(event) {
	var device = (isMobile())?'Điện thoại':'Máy tính';
	var utm = getUrlParameter('utm_source');
	var action=$(this).data('action');

	$.ajax({
		dataType: "html",
		type: "POST",
		evalScripts: true,
		url: "/ds-add.php",
		data: ({device:device, utm:utm, action:action}),
		success: function(){}
	});
});
});

var getUrlParameter = function getUrlParameter(sParam) {
	var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	sURLVariables = sPageURL.split('&'),
	sParameterName,
	i;

	for (i = 0; i < sURLVariables.length; i++) {
		sParameterName = sURLVariables[i].split('=');

		if (sParameterName[0] === sParam) {
			return sParameterName[1] === undefined ? true : sParameterName[1];
		}
	}
};

function isMobile() {
	return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
}

function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function isPhone(phone) {
	phone = phone.replace(/[^\d\.]/gim, "");
	// var isnum = /^\d+$/.test(phone);
	// if(isnum){
		return (phone.match(/\d/g).length===10 || phone.match(/\d/g).length===11);
	// }
	// return false;
}

function formatNumber(num) {
	return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

function isInArray(array, value) {
	return (array.find(item => {return item == value}) || []).length > 0;
}
</script>
