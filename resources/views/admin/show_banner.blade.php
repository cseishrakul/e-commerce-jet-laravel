@extends('admin.home_master')

@section('admin')
  <div class="main-panel">
    <div class="content-wrapper">
      <h2 class="text-center" style="font-size:26px;">Show Banner</h2>
      <br>
      <table class="table text-light text-center">
        <tr>
          <th>Header</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        @foreach($banner as $banner)
          <tr>
            <td> {{$banner->header}} </td>
            <td>
              <img src="/BannerImage/{{$banner->image}}" alt="" class="mx-auto" style="width:100px; height:100px;">
            </td>
            <td>
              <a href="{{url('/edit',$banner->id)}}" class="btn btn-info">Edit</a>
              <a href="{{url('/delete_banner',$banner->id)}}" class="btn btn-danger">delete</a>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
