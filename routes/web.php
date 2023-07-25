<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\backend\PostController;

use App\Http\Controllers\backend\BWorkController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\BlogPostController;
use App\Http\Controllers\frontend\FrontWorkController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\dashboard\DashboardController;

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


// Work route 


Route::get('/portfolio', function () {
    return view('frontend.portfolio.index');
})->name('portfolio-page');

Route::get('/work', function () {
    return view('frontend/work');
})->name('work-page');

Route::get('/work', [FrontWorkController::class, 'index'])->name('work-page');
Route::get('/work/{work}', [FrontWorkController::class, 'show'])->name('work.show');





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

        // testimonial
        Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
        Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
        Route::get('/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
        Route::get('/testimonial/{id}/delete', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
        Route::put('/testimonial/{id}/update', [TestimonialController::class, 'update'])->name('testimonial.update');
        // category
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category.delete');

        //portfolio
        Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
        Route::get('/portfolioo/create', [PortfolioController::class, 'create'])->name('portfolio.create');
        Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::put('/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


        //work
        Route::get('/work', [BWorkController::class, 'index'])->name('work.index');
        Route::get('/work/create', [BWorkController::class, 'create'])->name('work.create');
        Route::post('/work/store', [BWorkController::class, 'store'])->name('work.store');
        Route::get('/work/{id}/edit', [BWorkController::class, 'edit'])->name('work.edit');
        Route::put('/work/{id}/update', [BWorkController::class, 'update'])->name('work.update');
        Route::get('/work/{id}/delete', [BWorkController::class, 'destroy'])->name('work.destroy');

       
    });


    // logout
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

   


