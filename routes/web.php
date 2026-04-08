<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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


Route::get('/about', function () {
    return view('pages.about.about');
})->name('about');

Route::get('/resume', function () {
    return view('pages.resume.resume');
})->name('resume');