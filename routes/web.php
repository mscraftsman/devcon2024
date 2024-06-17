<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendaSingleController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\SpeakersController;

Route::get('/', function () {
    $title = 'MSCC — Developers Conference 2024';
    return view('index', compact('title'));
})->name('index');

Route::get('/code-of-conduct', function () {
    $title = 'MSCC — Code of Conduct';
     return view('code-of-conduct', compact('title'));
})->name('code-of-conduct');

Route::get('/community', function () {
    $title = 'MSCC — Community';
    return view('community', compact('title'));
})->name('community');

Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers');
Route::get('/speaker/{id}', [SpeakerController::class, 'searchById'])->name('speaker');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{id}', [AgendaSingleController::class, 'searchSessionById'])->name('session');

require __DIR__.'/auth.php';
