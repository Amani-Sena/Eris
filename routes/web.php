<?php

use App\Mail\MensagemMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes(['verify' => true]);


Route::get('/budget/admin', [App\Http\Controllers\BudgetController::class, 'budgetAdmin'])->name('budget.admin')->middleware('verified', 'admin');
Route::get('/budget/edit/admin/{budget}', [App\Http\Controllers\BudgetController::class, 'budgetEditAdmin'])->name('budget.edit.admin')->middleware('verified', 'admin');

Route::get('/budget', [App\Http\Controllers\BudgetController::class, 'index'])->name('budget')->middleware('verified');
Route::get('/budget/show/{budget}', [App\Http\Controllers\BudgetController::class, 'show'])->name('budget.show')->middleware('auth')->middleware('verified');
Route::get('/budget/create', [App\Http\Controllers\BudgetController::class, 'create'])->name('budget.create')->middleware('auth')->middleware('verified');
Route::post('/budget/store', [App\Http\Controllers\BudgetController::class, 'store'])->name('budget.store')->middleware('auth')->middleware('verified');
Route::get('/budget/edit/{budget}', [App\Http\Controllers\BudgetController::class, 'edit'])->name('budget.edit')->middleware('auth')->middleware('verified');
Route::put('/budget/update/{budget}', [App\Http\Controllers\BudgetController::class, 'update'])->name('budget.update')->middleware('auth')->middleware('verified');
Route::delete('/budget/destroy/{budget}', [App\Http\Controllers\BudgetController::class, 'destroy'])->name('budget.destroy')->middleware('auth')->middleware('verified');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/service/{type}', [App\Http\Controllers\HomeController::class, 'service'])->name('about');

Route::post('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');

Route::get('/access-denied', function() {
    return view('access-denied');
});
