<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand; // Assuming your model name is "Brand"
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function showBrands()
    {
        $brands = DB::table('brands')->get();

        // return response()->json($brands);
    
    }
}
