<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Anime;
use App\Http\Controllers\AnimeController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('animes')->name('animes.')->group(function () {
    Route::get('create', [AnimeController::class, 'create'])->name('create');
    Route::get('list', [AnimeController::class, 'list_all'])->name('list');
    Route::get('show/{id}', [AnimeController::class, 'show'])->name('show');
    Route::get('edit/{id}', [AnimeController::class, 'edit'])->name('edit');
    Route::POST('update/{id}', [AnimeController::class, 'update'])->name('update');
    Route::get('delete/{id}', [AnimeController::class, 'delete'])->name('delete');
    Route::POST('store', [AnimeController::class, 'store'])->name('store');
});