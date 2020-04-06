@extends('layout.app')

@section('title_lable')
Venik Social network
@endsection

@section('content')
    <h1>Welcome All!</h1>
<<<<<<< HEAD

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

=======
>>>>>>> parent of 1e64e47... auth and reg
@endsection
