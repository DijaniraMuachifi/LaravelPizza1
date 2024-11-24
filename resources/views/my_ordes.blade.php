@extends('layouts.app')

@section('title', 'My Order')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center"> <!-- Alinha ao centro -->
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="m-0 text-center">My Order</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Pizza Name</th>
                                    <th>Amount</th>
                                    <th>Taken</th>
                                    <th>dispatched</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->pizzaname }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->taken }}</td>
                                        <td>{{ $order->dispatched }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Links de paginação --}}
                        <div class="d-flex justify-content-center mt-3">
                            {{ $orders->links('vendor.pagination.bootstrap-4') }} <!-- Centralizar a paginação -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
