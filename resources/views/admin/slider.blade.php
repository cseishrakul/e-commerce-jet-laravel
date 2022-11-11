@extends('admin.home_master')

@section('admin')
  <div class="content-wrapper">
    <div class="main-panel">
      <div class="container">
        <h2 class="text-center" style="font-size:28px;">Header Slider Image Add</h2>
        <br>
        <hr>
        <div class="row mt-3">
          <div class="col-md-5 mx-auto">
            <form action="{{url('/add_slider')}}" class="form-center" method="post" enctype="multipart/form-data">
              @csrf
              <input type="file" name="image" class="">
              <input type="submit" class="btn btn-info">
            </form>
          </div>
        </div>

        <br><br>
        <div class="row">
          <div class="col-md-5 mx-auto">
            <table class="table text-light">
              <tr>
                <th>Image</th>
                <th>Action</th>
              </tr>
              @foreach($slider as $slider)
              <tr>
                <td>
                  <img src="/SliderImage/{{$slider->image}}" alt="" style="width:130px;height:120px;">
                </td>
                <td>
                  <a href="{{url('/delete',$slider->id)}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
