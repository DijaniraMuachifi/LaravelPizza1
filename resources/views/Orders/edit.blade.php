@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="text-center mb-4">Edit Order</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card p-4 shadow-sm">
                    <form action="{{ route('order.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="pizzaname" class="form-label">Pizza Name</label>
                            <input type="text" class="form-control" id="pizzaname" name="pizzaname"
                                value="{{ $order->pizzaname }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount"
                                value="{{ $order->amount }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="taken" class="form-label">Order Date and Time</label>
                            <input type="datetime-local" class="form-control" id="taken" name="taken"
                                value="{{ \Carbon\Carbon::parse($order->taken)->format('Y-m-d\TH:i') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="dispatched" class="form-label">Dispatch Date and Time</label>
                            <input type="datetime-local" class="form-control" id="dispatched" name="dispatched"
                                value="{{ \Carbon\Carbon::parse($order->dispatched)->format('Y-m-d\TH:i') }}" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
