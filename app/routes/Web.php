<?php
$router = new AltoRouter();

// router session
$router->map('POST', '/set-session', 'App\Controllers\HomeController@setSession', '');

//router auth
$router->map('GET', '/admin/login', 'App\Controllers\AdminAuthController@index', '');
$router->map('POST', '/admin/login', 'App\Controllers\AdminAuthController@login', '');
$router->map('GET', '/admin/logout', 'App\Controllers\AdminAuthController@logout', '');

// router home
$router->map('GET', '/', 'App\Controllers\HomeController@index', '');
$router->map('GET', '/phuong-thang', 'App\Controllers\PhuongThangController@index', '');
$router->map('GET', '/phuong-thang/[i:MaPT]', 'App\Controllers\PhuongThangController@indexById', '');
$router->map('GET', '/vi-thuoc', 'App\Controllers\ViThuocController@index', '');
$router->map('GET', '/benh-danh', 'App\Controllers\BenhDanhController@index', '');
$router->map('GET', '/thuat-ngu-khac', 'App\Controllers\ThuatNguKhacController@index', '');
$router->map('GET', '/tim-kiem-nc', 'App\Controllers\SearchController@index', '');
$router->map('POST', '/search/filter', 'App\Controllers\SearchController@filter', '');
$router->map('POST', '/search', 'App\Controllers\SearchController@search', '');
$router->map('GET', '/rate', 'App\Controllers\HomeController@rate', '');
$router->map('POST', '/rate/submit', 'App\Controllers\HomeController@submitRate', '');

// router feedback
$router->map('POST', '/feedback', 'App\Controllers\AdminFeedbackController@store', '');
$router->map('POST', '/feedback/update', 'App\Controllers\AdminFeedbackController@update', '');

// admin
// router terms
$router->map('GET', '/admin', 'App\Controllers\AdminTermsController@index', '');
$router->map('GET', '/admin/terms', 'App\Controllers\AdminTermsController@index', '');
$router->map('GET', '/admin/edit-thuatngukhac/[i:MaTN]', 'App\Controllers\AdminTermsController@show', '');
$router->map('GET', '/admin/delete-term/[i:MaTN]', 'App\Controllers\AdminTermsController@delete', '');
$router->map('GET', '/admin/add-term', 'App\Controllers\AdminTermsController@create', '');
$router->map('POST', '/admin/save-term', 'App\Controllers\AdminTermsController@store', '');
$router->map('POST', '/admin/update-term/[i:MaTN]', 'App\Controllers\AdminTermsController@update', '');

// router user
$router->map('GET', '/admin/users', 'App\Controllers\AdminQTVController@index', '');
$router->map('GET', '/admin/edit-user/[i:MaQTV]', 'App\Controllers\AdminQTVController@show', '');
$router->map('GET', '/admin/delete-user/[i:MaQTV]', 'App\Controllers\AdminQTVController@delete', '');
$router->map('GET', '/admin/add-user', 'App\Controllers\AdminQTVController@create', '');
$router->map('POST', '/admin/save-user', 'App\Controllers\AdminQTVController@store', '');
$router->map('POST', '/admin/update-user/[i:MaQTV]', 'App\Controllers\AdminQTVController@update', '');

// router benhdanh
$router->map('GET','/admin/benhdanh','App\Controllers\AdminBenhdanhController@index','');
$router->map('GET','/admin/add-benhdanh','App\Controllers\AdminBenhdanhController@create','');
$router->map('POST','/admin/save-benhdanh','App\Controllers\AdminBenhdanhController@store','');
$router->map('GET', '/admin/delete-benhdanh/[i:MaBD]', 'App\Controllers\AdminBenhdanhController@delete', '');
$router->map('POST', '/admin/update-benhdanh/[i:MaBD]', 'App\Controllers\AdminBenhdanhController@update', '');
$router->map('GET', '/admin/edit-benhdanh/[i:MaBD]', 'App\Controllers\AdminBenhdanhController@edit', '');

 // phuong thang
$router->map('GET','/admin/phuongthang','App\Controllers\AdminPhuongThangController@index','');
$router->map('GET','/admin/add-phuongthang','App\Controllers\AdminPhuongThangController@create','');
$router->map('POST','/admin/save-phuongthang','App\Controllers\AdminPhuongThangController@store','');
$router->map('GET', '/admin/delete-phuongthang/[i:MaPT]', 'App\Controllers\AdminPhuongThangController@delete', '');
$router->map('POST', '/admin/update-phuongthang/[i:MaPT]', 'App\Controllers\AdminPhuongThangController@update', '');
$router->map('GET', '/admin/edit-phuongthang/[i:MaPT]', 'App\Controllers\AdminPhuongThangController@edit', '');
// VIthuoc
$router->map('GET','/admin/vithuoc','App\Controllers\AdminViThuocController@index','');
$router->map('GET','/admin/add-vithuoc','App\Controllers\AdminViThuocController@create','');
$router->map('POST','/admin/save-vithuoc','App\Controllers\AdminViThuocController@store','');
$router->map('GET', '/admin/delete-vithuoc/[i:MaVT]', 'App\Controllers\AdminViThuocController@delete', '');
$router->map('POST', '/admin/update-vithuoc/[i:MaVT]', 'App\Controllers\AdminViThuocController@update', '');
$router->map('GET', '/admin/edit-vithuoc/[i:MaVT]', 'App\Controllers\AdminViThuocController@edit', '');

// router user
$router->map('GET', '/admin/feedback', 'App\Controllers\AdminFeedbackController@index', '');
// $router->map('GET', '/admin/edit-user/[i:MaQTV]', 'App\Controllers\AdminQTVController@show', '');
// $router->map('GET', '/admin/delete-user/[i:MaQTV]', 'App\Controllers\AdminQTVController@delete', '');
// $router->map('GET', '/admin/add-user', 'App\Controllers\AdminQTVController@create', '');
// $router->map('POST', '/admin/save-user', 'App\Controllers\AdminQTVController@store', '');
// $router->map('POST', '/admin/update-user/[i:MaQTV]', 'App\Controllers\AdminQTVController@update', '');

$router->map('GET', '/admin/rate', 'App\Controllers\HomeController@rateAdmin', '');

//

$router->map('GET', '/getname', 'App\Controllers\HomeController@getName', '');