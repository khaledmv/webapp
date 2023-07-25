<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'tagline', 'image', 'review'];


      // get image url 

      public function getImageUrlAttribute($value)
      {
       $imageUrl = "";
        if(!is_null($this->image))
        {
          $imagePath = public_path() . "/assets/img/testimonials/" . $this->image;
          if(file_exists($imagePath)) $imageUrl = asset("assets/img/testimonials/" . $this->image);
        }
        return $imageUrl;
      }
}
