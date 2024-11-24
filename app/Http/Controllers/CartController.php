<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MyOrders;
use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{



  public function addToCart(Request $request, $pizzaId)
  {
    // Obtém os detalhes da pizza
    $pizza = Pizza::where("pname", $pizzaId)->first(); // Mudei para buscar pelo ID

    // Verifica se o usuário está logado
    if (Auth::check()) {
      // Se o usuário está logado, armazena o ID do usuário
      $userId = Auth::id();
      $sessionId = null; // Não usamos sessão para usuários logados
    } else {
      // Se não está logado, armazena uma sessão única
      $sessionId = Session::getId(); // Obtém o ID da sessão atual
      $userId = null; // Não armazenamos ID do usuário
    }

    // Verifica se a pizza já existe no carrinho
    $cartItem = Cart::where('pizzaname', $pizza->pname)
      ->where(function ($query) use ($userId, $sessionId) {
        if ($userId) {
          $query->where('user_id', $userId);
        } else {
          $query->where('session', $sessionId);
        }
      })->first();

    if ($cartItem) {
      // Se a pizza já existe, aumenta a quantidade
      $cartItem->amount += 1; // Aumenta a quantidade em 1
      $cartItem->save(); // Salva a atualização
    } else {
      // Adiciona ao carrinho
      Cart::create([
        'user_id' => $userId, // Armazena ID do usuário logado ou null
        'session' => $sessionId, // Armazena o ID da sessão para usuários não logados
        'pizzaname' => $pizza->pname,
        'amount' => 1, // A quantidade padrão é 1
        'price' => $pizza->category->price // Ou qualquer outro valor que você tenha
      ]);
    }

    return redirect()->route('welcome')->with('success', 'Pizza adicionada ao carrinho!');
  }

  public function createOrder(Request $request) {
   
    if (!Auth::check()) {

        return redirect()->route('register')->with('error', 'You need to be logged in to complete the purchase. Please register or log in.');
    }


    $userId = Auth::id();


    $cartItems = Cart::where('user_id', $userId)->get();

    foreach ($cartItems as $cart) {


       $or= Order::create([
          'pizzaname' => $cart->pizzaname,
          'amount' => $cart->amount,
          'taken' => now(),
        ]);
        MyOrders::create(
          [
            "user_id"=>Auth::id(),
            "order_id"=>$or->id
          ] );
    }


    Cart::where('user_id', $userId)->delete();

    return redirect()->route('mycart')->with('success', 'success full!');
}


  public function transferToOrder()
  {
    // Obtém os itens do carrinho do usuário autenticado
    $carts = Cart::where('user_id', Auth::id())->get();

    foreach ($carts as $cart) {
      Order::create([
        'pizzaname' => $cart->pizzaname,
        'amount' => $cart->amount,
        'taken' => now(), // Armazena o tempo atual como 'taken'
        // 'dispatched' pode ser definido quando o pedido for enviado
      ]);
    }

    // Limpa o carrinho após a transferência
    Cart::where('user_id', Auth::id())->delete();

    return redirect()->route('orders.index')->with('success', 'Pedido realizado com sucesso!');
  }

  function view()
  {
    if (Auth::check()) {
      $userId = Auth::id();
      $sessionId = Session::getId();
      $mycart = Cart::where('user_id', $userId)->orWhere('session', $sessionId)->get();
    } else {
      $sessionId = Session::getId();
      $mycart=Cart::where('session', $sessionId)->get();
    }





    $total = $mycart->sum(function ($item) {
      return $item->price * $item->amount;
    });
    return view("mycart", compact("mycart", "total"));
  }
}
