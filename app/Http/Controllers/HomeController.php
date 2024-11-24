<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\MyOrders;
use App\Models\Order;
use App\Models\Pizza;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

  public function index()
  {
    if (Auth::user()->role != 'admin') {
      return redirect()->route("home.user");
    }
    // Pedidos por Mês
    $ordersByMonth = Order::selectRaw("MONTH(taken) as month, YEAR(taken) as year, COUNT(*) as count")
      ->groupByRaw("MONTH(taken), YEAR(taken)")
      ->orderByRaw("YEAR(taken), MONTH(taken)")
      ->get();

    $monthlyLabels = $ordersByMonth->map(function ($item) {
      return $item->month . '/' . $item->year; // Formato "Mês/Ano"
    });
    $monthlyData = $ordersByMonth->pluck('count');

    // Pizzas Mais Vendidas
    $pizzasSold = Order::selectRaw("pizzaname, COUNT(*) as count")
      ->groupByRaw("pizzaname")
      ->orderByRaw("count DESC")
      ->take(5)
      ->get();

    $pizzasSoldLabels = $pizzasSold->pluck('pizzaname');
    $pizzasSoldData = $pizzasSold->pluck('count');

    // Categorias Mais Vendidas
    $categoriesSold = Order::join('pizza', 'order.pizzaname', '=', 'pizza.pname')
      ->selectRaw("pizza.categoryname, COUNT(*) as count")
      ->groupByRaw("pizza.categoryname")
      ->orderByRaw("count DESC")
      ->take(5)
      ->get();

    $categoriesSoldLabels = $categoriesSold->pluck('categoryname');
    $categoriesSoldData = $categoriesSold->pluck('count');

    return view('home', [
      'monthlyLabels' => $monthlyLabels,
      'monthlyData' => $monthlyData,
      'pizzasSoldLabels' => $pizzasSoldLabels,
      'pizzasSoldData' => $pizzasSoldData,
      'categoriesSoldLabels' => $categoriesSoldLabels,
      'categoriesSoldData' => $categoriesSoldData,
    ]);
  }
  function homeUser()
  {
    $category = Category::all();
    $pizzas = Pizza::paginate(10); // Paginação para 10 itens por página
    $userId = Auth::id();
    $sessionId = Session::getId();

    $mycart = Cart::where(function ($query) use ($userId, $sessionId) {
      if ($userId) {
        $query->where('user_id', $userId);
      } else {
        $query->where('session', $sessionId);
      }
    })->get();
    return view("HomeUser", compact('category', 'pizzas', 'mycart'));
  }
  function login()
  {
    return view("login");
  }
  function register()
  {
    return view("Register");
  }

  function auth(Request $request)
  {
    $request->validate([
      'username' => 'required|string',
      'password' => 'required|string',
    ]);

    if (Auth::check()) {
      $userId = Auth::id();
      $sessionId = null;
    } else {
      $sessionId = Session::getId();
      $userId = null;
    }

    if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {

      return redirect()->route('home');
    }
    else {
      return redirect()->route('login');
    }
  }

  function signup(Request $request)
  {

    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|unique:users,email',
      'password' => 'required|string|min:6',
    ]);


    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect()->route('home');
  }
  public function welcome()
  {
    $category = Category::all();
    $pizzas = Pizza::paginate(10);
    if (Auth::check()) {

      $userId = Auth::id();
      $sessionId = null;
    } else {

      $sessionId = Session::getId();
      $userId = null;
    }
    $mycart = Cart::where(function ($query) use ($userId, $sessionId) {
      if ($userId) {
        $query->where('user_id', $userId);
      } else {
        $query->where('session', $sessionId);
      }
    })->get();

    if (Auth::check()) {
      return redirect()->route("home");
    }
    return view('welcome', compact('category', 'pizzas', 'mycart'));
  }
  function mycart()  {
    $orders = Order::join('my_orders', 'order.id', '=', 'my_orders.order_id')
    ->select('order.*')->where("my_orders.user_id",Auth::id())
    ->paginate(20);

    return view("my_ordes",compact('orders'));

  }
}

//
