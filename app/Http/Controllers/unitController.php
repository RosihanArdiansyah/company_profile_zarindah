<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unitController extends Controller
{
    //
    public function index()
    {
        $products = [
            [
                'title' => 'Unit 1',
                'image' => 'product1.jpg',
                'description' => 'Type 1',
                'date' => date('Y-m-d'),
            ],
            [
                'title' => 'Unit 2',
                'image' => 'product2.jpg',
                'description' => 'Type 2',
                'date' => date('Y-m-d'),
            ],
            [
                'title' => 'Unit 3',
                'image' => 'product3.jpg',
                'description' => 'Type 3',
                'date' => date('Y-m-d'),
            ],
            [
                'title' => 'Unit 4',
                'image' => 'product4.jpg',
                'description' => 'Type 3',
                'date' => date('Y-m-d'),
            ]
        ];

        return view('product.product', compact('products'));
    }
}
