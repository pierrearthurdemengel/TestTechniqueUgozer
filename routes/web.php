<?php

use Illuminate\Support\Facades\Route;

// Vue.js point d'entrée
Route::view('/{any}', 'index')->where('any', '.*');
