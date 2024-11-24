@extends('layouts.app')

@section('title', 'My cart')

@section('content')

<!-- Checkout -->
<div class="container pt-5 mt-5">
    <h2>Checkout</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mycart as $item)
            <tr>
                <td>{{ $item->pizzaname }}</td>
                <td>{{ $item->amount }}</td>
                <td>${{ number_format($item->price, 2) }}</td>
                <td>${{ number_format($item->price * $item->amount, 2) }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" class="text-right"><strong>Grand Total</strong></td>
                <td><strong>${{ number_format($total, 2) }}</strong></td>
            </tr>
        </tbody>
    </table>

    <form action="{{ route('my_orders') }}" method="POST">
      @csrf
        <button type="submit" class="btn btn-success">Confirm Payment</button>
    </form>
</div>

@endsection
