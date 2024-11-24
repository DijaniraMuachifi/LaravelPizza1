<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, "welcome"])->name("welcome");
Route::get('/access-denied', function () {
  return view('noacess');
})->name('access.denied');

Route::get("logout", function () {
  Auth::logout();
  return redirect()->route("welcome");
})->name("logout");
Route::get("login", [HomeController::class, "login"])->name("login");
Route::post("login", [HomeController::class, "auth"])->name("auth");

// REGISTER

Route::get("register", [HomeController::class, "register"])->name("register");
Route::post('register', [HomeController::class, 'signup'])->name('signup');

Route::post('/cart/add/{pizzaId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/order/pay', [CartController::class, 'createOrder'])->name('my_orders');


Route::get('/cart/my', [CartController::class, 'view'])->name('cart.view');

// Auth router
Route::middleware(['auth', 'user'])->group(function () {
  Route::get('my_order', [HomeController::class, 'mycart'])->name("mycart");

  Route::get("home", [HomeController::class, "index"])->name("home");
  Route::get("home/User", [HomeController::class, "homeUser"])->name("home.user");
  //Category
  Route::prefix("Category")->name("category.")->group(function () {
    Route::get("/", [CategoryController::class, "index"])->name("index");
    Route::middleware(['auth', 'admin'])->group(function () {
      Route::get("home", [HomeController::class, "index"])->name("home");
      Route::delete("delete/{cname}", [CategoryController::class, "remove"])->name("delete");
      Route::get("/add", [CategoryController::class, "create"])->name("create");
      Route::post("/store", [CategoryController::class, "store"])->name("store");
      Route::get("edit/{cname}", [CategoryController::class, "edit"])->name("edit");
      Route::put("/update/{cname}", [CategoryController::class, "update"])->name("update");
    });
  });

  //Pizza
  Route::prefix("Pizza")->name("pizza.")->group(function () {
    Route::get("/", [PizzaController::class, "index"])->name("index");
    Route::middleware(['auth', 'admin'])->group(function () {
      Route::get("/add", [PizzaController::class, "create"])->name("create");
      Route::post("/store", [PizzaController::class, "store"])->name("store");
      Route::get("/edit/{pname}", [PizzaController::class, "edit"])->name("edit");
      Route::post("/update/{pname}", [PizzaController::class, "update"])->name("update");
      Route::delete("/delete/{pname}", [PizzaController::class, "destroy"])->name("delete");
    });
    Route::get('/pizza/search', [PizzaController::class, 'search'])->name('search');
  });
  //ORDER
  Route::prefix("Order")->name("order.")->group(function () {
    Route::get("/", [OrderController::class, "index"])->name("index");
    Route::get("/search", [OrderController::class, "search"])->name("search");

    Route::middleware(['auth', 'admin'])->group(function () {
      Route::get("/dispatch", [OrderController::class, "dispatch"])->name("dispatch");
      Route::get("/new", [OrderController::class, "new"])->name("new");
      Route::post("/add", [OrderController::class, "add"])->name("add");
      Route::post("/store", [OrderController::class, "store"])->name("store");
      Route::get("/edit/{order_id}", [OrderController::class, "edit"])->name("edit");
      Route::put("/update/{order_id}", [OrderController::class, "update"])->name("update");
      Route::delete("/delete/{order_id}", [OrderController::class, "destroy"])->name("destroy");
    });
  });
});
