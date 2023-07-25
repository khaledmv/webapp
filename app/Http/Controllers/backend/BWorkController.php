<?php

namespace App\Http\Controllers\backend;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BWorkController extends Controller
{
    public function index(){
        
        $works = Work::all();
        return view('backend.work.index', compact('works'));
      
    }

    public function create(){

        return view('backend.work.create');
    }
   
    public function store(WorkRequest $request){

        $work = new Work();
        $work->title = $request->title;
        $work->excerpt = $request->excerpt;

    
        // work image
        if($request->hasfile('workImage')){

            $destination = 'assets/img/work/' . $work->workImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('workImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'w.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->workImage = $fileName;
          }

        // brand image
        if($request->hasfile('brandImage')){

            $destination = 'assets/img/work/' . $work->brandImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('brandImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'b.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->brandImage = $fileName;
          }

          $work->techTitle = $request->techTitle;
          $work->body = $request->body;
 
   
          
        // result image1
        if($request->hasfile('resultImage1')){

            $destination = 'assets/img/work/' . $work->resultImage1;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('resultImage1');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'r.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->resultImage1 = $fileName;
          }
        // result image2
        if($request->hasfile('resultImage2')){

            $destination = 'assets/img/work/' . $work->resultImage2;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('resultImage2');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'r2.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->resultImage2 = $fileName;
          }
        // font image
        if($request->hasfile('fontImage')){

            $destination = 'assets/img/work/' . $work->fontImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('fontImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'f.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->fontImage = $fileName;
          }

        // clor image
        if($request->hasfile('colorImage')){

            $destination = 'assets/img/work/' . $work->colorImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('colorImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'c.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->colorImage = $fileName;
          }

          $work->save();
               
        return redirect()->route('work.index')->with('succes', 'Work Created Succesfully');

    }


    public function edit($id)
    {
        $work = Work::find($id);
     
        return view('backend.work.edit', compact('work'));

    }


    public function update(WorkRequest $request, $id){

        $work = Work::find($id);
        $work->title = $request->title;
        $work->excerpt = $request->excerpt;

    
        // work image
        if($request->hasfile('workImage')){

            $destination = 'assets/img/work/' . $work->workImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('workImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'w.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->workImage = $fileName;
          }

        // brand image
        if($request->hasfile('brandImage')){

            $destination = 'assets/img/work/' . $work->brandImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('brandImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'b.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->brandImage = $fileName;
          }

          $work->techTitle = $request->techTitle;
          $work->body = $request->body;
 
   
          
        // result image1
        if($request->hasfile('resultImage1')){

            $destination = 'assets/img/work/' . $work->resultImage1;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('resultImage1');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'r.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->resultImage1 = $fileName;
          }
        // result image2
        if($request->hasfile('resultImage2')){

            $destination = 'assets/img/work/' . $work->resultImage2;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('resultImage2');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'r2.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->resultImage2 = $fileName;
          }
        // font image
        if($request->hasfile('fontImage')){

            $destination = 'assets/img/work/' . $work->fontImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('fontImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'f.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->fontImage = $fileName;
          }

        // clor image
        if($request->hasfile('colorImage')){

            $destination = 'assets/img/work/' . $work->colorImage;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('colorImage');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). 'c.' . $extenstion;
   
            $file->move('assets/img/work/', $fileName);
   
            $work->colorImage = $fileName;
          }

          $work->update();
               
        return redirect()->route('work.index')->with('succes', 'Work updated Succesfully');

    }


    public function destroy($id){

        $work = Work::find($id);

        $workimage = 'assets/img/work/' . $work->workImage;
        if(File::exists($workimage)){
            File::delete($workimage);
        }

        $brandImage = 'assets/img/work/' . $work->brandImage;
        if(File::exists($brandImage)){
            File::delete($brandImage);
        }
        $resultImage1 = 'assets/img/work/' . $work->resultImage1;
        if(File::exists($resultImage1)){
            File::delete($resultImage1);
        }
        $resultImage2 = 'assets/img/work/' . $work->resultImage2;
        if(File::exists($resultImage2)){
            File::delete($resultImage2);
        }
      
        $fontImage = 'assets/img/work/' . $work->fontImage;
        if(File::exists($fontImage)){
            File::delete($fontImage);
        }
    
        $colorImage = 'assets/img/work/' . $work->colorImage;
        if(File::exists($colorImage)){
            File::delete($colorImage);
        }
           $work->delete();
           return redirect()->route('work.index')->with('message', "Work Deleted successfully");
    }
}
