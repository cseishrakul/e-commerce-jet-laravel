@extends('admin.home_master')

@section('admin')
  <div class="main-panel">
    <div class="content-wrapper">
      <h1 class="text-center" style="font-size:30px;">Orders</h1>
      <hr>
      <br>
      <br>
      <div class="row">
        <div class="col-md-12">
          <table class="table text-light">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Product Title</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Payment Status</th>
              <th>Delivery Status</th>
              <th>Delivered</th>
              <th>Print PDF</th>
              <th>Sent Email</th>
            </tr>
            @forelse($order as $order)
            <tr>
              <td> {{$order->name}} </td>
              <td> {{$order->email}} </td>
              <td> {{$order->address}} </td>
              <td> {{$order->phone}} </td>
              <td> {{$order->product_title}} </td>
              <td> {{$order->quantity}} </td>
              <td> {{$order->price}} </td>
              <td> {{$order->payment_status}} </td>
              <td> {{$order->delivery_status}} </td>
              <td>
                @if($order->delivery_status == "Processing")
                <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-info">Delivered</a>
                @else
                <p class="text-success">Delivered</p>
                @endif
              </td>
              <td>
                <a href="{{url('/print_pdf',$order->id)}}" class="btn btn-warning">Print</a>
              </td>
              <td>
                <a href="" class="btn btn-primary">Email</a>
              </td>
            </tr>
            @empty
            <div>
              <p class="">No Data</p>
            </div>
            @endforelse
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
