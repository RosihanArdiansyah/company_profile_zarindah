<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $products;
    protected $promo;
    protected $articles;
    protected $managers;

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

        $this->promo = [
            [
                'image' => 'assets/img/promo/IMG_1336.webp',
                'title' => 'Promo Kemerdekaan',
                'description' => 'Lorem Ipsum Dolor si amet',
                'active' => true
            ],
            [
                'image' => 'assets/img/promo/IMG_1329.webp',
                'title' => 'Promo Kemerdekaan',
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

        $this->managers = [
            [
                'name' => 'ARYA',
                'position' => 'Marketing Executive',
                'image' => 'assets/img/managerial/ARYA.webp',
                'wa' => '6281234567890',
            ],
            [
                'name' => 'FIRA',
                'position' => 'Marketing Executive',
                'image' => 'assets/img/managerial/FIRA.webp',
                'wa' => '6281234567890',
            ],
            [
                'name' => 'SANTI',
                'position' => 'Marketing Executive',
                'image' => 'assets/img/managerial/SANTI.webp',
                'wa' => '6281234567890',
            ],
            [
                'name' => 'TINA',
                'position' => 'Marketing Executive',
                'image' => 'assets/img/managerial/TINA.webp',
                'wa' => '6281234567890',
            ],
        ];
    }
    //
    public function index()
    {
        $products = $this->products;
        $promo = $this->promo;
        $articles = $this->articles;
        return view('welcome', compact('products', 'promo', 'articles'));
    }

    public function about()
    {
        $products = $this->products;
        return view('about');
    }

    public function contact()
    {
        $managers = $this->managers;
        return view('contact', compact('managers'));
    }

    public function article()
    {
        $products = $this->products;
        $articles = $this->articles;
        return view('article.article', compact('articles'));
    }
}
