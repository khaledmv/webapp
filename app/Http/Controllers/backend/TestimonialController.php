<?php

namespace App\Http\Controllers\backend;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\TestiRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()

    {
        $reviews = Testimonial::orderBy('created_at', 'desc')->get();
        
        return view('backend.testimonial.index', compact('reviews'));

    }


    
    public function create()
    {  

        return view('backend.testimonial.create');
    }


    public function store(TestiRequest $request)
    {

       $review = new Testimonial();

        // $post->save();
        // $request['slug'] = Str::slug($request['slug'], '-');

       $review->name = $request->name;
       $review->tagline  = $request->tagline;
       $review->review =$request->review; 


        if($request->hasfile('image')){

         $destination = 'assets/img/testimonials/' . $review->image;

         if(File::exists($destination)){
             File::delete($destination);
         }
         $file = $request->file('image');
         $extenstion = $file->getClientOriginalExtension();
         $fileName = time(). '.' . $extenstion;

         $file->move('assets/img/testimonials/', $fileName);

         $review->image = $fileName;
       }

        $review->save();
               
        return redirect()->route('testimonial.index')->with('succes', 'Testimonial Create Succesfully');
    }


    public function edit($id)
    {
        $review = Testimonial::find($id);
     
        return view('backend.testimonial.edit', compact('review'));

    }


    public function update(Request $request, $id)
    {       
  
           $request->validate([
            'name'        => 'required',
            'tagline'     => 'required',
            'review'      => 'required',
            'image'        => 'mimes:jpg,jpeg,bmp,png',
           ]);

           $review = Testimonial::find($id);

           
            $review->name = $request->name;
            $review->tagline  = $request->tagline;
            $review->review =$request->review; 
      

           if($request->hasfile('image')){

            $destination = 'assets/img/testimonials/' . $review->image;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extenstion;
   
            $file->move('assets/img/testimonials/', $fileName);
   
            $review->image = $fileName;
          }

 
        $review->update();
  
        return redirect()->route('testimonial.index')->with('message', "Testimonial updated successfully");

    }



    public function destroy($id){

        $review = Testimonial::find($id);
        $destination = 'assets/img/testimonials/' . $review->image;
        if(File::exists($destination)){
            File::delete($destination);
        }

           $review->delete();
           return redirect()->route('testimonial.index')->with('message', "Reveiw Deleted successfully");
  }



}
