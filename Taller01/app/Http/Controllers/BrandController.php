<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50'
        ]);
        Brand::create([
            'name'=>$request->name
        ]);
        return redirect()->back()->with('success','Brand create successfully3');
    }
}
