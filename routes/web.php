<?php

use App\Http\Controllers\FormGuestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormGuestController::class, 'index'])->name('form.index');  //jika menggunakan get maka harus menggunakan array dan membuat route untuk proses simpan

Route::post('/', [FormGuestController::class, 'store'])->name('form.store');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group([
    'middleware' => ['auth'], 
    'prefix' => 'admin',  // URL => admin/tamu
    'as' => 'admin.'  // route(admin.) => nama
], function() { 

    // guestbook.test/admin -> route('admin.index')
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

    // guestbook.test/admin/dashboard -> route('admin,dashboard')
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    // Routing CRUD dari instituion
    Route::resource('/institution', App\Http\Controllers\InstitutionController::class);

    Route::resource('/guests', App\Http\Controllers\GuestController::class)->only(['index', 'show', 'destroy']);  //only -> yang ditampilkan , exept-> yang tidak ditampilkan

    Route::get('/reports', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');

});
