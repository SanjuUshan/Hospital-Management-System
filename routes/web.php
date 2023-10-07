<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/regi', function () {
    return view('newuser');
});




Route::get('/admin',['middleware'=>'isadmin', function () {
    return view('admin');
}]);
Route::get('/user',['middleware'=>'isuser', function () {
    return view('user');
}]);


Auth::routes();

Route::post('/appointments', [App\Http\Controllers\HomeController::class, 'appointments']);

Route::get('/view', [App\Http\Controllers\HomeController::class, 'viewappointment']);


Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'deleteAppointment']);

Route::get('/checkapointments', [App\Http\Controllers\HomeController::class, 'allappointment']);

Route::put('/update/{id}', [App\Http\Controllers\HomeController::class, 'update']);

Route::get('/updateAppointment', [App\Http\Controllers\HomeController::class, 'Updateappointment']);

Route::get('/setadmin', [App\Http\Controllers\HomeController::class, 'setadmin']);

Route::get('/deleteUser/{id}', [App\Http\Controllers\HomeController::class, 'deleteUser']);