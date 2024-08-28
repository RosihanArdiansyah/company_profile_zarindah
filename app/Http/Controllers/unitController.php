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
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\bulukkumba\Logo\pzb1.png',
                'title' => 'Bukukkumba',
                'slug' => 'bukukkumba',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\gowa\logo\zarindah mas.png',
                'title' => 'Gowa',
                'slug' => 'gowa',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\pare-pare\PAREPARE-2022.png',
                'title' => 'Pare-pare',
                'slug' => 'pare-pare',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Belopa',
                'slug' => 'belopa',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\mamuju\logo\gz.png',
                'title' => 'Mamuju',
                'slug' => 'mamuju',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\maros\maros.png',
                'title' => 'Maros',
                'slug' => 'maros',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\bogor\Logo\bci.png',
                'title' => 'Bogor',
                'slug' => 'bogor',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\sengkang\gsz.png',
                'title' => 'Sengkang',
                'slug' => 'sengkang',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Bandung',
                'slug' => 'bandung',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets/img/placeholder.jpg',
                'title' => 'Gorontalo',
                'slug' => 'gorontalo',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\kendari\gzk1.png',
                'title' => 'Kendari',
                'slug' => 'kendari',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\malili\zarindah puncak.png',
                'title' => 'Malili',
                'slug' => 'malili',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
            ],
            [
                'image' => 'assets\img\produk\palopo\gjp.png',
                'title' => 'Palopo',
                'slug' => 'palopo',
                'description' => 'Lorem Ipsum Dolor si amet',
                'type' => [
                    [
                        'name' => 'type 1',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 2',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                    [
                        'name' => 'type 3',
                        'image' => 'assets/img/placeholder.jpg'
                    ],
                ],
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid',
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
