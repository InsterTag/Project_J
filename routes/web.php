<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


//Rutas para la vista 
Route::view('/login', 'login')->name('login');
Route::view('/home', 'home')->middleware('auth')->name('home');

//Rutas para crear un Usuario
Route::get('/register',[UserController::class,'create'])->name('register');
Route::post('/crearUsuario',[UserController::class,'agg_user'])->name('create-user');
Route::post('/inicia-sesion',[UserController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[UserController::class,'logout'])->name('logout');


Route::get('/message/create', [MessageController::class, 'create'])->name('message-form');
Route::post('/message/send', [MessageController::class, 'send_message'])->name('send-message');
Route::get('/messages', [MessageController::class, 'index'])->name('messages')->middleware('auth');
