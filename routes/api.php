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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::middleware(['api.auth'])->group(function () {
    Route::get('/student/{id}', 'StudentController@show');
});

Route::get('/student/{id}/payments', 'StudentPaymentController@index');
Route::get('/student/{id}/{level_id}/payments', 'StudentPaymentController@payments_by_level');
Route::get('/student/{student_id}/{level_id}/{cycle_id}/payments', 'StudentPaymentController@payments_by_cycle');

Route::get('/teacher/{id}/groups', 'TeacherController@groups');
Route::get('/teacher/{id}/group/{group_id}/subjects', 'TeacherController@groupSubjects');

