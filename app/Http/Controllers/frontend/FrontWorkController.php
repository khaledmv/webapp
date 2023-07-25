<?php

namespace App\Http\Controllers\frontend;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class FrontWorkController extends Controller
{
    public function index(){

        SEOMeta::setTitle('Web design portfolio');
        SEOMeta::setDescription("See webaiid web design portfolio");
        SEOMeta::setCanonical('https://webaiid.com/blog/');

        OpenGraph::setDescription('See webaiid web design portfolio');
        OpenGraph::setTitle('Webaiid web design portfolio');
        OpenGraph::setUrl('https://webaiid.com/blog/');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Web design portfolio');
        TwitterCard::setSite('@webaiid');

        JsonLd::setTitle('Web design portfolio');
        JsonLd::setDescription('See webaiid web design portfolio');
        JsonLd::addImage('https://webaiid.com/assets/img/webaiidlogo.png');
      
        $works = Work::orderBy('created_at', 'desc')->get();
        return view('frontend/work', compact('works'));
   }



   public function show($id){
    $work = Work::find($id);
    SEOMeta::setTitle($work->title);
    SEOMeta::setDescription($work->excerpt);
    SEOMeta::addMeta('article:section', $work->category, 'property');
    SEOMeta::addKeyword(['webaiid', 'webaid', 'shopify', 'web design', 'shopify agency', 'web design agency']);
    OpenGraph::setDescription($work->excerpt);
    OpenGraph::setTitle($work->title);
    OpenGraph::setUrl('https://webaiid.com/');
    OpenGraph::addProperty('type', 'article');
    OpenGraph::addProperty('locale', 'pt-br');
    OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
    JsonLd::setTitle($work->title);
    JsonLd::setDescription($work->excerpt);
    JsonLd::setType('Article');
    

    return view('frontend.portfolio.show', compact('work'));

   }
}
