<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
class BrandController extends Controller
{
    public function store( Request $request){
        $request->validate([
            "brand_name"=> "required|string|min:4|max:50)",
         ]) ;
             
         Brand::create([
            "brand_name"=> $request->brand_name
            ]);
}         
}
