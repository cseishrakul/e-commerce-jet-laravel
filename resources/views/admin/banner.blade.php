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
            <form action="/add_banner" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="" class="">Banner Header</label>
                <input type="text" name="header" class="form-control bg-light text-dark">
              </div>
              <div class="form-group">
                <label for="" class="">Banner Details</label>
                <textarea name="details" class="bg-light text-dark" rows="8" cols="80"></textarea>
              </div>
              <div class="form-group">
                <label for="" class="">Banner Image</label>
                <input type="file" name="image">
              </div>
              <input type="submit" value="Add Banner" class="btn btn-warning">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
