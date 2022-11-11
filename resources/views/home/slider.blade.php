<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach($slider as $slider)
      <div class="container">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-6 slider-text">
                <h2 class="text-dark my-3">
                  Order <span class="ligthen">Online,</span> Save Your <br> <span class="ligthen">Time</span>
                </h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="" class="btn btn-order-now mt-3">Order Now <i class="bi bi-arrow-right"></i></a>
              </div>
              <div class="col-lg-6 slider-img">
                <img src="/SliderImage/{{$slider->image}}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
