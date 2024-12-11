<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\CCTVController;
use App\Http\Controllers\RSUDController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ApresiaController;
use App\Http\Controllers\APIpencakerController;
use App\Http\Controllers\BLTDesaController;
use App\Http\Controllers\StuntingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class,'login'])->name('login');
Route::post('loginaksi', [LoginController::class,'loginaksi'])->name('loginaksi');

Route::group(['middleware' => 'auth'], function() {
    Route::get('home', [HomeController::class,'index'])->name('home');

    //CCTV
    Route::get('get-cctv', [CCTVController::class,'index'])->name('cctv');
    //PENCAKER
    Route::get('get-pencaker', [APIpencakerController::class,'index'])->name('pencaker');
    //BLT DESA
    Route::get('blt', [BLTDesaController::class,'index'])->name('blt');
    //STUNTING
    Route::get('stunting', [StuntingController::class,'index'])->name('stunting');
    //ADUAN
    Route::get('get-aduan', [AduanController::class,'index'])->name('aduan');

    //REALISASI ANGGARAN
    Route::get('get-realisasi-anggaran', [ApresiaController::class,'index'])->name('apresia');

    

    //RSUD
    Route::get('get-rsud', [RSUDController::class,'index'])->name('rsud');

     //PEOPLE
     Route::get('get-people', [PeopleController::class,'index'])->name('people');

    //LOGOUT
    Route::get('logoutaksi', [LoginController::class,'logoutaksi'])->name('logoutaksi');
});