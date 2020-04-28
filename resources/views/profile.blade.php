@extends('layouts.app')

@section('content')
    <div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <img src="/uploads/avatars/{{$user->avatar}}"
                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" >
                    <h2> {{$user->first_name}}'s Profile</h2>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <label> Update profile image</label>
                        <p><input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></p>

                        <div class="card-body">
                            @csrf

                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ Auth::user()-> first_name }}" required>

                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ Auth::user()-> last_name }}" required>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>

                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ Auth::user()-> date_of_birth }}" required>

                                    @if ($errors->has('date_of_birth'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('Telephone number') }}</label>

                                <div class="col-md-6">
                                    <input id="telephone_number" type="text" class="form-control{{ $errors->has('telephone_number') ? ' is-invalid' : '' }}" name="telephone_number" value="{{ Auth::user()-> telephone_number }}" required>

                                    @if ($errors->has('telephone_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-warning" style="float:right">
                    </form>
                </div>
            </div>
        </div>



    </div>

    </div>
@endsection

