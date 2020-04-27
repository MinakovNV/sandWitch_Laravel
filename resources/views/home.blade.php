@extends('layouts.app')

@section('content')
    <div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! {{Auth::user()->username}}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
