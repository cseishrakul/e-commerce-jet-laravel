@extends('admin.home_master')

@section('admin')
<div class="content-wrapper">
  <div class="main-panel">
    <div class="container">
      <h1 class="text-center" style="font-size:26px;">Banner Details</h1>
      <hr>
      <br>
      <br>
      <div class="row">
        <div class="col-md-7 mx-auto">
          <form action="{{url('/update_banner',$banner->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="" class="">Banner Header</label>
              <input type="text" name="header" class="form-control bg-light text-dark" value="{{$banner->header}}">
            </div>
            <div class="form-group">
              <label for="" class="">Banner Details</label>
              <input type="text" value="{{$banner->details}}" class="bg-ligth text-dark" name="details">
            </div>
            <div class="form-group">
              <label for="">Current Image</label>
              <img src="/BannerImage/{{$banner->image}}" alt="" class="" width="250px; height:100px;">
            </div>
            <div class="form-group">
              <label for="" class="">Banner Image</label>
              <input type="file" name="image">
            </div>
            <input type="submit" value="Update Banner" class="btn btn-warning">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
