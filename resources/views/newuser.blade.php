@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background-color:rgba(0, 54, 100, 0.9);border: 2px solid black;border-style: ridge;border-radius: 8px;opacity: 0.85;color:white">
                <div class="card-header">
                    <h1>Users List </h1>
                </div>

                <div class="card-body">
                    <table class="table" style="color:white">
                        <thead class="bg-primary">
                            <tr>
                            <th>User ID</th>
                                <th>User Name</th>
                             
                                <th>Email</th>
                               
                                <th>Profile Status</th>
                        
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $appointment)
                            <tr>
                                <td>{{ $appointment->id  }}</td>
                                <td>{{ $appointment->name}}</td>
                                <td>{{ $appointment->email  }}</td>



                                @if($appointment->role=='user')
                                <td><b>
                                        <p style="color:chartreuse;">User Profile</p>
                                    </b></td>
                                @else
                                <td><b>
                                        <p style="color:crimson;">Admin Profile</p>
                                    </b></td>
                                @endif
                             

                          
                                

                            </tr>
                            @endforeach
                        </tbody>
                    </table>




                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection