@extends('home.home_master')

@section('home')
<section class="latest-product">
  <div class="container">
    <h2 class="my-3 shadow-md" style="font-size:50px;font-weight:bold">{{$category->name}}</h2>

    <div class="row mt-4">
      @foreach($product as $products)
      <div class="col-lg-3 my-2">
        <div class="card border-0 shadow-lg">
          <div class="card-body text-center">
            <img src="/ProductImage/{{$products->image}}" alt="" class="mx-auto">
            <h2 class="product-name">
              <a href="" class="">{{$products->title}}</a>
            </h2>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            @if($products->discount_price != null)
              <div class="row">
                <div class="col-md-6">
                  <h6 class="text-danger">Discount Price <br>{{$products->discount_price}} Tk.</h6>
                </div>
                <div class="col-md-6">
                  <h6 style="text-decoration:line-through">Price {{$products->price}} Tk.</h6>
                </div>
              </div>
            @else
              <h6 class="">{{$products->price}} Tk.</h6>
            @endif
            <div class="btn d-flex justify-content-between align-items-center">
              <a href="{{url('product_details',$products->id)}}" class="add-to-cart-btn mx-auto">
                <i class="bi bi-cart4"></i>Details
              </a>
              <a href="" class="add-to-favorite-btn text-danger">
                <i class="bi bi-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
