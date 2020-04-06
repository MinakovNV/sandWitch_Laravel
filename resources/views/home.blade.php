@extends('layout.app')

@section('title_lable')
    Venik Social network
@endsection

@section('content')
    <h1>Welcome All!</h1>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in! {{Auth::user() -> username}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

