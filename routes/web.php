<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanySelectionController;


Route::get('/', function () {
    return view('welcome');
});
