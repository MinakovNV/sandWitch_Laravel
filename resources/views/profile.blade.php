@extends('layouts.app')

@section('content')
    <div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="/uploads/avatars/{{$user->avatar}}"
                     style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"  alt="Your avatar">
                <h2> {{$user->first_name}}'s Profile</h2>
              {{--  <form enctype="multipart/form-data" action="/profile" method="POST"> --}}
                    <label> Update profile image</label>
                    <p><input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></p>
                    <input type="submit" class="btn btn-warning" style="float:right">
                {{--</form> --}}
            </div>
        </div>
    </div></div>
@endsection

