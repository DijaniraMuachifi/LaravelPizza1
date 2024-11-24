@extends('layouts.app')

@section('title', 'Edit Pizza')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-0 text-center">Edit Pizza</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('pizza.update', ['pname' => $pizza->pname]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="pname">Pizza Name</label>
                            <input type="text" class="form-control @error('pname') is-invalid @enderror" id="pname" name="pname" value="{{ old('pname', $pizza->pname) }}" required>
                            @error('pname')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categoryname">Category Name</label>
                            <select class="form-control @error('categoryname') is-invalid @enderror" id="categoryname" name="categoryname" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->cname }}" {{ old('categoryname', $pizza->categoryname) == $category->cname ? 'selected' : '' }}>
                                        {{ $category->cname }}
                                    </option>
                                @endforeach
                            </select>
                            @error('categoryname')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="vegetarian">Vegetarian</label>
                            <select class="form-control @error('vegetarian') is-invalid @enderror" id="vegetarian" name="vegetarian" required>
                                <option value="1" {{ old('vegetarian', $pizza->vegetarian) == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('vegetarian', $pizza->vegetarian) == 0 ? 'selected' : '' }}>No</option>
                            </select>
                            @error('vegetarian')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Pizza</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
