@extends('home.home_master')

@section('home')
  <div class="container">
    <h1 class="text-center shadow-md mt-3" style="font-size:50px;">All Orders</h1>

    <br>
    <br>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <table class="table text-center table-table-bordered table-striped">
          <tr>
            <th>Product Title</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Payment Status</th>
            <th>Delivery Status</th>
            <th>Image</th>
            <th>Cancel</th>
          </tr>
          @foreach($order as $order)
          <tr>
            <td> {{$order->product_title}} </td>
            <td> {{$order->quantity}} </td>
            <td> {{$order->price}} </td>
            <td> {{$order->payment_status}} </td>
            <td> {{$order->delivery_status}} </td>
            <td>
              <img src="/ProductImage/{{$order->image}}" style="width:50px;" alt="" class="">
            </td>
            <td>
              @if($order->delivery_status == 'Processing')
              <a href="{{url('cancel_order',$order->id)}}" class="btn" style="background: #D12053; color:#fff;" onclick="return confirm('Are you sure to cancel it?')">Cancel Order</a>
              @else
              <p class="">Not Allowed</p>
              @endif
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
