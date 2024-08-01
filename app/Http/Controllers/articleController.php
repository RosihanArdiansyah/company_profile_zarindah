<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    //
    public function index()
    {
        $articles = [
            [
                'title' => 'Article 1',
                'image' => 'article1.jpg',
                'description' => 'Description of article 1',
                'date' => date('Y-m-d'),
                'slug' => 'article1'
            ],
            [
                'title' => 'Article 2',
                'image' => 'article2.jpg',
                'description' => 'Description of article 2',
                'date' => date('Y-m-d'),
                'slug' => 'article2'
            ],
            [
                'title' => 'Article 3',
                'image' => 'article3.jpg',
                'description' => 'Description of article 3',
                'date' => date('Y-m-d'),
                'slug' => 'article3'
            ],
            [
                'title' => 'Article 4',
                'image' => 'article4.jpg',
                'description' => 'Description of article 3',
                'date' => date('Y-m-d'),
                'slug' => 'article4'
            ]
        ];

        return view('article.article', compact('articles'));
    }

    public function show($slug)
    {
        $articles = [
            [
                'title' => 'Article 1',
                'image' => 'article1.jpg',
                'description' => 'Description of article 1',
                'date' => date('Y-m-d'),
                'slug' => 'article1'
            ],
            [
                'title' => 'Article 2',
                'image' => 'article2.jpg',
                'description' => 'Description of article 2',
                'date' => date('Y-m-d'),
                'slug' => 'article2'
            ],
            [
                'title' => 'Article 3',
                'image' => 'article3.jpg',
                'description' => 'Description of article 3',
                'date' => date('Y-m-d'),
                'slug' => 'article3'
            ],
            [
                'title' => 'Article 4',
                'image' => 'article4.jpg',
                'description' => 'Description of article 3',
                'date' => date('Y-m-d'),
                'slug' => 'article4'
            ]
        ];
        return view('article.sub-article.article_content', compact('articles'), ['slug' => $slug]);
    }
}
