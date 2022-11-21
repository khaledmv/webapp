<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\dashboard\BlogPostController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\DashboardController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BlogController::class, 'blogHomePage'])->name('home-page');


Route::get('/contact', function () {
    return view('frontend/contact');
})->name('contact-page');



Route::get('/blog', [BlogController::class, 'index'])->name('blog-page');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/blog/category/{category}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/tag/{tag}', [BlogController::class, 'tag'])->name('blog.tag');

Route::get('/work', function () {
    return view('frontend/work');
})->name('work-page');




//========================= Backend Route



    
  

// Route::middleware(['prefix' => 'admin','auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//             Route::get('/dashboard', 
//             function () {
//                 return view('backend/dashboard');
//             })->name('dashboard');

      
//         Route::get('/contact', [ContactController::class, 'index'])->name('admin-contact');
//         Route::post('/contact/form', [ContactController::class, 'contactForm'])->name('contact.form');
//         Route::get('/post', [PostController::class, 'index'])->name('postList');

// });

// logout 

    Route::group(['prefix' => 'dashboard', 'middleware' => ['auth:sanctum',config('jetstream.auth_session'),'verified']], function(){
        Route::get('/', 
        function () {
            return view('backend/dashboard');
        })->name('dashboard');

        Route::get('/contact', [ContactController::class, 'index'])->name('admin-contact');
        Route::get('/contact/form/{id}/view', [ContactController::class, 'show'])->name('contact.show');
        Route::get('/contact/form/{id}/delete', [ContactController::class, 'delete'])->name('contact.delete');

        Route::get('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter');
        Route::get('/newsletter/email/{id}/delete', [ContactController::class, 'deleteNewsletter'])->name('newsletter.delete');

        Route::get('/tags', [PostController::class, 'tags'])->name('tags');
        Route::get('/newsletter/tags/{id}/delete', [PostController::class, 'deleteTag'])->name('tag.delete');

        Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
        Route::get('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::put('/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');

        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category.delete');
       
    });


    // logout
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

   


