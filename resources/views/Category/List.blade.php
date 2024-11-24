@extends('layouts.app')

@section('title', 'List of Category')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center"> <!-- Alinha ao centro -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="m-0 text-center">Category List</h4>
                    </div>
                    <div class="card-body">

                        {{-- Mensagens de erro ou sucesso --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->cname }}</td>
                                        <td>${{ number_format($category->price, 2) }}</td> <!-- Formatação do preço -->
                                        <td>
                                            <a href="{{ route('category.edit', ['cname' => $category->cname]) }}"
                                                class="text-primary" title="Edit">
                                                <i class="fas fa-edit"></i> <!-- Edit Icon -->
                                            </a>
                                            <form action="{{ route('category.delete', ['cname' => $category->cname]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger" title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this category?');">
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
                            {{ $categories->links('vendor.pagination.bootstrap-4') }} <!-- Centralizar a paginação -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
