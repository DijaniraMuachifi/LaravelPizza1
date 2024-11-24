@extends('layouts.app')

@section('title', 'List of Pizza')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center"> <!-- Alinha ao centro -->
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="m-0 text-center">Order List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Pizza Name</th>
                                    <th>Amount</th>
                                    <th>Taken</th>
                                    <th>dispatched</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->pizzaname }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->taken }}</td>
                                        <td>{{ $order->dispatched }}</td>
                                        <td>
                                            <a href="{{ route('order.edit', ['order_id' => $order->id]) }}"
                                                class="text-primary" title="Edit">
                                                <i class="fas fa-edit"></i> <!-- Edit Icon -->
                                            </a>
                                            <form action="{{ route('order.destroy', ['order_id' => $order->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger" title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this Order?');">
                                                    <i class="fas fa-trash-alt"></i> <!-- Delete Icon -->
                                                </button>
                                            </form>
                                        </td>
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
