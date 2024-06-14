<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\SpeakersController;

Route::get('/', function () {
    return view('index');
});

Route::get('/code-of-conduct', function () {
    return view('code-of-conduct');
});

Route::get('/community', function () {
    return view('community');
});

// Route::get('/agenda', function () {
//     return view('index');
// });

Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers');
Route::get('/speaker/{id}', [SpeakerController::class, 'searchById'])->name('speaker');

Route::get('/agenda/{id}', [AgendaController::class, 'searchById'])->name('session');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

require __DIR__.'/auth.php';
