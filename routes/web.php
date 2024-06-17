<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

//USER
Route::get('/', [MenuController::class, 'index'])->name('index');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/gallery', [MenuController::class, 'gallery'])->name('gallery');
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');

//ADMIN
Route::get('/admin', [UserController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->name('admin')->middleware(['auth']);

Route::get('/admin/menu', [MenuController::class, 'adminMenu'])->name('admin.menu')->middleware(['auth']);
Route::get('/admin/menu/detail/{id}', [MenuController::class, 'detailMenu'])->name('menu.detail')->middleware(['auth']);
Route::get('/admin/menu/tambah', [MenuController::class, 'addMenu'])->name('admin.menu-add')->middleware(['auth']);
Route::post('/admin/menu/tambah/simpan', [MenuController::class, 'save'])->name('admin.menu.save')->middleware(['auth']);
Route::get('/admin/menu/edit/{id}', [MenuController::class, 'updateForm'])->name('admin.menu-edit')->middleware(['auth']);
Route::put('/admin/menu/edit/save/{id}', [MenuController::class, 'update'])->name('admin.menu-edit.save')->middleware(['auth']);
Route::get('/admin/menu/hapus/{id}', [MenuController::class, 'destroy'])->name('admin.menu.remove')->middleware(['auth']);

Route::get('/admin/user', [UserController::class, 'user'])->name('admin.user')->middleware(['auth']);
Route::get('/admin/user/tambah', [UserController::class, 'addUser'])->name('admin.user-add')->middleware(['auth']);
Route::post('/admin/user/tambah/simpan', [UserController::class, 'save'])->name('admin.user.save')->middleware(['auth']);
Route::get('/admin/user/edit/{id}', [UserController::class, 'updateUserForm'])->name('admin.user-edit')->middleware(['auth']);

Route::get('/admin/message', [MenuController::class, 'adminMessage'])->name('admin.message')->middleware(['auth']);
Route::get('/admin/message/read', [MenuController::class, 'adminMessageRead'])->name('admin.message-read')->middleware(['auth']);
Route::post('/admin/message/simpan', [MenuController::class, 'saveMessage'])->name('message.save')->middleware(['auth']);
Route::put('/admin/message/{id}', [MenuController::class, 'updateMessage'])->name('message.update')->middleware(['auth']);