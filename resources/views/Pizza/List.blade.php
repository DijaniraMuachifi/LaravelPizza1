@extends('layouts.app')

@section('title', 'List of Pizzas')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <div class="col-md-8">
            <h4 class="text-center">Pizzas List</h4>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{ route('pizza.create') }}" class="btn btn-primary">Add New Pizza</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Vegetarian</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizzas as $pizza)
                                <tr>
                                    <td>{{ $pizza->pname }}</td>
                                    <td>{{ $pizza->categoryname }}</td>
                                    <td>{{ $pizza->vegetarian ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a href="{{ route('pizza.edit', ['pname' => $pizza->pname]) }}" class="text-primary" title="Edit">
                                            <i class="fas fa-edit"></i> <!-- Edit Icon -->
                                        </a>
                                        <form action="{{ route('pizza.delete', ['pname' => $pizza->pname]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this pizza?');">
                                                <i class="fas fa-trash-alt"></i> <!-- Delete Icon -->
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $pizzas->links('vendor.pagination.bootstrap-4') }} <!-- Links de paginação -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
