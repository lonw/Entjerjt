<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('chinese', function () {
    return view('chinese');
});

Route::get('about', function(){
    return view('about');
});

Route::get('yangsheng', function () {
    return view('yangsheng');
});
Route::get('yiyou', function () {
    return view('yiyou');
});
Route::get('yiyou_tour', function () {
    return view('yiyou_tour');
});
Route::get('yiyou_yiyuan', function () {
    return view('yiyou_yiyuan');
});
Route::get('yiyou_projects', function () {
    return view('yiyou_projects');
});
Route::get('yiyou_project_fuzhu', function () {
    return view('yiyou_project_fuzhu');
});
Route::get('yiyou_project_liangxin', function () {
    return view('yiyou_project_liangxin');
});
Route::get('yiyou_project_weichuang', function () {
    return view('yiyou_project_weichuang');
});
Route::get('yiyou_project_3', function () {
    return view('yiyou_project_3');
});
Route::get('yiyou_project_ertong', function () {
    return view('yiyou_project_ertong');
});
Route::get('yiyou_project_feiai', function () {
    return view('yiyou_project_feiai');
});
Route::get('yiyou_project_jiguang', function () {
    return view('yiyou_project_jiguang');
});
Route::get('yiyou_project_ruxian', function () {
    return view('yiyou_project_ruxian');
});
Route::get('tanxian_zhulu', function () {
    return view('tanxian_zhulu');
});
Route::get('tanxian_shouxiong', function () {
    return view('tanxian_shouxiong');
});
Route::get('tanxian_lieyu', function () {
    return view('tanxian_lieyu');
});
Route::get('tanxian', function () {
    return view('tanxian');
});
Route::get('tanxian_car', function () {
    return view('tanxian_car');
});
Route::get('tanxian_tool', function () {
    return view('tanxian_tool');
});
Route::get('tanxian_ship', function () {
    return view('tanxian_ship');
});
Route::get('spring', function () {
    return view('spring');
});
Route::get('summer', function () {
    return view('summer');
});
Route::get('autumn', function () {
    return view('autumn');
});
Route::get('winter', function () {
    return view('winter');
});
Route::get('useterm', function () {
    return view('useterm');
});
Route::get('jiatu', function () {
    return view('jiatu');
});
Route::get('youxue', function () {
    return view('youxue');
});
Route::get('summerCamp', function () {
    return view('summerCamp');
});
Route::get('exchangeStudents', function () {
    return view('exchangeStudents');
});
Route::get('two-weeks-1', function () {
    return view('two-weeks-1');
});
Route::get('two-weeks-2', function () {
    return view('two-weeks-2');
});
Route::get('two-weeks-3', function () {
    return view('two-weeks-3');
});
Route::get('two-weeks-4', function () {
    return view('two-weeks-4');
});
Route::get('two-weeks-5', function () {
    return view('two-weeks-5');
});
Route::get('dinggou', function () {
    return view('dinggou');
});
Route::get('shangwu', function () {
    return view('shangwu');
});
Route::get('shangwu_feiji', function () {
    return view('shangwu_feiji');
});
Route::get('shangwu_car', function () {
    return view('shangwu_car');
});
Route::get('shangwu_place', function () {
    return view('shangwu_place');
});
Route::get('shangwu_yuding', function () {
    return view('shangwu_yuding');
});
Route::get('shangwu_meeting', function () {
    return view('shangwu_meeting');
});
Route::get('shangwu_zhihui', function () {
    return view('shangwu_zhihui');
});
Route::get('shangwu_smart', function () {
    return view('shangwu_smart');
});
Route::get('shangwu_green', function () {
    return view('shangwu_green');
});
Route::get('shangwu_culture', function () {
    return view('shangwu_culture');
});
Route::get('shangwu_star', function () {
    return view('shangwu_star');
});
Route::get('huaxia', function () {
    return view('huaxia');
});
Route::get('huaxia_shaoxin', function () {
    return view('huaxia_shaoxin');
});
Route::get('huaxia_jiangnan', function () {
    return view('huaxia_jiangnan');
});
Route::get('huaxia_jiangnan_flash', function () {
    return view('huaxia_jiangnan_flash');
});
Route::get('huaxia_jiangnan_chengsi', function () {
    return view('huaxia_jiangnan_chengsi');
});
Route::get('huaxia_jiangnan_hangzhou', function () {
    return view('huaxia_jiangnan_hangzhou');
});
Route::get('huaxia_jiangnan_lishui', function () {
    return view('huaxia_jiangnan_lishui');
});
Route::get('huaxia_jiangnan_shanghai', function () {
    return view('huaxia_jiangnan_shanghai');
});
Route::get('huaxia_huangshan', function () {
    return view('huaxia_huangshan');
});
Route::get('huaxia_qingdao', function () {
    return view('huaxia_qingdao');
});
Route::get('huaxia_wuzheng', function () {
    return view('huaxia_wuzheng');
});
Route::get('huaxia_beijing', function () {
    return view('huaxia_beijing');
});
Route::get('huaxia_beier', function () {
    return view('huaxia_beier');
});
Route::get('huaxia_yungang', function () {
    return view('huaxia_yungang');
});
Route::get('huaxia_xian', function () {
    return view('huaxia_xian');
});
Route::get('huaxia_xianggelila', function () {
    return view('huaxia_xianggelila');
});

Route::get('shengtai', function () {
    return view('shengtai');
});
Route::get('shengtai_National', function () {
    return view('shengtai_National');
});
Route::get('guanyu', function () {
    return view('guanyu');
});
Route::get('gengduo', function () {
    return view('gengduo');
});
Route::get('denglu', function () {
    return view('denglu');
});
Route::get('huaxia', function () {
    return view('huaxia');
});



Route::get('culture', function () {
    return view('culture');
});

Route::get('mission', function () {
    return view('mission');
});
Route::get('concept', function () {
    return view('concept');
});

Route::get('contact', function () {
    return view('contact');
});



 Route::group(['middleware'=>'guest'],function(){
  Route::get('signup',[
    'uses'=>'UserController@getSignup',
    'as'=>'signup'
  ]);
  Route::post('signup',[
    'uses'=>'UserController@postSignup',
    'as'=>'signup'
  ]);

  Route::get('signin', [
    'uses'=>'UserController@getSignin',
    'as'=>'signin'
  ]);


  Route::post('signin',[
    'uses'=>'UserController@postSignin',
    'as'=>'signin'
  ]);
 });

Route::post("yudingpost", [
  "uses"=>"YudingController@yudingPost",
  'as'=>'yuding-post']);

Route::group(['middleware'=>'auth'],function(){
  Route::get('profile',[
    'uses'=>'UserController@getProfile',
    'as'=>'profile'
  ]);

  Route::get('logout',[
    'uses'=>'UserController@getLogout',
    'as'=>'logout'
  ]);
  // Route::get('checkout', [
  //     'uses' => 'Productcontroller@getCheckout',
  //     'as' => 'checkout'
  // ]);
  // Route::post('checkout', [
  //     'uses' => 'Productcontroller@postCheckout',
  //     'as' => 'checkout'
  //
  // ]);
});
