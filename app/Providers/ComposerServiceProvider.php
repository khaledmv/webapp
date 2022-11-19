<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.partial.sidebar', function($view){
            $posts = Post::orderBy('created_at', 'desc')->paginate(4);
            return $view->with('posts', $posts);

        });

        view()->composer('frontend.partial.sidebar', function($view){
            $categories = Category::with('posts')->orderBy('title', 'asc')->get();
            return $view->with('categories', $categories);

        });

        view()->composer('frontend.partial.sidebar', function($view){
            $tags = Tag::all();
            return $view->with('tags', $tags); 

        });
    }
}
