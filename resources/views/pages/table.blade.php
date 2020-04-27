@extends('layouts.app')

@section('content')
    <div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-6 mr-auto order-2 order-md-1">

                    <h2 class="section-title mb-3">Plan changing</h2>
                    <p class="mb-5">Enter all new data to change your plan:</p>

                    <form method="POST" action="{{ route('plan_form') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="plan_name" type="text" placeholder="Plan Name" class="form-control" name="plan_name" value="{{ old('plan_name') }}" required autofocus>

                                @if ($errors->has('plan_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 mb-4">
                                <input id="plan_date_start" type="date" placeholder="Plan Start Date" class="form-control" name="plan_date_start" value="{{ old('plan_date_start') }}" required autofocus>

                                @if ($errors->has('plan_date_start'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_date_start') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <input id="plan_date_end" type="date" placeholder="Plan End Date" class="form-control" name="plan_date_end" value="{{ old('plan_date_end') }}" required autofocus>

                                @if ($errors->has('plan_date_end'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_date_end') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <textarea id="plan_description" placeholder="Plan Description" class="form-control" name="plan_description" value="{{ old('plan_description') }}" required autofocus>

                                @if ($errors->has('plan_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-warning py-3 px-5 btn-block">
                                    {{ __('Change') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
