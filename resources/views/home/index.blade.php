@extends('home.home_master')

@section('home')
<!-- Slider -->
  @include('home.slider')
<!-- End Slider -->

  <!-- Product Category -->
    <section class="category-product">
      <div class="container">
        <div class="section-title text-center">
          <h2 class="my-3" style="font-size:38px;font-weight:bold">Category Product</h2>
          <p class="text-muted mb-3">Lorem Ipsum is simply dummy text of the printing.</p>
        </div>
         <div class="owl-carousel owl-theme">
           @foreach($category as $category)
            <div class="item">
              <a href="{{url('view-category/'.$category->slug)}}" class="">
                <div class="card tr_product">
                  <div class="card-body">
                    <img src="/CategoryImage/{{$category->image}}" class="img-fluid mx-auto my-3" style="width:150px;height:150px;" alt="">
                    <h5 class="text-center mb-4"> {{$category->name}} </h5>
                    <h5 class="text-center mb-4"> {{$category->description}} </h5>
                    <a href="{{url('view-category/'.$category->slug)}}" class="view-all-btn mt-3">View All <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- End Product Category -->
    <!-- Banner -->
    <section class="banner">
      <div class="container">
        <div class="row">
          @foreach($banner as $banner)
          <div class="col-lg-6">
            <div class="item d-flex shadow-md">
              <div class="text">
                <h2 class="my-3" style="font-size:45px;font-weight:bold;color:#D12053"> {{$banner->header}} </h2>
                <p class="mb-3"> {{$banner->details}} </p>
                <a href="" class="order-now-btn mt-5">Order Now</a>
              </div>
              <img src="/BannerImage/{{$banner->image}}" alt="" class="mt-4">
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Banner -->

    <!-- latest-product -->
    <section class="latest-product">
      <div class="container">
        <h2 class="shadow-md" style="font-size:50px">Latest Product</h2>

        <div class="row mt-4">
          @foreach($product as $products)
          <div class="col-lg-3">
            <div class="card border-0 shadow-lg">
              <div class="card-body text-center">
                <img src="/ProductImage/{{$products->image}}" style="" alt="" class="mx-auto">
                <h2 class="product-name">
                  <a href="" class="">{{$products->title}}</a>
                </h2>
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
                  <h6 class="">Price {{$products->price}} Tk.</h6>
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
    <!-- End latest-product -->
    <!-- mostSell-product -->
    <section class="latest-product">
      <div class="container">
        <h2 class="shadow-md" style="font-size:50px">Most Sell Product</h2>

        <div class="row mt-4">
        @foreach($product as $product)
        <div class="col-lg-3">
          <div class="card border-0 shadow-lg">
            <div class="card-body text-center">
              <img src="/ProductImage/{{$product->image}}" alt="" class="mx-auto">
              <h2 class="product-name">
                <a href="" class="">{{$product->title}}</a>
              </h2>
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
                <a href="{{url('product_details',$product->id)}}" class="add-to-cart-btn mx-auto">
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
    <!-- End mostSell-product -->

    <!-- Promotion Banner -->
    <section class="banner position-relative">
      <div class="container">
        <img src="{{'home/assets/images/banner.jpg'}}" alt="" class="w-100">
        <h1 class="promo-title" style="">Order Online Save Your Time</h1>
      </div>
    </section>
    <!-- End Promotion Banner -->



@endsection
