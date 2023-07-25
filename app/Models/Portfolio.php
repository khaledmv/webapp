<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'para', 'buttonText', 'image1'];


    public function getImageUrlAttribute($value)
    {
     $imageUrl = "";
      if(!is_null($this->image1))
      {
        $imagePath = public_path() . "/assets/img/portfolio/" . $this->image1;
        if(file_exists($imagePath)) $imageUrl = asset("assets/img/portfolio/" . $this->image1);
      }
      return $imageUrl;
    }


}
