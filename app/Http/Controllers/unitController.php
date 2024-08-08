<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unitController extends Controller
{
    protected $products;

    public function __construct()
    {
        $this->products = [
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bantaeng',
                'slug' => 'bantaeng',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bukukkumba',
                'slug' => 'bukukkumba',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Gowa',
                'slug' => 'gowa',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Pare-pare',
                'slug' => 'pare-pare',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Belopa',
                'slug' => 'belopa',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Mamuju',
                'slug' => 'mamuju',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Maros',
                'slug' => 'maros',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bogor',
                'slug' => 'bogor',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Sengkang',
                'slug' => 'sengkang',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bandung',
                'slug' => 'bandung',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Gorontalo',
                'slug' => 'gorontalo',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Kendari',
                'slug' => 'kendari',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Malili',
                'slug' => 'malili',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Palopo',
                'slug' => 'palopo',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
        ];


    }
    //
    public function index()
    {
        $products = $this->products;

        return view('product.product', compact('products'));
    }

    public function show($slug)
    {
        $products = $this->products;
        return view('product.product', compact('products'), ['slug' => $slug]);
    }
}
