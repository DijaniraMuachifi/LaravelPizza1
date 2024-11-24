@extends('layouts.app')

@section('title', 'Add New Category')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-0 text-center">Add New Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="cname">Category Name</label>
                            <input type="text" class="form-control @error('cname') is-invalid @enderror" id="cname" name="cname" value="{{ old('cname') }}" required>
                            @error('cname')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
