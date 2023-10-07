@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('done'))
    <div class="alert alert-success" role="alert">
        {{session('done')}}
    </div>
    @endif


    @if(session('delete'))
    <div class="alert alert-danger" role="alert">
        {{session('delete')}}
    </div>
    @endif

    @if(session('update'))
    <div class="alert alert-success" role="alert">
        {{session('update')}}
    </div>
    @endif


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color:rgba(0, 54, 100, 0.9);border: 2px solid black;border-style: ridge;border-radius: 8px;opacity: 0.85;color:white">
                <div class="card-header" >
                    <h1>All Appointment </h1>
                </div>

                <div class="card-body">
                    <table class="table " style="color:white">
                        <thead class="bg-primary">
                            <tr>
                                <th>Patieant Name</th>
                                <th>Doctor Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Appointment status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $appointment)
                            <tr>
                                <td>{{ $appointment->user_name}}</td>
                                <td>{{ $appointment->dr_name }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>

                                @if($appointment->status==1)
                                <td><b>
                                        <p style="color:chartreuse;">Approved</p>
                                    </b></td>
                                @else
                                <td><b>
                                        <p style="color:crimson;">Pending</p>
                                    </b></td>
                                @endif



                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection