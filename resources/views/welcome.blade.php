@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Banner -->
    <div class="banner mt-5">
        <div id="pizzaCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/cover.jpg') }}" alt="Popular Pizza 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/22.jpg') }}" alt="Popular Pizza 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/cover.jpg') }}" alt="Popular Pizza 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#pizzaCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#pizzaCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- Categories -->
    <div class="container-fluid category mt-4" id="categories">
        <h2>Pizza Categories</h2>
        <div class="row">
            @foreach ($category as $item)
                <div class="col-md-3">
                    <div class="category-circle" style="background-color: {{ '#' . substr(md5($item->cname), 0, 6) }};">
                        {{$item->cname}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Pizzas -->
    <div class="container-fluid category mt-4" id="pizzas">
        <h2>Our Pizzas</h2>
        <div class="row">
            @foreach($pizzas as $pizza)
            <div class="col-md-3 my-2">
                <div class="card category-card">
                    <img src="{{ $pizza->image_url }}" class="card-img-top" alt="{{ $pizza->name }}">
                    <div class="card-body">
                        <h5 class="card-title ">{{ $pizza->pname }}</h5>
                        <div class="row mb-2">
                          <div class="col-6">
                            <p class="card-text text-small"><strong>Price:</strong> ${{ $pizza->category->price }}</p>
                          </div>
                          <div class="col-6">
                            <p class="card-text"><strong>Vegan:</strong> {{ $pizza->is_vegan ? 'Yes' : 'No' }}</p>
                          </div>
                        </div>
                        <form action="{{ route('cart.add', ['pizzaId'=>$pizza->pname]) }}" method="post">
                          @csrf
                          <button class="btn btn-success">Add to cart</button>
                        </form>


                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center mt-3">
          {{ $pizzas->links('vendor.pagination.bootstrap-4') }} <!-- Links de paginação -->
      </div>
    </div>


@endsection
