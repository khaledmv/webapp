<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'excerpt','workImage','brandImage','techTitle','body','resultImage1','resultImage2','fontImage','colorImage'];


    // work image 
    public function getWorkImgAttribute($value)
    {
     $imageUrl = "";
      if(!is_null($this->workImage))
      {
        $imagePath = public_path() . "/assets/img/work/" . $this->workImage;
        if(file_exists($imagePath)) $imageUrl = asset("assets/img/work/" . $this->workImage);
      }
      return $imageUrl;
    }


    // brand image 
    public function getBrandImgAttribute($value)
    {
     $imageUrl = "";
      if(!is_null($this->brandImage))
      {
        $imagePath = public_path() . "/assets/img/work/" . $this->brandImage;
        if(file_exists($imagePath)) $imageUrl = asset("assets/img/work/" . $this->brandImage);
      }
      return $imageUrl;
    }


      // brand resultImage1 
      public function getResult1ImgAttribute($value)
      {
       $imageUrl = "";
        if(!is_null($this->resultImage1))
        {
          $imagePath = public_path() . "/assets/img/work/" . $this->resultImage1;
          if(file_exists($imagePath)) $imageUrl = asset("assets/img/work/" . $this->resultImage1);
        }
        return $imageUrl;
      }


        // brand resultImage2 
        public function getResult2ImgAttribute($value)
        {
         $imageUrl = "";
          if(!is_null($this->resultImage2))
          {
            $imagePath = public_path() . "/assets/img/work/" . $this->resultImage2;
            if(file_exists($imagePath)) $imageUrl = asset("assets/img/work/" . $this->resultImage2);
          }
          return $imageUrl;
        }
  
        // brand fontimage  
        public function getFontImgAttribute($value)
        {
         $imageUrl = "";
          if(!is_null($this->fontImage))
          {
            $imagePath = public_path() . "/assets/img/work/" . $this->fontImage;
            if(file_exists($imagePath)) $imageUrl = asset("assets/img/work/" . $this->fontImage);
          }
          return $imageUrl;
        }


        // brand colorImage  
        public function getColorImgAttribute($value)
        {
         $imageUrl = "";
          if(!is_null($this->colorImage))
          {
            $imagePath = public_path() . "/assets/img/work/" . $this->colorImage;
            if(file_exists($imagePath)) $imageUrl = asset("assets/img/work/" . $this->colorImage);
          }
          return $imageUrl;
        }
  

    
}
