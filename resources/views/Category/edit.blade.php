@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center"> <!-- Alinha ao centro -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="m-0 text-center">Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <!-- Verificação de erros -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('category.update', ['cname' => $category->cname]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="cname">Category Name</label>
                                <input type="text" id="cname" name="cname" class="form-control" value="{{ old('cname', $category->cname) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control" value="{{ old('price', $category->price) }}" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-dark">Update Category</button>
                                <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
