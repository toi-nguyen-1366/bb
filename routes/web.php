<?php
use Illuminate\Support\Facades\Artisan;

// Route::get('/cache', function() {
//     Artisan::call('cache:clear');
//     echo 'cache:clear<br>';
//     Artisan::call('view:clear');
//     echo 'view:clear<br>';
//     return 'all cache cleared';
// });

if(env('QUERY_LOG')){
	DB::enableQueryLog();
	\Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
		echo "<b>{$query->time}ms</b> | {$query->sql}<br>";
	});
}

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'SiteController@index');
Route::get('/{path}-3425{id}', 'SiteController@post')->where(['id' => '[0-9]+', 'path' => '(.*)']);
Route::post('/{path}-3425{id}', 'SiteController@post')->where(['id' => '[0-9]+', 'path' => '(.*)']);
Route::get('/{path}-2523{id}', 'SiteController@category')->where(['id' => '[0-9]+', 'path' => '(.*)']);
Route::get('/tim-kiem', 'SiteController@search');
Route::get('/chu-nha', 'SiteController@chunha');
Route::post('/chu-nha', 'SiteController@chunha');
Route::post('/w/updateDataElement', 'SiteController@updateDataElement');

Route::any('/admin', 'AdminController@index');
Route::get('/admin/adSetting', 'AdminController@adSetting');
Route::get('/admin/adComment', 'AdminController@adComment');
Route::get('/admin/adBooking', 'AdminController@adBooking');
Route::get('/admin/adBookingVilla', 'AdminController@adBookingVilla');
Route::get('/admin/adBookingAll', 'AdminController@adBookingAll');
Route::get('/admin/adFileExplorer', 'AdminController@adFileExplorer');
Route::get('/admin/adStatistic', 'AdminController@adStatistic');
Route::get('/admin/adUser', 'AdminController@adUser');

Route::get('/admin/c{id}', 'AdminController@adCategory')->where(['id' => '[0-9]+']);
Route::get('/admin/p{catId}', 'AdminController@adPost')->where(['catId' => '[0-9]+']);
Route::get('/admin/p{catId}-edit{id}', 'AdminController@adPostEdit')->where(['catId' => '[0-9]+','id' => '[0-9]+']);
Route::post('/admin/adPostAjax', 'AdminController@adPostAjax');

Route::post('/admin/updateDataFrontEnd', 'AdminController@updateDataFrontEnd');
Route::post('/admin/updateDataElement', 'AdminController@updateDataElement');

Route::get('/changePassword','AdminController@showChangePasswordForm');
Route::post('/changePassword','AdminController@changePassword')->name('changePassword');

Route::get('/{slug}', 'SiteController@findBySlug')->where(['slug' => '(.*)']);
