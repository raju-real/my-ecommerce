<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return DB::connection('pegah_server')->table('users')->get();
    return view('welcome');
});


