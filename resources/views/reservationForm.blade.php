@extends('layout.noBanner')
<style>
    .container-fluid {
        margin-top: 50px !important;
    }
    .error{
        color: red;
    font-weight: 300;
    font-size: 13px;
    }
    .md-form .validate {
    margin-bottom: 0.5rem !important;
}
</style>
@section('main')
<main>
    <div class="container-fluid">

        <!-- Section: Inputs -->

        <div class="card-body">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 my-5">

                    <!--Card-->
                    <div class="card card-personal mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <!-- Carousel Wrapper -->
                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails  pb-4" data-ride="carousel">

                                <!-- Slides -->
                                <div class="carousel-inner text-center text-md-left" role="listbox">

                                    <div class="carousel-item active">

                                        <img src="{{ asset('img/sample.jpg') }}" alt="First slide" class="img-fluid">

                                    </div>

                                    <div class="carousel-item">

                                        <img src="{{ asset('img/hotel.JPG') }}" alt="Second slide" class="img-fluid">

                                    </div>

                                    <div class="carousel-item">

                                        <img src="{{ asset('img/sample.jpg') }}" alt="Third slide" class="img-fluid">

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
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <a>
                                <h5 class="font-weight-bold text-uppercase">
                                    <strong>ROOM WITH OCEAN VIEW</strong>
                                </h5>
                            </a>
                            <a>
                                <span class="badge badge-info py-2 px-2">Php 500.00</span>
                            </a>

                            <!--Text-->
                            <p class="grey-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 text-center">
                                        <p class="dark-grey-text">
                                            <i class="fas fa-hotel dark-grey-text" aria-hidden="true"></i> 3 beds</p>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 text-center">
                                        <p class="dark-grey-text">
                                            <i class="fas fa-utensils dark-grey-text" aria-hidden="true"></i> Launches</p>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 text-center">
                                        <p class="dark-grey-text">
                                            <i class="fas fa-wifi dark-grey-text" aria-hidden="true"></i> Wi-Fi</p>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                            </p>
                            <!--Grid column-->

                            <!--Grid column-->

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->


                </div>

                <!-- Grid column -->
                <div class="col-md-8 my-5">

                    <div class="card card-signup z-depth-1">

                        <div class="card-body text-center">

                            <form action="{{ route('reservation') }}" method="post">
                                @csrf
                                <input type="hidden" value="" name="room">
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-4 mb-4">

                                    <div class="md-form">
                                        <input type="text" name="firstname" id="form1" value="{{ old('firstname') }}" class="form-control">
                                        <label for="form1" class="">First Name</label>
                                        @error('firstname')
                                           <span class="error">*{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 mb-4">

                                    <div class="md-form">
                                        <input type="text" name="lastname" id="form2" value="{{ old('lastname') }}" class="form-control">
                                        <label for="form2" class="">Last Name</label>
                                        @error('lastname')
                                        <span class="error">*{{ $message }}</span>
                                     @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 mb-4">

                                    <div class="md-form">
                                        <input type="text" name="middlename" id="form3" value="{{ old('middlename') }}" class="form-control">
                                        <label for="form3" class="">Middle Name</label>

                                    </div>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 mb-4">

                                    <!-- Email validation -->
                                    <div class="md-form">
                                        <input type="email" name="email" id="form4" value="{{ old('email') }}" class="form-control validate">
                                        <label for="form4" data-error="wrong" data-success="right">Type your email</label>
                                        @error('email')
                                        <span class="error">*{{ $message }}</span>

                                     @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 mb-4">

                                    <div class="md-form">
                                        <input type="text" name="address" id="form5" value="{{ old('address') }}" class="form-control">
                                        <label for="form5" class="">Address</label>
                                        @error('address')
                                        <span class="error">*{{ $message }}</span>

                                     @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->


                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 mb-4">

                                    <div class="md-form">
                                        <input type="number" name="age" id="form6" value="{{ old('age') }}" class="form-control">
                                        <label for="form6" class="">Age</label>
                                        @error('age')
                                        <span class="error">*{{ $message }}</span>

                                     @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 mb-4">

                                    <div class="md-form">
                                        <input type="number" name="contact_number" id="form7" value="{{ old('contact_number') }}" class="form-control">
                                        <label for="form7" class="">Contact Number</label>
                                        @error('contact_number')
                                        <span class="error">*{{ $message }}</span>

                                     @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 mb-4">

                                    <div class="md-form">
                                        <input placeholder="Selected date" name="start_date" value="{{ old('start_date') }}" type="text" id="date-picker-example" class="form-control datepicker">
                                        <label for="date-picker-example" class="active">Arrival Date</label>
                                        @error('start_date')
                                        <span class="error">*{{ $message }}</span>

                                     @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 mb-4">

                                    <div class="md-form">
                                        <input placeholder="Selected date" name="end_date" value="{{ old('end_date') }}" type="text" id="date-picker-example" class="form-control datepicker">
                                        <label for="date-picker-example" class="active">Departure Date</label>
                                        @error('end_date')
                                        <span class="error">*{{ $message }}</span>

                                     @enderror
                                    </div>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <div class="card-foter text-right">
                                <button type="submit" class="btn btn-outline-primary btn-sm" style="width: 140px;">Reserve</button>
                            </div>
                        </form>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Grid row -->


            <!-- Section: Inputs -->



</main>
@endsection
