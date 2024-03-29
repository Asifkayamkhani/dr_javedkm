@extends('fronted.layout.app')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Our services</span>
                    <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="section service-2">
    <div class="container">
        <div class="row">
            @foreach($data as $val)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5">
                    <img src="{{asset('uploades/'.$val->image)}}" alt="" class="img-fluid">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">{{$val->name}}</h4>
                        <p class="mt-4 mb-2 title-color">{{illuminate\Support\Str::limit($val->describtion,100,'...')}}
                        </p>
                        <a href="{{url('service/detail/'.$val->id)}}" class="nav-link btn btn-sm btn-danger">Read
                            More</a>

                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
<section class="section cta-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="cta-content">
                    <div class="divider mb-4"></div>
                    <h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to
                            have the healthy</span></h2>
                    <a href="{{url('Appointment')}}" class="btn btn-main-2 btn-round-full">Get appointment<i
                            class="icofont-simple-right  ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection