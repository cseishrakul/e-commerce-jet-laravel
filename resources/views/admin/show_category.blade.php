@extends('admin.home_master')

@section('admin')
  <div class="main-panel">
    <div class="content-wrapper">
      <h2 class="text-center" style="font-size:26px">Categories</h2>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-12">
          <table class="table text-light text-light">
            <tr>
              <th>Category Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th>Status</th>
              <th>Popular</th>
              <th>Meta Title</th>
              <th>Meta Desctiption</th>
              <th>Meta Keyword</th>
              <th>Category Image</th>
              <th>Action</th>
            </tr>
            @foreach($category as $category)
              <tr>
                <td> {{$category->name}} </td>
                <td> {{$category->slug}} </td>
                <td> {{$category->description}} </td>
                <td> {{$category->status}} </td>
                <td> {{$category->popular}} </td>
                <td> {{$category->meta_title}} </td>
                <td> {{$category->meta_description}} </td>
                <td> {{$category->meta_keyword}} </td>
                <td>
                  <img src="/CategoryImage/{{$category->image}}" alt="" class="mx-auto" style="width:50px; height:50px;">
                </td>
                <td>
                  <a href="" class="btn btn-info">Edit</a>
                  <a href="{{url('category_delete',$category->id)}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
