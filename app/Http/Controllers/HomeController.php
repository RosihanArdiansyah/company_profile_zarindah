<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = [
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Unit',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Unit',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Unit',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Unit',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Unit',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Unit',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Unit',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
        ];
        $promo = [
            [
                'image' => 'assets/img/footer-bg.png',
                'title' => 'Promo',
                'description' => 'Lorem Ipsum Dolor si amet',
                'active' => true
            ],
            [
                'image' => 'assets/img/slider-2.jpg',
                'title' => 'Promo',
                'description' => 'Lorem Ipsum Dolor si amet',
                'active' => false
            ],
            [
                'image' => 'assets/img/covid.jpg',
                'title' => 'Promo',
                'description' => 'Lorem Ipsum Dolor si amet',
                'active' => false
            ],
        ];

        return view('welcome', compact('products','promo'));
    }
}
