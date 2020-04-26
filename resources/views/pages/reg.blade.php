@extends('layouts.app')

@section('content')

<div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-md-5 order-1 order-md-2 mb-5 mb-md-0">
                <img src="{{asset("images/test_1.jpg")}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 mr-auto order-2 order-md-1">

                <h2 class="section-title mb-3">Registration</h2>
                <p class="mb-5">Enter all the necessary data so that we can register you.</p>

                <form method="post">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Location">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <br>
                            <h3>Choose your gender:</h3>
                            <input type="radio" value="male"><label for="male" style="padding-right: 30px">Male</label>
                            <input type="radio" value="female"><label for="female" style="padding-right: 30px">Female</label>
                            <input type="radio" value="other"><label for="othermale">Other</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea class="form-control" id="" cols="30" rows="3" placeholder="Enter your plans and dreams."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Confirm password">
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
