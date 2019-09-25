<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductController
{
    public function caculator(Request $request)
    {
        $description = $request->input('description');
        $price = $request->input('price');
        $percent = $request->input('percent');
        $discount = $price * $percent * 0.01;
        $discountPrice = $price - $discount;
        return view('discountPrice', compact("discountPrice"));
    }
}
