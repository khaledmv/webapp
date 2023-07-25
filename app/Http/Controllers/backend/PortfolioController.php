<?php

namespace App\Http\Controllers\backend;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function index(){

        $portfolios = Portfolio::all();
        return view('backend.portfolio.index', compact('portfolios'));
      
       
    }

    public function create(){
        return view('backend.portfolio.create');
        // return 'test';
    }
   
    public function store(PortfolioRequest $request){

        $portfolio = new Portfolio();

        $portfolio->title = $request->title;
        $portfolio->para = $request->para;
        $portfolio->buttonText = $request->buttonText;


        
        if($request->hasfile('image1')){

            $destination = 'assets/img/portfolio/' . $portfolio->image1;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image1');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extenstion;
   
            $file->move('assets/img/portfolio/', $fileName);
   
            $portfolio->image1 = $fileName;
          }
     
          $portfolio->save();
               
        return redirect()->route('portfolio.index')->with('succes', 'Potfolio Created Succesfully');

    }


    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
     
        return view('backend.portfolio.edit', compact('portfolio'));

    }

   public function update(PortfolioRequest $request, $id){
    
    $portfolio = Portfolio::find($id);

        $portfolio->title = $request->title;
        $portfolio->para = $request->para;
        $portfolio->buttonText = $request->buttonText;


        
        if($request->hasfile('image1')){

            $destination = 'assets/img/portfolio/' . $portfolio->image1;
   
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image1');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extenstion;
   
            $file->move('assets/img/portfolio/', $fileName);
   
            $portfolio->image1 = $fileName;
          }

          $portfolio->update();
               
        return redirect()->route('portfolio.index')->with('succes', 'Potfolio Updated Succesfully');
   }


   public function destroy($id){

    $portfolio = Portfolio::find($id);
    $destination1 = 'assets/img/portfolio/' . $portfolio->image1;
    if(File::exists($destination1)){
        File::delete($destination1);
    }
  
       $portfolio->delete();
       return redirect()->route('portfolio.index')->with('message', "Portfolio Deleted successfully");
    }



}
