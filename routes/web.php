<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\settingController;
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

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/admin', [settingController::class,'index']);
Route::post('/setting_update', [settingController::class,'update']);