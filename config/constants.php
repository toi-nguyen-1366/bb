<?php
$orderOptions = [
	['code'=>'ISNULL(`order`) ASC,`order` ASC,ISNULL(`price`) ASC,(`price`=0) ASC,`price` ASC,`title` ASC','title'=>'Phổ biến'],
	['code'=>'ISNULL(`price`) ASC,(`price`=0) ASC,`price` ASC,`title` ASC','title'=>'Giá tăng dần'],
	['code'=>'ISNULL(`price`) ASC,(`price`=0) ASC,`price` DESC,`title` ASC','title'=>'Giá giảm dần'],
	['code'=>'ISNULL(`rating`) ASC,`rating` DESC','title'=>'Đánh giá cao nhất'],
	['code'=>'ISNULL(`created_at`) ASC,`created_at` DESC','title'=>'Mới nhất']
];
if (!defined('ORDER_OPTION')) define('ORDER_OPTION', serialize($orderOptions));

// Thong tin o chan trang admin
if (!defined('WEB_MAKER_SOFTWARE')) define('WEB_MAKER_SOFTWARE', 'Quản lý website');
if (!defined('WEB_MAKER_URL')) define('WEB_MAKER_URL', 'https://ihappy.vn');
if (!defined('WEB_MAKER_NAME')) define('WEB_MAKER_NAME', 'Thiết kế web iHappy');
if (!defined('WEB_MAKER_PHONE')) define('WEB_MAKER_PHONE', '0936 388 025');
if (!defined('WEB_MAKER_PHONE_URL')) define('WEB_MAKER_PHONE_URL', '84936388025');
if (!defined('WEB_MAKER_EMAIL')) define('WEB_MAKER_EMAIL', 'ihappy.asia@gmail.com');

if (!defined('PASSWORD_KEY')) define('PASSWORD_KEY', 'acasa123@456');

$adminMenu = [
	'ĐĂNG KÝ'=>[
		'adStatistic?action=Thuê villa'=>['Tư vấn thuê villa','r01'],
		'adStatistic?action=Đăng ký nhận khuyến mãi'=>['ĐK nhận khuyến mãi','r02'],
		'adStatistic?action=Khách hàng điền thông tin trên popup thông tin'=>['Popup thu thập','r02'],
		'adStatistic?action=Khách hàng điền thông tin trên banner khuyến mãi'=>['Banner khuyến mãi','r02'],
		'adBooking'=>['Tất cả Booking','r03'],
	],'BOOKING'=>[
		'adBookingAll'=>['Check phòng theo ngày','r04'],
		'adBookingVilla'=>['Booking Villa - Chủ Nhà','r05'],
	],
	'BÀI VIẾT TRANG CHỦ'=>[
		'p18'=>['Các bài viết ở trang chủ','r11'],
	],
	'VILLA'=>[
		'p2'=>['Tất cả villa','r07'],
		'p2-edit0'=>['Thêm villa','r08'],
		'c2'=>['Danh mục villa','r08'],
		'c2?catSelect=2'=>['Sửa tên Danh mục cha','r08'],
	],
	'BÀI VIẾT'=>[
		'p3'=>['Tất cả bài viết','r11'],
		'p3-edit0'=>['Thêm bài viết','r11'],
		'c3'=>['Danh mục bài viết','r11'],
		'c3?catSelect=3'=>['Sửa tên Danh mục cha','r11'],
		'p19'=>['Danh sách Dịch vụ','r15'],
		'p1'=>['Danh sách trang riêng','r16'],
	],
	'TRANG CON VOUCHER'=>[
		'p1-edit89'=>['Tiêu đề Voucher','r18'],
		'adSetting?section=2'=>['Giao diện Voucher','r18'],
	],
	// 'THƯ VIỆN'=>[
		// 'adFileExplorer'=>'Quản lý ảnh chung',
		// 'p4'=>'Tất cả bộ sưu tập ảnh/video',
		// 'c4'=>'Danh mục bộ sưu tập ảnh/video',
	// ],
	'GIAO DIỆN'=>[
		'c20' => ['Tùy chỉnh Menu','r19'],
		'p4'=>['Thư viện','r23'],
		'adSetting?section=0'=>['Giao diện chung','r20'],
		'adSetting?section=1'=>['Giao diện trang chủ','r21'],
	],'NGƯỜI DÙNG'=>[
		'adUser'=>['Quản lý người dùng','r22'],
	],
];

$roles = [
	// 'admin','checkphong','checkvalockphong','voucher'
	// 'Admin - Tất cả các quyền' => 'admin',
	'ĐĂNG KÝ / Tư vấn thuê villa' => 'r01',
	'ĐĂNG KÝ / ĐK nhận khuyến mãi' => 'r02',
	'ĐĂNG KÝ / Tất cả Booking' => 'r03',
	'BOOKING / Check phòng theo ngày' => 'r04',
	'BOOKING / Booking theo Villa' => 'r05',
	'BOOKING / Quản lý Chủ Nhà' => 'r09',
	'BOOKING / Lock phòng' => 'r06',
	'VILLA / Tất cả villa' => 'r07',
	'VILLA / Thêm sửa xóa villa' => 'r08',
	'BÀI VIẾT / Tất cả bài viết' => 'r11',
	'BÀI VIẾT / Danh sách Dịch vụ' => 'r15',
	'BÀI VIẾT / Danh sách trang riêng' => 'r16',
	'TRANG CON VOUCHER / Sửa giao diện trang Voucher' => 'r18',
	'GIAO DIỆN / Tùy chỉnh Menu' => 'r19',
	'GIAO DIỆN / Giao diện chung' => 'r20',
	'GIAO DIỆN / Giao diện trang chủ' => 'r21',
	'GIAO DIỆN / Thư viện' => 'r23',
	'NGƯỜI DÙNG / Quản lý người dùng' => 'r22',
];
if (!defined('ROLES')) define('ROLES', serialize($roles));

if (!defined('ADMIN_MENU')) define('ADMIN_MENU', serialize($adminMenu));
if (!defined('DEFAULT_ADMIN_PAGE')) define('DEFAULT_ADMIN_PAGE', 'admin/adBookingVilla');

$otherLanguage = [
	// 'en'=>'happycms.l',
	// 'zh'=>'zh.thienlongcnc.com'
];
if (!defined('OTHER_LANGUAGE')) define('OTHER_LANGUAGE', serialize($otherLanguage));

$translate = [
	'vi' => ['Tìm kiếm cho từ khóa','Giá liên hệ','Tìm thấy','kết quả cho từ khóa','Không tìm thấy kết quả nào', 'Không tìm thấy kết quả nào cho từ khóa','Trang chủ','Tìm kiếm',],
	'en' => ['Search for keyword','Contact for price','Found','result(s) for keyword','No result found','No result found for keyword','Home','Search',],
	'zh' => ['搜索关键字','价格联系','找到','个关键字结果','没有找到结果','没有找到关键字的结果','主页','搜索',],
	'ko' => ['키워드 검색','가격 문의','녹이다','키워드에 대한 결과','결과가 없습니다','키워드에 대한 결과가 없습니다','집','수색',],
	'ja' => ['キーワードを検索','価格のための連絡先','見つかりました','キーワードの結果','結果が見つかりません','キーワードが見つかりません','ホーム','サーチ',]
];
if (!defined('TRANSLATE')) define('TRANSLATE', serialize($translate));