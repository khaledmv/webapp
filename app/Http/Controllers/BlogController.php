<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class BlogController extends Controller
{
    private $limit = 5;

    // Show all blog post
    public function index(){

        SEOMeta::setTitle('Blogs');
        SEOMeta::setDescription('Need to hire a Shopify Expert? We are official Shopify partners &amp; experts offer Shopify design &amp; development. Get a quote from our Shopify agency today!');
        SEOMeta::setCanonical('https://webaiid.com/blog/');

        OpenGraph::setDescription('Need to hire a Shopify Expert? We are official Shopify partners &amp; experts offer Shopify design &amp; development. Get a quote from our Shopify agency today!');
        OpenGraph::setTitle('Blogs');
        OpenGraph::setUrl('https://webaiid.com/blog/');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Shopify Agency - Webaiid');
        TwitterCard::setSite('@webaiid');

        JsonLd::setTitle('Shopify Agency - Webaiid');
        JsonLd::setDescription('Need to hire a Shopify Expert? We are official Shopify partners &amp; experts offer Shopify design &amp; development. Get a quote from our Shopify agency today!');
        JsonLd::addImage('https://webaiid.com/assets/img/webaiidlogo.png');

  
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


    public function blogHomePage(){

        SEOMeta::setTitle('Shopify Agency');
        SEOMeta::setDescription('Need to hire a Shopify Expert? We are official Shopify partners &amp; experts offer Shopify design &amp; development. Get a quote from our Shopify agency today!');
        SEOMeta::setCanonical('https://webaiid.com/blog/');

        OpenGraph::setDescription('Need to hire a Shopify Expert? We are official Shopify partners &amp; experts offer Shopify design &amp; development. Get a quote from our Shopify agency today!');
        OpenGraph::setTitle('Blog');
        OpenGraph::setUrl('https://webaiid.com/blog/');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Blogs - Webaiid');
        TwitterCard::setSite('@webaiid');

        JsonLd::setTitle('Blogs - Webaiid');
        JsonLd::setDescription('Need to hire a Shopify Expert? We are official Shopify partners &amp; experts offer Shopify design &amp; development. Get a quote from our Shopify agency today!');
        JsonLd::addImage('https://webaiid.com/assets/img/webaiidlogo.png');

        $posts = Post::with('category')->orderBy('created_at', 'desc');
      
        $posts = $posts->simplePaginate(3);

        return view('frontend.home',  compact('posts'));
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

        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($post->excerpt);
        SEOMeta::addMeta('article:section', $post->category, 'property');
        SEOMeta::addKeyword(['shopify', 'webdesign', 'shopify agency', 'webdesign agency']);
        OpenGraph::setDescription($post->excerpt);
        OpenGraph::setTitle($post->title);
        OpenGraph::setUrl('https://webaiid.com/blog/');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
        JsonLd::setTitle($post->title);
        JsonLd::setDescription($post->excerpt);
        JsonLd::setType('Article');
        JsonLd::addImage($post->image);
        return view('frontend.single-blog', compact('post'));
    }
}
