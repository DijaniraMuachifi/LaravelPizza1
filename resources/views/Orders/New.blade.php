@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="text-center mb-4 mt-5">New Order</h1>

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
                    <form action="{{ route('order.add') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="pizzaname" class="form-label">Pizza Name</label>
                            <select class="form-control" id="pizzaname" name="pizzaname" required>
                              @foreach ($pizzas as $item)
                                  <option value="{{$item['pname']}}">{{$item['pname']}}</option>
                              @endforeach
                            </select>

                        </div>

                        <div class="form-group mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Add Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
