@extends('fronted.layout.app')
@section('content')




<!-- Slider Start -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">Got Best Pain Clinic in India Award</span>
                    <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                    <p class="mb-4 pr-5">KMAPMC is a pain management clinic and hospital in Jaipur that received the
                        "Best Pain Clinic" in India award from the Indian chapter of the International Association
                        of Pain and the “Excellence in Pain Practice” award by the World Institute of Pain first…
                    </p>
                    <div class="btn-container ">
                        <a href="{{url('Appointment')}}" target="_blank"
                            class="btn btn-main-2 btn-icon btn-round-full">Make
                            appointment <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appointment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                            family medicine.</p>
                        <a href="{{url('Appointment')}}" class="btn btn-main btn-round-full">Make a appointment</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Mon - Sat : <span>8:00AM - 12:00PM</span>
                            </li>

                            <li class="d-flex justify-content-between">Sun : <span>Closed</span></li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emergency Cases</span>
                        <h4 class="mb-3">
                            <a href="tel:9587858315">
                                <span class="h4">+9587858315</span>
                            </a>
                        </h4>
                        <p>Get ALL time support for emergency.We have introduced the principle of family
                            medicine.Get Connected with us for any emergency .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="{{asset('fronted/images/gallery1.jpeg')}}" alt="" class="img-fluid">
                    <img src="{{asset('fronted/images/gallery2.jpeg')}}" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="{{asset('fronted/images/gallery3.jpeg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">Personal care <br>& Pain Partner</h2>
                    <p class="mt-4 mb-5">Radiofrequency, Cryoneurolysis, Vertebroplasty, Endoscopic discectomy etc.
                        are done for chronic pain management…</p>

                    <a href="{{('Services')}}" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                            class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section ">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3">58</span>k
                        <p>Happy People</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3">700</span>+
                        <p>Surgery Comepleted</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3">40</span>+
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3">20</span>
                        <p>Worldwide Branch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Our Services</h2>
                    <div class="divider mx-auto "></div>
                    <!-- <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
							molestias nostrum laudantium. Maiores porro cumque quaerat.</p> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 testimonial-wrap-2">
                @foreach($services as $service)
               <div class="card ml-2 shadow">
                <div class="testimonial-block style-2  gray-bg">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <img src="{{asset('uploades/'.$service->image)}}" alt="" width="100px">
                            <h4 class="mt-3 mb-3">{{$service->name}}</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4" >{{$service->describtion}}</p>
                            <a class="nav-link btn btn-sm btn-danger" href="{{url('Appointment')}}">Appointment</a>
                        </div>


                    </div>
                </div>
               </div>
                @endforeach
                
            </div>
        </div>
    </div>
    </div>
</section>
<section class="section appointment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="{{asset('fronted/images/dr1.jpg')}}" alt="" class="img-fluid">
                    <div class="emergency">
                        <a href="tel:9587858315">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+95 878 58315</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appointment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appointment</h2>
                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui
                        velit . Iste dolorum atque similique praesentium soluta.</p>
                    <form id="#" class="appointment-form" method="post" action="{{url('Appointment')}}">
                        @csrf
                        @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                        <div class="row">

                            <div class="col-lg-6">

                                <div class="form-group">
                                    <input name="name" id="name" required type="text" class="form-control"
                                        placeholder="Full Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="number" id="phone" required type="text" maxlength="10"
                                        minimumlength="10" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" id="date" required type="date" class="form-control"
                                        placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" required type="time" class="form-control"
                                        placeholder="Time">
                                </div>
                            </div>

                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" required rows="6"
                                placeholder="Your Message"></textarea>
                        </div>

                        <input type="submit" value="Make Appointment" class="btn btn-main btn-round-full" id="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Google Review</h2>
                    <div class="divider mx-auto"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
                @foreach($testimonial as $val)
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>



                    <div class="client-info ">
                        <h4>- {{$val->name}}</h4>
                        <p>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                            <span class="fa fa-star" style="color: gold;"></span>
                        </p>
                        <p>
                           {{$val->desc}}
                            <!-- <span class="text-light">
                                . <br>
                                . <br>
                                . <br>


                            </span> -->
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="section clients">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Gallery</h2>
                    <!-- <h2>Partners who support us</h2> -->
                    <div class="divider mx-auto"></div>
                    <!-- <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
							molestias nostrum laudantium. Maiores porro cumque quaerat.</p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clients-logo">
            @foreach($data as $val)
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{asset('uploades/'.$val->image)}}"  alt="" class="img-fluid">
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection