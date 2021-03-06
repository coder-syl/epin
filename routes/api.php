<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::group(['prefix' => '/analyse', 'namespace' => 'Api\Analyse', 'as' => 'api.'], function () {
//    Route::resource('analyseData', 'SpiderStatusController', ['except' => ['create', 'edit']]);
//});
//Route::get('analyseData',function (){
//    return 'q';
//});
Route::get('analyseData','Api\Analyse\SpiderStatusController@index');
Route::get('onlineJob','Api\Recruit\OnlineJobController@index');
Route::get('positionList/{tag}','Api\Recruit\PositionListController@index');
Route::post('personalRegister','Api\PersonalUser\PersonalUserController@register');
Route::get('checkLogin','Api\PersonalUser\PersonalUserController@checkLogin');
Route::post('addBaseInfo','Api\PersonalUser\PersonalUserController@addBaseInfo');
Route::get('courseClass','Api\OnlineTrain\CourseClassController@index');