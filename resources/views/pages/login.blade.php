@extends('layouts.app')

@section('content')

    <div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-5 order-1 order-md-2 mb-5 mb-md-0">
                    <img src="{{asset("images/test_2.jpeg")}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 mr-auto order-2 order-md-1">

                    <h2 class="section-title mb-3">Log in</h2>
                    <p class="mb-5">Enter login and password for authorization.</p>

                    <form method="post">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 180px">
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-warning py-3 px-5 btn-block" value="Register">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@stop
