<?php

use App\Http\Controllers\BrandController; 
use Illuminate\Support\Facades\Route;

Route::get('/br', [BrandController::class, 'showBrands']);
 