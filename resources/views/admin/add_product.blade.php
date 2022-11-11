@extends('admin.home_master');

@section('admin')
  <div class="main-panel">
    <div class="content-wrapper">
      <h1 class="text-center">Add Product</h1>
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="{{url('plus_product')}}" method="post" enctype="multipart/form-data" class="">
            @csrf
            <div class="form-group">
              <label for="">Product Title</label>
              <input type="text" name="title" class="form-control bg-light text-dark">
            </div>
            <div class="form-group">
              <label for="">Product Description</label>
              <input type="text" name="description" class="form-control bg-light text-dark">
            </div>
            <div class="form-group">
              <label for="">Product Category</label>
              <select class="text-dark" name="category">
                <option value="">Select Category</option>
                @foreach($category as $category)
                  <option value="{{$category->name}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Product Quantity</label>
              <input type="number" name="quantity" class="form-control bg-light text-dark">
            </div>
            <div class="form-group">
              <label for="">Product Image</label>
              <input type="file" name="image">
            </div>
            <div class="form-group">
              <label for="">Product Price</label>
              <input type="text" name="price" class="form-control bg-light text-dark">
            </div>
            <div class="form-group">
              <label for="">Product Discount Price</label>
              <input type="text" name="discount_price" class="form-control bg-light text-dark">
            </div>
            <input type="submit" value="Add Product" class="btn btn-danger">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
