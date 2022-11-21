<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $limit = 5;

    // Show all blog post
    public function index(){

  
        $posts = Post::with('category')->orderBy('created_at', 'desc');

        // check search term

        if($search = request('search')){
           
            $posts->where(function($q) use ($search){
                $q->orWhere('title', 'LIKE', "%{$search}%");
                $q->orWhere('excerpt', 'LIKE', "%{$search}%");
            });
        }
        
        $posts = $posts->simplePaginate($this->limit);

        return view('frontend.blog',  compact('posts'));
    }



    public function category(Category $category){

        $posts = $category->posts()->orderBy('created_at', 'desc')->simplePaginate($this->limit);
        return view('frontend.blog',  compact('posts'));

    }

    public function tag(Tag $tag){
       
        $posts = $tag->posts()->orderBy('created_at', 'desc')->simplePaginate($this->limit);
        return view('frontend.blog',  compact('posts'));
    }
    
    public function show(Post $post){
        // $post = $post->with('category');
        return view('frontend.single-blog', compact('post'));
    }
}
