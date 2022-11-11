@extends('home.home_master')

@section('home')
  <div class="container">
    <h1 class="text-center p-3 shadow-md" style="font-size:45px;">All Products</h1>
    <div class="row my-5">
      <div class="col-md-3">
        <h2 class="text-center text-light p-4" style="background: #D12053;">All Category</h2>
        @foreach($category as $category)
        <ul class="nav flex-column">
         <li class="nav-item text-center">
           <a href="{{url('view-category/'.$category->slug)}}" target="_blank" style="border-bottom:1px solid #969696;" class="nav-link text-dark"> {{$category->name}} </a>
         </li>
       </ul>
       @endforeach
      </div>

      <div class="col-md-9">
        <div class="row">
          @foreach($product as $product)
          <div class="col-lg-4 my-2">
            <div class="card border-0 shadow-lg">
              <div class="card-body text-center">
                <img src="/ProductImage/{{$product->image}}" height="100px;" width="100px;" alt="" class="mx-auto">
                <h2 class="product-name">
                  <a href="" class="">{{$product->title}}</a>
                </h2>
                <div class="rating my-3">
                  <i class="bi bi-star-fill"style="color: #D12053;"></i>
                  <i class="bi bi-star-fill"style="color: #D12053;"></i>
                  <i class="bi bi-star-fill"style="color: #D12053;"></i>
                  <i class="bi bi-star-fill"style="color: #D12053;"></i>
                  <i class="bi bi-star-fill"style="color: #D12053;"></i>
                </div>
                @if($product->discount_price != null)
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="text-danger">Discount Price <br>{{$product->discount_price}} Tk.</h6>
                    </div>
                    <div class="col-md-6">
                      <h6 style="text-decoration:line-through">Price {{$product->price}} Tk.</h6>
                    </div>
                  </div>
                @else
                  <h6 class="">{{$product->price}} Tk.</h6>
                @endif
                <div class="btn d-flex justify-content-between align-items-center">
                  <a href="{{url('product_details',$product->id)}}" class="add-to-cart-btn btn" style="background: #D12053;color:#fff;">
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
    </div>
  </div>
@endsection
