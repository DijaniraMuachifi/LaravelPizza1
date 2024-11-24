<?php

namespace App\Http\Controllers;

use App\Models\MyOrders;
use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  // Listar todos os pedidos com paginação
  public function index()
  {
    $orders = Order::paginate(20); // Paginação de 20 por página
    return view('orders.List', compact('orders'));
  }
  public function dispatch()
  {
    $orders = Order::join('my_orders', 'order.id', '=', 'my_orders.order_id')
      ->select('order.*')->where("order.dispatched", null)
      ->paginate(20);
    return view('orders.dispachet', compact('orders'));
  }



  public function edit($order_id)
  {
    $order = Order::where('id', $order_id)->firstOrFail();
    return view('orders.edit', compact('order'));
  }
  public function new()
  {
    $pizzas = Pizza::all();
    return view('orders.New', compact('pizzas'));
  }

  public function update(Request $request, $order_number)
  {
    $request->validate([
      'pizzaname' => 'required|string|max:255',
      'amount' => 'required|string|max:255',
      'taken' => 'required',
      'dispatched' => 'required'
    ]);

    $order = Order::where('id', $order_number)->firstOrFail();
    $order->update($request->all());

    return redirect()->route('order.index')->with('success', 'Order updated successfully.');
  }
  public function add(Request $request)
  {
    $validatedData = $request->validate([
      'pizzaname' => 'required|string|max:255',
      'amount' => 'required|string|max:255',
    ]);

    $order = Order::create([
      'pizzaname' => $validatedData['pizzaname'],
      'amount' => $validatedData['amount'],
      'taken' => now(),
      'dispatched' => null,
    ]);

    if ($order) {
      return redirect()->route('order.index')->with('success', 'Order created successfully.');
    } else {
      return redirect()->route('order.index')->with('error', 'Order error.');
    }
  }


  public function destroy($order_number)
  {
    $order = Order::where('id', $order_number)->firstOrFail();
    $order->delete();
    $or = MyOrders::where("order_id", $order_number)->delete();

    return redirect()->route('order.index')->with('success', 'Order deleted successfully.');
  }
}
