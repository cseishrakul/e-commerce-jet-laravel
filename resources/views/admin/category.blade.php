@extends('admin.home_master')

@section('admin')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="container">
        <h1 class="text-center" style="font-size:26px;">Add Category</h1>
        <br>
        <hr>
        <br>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="{{url('add_category')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" name="name" placeholder="Category Name" class="form-control bg-light text-dark">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Category Slug</label>
                    <input type="text" name="slug" placeholder="Category Slug" class="form-control bg-light text-dark">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="description" rows="3" class="form-control bg-light text-dark"></textarea>
                </div>
              </div>
              <div class="col-md-5">
                <label for="">Status</label>
                <input type="checkbox" name="status" value="">
              </div>
              <div class="col-md-4">
                <label for="">Popular</label>
                <input type="checkbox" name="popular" value="">
              </div>

              <div class="col-md-12">
                <label for="">Meta Title</label>
                <textarea name="meta_title" rows="3" class="form-control bg-light text-dark"></textarea>
              </div><br>
              <div class="col-md-12">
                <label for="">Meta Description</label>
                <textarea name="meta_description" rows="3" class="form-control bg-light text-dark"></textarea>
              </div><br>
              <div class="col-md-12">
                <label for="">Meta Keyword</label>
                <textarea name="meta_keyword" rows="3" class="form-control bg-light text-dark"></textarea>
              </div><br>
              <div class="col-md-12">
                <label for="">Image</label>
                <input type="file" name="image">
              </div> <br>

              <input type="submit" value="Add Category" class="btn btn-primary mb-2">
            </form>
          </div>
        </div>
        <hr>
        <br>

      </div>
    </div>
  </div>
@endsection
