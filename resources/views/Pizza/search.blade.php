@extends('layouts.app')

@section('title', 'Search Pizza')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-0 text-center">Search Pizza</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('pizza.search') }}" method="GET">
                       <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="query">Pizza Name</label>
                            <input type="text" class="form-control" id="query" name="query" value="{{ old('query', $query ?? '') }}">
                        </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="categoryname">Category</label>
                            <select class="form-control" id="categoryname" name="categoryname">
                                <option value="">Select a Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->cname }}" {{ old('categoryname', $categoryName) == $category->cname ? 'selected' : '' }}>
                                        {{ $category->cname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="vegetarian">Vegetarian</label>
                            <select class="form-control" id="vegetarian" name="vegetarian">
                                <option value="">All</option>
                                <option value="1" {{ old('vegetarian', $isVegetarian) == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('vegetarian', $isVegetarian) == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        </div>



                       </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    @if(isset($pizzas) && $pizzas->count())
                        <table class="table table-striped table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>Pizza Name</th>
                                    <th>Category Name</th>
                                    <th>Vegetarian</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pizzas as $pizza)
                                    <tr>
                                        <td>{{ $pizza->pname }}</td>
                                        <td>{{ $pizza->category->cname }}</td>
                                        <td>{{ $pizza->vegetarian ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <a href="{{ route('pizza.edit', ['pname' => $pizza->pname]) }}" class="text-primary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('pizza.delete', ['pname' => $pizza->pname]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this pizza?');">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Exibir o total de resultados --}}
                        <div class="mt-3">
                            Total results: {{ $pizzas->total() }}
                        </div>

                        {{-- Links de paginação --}}
                        <div class="d-flex justify-content-center mt-3">
                            {{ $pizzas->links() }} <!-- Centralizar a paginação -->
                        </div>
                    @else
                        <div class="alert alert-warning mt-3">
                            No pizzas found for your search query.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
