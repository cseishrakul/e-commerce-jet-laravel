@extends('home.home_master')

@section('home')
  <div class="container mb-5 pb-5">
    <div class="row">
      <div class="col-md-10 mx-auto mt-5">
        <div class="card">
          <div class="card-header">
            <h2 class="" style=" color:#D12053;">{{$product->title}}</h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="/ProductImage/{{$product->image}}" alt="" class="">
              </div>
              <div class="col-md-6 mt-5">
                <h2 class="" style="font-size:22px;"><b>Product Name: </b>{{$product->title}}</h2>
                <h6 class="my-4" style="font-size:17px;">{{$product->description}}</h6>
                <h5 class="my-3" style="font-size:18px;"><b>Category:</b> {{$product->category}}</h5>
                @if($product->discount_price !=null)
                  <h5 class="text-danger" style="font-size:18px;">Discount Price: {{$product->discount_price}} Tk.</h5>
                  <h5 class="" style="font-size:18px;"><b>Price:</b>  <p style="text-decoration:line-through">{{$product->price}} Tk.</p> </h5>
                @else
                <h5 class=""><b>Price:</b> {{$product->price}} Tk.</h5>
                @endif
              </div>
            </div>
          </div>
          <div class="card-footer">
            <form action="{{url('add_to_cart',$product->id)}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-1">
                  <input type="number" name="quantity" value="1" min="1">
                </div>
                <div class="col-md-10">
                  <input type="submit" class="btn btn-outline-danger" value="Add To Cart">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
