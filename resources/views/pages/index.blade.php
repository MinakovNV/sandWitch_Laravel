@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mr-auto" data-aos="fade-up">

                <div class="owl-carousel slide-one-item-alt-text">

                    <div class="slide-text">
                        <h1>SandWitch</h1>
                        <p class="mb-5">Best opportunity to project all your plans.</p>
                        <p><a href="about" class="btn btn-outline-dark py-3 px-5">More information</a></p>
                    </div>
                    <div class="slide-text">
                        <h1>Let's Start</h1>
                        <p class="mb-5">Just create an account and find many new hobby friends and write down all your plans.</p>
                        <p><a href="" class="btn btn-outline-dark py-3 px-5">Registration</a></p>
                    </div>
                    <div class="slide-text">
                        <h1>Glad to see you!</h1>
                        <p class="mb-5">Welcome to the social network of your preferences. We hope you enjoy it here. Read about our team to find out more..</p>
                        <p><a href="" class="btn btn-outline-dark py-3 px-5">Our team</a></p>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">

                <div class="owl-carousel slide-one-item-alt">
                    <img alt="Image" class="img-fluid" src="{{asset("images/home_2.jpg")}}">
                    <img alt="Image" class="img-fluid" src="{{asset("images/home_3.jpg")}}">
                    <img alt="Image" class="img-fluid" src="{{asset("images/home_1.JPG")}}">
                </div>

                <div class="owl-custom-direction">
                    <a href="#" class="custom-prev" style="background-color: dimgrey"><span class="icon-keyboard_arrow_left"></span></a>
                    <a href="#" class="custom-next" style="background-color: dimgrey"><span class="icon-keyboard_arrow_right"></span></a>
                </div>

            </div>
        </div>
    </div>

@stop
