@extends('layouts.app')

@section('content')


    <div class="site-section section-2" id="work-section" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title">About website</h2>
                    <p>It is social networks today that are the most visited web resources. Almost every young man has his own Instagram account.</p>
                    <p>Such platforms allow you to chat with friends and relatives living in other cities and countries, exchange virtual gifts, etc.</p>
                    <p>That is why we decided to create our own social network with a unique idea. The idea is to provide the user with the opportunity to project all their plans in one place and provide assistance in their implementation.</p>
                    <p>You can use the service only after filling in a certain number of required fields (Name, surname, gender, place of residence, several purposes)</p>
                    <h3>We used:</h3>
                </div>
            </div>

        </div>

        <div class="owl-carousel nonloop-block-13">

            <a class="work-thumb" href="{{asset("images/used_1.png")}}" data-fancybox="gallery">
                <div class="work-text">
                    <h3>PHP</h3>
                    <span class="category">General-purpose Scripting Language</span>
                </div>
                <img src="{{asset("images/used_1.png")}}" alt="Image" class="img-fluid">
            </a>

            <a class="work-thumb" href="images/used_2.png" data-fancybox="gallery">
                <div class="work-text">
                    <h3>Laravel</h3>
                    <span class="category">Web Application Framework</span>
                </div>
                <img src="images/used_2.png" alt="Image" class="img-fluid">
            </a>

            <a class="work-thumb" href="images/used_3.png" data-fancybox="gallery">
                <div class="work-text">
                    <h3>Project Name Here</h3>
                    <span class="category">Relational DataBase Management System (RDBMS)</span>
                </div>
                <img src="images/used_3.png" alt="Image" class="img-fluid">
            </a>

            <a class="work-thumb" href="images/used_4.png" data-fancybox="gallery">
                <div class="work-text">
                    <h3>MVC</h3>
                    <span class="category">Model-View-Controller Pattern</span>
                </div>
                <img src="images/used_4.png" alt="Image" class="img-fluid">
            </a>

        </div>
    </div>

    <div class="site-section section-2 bg-light" id="process-section" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title">Missions</h2>
                    <p>The idea is to provide the user with the opportunity to accumulate all their plans in one place and provide assistance in their implementation.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="process bg-white rounded" style="padding-bottom: 117px">
                        <div>
                            <span class="flaticon-vector display-4 text-primary mb-4 d-inline-block"></span>
                            <h3>Capabilities</h3>
                            <p>Give the user the opportunity to learn more about how to implement their plans.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="process bg-white rounded" style="padding-bottom: 88px">
                        <div>
                            <span class="flaticon-glasses display-4 text-primary mb-4 d-inline-block"></span>
                            <h3>Experience</h3>
                            <p>Give the user the opportunity to quickly communicate with those who have already implemented this “to do”.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="process bg-white rounded">
                        <div>
                            <span class="flaticon-reload display-4 text-primary mb-4 d-inline-block"></span>
                            <h3>Perspective</h3>
                            <p>Give the user the opportunity to quickly communicate with those who have not yet implemented this “to do” (for example, to cooperate with those who want to implement and live with you in the same city).</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





@stop
