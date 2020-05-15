<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'DashboardController');
Route::get('/{page}', 'PageController');
