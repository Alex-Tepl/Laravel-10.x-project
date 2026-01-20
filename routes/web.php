<?php

//use App\Http\Controllers\MainController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\Admin\ProductController;

use App\Http\Middleware;

//use App\Http\Controllers\Admin\PostController;

use App\Http\Middleware\VerifyCsrfToken;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/*
Route::get('/', function () {
	
    return view('welcome');
});
*/



Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/test', [HomeController::class, 'test'])->name('home.test');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');




Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');          //->withoutMiddleware(VerifyCsrfToken::class)









//Route::post('/store', [HomeController::class, 'store'])->withoutMiddleware(VerifyCsrfToken::class);

//Route::post('/update', [HomeController::class, 'update'])->withoutMiddleware(VerifyCsrfToken::class);


/*
Route::prefix('admin')->name('admin.')->group(function(){
	
	//Route::resource('products', ProductController::class);
	
	Route::get('/products', [ProductController::class, 'index'])->name('products.index');
	
	Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
	
	Route::post('/products', [ProductController::class, 'store'])->name('products.store')->withoutMiddleware(VerifyCsrfToken::class);
	
	Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
	
	Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
	
	Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->withoutMiddleware(VerifyCsrfToken::class);
	
	Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->withoutMiddleware(VerifyCsrfToken::class);
	
	
	
	
	Route::resource('posts', PostController::class);
	
	//Route::resource('posts', PostController::class)->only(['index', 'show']);
	
	//Route::resource('posts', PostController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);  //krome tex kotorie pere4islil
	
	
});
*/


/*
Route::get('/', [MainController::class, 'index']);

Route::prefix('admin')->group(function(){
	
	Route::get('/', function(){

		return 'Admin main page';
	});

	Route::get('/posts', function(){

		return 'Admin posts page';

	});

	Route::get('/posts/{id}', function($id){
	
		return "Admin post {$id}";

	});
	
});
*/



/* 
Route::fallback(function(){
	
	abort(404, '404 - Page not found!!!');
	
	return response()->json(['answer' => '404-PageNotFound'], 404);
	return response('Page not found', 404);
	
	return 'Fallback page!';
	
});
*/

/*
Route::get('/admin', function(){
	
	return 'Admin main page';
});

Route::get('/admin/posts', function(){

	return 'Admin posts page';

});

Route::get('/admin/posts/{id}', function($id){
	
	return "Admin post {$id}";

});
*/






/*
Route::get('/', function () {
	
	return view('hi', ['title' => 'Main page']);
});
*/


//Route::view('/', 'test.hi', ['title' => 'Main page']);


/*
Route::get('/posts', function(){
	
	return "Posts page";
});


Route::get('/posts/{id}', function($id){
	
	return "Post ID: {$id}";
});

Route::get('/posts/contact', function(){
	
	return "Post Contact";
	
});

Route::get('/posts/{slug}', function($slug){
	
	return "Post SLUG: {$slug}";
	
});

Route::get('/search/{search}', function($search){
	
	return "Searching: {$search}";
	
})->where(['search' => '.*']);

Route::post('posts', function(){
	
	return 'Store post';
	
})->withoutMiddleware(VerifyCsrfToken::class);
*/


/*Route::match(['get', 'post'], '/get-post', function(){
	
	return 'Hello from GET|POST';
	
})->withoutMiddleware(VerifyCsrfToken::class);*/


/*
Route::any('/get-post', function(){
	
	return 'Hello from ANY METHOD';
	
})->withoutMiddleware(VerifyCsrfToken::class);

Route::redirect('/here', 'get-post', 301);
*/


/*
Route::get('/posts/{id}', function($id){
	
	return "Post ID: {$id}";
	
})->where(['id' => '[0-9]+']);
*/
?>