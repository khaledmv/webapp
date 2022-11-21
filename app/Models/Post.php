<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
// use GrahamCampbell\Markdown\Facades\Markdown;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'excerpt','image', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
            return $this->belongsToMany(Tag::class);
    }

    // get image url 

    public function getImageUrlAttribute($value)
    {
     $imageUrl = "";
      if(!is_null($this->image))
      {
        $imagePath = public_path() . "/assets/img/blog/" . $this->image;
        if(file_exists($imagePath)) $imageUrl = asset("assets/img/blog/" . $this->image);
      }
      return $imageUrl;
    }

    public function getRouteKeyName()
      {
            return 'slug';
      }

    public function getPostBodyAttribute($value){
      return $this->body ?  Markdown::convert($this->body)->getContent() : NULL;
    }

    public function getPostExcerptAttribute($value){
      return $this->excerpt ?  Markdown::convert($this->excerpt)->getContent() : NULL;
    }

    
}
