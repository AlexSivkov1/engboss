<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/



// маршрут ниже Только для авторизованного пользователя



// выводит все Посты определенной запрошенной категории: с 1)кнопки Меню, 2)с отдельной страницы
/*Route::get('/categories/{id}', 'CategoryController@show')->name('categories.single');*/
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{slug}', 'CategoryController@show')->name('categories.single');

Route::get('/products', 'ProductController@index')->name('products');

Route::get('/products/{slug}', 'ProductController@show')->name('products.single');
Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart/del-item/{product_id}', [\App\Http\Controllers\CartController::class, 'delItem'])->name('cart.del_item');
Route::get('/cart/clear', [\App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
Route::get('/cart/show', [\App\Http\Controllers\CartController::class, 'show'])->name('cart.show');

Route::match(['get', 'post'], 'cart/checkout', [\App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/brands', 'BrandController');
    Route::resource('/products', 'ProductController');
    Route::get('/users', 'UserController@index')->name('users.index');
//    Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('register.create');

    Route::resource('/orders', 'OrderController');
    Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
});

Route::group(['middleware'=> 'guest'], function (){

// ниже 2 маршрута для Регистрации
    Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('register.create');
    Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->name('register.store');
// ниже 3 маршрута для Авторизации
    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');

Route::match(['get', 'post'], '/test', [\App\Http\Controllers\TestController::class, 'testform'])->name('test');
