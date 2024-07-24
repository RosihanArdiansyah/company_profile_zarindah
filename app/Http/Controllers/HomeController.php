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
                'title' => 'Cookies',
                'description' => 'Crispy texture because it is baked at high temperature plus chocochips to make the taste sweet.',
                'price' => 'IDR 30.000'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Croissant',
                'description' => 'Crispy texture on the outside and soft on the inside, filled with butter which makes it taste delicious, perfect for breakfast',
                'price' => 'IDR 20.000'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Baguette',
                'description' => 'Bread that is elongated in shape and has a hard skin texture but is soft inside, elongated like a stick, usually served sliced and spread with butter and garlic.',
                'price' => 'IDR 40.000'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Pretzel',
                'description' => 'The taste of pretzels is generally savory or slightly sweet. The texture of the pretzels is usually soft and tender. Generally, pretzels are served with a sprinkling of coarse salt.',
                'price' => 'IDR 25.000'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Sourdough',
                'description' => 'This easy-to-digest bread goes well with butter and garlic, the texture is dense and fibrous and the taste is slightly sour.',
                'price' => 'IDR 50.000'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Donuts',
                'description' => 'Soft Bread Texture Covered with sweet Chocolate and also sprinkled with nuts and has other flavors.',
                'price' => 'IDR 20.000'
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Muffin',
                'description' => 'The texture is soft with vanilla cream filling on top and also sprinkled with cocoa powder and choco chips.',
                'price' => 'IDR 20.000'
            ],
        ];
        $promo = [
            [
                'image' => 'assets/img/footer-bg.png',
                'title' => 'Our-Company',
                'description' => 'Delivering relevant, agile yet simple technological solutions for financial services providers',
                'active' => true
            ],
            [
                'image' => 'assets/img/slider-2.jpg',
                'title' => 'Our-Company',
                'description' => 'Delivering relevant technologies for our times',
                'active' => false
            ],
            [
                'image' => 'assets/img/covid.jpg',
                'title' => 'We are in this together.',
                'description' => 'Our Organisation is committed on taking recommendations from the health authorities, WHO (World Health Organisation) and our local authority. Our company is committed to follow the guidelines which includes, refraining from non-essential travelling, self-isolation upon return from any affected areas, social distancing, wearing of musk’s and use of hand sanitizer.',
                'active' => false
            ],
        ];

        return view('welcome', compact('products','promo'));
    }
}
