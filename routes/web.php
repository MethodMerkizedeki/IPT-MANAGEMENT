<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IptController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UseriptController;

  
Route::get('/', function () {
    return view('Auth.login');
});
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/roles/delete/{id}',[App\Http\Controllers\RoleController::class,'destroy'])->name('roles.delete');
    Route::resource('roles', RoleController::class);
  

    //permission//
    route::get('/permission/index/', [App\Http\Controllers\PermissionController::Class,'index'])->name('permission.index');
    // route::post('/permission/index/', [App\Http\Controllers\PermissionController::Class,'create'])->name('create.permission');
    route::get('/permission/delete/{id}', [App\Http\Controllers\PermissionController::Class,'destroy'])->name('permission.delete');
    Route::resource('permission', PermissionController::class);


    //user//
    route::get('/users/index/', [App\Http\Controllers\UserController::class,'index'])->name('users.index');
    route::post('/users/index/', [App\Http\Controllers\UserController::class,'store'])->name('users.store');
    route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class,'edit'])->name('users.edit');
    route::post('/users/update/{id}', [App\Http\Controllers\UserController::class,'update'])->name('users.update');
    route::get('/users/show/{id}', [App\Http\Controllers\UserController::class,'show'])->name('users.show');
    route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class,'destroy'])->name('users.destroy');


    //ipt//
    
    route::get('/ipt/delete/{id}', [App\Http\Controllers\IptController::class,'destroy'])->name('ipt.destroy');
    route::get('/ipt/iptlist/', [App\Http\Controllers\IptController::class,'iptlist'])->name('ipt.iptlist');
    Route::get('/change-status/{id}',[App\Http\Controllers\IptController::class,'status'])->name('ipt.status');
    Route::get('/change-remark/{id}',[App\Http\Controllers\IptController::class,'remark'])->name('ipt.remark');
    Route::get('/ipt/delete/{id}',[App\Http\Controllers\IptController::class,'destroy'])->name('ipt.delete');
    Route::resource('ipt', IptController::class);

    //useript
    route::get('/useript/manage/', [App\Http\Controllers\UseriptController::class,'index'])->name('useript.manage');
    route::get('/useript/approved/', [App\Http\Controllers\UseriptController::class,'approved'])->name('useript.approved');
    Route::get('/change-remark/{id}',[App\Http\Controllers\UseriptController::class,'remark'])->name('useript.remark');
    Route::resource('useript', UseriptController::class);

});