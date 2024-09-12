<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanySelectionController;
use App\Filament\Pages\Contracts;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/contracts', function () {
    return view('filament.pages.contracts');
})->name('contracts');
