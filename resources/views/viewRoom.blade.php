@extends('layout.noBanner')
<style>

    #bookButton-wrapper{
        margin-top: 50px;
    }
</style>
@section('main')
 <!-- Main Container -->
 <div class="container mt-5 pt-3">

    <!-- Section: product details -->
    <section id="productDetails" class="pb-5">

      <!-- News card -->
      <div class="card mt-5 hoverable">

        <div class="row mt-5">

          <div class="col-lg-7">

            <div class="row mx-2">

              <!-- Carousel Wrapper -->
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails pb-2"
                data-ride="carousel">

                <!-- Slides -->
                <div class="carousel-inner text-center text-md-left" role="listbox">

                  <div class="carousel-item active">

                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/299103371.jpg?k=04c39a1c71e7afed57dbb4205f7ff55b3c93c9bc578570d61e5cbe8dd8c59ea8&o=&hp=1" alt="First slide"
                      class="img-fluid">

                  </div>

                  <div class="carousel-item">

                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/299103382.jpg?k=0834cb159e77882f961a1941f0020dee7ae6209adf51ed4850ae944ad88bbe4e&o=&hp=1"
                      alt="Second slide" class="img-fluid">

                  </div>

                  <div class="carousel-item">

                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/299103383.jpg?k=720b7b5b52b4d81d8f800773984b7f6f62572bdf12fa97c2d28c2ef87fd068f9&o=&hp=1"
                      alt="Third slide" class="img-fluid">

                  </div>

                </div>
                <!-- Slides -->

                <!-- Thumbnails -->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">

                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                  <span class="sr-only">Previous</span>

                </a>

                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">

                  <span class="carousel-control-next-icon" aria-hidden="true"></span>

                  <span class="sr-only">Next</span>

                </a>
                <!-- Thumbnails -->

              </div>
              <!-- Carousel Wrapper -->

            </div>

            <!-- Grid row -->
            <div class="row mb-4">

              <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox no-margin">

                  <!-- Grid column -->
                  <figure class="col-md-4">


                      <!-- Thumbnail -->
                      <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/299103371.jpg?k=04c39a1c71e7afed57dbb4205f7ff55b3c93c9bc578570d61e5cbe8dd8c59ea8&o=&hp=1"
                        class="img-fluid">

                    </a>

                  </figure>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <figure class="col-md-4">


                      <!-- Thumbnail -->
                      <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/299103382.jpg?k=0834cb159e77882f961a1941f0020dee7ae6209adf51ed4850ae944ad88bbe4e&o=&hp=1"
                        class="img-fluid">

                    </a>

                  </figure>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <figure class="col-md-4">



                      <!-- Thumbnail -->
                      <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/299103383.jpg?k=720b7b5b52b4d81d8f800773984b7f6f62572bdf12fa97c2d28c2ef87fd068f9&o=&hp=1"
                        class="img-fluid">

                    </a>

                  </figure>
                  <!-- Grid column -->

                </div>

              </div>

            </div>
            <!-- Grid row -->

          </div>

          <div class="col-lg-4 mr-3 text-center text-md-left">

            <h2
              class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">

              <strong> ROOM WITH TERRACE</strong>

            </h2>


            </strong>

            </h2>


            <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">

              <span class="blue-text font-weight-bold">

                <strong>Php 100.00</strong>

              </span>


            </h3>

            <p class="ml-xl-0 ml-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque
              nemo neque ut officiis

              nostrum incidunt maiores, magni optio et sunt suscipit iusto nisi totam quis, nobis mollitia

              necessitatibus.

            </p>


            <p class="ml-xl-0 ml-4">

              <strong>Capacity: </strong>2 - 3 persons</p>

            <p class="ml-xl-0 ml-4">

                <strong>Type: </strong>Dorm</p>

            <p class="ml-xl-0 ml-4">

              <strong>Availability: </strong>Available</p>

            <!-- Add to Cart -->
            <section class="color">

              <div class="mt-5">

                <div class="row mt-3 mb-4">

                  <div class="col-md-12 text-center text-md-left text-md-right" id="bookButton-wrapper">

                    <a class="btn btn-primary btn-rounded" href="/reservation">
                      <i class="fas fa-book mr-2" aria-hidden="true"></i> Book A Room
                    </a>

                  </div>

                </div>

              </div>

            </section>
            <!-- Add to Cart -->

          </div>

        </div>

      </div>
      <!-- News card -->

    </section>


    <!-- Product Reviews -->
    <section id="reviews" class="pb-5 mt-4">

      <hr>

      <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">

        <strong>Room Reviews</strong>

      </h4>

      <hr class="mb-5">

      <!-- Main wrapper -->
      <div class="comments-list text-center text-md-left">

        <!-- First row -->
        <div class="row mb-5">

          <!-- Image column -->
          <div class="col-sm-2 col-12 mb-3">

            <img src="{{ asset('img/admin.png') }}" alt="sample image"
              class="avatar rounded-circle z-depth-1-half">

          </div>
          <!-- Image column -->

          <!-- Content column -->
          <div class="col-sm-10 col-12">

            <a>

              <h5 class="user-name font-weight-bold">John Doe</h5>

            </a>

            <!-- Rating -->
            <ul class="rating">

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

            </ul>

            <div class="card-data">

              <ul class="list-unstyled mb-1">

                <li class="comment-date font-small grey-text">

                  <i class="far fa-clock-o"></i> 05/10/2015</li>

              </ul>

            </div>

            <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo

              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat

              nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

          </div>
          <!-- Content column -->

        </div>
        <!-- First row -->

        <!-- Second row -->
        <div class="row mb-5">

          <!-- Image column -->
          <div class="col-sm-2 col-12 mb-3">

            <img src="{{ asset('img/admin.png') }}" alt="sample image"
              class="avatar rounded-circle z-depth-1-half">

          </div>
          <!-- Image column -->

          <!-- Content column -->
          <div class="col-sm-10 col-12">

            <a>

              <h5 class="user-name font-weight-bold">Lily Brown</h5>

            </a>

            <!-- Rating -->
            <ul class="rating">

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

            </ul>

            <div class="card-data">

              <ul class="list-unstyled mb-1">

                <li class="comment-date font-small grey-text">

                  <i class="far fa-clock-o"></i> 05/10/2015</li>

              </ul>

            </div>

            <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo

              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat

              nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

          </div>
          <!-- Content column -->

        </div>
        <!-- Second row -->

        <!-- Third row -->
        <div class="row mb-5">

          <!-- Image column -->
          <div class="col-sm-2 col-12 mb-3">

            <img src="{{ asset('img/admin.png') }}" alt="sample image"
              class="avatar rounded-circle z-depth-1-half">

          </div>
          <!-- Image column -->

          <!-- Content column -->
          <div class="col-sm-10 col-12">

            <a>

              <h5 class="user-name font-weight-bold">Martha Smith</h5>

            </a>

            <!-- Rating -->
            <ul class="rating">

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

            </ul>

            <div class="card-data">

              <ul class="list-unstyled mb-1">

                <li class="comment-date font-small grey-text">

                  <i class="far fa-clock-o"></i> 05/10/2015</li>

              </ul>

            </div>

            <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo

              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat

              nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

          </div>
          <!-- Content column -->

        </div>
        <!-- Third row -->

      </div>
      <!-- Main wrapper -->

    </section>
    <!-- Product Reviews -->

    <!-- Section: Products v.5 -->
    <section id="products" class="pb-5 mt-4">

      <hr>

      <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">

        <strong>Related Rooms</strong>

      </h4>

      <hr class="mb-5">

      <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Fugit, error amet numquam iure provident voluptate

        esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

      <!-- Carousel Wrapper -->
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!-- Controls -->
        <div class="controls-top">

          <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">

            <i class="fas fa-chevron-left"></i>

          </a>

          <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">

            <i class="fas fa-chevron-right"></i>

          </a>

        </div>
        <!-- Controls -->

        <!-- Indicators -->
        <ol class="carousel-indicators">

          <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>

          <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>

          <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>

        </ol>
        <!-- Indicators -->

        <!-- Slides -->
        <div class="carousel-inner" role="listbox">

          <!-- First slide -->
          <div class="carousel-item active">

            <div class="col-md-4 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 1</a>

                    </strong>

                  </h5>



                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>


                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 2</a>

                    </strong>

                </h5>


                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>


                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 3</a>

                    </strong>

                  </h5>



                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>


                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

          </div>
          <!-- First slide -->

          <!-- Second slide -->
          <div class="carousel-item">

            <div class="col-md-4 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 4</a>

                    </strong>

                  </h5>




                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>


                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 5</a>

                    </strong>

                  </h5>



                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>



                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 6</a>

                    </strong>

                  </h5>


                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>


                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

          </div>
          <!-- Second slide -->

          <!-- Third slide -->
          <div class="carousel-item">

            <div class="col-md-4 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 7</a>

                    </strong>

                  </h5>



                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>



                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 8</a>

                    </strong>

                  </h5>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>


                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('img/sample.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Room 9</a>

                    </strong>

                  </h5>


                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <a href="{{ route('view.room') }}">
                            <strong>Check Details</strong>
                        </a>

                      </span>



                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

          </div>
          <!-- Third slide -->

        </div>
        <!-- Slides -->

      </div>
      <!-- Carousel Wrapper -->

    </section>
    <!-- Section: Products v.5 -->

  </div>
  <!-- Main Container -->
@endsection
