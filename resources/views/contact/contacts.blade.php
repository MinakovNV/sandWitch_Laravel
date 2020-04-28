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

                    @if (Session::has('flash_message'))
                        <div class="alert alert-success"> {{Session::get('flash_message')}}</div>
                    @endif

                    <form action = "/contacts" method="post">

                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6 mb-4">
                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First name">
                                <div> {{ $errors->first('first_name')}}</div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last name">
                                <div> {{ $errors->first('last_name')}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" placeholder="Subject">
                                <div> {{ $errors->first('subject')}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                <div> {{ $errors->first('email')}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Write your message here."></textarea>
                                <div> {{ $errors->first('message')}}</div>
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
