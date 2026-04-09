<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', function () {
    return view('sample');
});

Route::get('/sample', function () {
    return view('about');
});


Route::get('/crud/create', function () {
    return view('testing_crud.create');
});

Route::get('/crud/index', [CrudController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
Route::post('/crud/store', [CrudController::class, 'store'])->name('crud.store');
Route::get('/crud/edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');
Route::put('/crud/update/{id}', [CrudController::class, 'update'])->name('crud.update');
Route::delete('/crud/destroy/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');



Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/destroy/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');



Route::get('/about', function () {
    return view('pages.about.about');
})->name('about');

Route::get('/resume', function () {
    return view('pages.resume.resume');
})->name('resume');