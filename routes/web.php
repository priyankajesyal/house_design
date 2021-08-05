<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProposalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\BankDetailController;

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

Route::get('test', [AdminLoginController::class, 'login'])->middleware('admin:admin');

Route::group(['prefix' => 'admin/', 'middleware' => 'admin:admin'], function () {
    Route::get('login', [AdminLoginController::class, 'create'])->name('admin.logincreate');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('banners', BannerController::class);
    Route::post('imageDelete', [PortfolioController::class, 'imagedelete'])->name('imageDelete');
    Route::resource('proposal', ProposalController::class);
    Route::resource('bank-details', BankDetailController::class);
});