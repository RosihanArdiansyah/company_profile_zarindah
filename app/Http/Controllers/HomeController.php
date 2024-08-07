<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $products;
    protected $promo;
    protected $article;

    public function __construct()
    {
        $this->products = [
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bantaeng',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bukukkumba',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Gowa',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Pare-pare',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Belopa',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Mamuju',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Maros',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bogor',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Sengkang',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bandung',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Gorontalo',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Kendari',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Malili',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Palopo',
                'description' => 'Lorem Ipsum Dolor si amet'
            ],
        ];

        $this->promo = [
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

        $this->articles = [
            [
                'title' => 'Article 1',
                'image' => 'assets/img/placeholder.jpg',
                'description' => 'Description of article 1',
                'date' => date('Y-m-d'),
                'slug' => 'article1'
            ],
            [
                'title' => 'Article 2',
                'image' => 'assets/img/placeholder.jpg',
                'description' => 'Description of article 2',
                'date' => date('Y-m-d'),
                'slug' => 'article2'
            ],
            [
                'title' => 'Article 3',
                'image' => 'assets/img/placeholder.jpg',
                'description' => 'Description of article 3',
                'date' => date('Y-m-d'),
                'slug' => 'article3'
            ],
            [
                'title' => 'Article 4',
                'image' => 'assets/img/placeholder.jpg',
                'description' => 'Description of article 3',
                'date' => date('Y-m-d'),
                'slug' => 'article4'
            ]
        ];
    }
    //
    public function index()
    {
        $products = $this->products;
        $promo = $this->promo;
        $articles = $this->articles;
        return view('welcome', compact('products','promo','articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
