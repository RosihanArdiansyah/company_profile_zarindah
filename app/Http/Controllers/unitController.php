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
                'image' => 'assets\img\produk\bantaeng\LOGO\natura_bantaeng_logo.png',
                'title' => 'Bantaeng',
                'slug' => 'bantaeng',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\bulukkumba\Logo\pzb1.png',
                'title' => 'Bukukkumba',
                'slug' => 'bukukkumba',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\gowa\logo\zarindah mas.png',
                'title' => 'Gowa',
                'slug' => 'gowa',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\pare-pare\PAREPARE-2022.png',
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
                'image' => 'assets\img\produk\mamuju\logo\gz.png',
                'title' => 'Mamuju',
                'slug' => 'mamuju',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\maros\maros.png',
                'title' => 'Maros',
                'slug' => 'maros',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\bogor\Logo\bci.png',
                'title' => 'Bogor',
                'slug' => 'bogor',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\sengkang\gsz.png',
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
                'image' => 'assets\img\produk\kendari\gzk1.png',
                'title' => 'Kendari',
                'slug' => 'kendari',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\malili\zarindah puncak.png',
                'title' => 'Malili',
                'slug' => 'malili',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets\img\produk\palopo\gjp.png',
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
        // $products = $this->products;
        // Filter the articles array to find the one that matches the slug
        $product = array_filter($this->products, function ($products) use ($slug) {
            return $products['slug'] === $slug;
        });

        // Since array_filter returns an array, we'll reset the array pointer and take the first element
        $products = reset($product);
        return view('product.product', compact('products'), ['slug' => $slug]);
    }
}
