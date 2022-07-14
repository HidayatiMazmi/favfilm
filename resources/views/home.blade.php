@extends('layouts.app')

@section('content')
<!-- ======= Search Section ======= -->
<section id="subscribe">
    <div class="container pt-5" data-aos="zoom-in">
        <form method="POST" action="#">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 d-flex">
                    <input type="text" class="form-control" placeholder="Enter keyword">
                    <button type="submit" class="ms-2">Search Film</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Search Section -->

<!-- ======= Films Section ======= -->
<section id="hotels" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h5>Films</h5>
            
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-4 col-md-6">
                <div class="hotel">
                    <div class="hotel-img">
                        <img src="assets/img/events/1.png" alt="Film 1" class="img-fluid">
                    </div>
                    <h3><a href="#">Film 1</a></h3>
                    <div class="row">
                        <div class="col-6">
                        <p>0.5 Mile from the Venue</p>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 pt-2">
                            <p>Rp. 50.000,00</p>
                        </div>
                        <div class="col-6 text-end pe-4 pb-3">
                            <button type="button" class="btn" style="background-color:#f82249; color:white;" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                            <!-- <a href="#" class="btn-green">Buy</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="hotel">
                    <div class="hotel-img">
                        <img src="assets/img/events/2.jpg" alt="Film 2" class="img-fluid">
                    </div>
                    <h3><a href="#">Film 2</a></h3>
                    <div class="row">
                        <div class="col-6">
                        <p>0.5 Mile from the Venue</p>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 pt-2">
                            <p>Gratis</p>
                        </div>
                        <div class="col-6 text-end pe-4 pb-3">
                            <button type="button" class="btn" style="background-color:#f82249; color:white;" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                            <!-- <a href="#" class="btn-green">Buy</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="hotel">
                    <div class="hotel-img">
                        <img src="assets/img/events/3.jpg" alt="Film 3" class="img-fluid">
                    </div>
                    <h3><a href="#">Film 3</a></h3>
                    <div class="row">
                        <div class="col-6">
                        <p>0.5 Mile from the Venue</p>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 pt-2">
                            <p>Rp. 150.000,00</p>
                        </div>
                        <div class="col-6 text-end pe-4 pb-3">
                            <button type="button" class="btn" style="background-color:#f82249; color:white;" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                            <!-- <a href="#" class="btn-green">Buy</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Films Section -->
@endsection
