<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// 1. 入力画面の表示
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');

// 2. 送信処理（完了画面へデータを引き渡す）
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');