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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('professions', 'ProfessionController@all');

Route::post('user/signup', 'UserController@signup');
Route::post('user/picture/store', 'UserController@updateProfilePicture');
Route::get('user/search/{text}', 'UserController@search');
Route::get('user/show/{id}', 'UserController@show');
Route::get('user/{id}/services', 'ServiceController@getByUser');
Route::get('user/{id}/schedules', 'ScheduleController@getByUser');
Route::get('user/{id}/location', 'LocationController@getByUser');
Route::get('user/{id}/my_comments', 'CommentController@getByUserCreatedBy');
Route::get('user/{id}/comments_for_me', 'CommentController@getByUserCreatedTo');
Route::get('user/{user_service}/services/reactions/user/{user_reaction}', 'ServiceController@getByUserWithReactions');
Route::post('user/auth_credentials', 'UserController@auth');

Route::get('profile/picture/{id}', 'ProfileController@getPicture');

Route::post('reaction/create', 'ReactionController@create');
Route::post('reaction/update', 'ReactionController@update');
Route::post('reaction/delete/{id}', 'ReactionController@delete');


//testing
Route::get('user/all', 'UserController@getAll');
Route::get('user/delete', 'UserController@delete');
Route::get('phone/all', 'PhoneController@getAll');
