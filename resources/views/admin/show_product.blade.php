@extends('admin.home_master')

@section('admin')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="container">
        <h1 class="text-center">All Product</h1>
        <hr>
        <br>
        <br>
        <table class="table text-light">
          <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
          @foreach($product as $product)
            <tr>
              <td>{{$product->title}}</td>
              <td>{{$product->category}}</td>
              <td>{{$product->quantity}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->discount_price}}</td>
              <td>
                <img src="/ProductImage/{{$product->image}}" style="width:80px; height:100px;" alt="" class="">
              </td>
              <td>
                <a href="{{url('update',$product->id)}}" class="btn btn-info">Edit</a>
                <a href="{{url('delete_product',$product->id)}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
