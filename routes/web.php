<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin' , function(){
	return view('auth.login');
});
Route::get('/' , function(){
	return view('index');
});

Route::get('/about' , function(){
	return view('frontend/about');
});
Route::get('/teacher' , function(){
	return view('frontend/teacher');
});
Route::get('/products' , function(){
	return view('frontend/product');
});
Route::get('/blog' , function(){
	return view('frontend/blog');
});
Route::get('/contact' , function(){
	return view('frontend/contact');
});

Route::get('/pricing' , function(){
	return view('frontend/pricing');
});

route::get('/admin-dashboard','HomeController@admin_dashboard')->name('admin_dashboard');
route::get('/create-user','userRolerController@create')->name('registeration_form');
route::get('/admin-team-management','AdminController@team')->name('team_managent');
route::get('/admin-all-coordinators','AdminController@all_coordinators')->name('admin_all_coordinators');
route::get('/course-management','AdminController@course')->name('course_management');
route::get('/sales-management-admin','AdminController@sales')->name('sales_management_admin');
route::get('/upload-course','AdminController@upload_course')->name('upload_course_admin');
route::get('/course-category','AdminController@course_category')->name('course_category');
route::post('/create_course_category','AdminController@create_course_category')->name('create_course_category');
route::post('/create_upload_course','AdminController@create_upload_course')->name('create_upload_course');
route::post('/delete-user','AdminController@delete_user')->name('delete_user_by_admin');



//Coordinator
route::get('/coordinator-dashboard','HomeController@coordinator_dashboard')->name('coordinator_dashboard');
route::get('/my-team','coordinatorController@my_team')->name('my_team');
route::get('/sales-management','coordinatorController@sales_management')->name('sales_management-coordinator');
route::get('/coordinator-support','coordinatorController@support')->name('coordinator_support');
route::get('/create-sub-coordinator','userRolerController@create_sub')->name('registeration_form_sub_coordinator');
Route::post('/user/create/sub', 'AdminController@create_new_sub')->name('create_new_sub_coordinator');

//Main Dealer

route::get('/main-dealer-dashboard','HomeController@main_dealer_dashboard')->name('main_dealer_dashboard');
route::get('/create-main-delaer','userRolerController@create_main_dealer')->name('registeration_form_main_dealer');
Route::post('/user/create/main-dealer', 'AdminController@create_new_main_dealer')->name('create_new_main_dealer');
route::get('/main-dealer-my-team','maindealerController@my_team')->name('main_dealer_my_team');


//Sub Dealer
route::get('/sub-dealer-dashboard','HomeController@sub_dealer_dashboard')->name('sub_dealer_dashboard');
route::get('/create-sub-dealer','userRolerController@create_sub_dealer')->name('registeration_form_sub_dealer');
Route::post('/user/create/sub-dealer', 'AdminController@create_new_sub_dealer')->name('create_new_sub_dealer');
route::get('/sub-dealer-my-team','subdealerController@my_team')->name('sub_dealer_my_team');


//Sales Rep
route::get('/sales-rep-dashboard','HomeController@sales_rep_dashboard')->name('sales_rep_dashboard');

//Teacher
route::get('/teacher-dashboard','HomeController@teacher_dashboard')->name('teacher_dashboard');
route::get('/teacher-support','coordinatorController@support')->name('teacher_support');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/redirect', 'AdminController@redirect_user')->name('redirect_user');
Route::post('/user/create', 'AdminController@create_new_user')->name('create_new_user');



Route::get('/test',function(){
	return view('teacher.dashboard');
});
