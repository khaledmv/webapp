<?php

namespace App\Http\Controllers\backend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('backend.post.index', compact('posts'));
    }


    public function tags(){
        $tags = Tag::all();

        return view('backend.tags.index', compact('tags'));
    }


    public function create()
    {  
        
        $category = Category::all();
        $tags = Tag::all();
        return view('backend.post.create', compact('category', 'tags'));
    }

    public function store(PostRequest $request)
    {

       $post = new Post();

        // $post->save();
        // $request['slug'] = Str::slug($request['slug'], '-');

       $post->title = $request->title;
       $post->slug  = $request->slug;
       $post->excerpt =$request->excerpt; 
       $post->body =$request->body; 
       $post->category_id =$request->category_id; 

        if($request->hasfile('image')){

         $destination = 'assets/img/blog/' . $post->image;

         if(File::exists($destination)){
             File::delete($destination);
         }
         $file = $request->file('image');
         $extenstion = $file->getClientOriginalExtension();
         $fileName = time(). '.' . $extenstion;

         $file->move('assets/img/blog/', $fileName);

         $post->image = $fileName;
       }

        $post->save();
        $post->createTags($request->post_tags);
               
        return redirect()->route('posts.index')->with('succes', 'Post Create Succesfully');
    }


    public function edit($id)
    {
        $post = Post::find($id);
     
        $category = Category::all();
        return view('backend.post.edit', compact('post','category'));

    }

    
    public function update(Request $request, $id)
    {       
  
           $request->validate([
            'title'        => 'required',
            'slug'         => 'required',
            'excerpt'      => 'required',
            'body'         => 'required',
            'category_id'  => 'required',
            'image'        => 'mimes:jpg,jpeg,bmp,png',
           ]);

           $post = Post::find($id);

           
            $post->title = $request->title;
            $post->slug  = $request->slug;
            $post->excerpt =$request->excerpt; 
            $post->body =$request->body; 
            $post->category_id =$request->category_id; 

           if($request->hasfile('image')){

            $destination = 'assets/img/blog/' . $post->image;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            // $fileName = $file->getClientOriginalName();
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extenstion;
   
            $file->move('assets/img/blog/', $fileName);
   
            $post->image = $fileName;
          }

 
        $post->update();
        $post->createTags($request->post_tags);

        return redirect()->route('posts.index')->with('message', "User updated successfully");

    }


   public function destroy($id){

         $post = Post::find($id);
         $destination = 'assets/img/blog/' . $post->image;
         if(File::exists($destination)){
             File::delete($destination);
         }

            $post->delete();
            return redirect()->route('posts.index')->with('message', "Post Deleted successfully");
   }


   public function deleteTag($id){
    $tag = Tag::find($id);

        $tag->delete();
        return redirect()->route('tags')->with('message', "Tags Deleted successfully");
   }
    
}
