@extends('layouts.app')

@section('content')
    <div class="site-section" id="contact-section"  data-aos="fade" style="padding:10em 0 5em">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-12 mr-auto order-2 order-md-1">

                    <h2 class="section-title centered">My plans</h2>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Start date</th>
                            <th scope="col">End date</th>
                            <th>Change</th>
                            <th>Delete</th>
                            @if(Auth::user()->role->id == 1)
                                <th>User</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $plan)
                            @if(Auth::user()->role->id == 2 && $plan->user->id == Auth::user()->id)
                            <tr>
                                <th scope="row">{{$plan->id}}</th>
                                <td>{{$plan->name}}</td>
                                <td>{{$plan->description}}</td>
                                <td>{{$plan->start_date}}</td>
                                <td>{{$plan->end_date}}</td>
                                <td> <a href="{{ route('plan-one', $plan->id) }}"> <button  class="btn btn-success">Update</button> </a></td>
                                <td> <a href="{{ route('plan-delete', $plan->id) }}"> <button  class="btn btn-danger">Delete</button> </a></td>
                            </tr>
                            @endif

                            @if(Auth::user()->role->id == 1)
                                <tr>
                                    <th scope="row">{{$plan->id}}</th>
                                    <td>{{$plan->name}}</td>
                                    <td>{{$plan->description}}</td>
                                    <td>{{$plan->start_date}}</td>
                                    <td>{{$plan->end_date}}</td>
                                    <td> <a href="{{ route('plan-one', $plan->id) }}"> <button  class="btn btn-success">Update</button> </a></td>
                                    <td> <a href="{{ route('plan-delete', $plan->id) }}"> <button  class="btn btn-danger">Delete</button> </a></td>
                                    <td> {{Auth::user()->find($plan->user->id)->first_name}} {{Auth::user()->find($plan->user->id)->last_name}} ({{Auth::user()->find($plan->user->id)->username}})</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                    @if(Auth::user()->role->id == 2)
                    <a  href="{{route('plan')}}"> <button  class="btn btn-warning">Add</button> </a>
                    @endif
                </div>

            </div>

        </div>

    </div>
@endsection
