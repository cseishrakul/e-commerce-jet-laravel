@extends('home.home_master')

@section('home')
  <div class="container mb-5 pb-5">
    <h1 class="text-center my-4 shadow-md" style="font-size:50px;">Cart Iteams</h1>
    <div class="row mt-4">
      <div class="col-md-7 mx-auto">
        <table class="table text-center table-bordered">
          <tr>
            <th>Product Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
          <?php $totalPrice = 0; ?>
          @foreach($cart as $cart)
            <tr>
              <td> {{$cart->product_title}} </td>
              <td> {{$cart->price}} </td>
              <td> {{$cart->quantity}} </td>
              <td>
                <img src="/ProductImage/{{$cart->image}}" style="width:80px;" alt="" class="">
              </td>
              <td>
                <a href="{{url('/remove_cart',$cart->id)}}" class="btn" style="background: #D12053; color:#fff;">Remove</a>
              </td>
            </tr>
            <?php $totalPrice = $totalPrice + $cart->price ?>
          @endforeach
        </table>
        <div class="text-right">
          <h1 class="">Total Price: <b>{{$totalPrice}} Tk.</b></h1>
        </div>
        <br>
        <div class="text-right">
          <h1 class=""><b>Payment Method</b></h1>
          <a href="{{url('/cash_on_delivery')}}" class="btn" style="background: #D12053; color:#fff;">Cash On Delivery</a>
        </div>
      </div>
    </div>
  </div>
@endsection
