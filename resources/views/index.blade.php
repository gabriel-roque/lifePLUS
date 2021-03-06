@extends('layouts.layout')

@section('conteudo')



    {{--<!--================ Home Banner Area =================-->--}}
    <section class="home_banner_area" id="home">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <h1>We Care for Your Health Every Moment</h1>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price You may see some
                            for as low as each.</p>
                        <a class="main_btn mr-10" href="{{route('home')}}">Search <i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!--================ End Home Banner Area =================-->--}}

    {{--<!--================ Procedure Category Area =================-->--}}
    <section class="procedure_category section_gap">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Procedure Category</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('template/img/procedure/p1.jpg')}}" alt="Procedure">
                        <div class="categories_details">
                            <div class="categories_text">
                                <div class="border_line"></div>
                                <a href="#">
                                    <h5>Emergency Treatment</h5>
                                </a>
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('template/img/procedure/p2.jpg')}}" alt="Procedure">
                        <div class="categories_details">
                            <div class="categories_text">
                                <div class="border_line"></div>
                                <a href="#">
                                    <h5>Emergency Treatment</h5>
                                </a>
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('template/img/procedure/p3.jpg')}}" alt="Procedure">
                        <div class="categories_details">
                            <div class="categories_text">
                                <div class="border_line"></div>
                                <a href="#">
                                    <h5>Emergency Treatment</h5>
                                </a>
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!--================ End Procedure Category Area =================-->--}}

    {{--<!--================ About Myself Area =================-->--}}
    <section class="about_myself pad_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-0">
                    <div class="about_img">
                        <img class="img-fluid w-100" src="{{asset('template/img/about-me.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-lg-6 pl-0">
                    <div class="about_box">
                        <div class="section-title-wrap text-left">
                            <h1>About Myself</h1>
                            <p>
                                nappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the
                                workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                            </p>
                        </div>

                        <div class="activity">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="activity_box">
                                        <div>
                                            <i class="lnr lnr-database"></i>
                                        </div>
                                        <h3>$<span class="counter">2.5</span> M</h3>
                                        <p>Total Donation</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="activity_box">
                                        <div>
                                            <i class="lnr lnr-book"></i>
                                        </div>
                                        <h3 class="counter">1465</h3>
                                        <p>Total Project</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="activity_box">
                                        <div>
                                            <i class="lnr lnr-users"></i>
                                        </div>
                                        <h3 class="counter">3965</h3>
                                        <p>Total Volunteers</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="activity_box">
                                        <div>
                                            <i class="lnr lnr-users"></i>
                                        </div>
                                        <h3 class="counter">3965</h3>
                                        <p>Total Volunteers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!--================ End About Myself Area =================-->--}}

    {{--<!--================ Start Offered Services Area =================-->--}}
    <section class="service_area section_gap" id="services-contact">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Our Offered Services</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_service">
                        <span class="lnr lnr-rocket"></span>
                        <a href="#">
                            <h4>24/7 Emergency</h4>
                        </a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_service">
                        <span class="lnr lnr-heart-pulse"></span>
                        <a href="#">
                            <h4>Expert Consultation</h4>
                        </a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_service">
                        <span class="lnr lnr-bug"></span>
                        <a href="#">
                            <h4>Intensive Care</h4>
                        </a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_service">
                        <span class="lnr lnr-users"></span>
                        <a href="#">
                            <h4>Family Planning</h4>
                        </a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!--================ End Offered Services Area =================-->--}}

    {{--<!--================ Start Appointment Area =================-->--}}
    <section class="appointment-area">
        <div class="container">
            <div class="row justify-content-between align-items-center appointment-wrap">
                <div class="col-lg-5 col-md-6 appointment-left">
                    <h1>
                        Servicing Hours
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <ul class="time-list">
                        <li class="d-flex justify-content-between">
                            <span>Monday-Friday</span>
                            <span>08.00 am - 10.00 pm</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Saturday</span>
                            <span>08.00 am - 10.00 pm</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Sunday</span>
                            <span>08.00 am - 10.00 pm</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 pt-60 pb-60">
                    <div class="appointment-right">
                        <form class="form-wrap" action="#">
                            <h3 class="pb-20 text-center mb-20">Book an Appointment</h3>
                            <input type="text" class="form-control" name="name" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'">
                            <input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                            <input id="datepicker1" name="dop" class="dates form-control" placeholder="Date of Birth" type="text">
                            <div class="form-select" id="service-select">
                                <select>
                                    <option data-display="">Disease Type</option>
                                    <option value="1">Type One</option>
                                    <option value="2">Type Two</option>
                                    <option value="3">Type Three</option>
                                    <option value="4">Type Four</option>
                                </select>
                            </div>
                            <input id="datepicker2" class="dates form-control" placeholder="appointment Date" type="text">
                            <textarea name="messege" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                            <div class="text-center confirm_btn_box">
                                <button class="main_btn text-uppercase">Confirm Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!--================ End Appointment Area =================-->--}}

@endsection