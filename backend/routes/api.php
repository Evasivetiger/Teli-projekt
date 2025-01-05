<?php

use App\Http\Controllers\LeagueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/champions', [LeagueController::class, 'index'])
->name('champions.index');

Route::get('/champions/{id}', [LeagueController::class, 'show'])
->name('champions.show')
->whereNumber('id');

Route::post('/champions', [LeagueController::class, 'store'])
->name('champions.store');

Route::patch('/champions/{id}', [LeagueController::class, 'update'])
->name('champions.update')
->whereNumber('id');


Route::delete('/champions/{id}', [LeagueController::class, 'destroy'])
->name('champions.destroy')
->whereNumber('id');