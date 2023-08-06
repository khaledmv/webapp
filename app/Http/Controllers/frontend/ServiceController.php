<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // webdesign 

    public function webdesign(){
        return view('frontend.services.webdesign');
    }


    // SEO

    public function seo(){
        return view('frontend.services.seo');
    }

    // Social media management 

    public function smm(){
        return view('frontend.services.smm');
    }

    // wordpress development  

    public function wpDevelopment(){
        return view('frontend.services.wp');
    }
    // shopify development

    public function shopifyDevelopment(){
        return view('frontend.services.shopify');
    }
}
