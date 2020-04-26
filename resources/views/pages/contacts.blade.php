@extends('layouts.app')

@section('content')

<div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-md-5 order-1 order-md-2 mb-5 mb-md-0">
                <img src="{{asset("images/witch.png")}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 mr-auto order-2 order-md-1">

                <h2 class="section-title mb-3">Contact Us</h2>
                <p class="mb-5">If you have any questions, suggestions or if you have problems - write to us, if you're lucky - we will answer.</p>

                <form method="post">
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
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea class="form-control" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">

                            <input type="submit" class="btn btn-warning py-3 px-5 btn-block" value="Send Message">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


@stop
