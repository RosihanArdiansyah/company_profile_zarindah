<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    protected $article;
    //

    public function __construct()
    {
        $this->article = [
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
    public function index()
    {
        
        $articles = $this->article;
        return view('article.article', compact('articles'));
    }

    public function show($slug)
    {
        // Filter the articles array to find the one that matches the slug
        $articles = array_filter($this->article, function ($article) use ($slug) {
            return $article['slug'] === $slug;
        });

        // Since array_filter returns an array, we'll reset the array pointer and take the first element
        $article = reset($articles);

        // Return the view with the filtered article
        return view('article.sub-article.article_content', compact('article'), ['slug' => $slug]);
    }

}
