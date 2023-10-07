@extends('layouts.app')
@if(session('messege'))



    <div class="alert alert-success" role="alert">
        {{session('done')}}
    </div>
    @endif


    @section('content')


    <div class="container ">
        <div class="row justify-content-center">

            <div class="col-md-10" style="margin-top: 10%;">
                <div class="row">
                    <div class="card " style="width: 15rem;background-color:rgba(0, 54, 100, 0.9);border: 2px solid black;border-style: ridge;border-radius: 8px;opacity: 0.85;color:white">
                    <img src="./Images/view.png" class="card-img-top" alt="...">
                            <div class="card-body" >
                            <h5 class="card-title">All Appionment List</h5>
                            
                            <a href="/checkapointments" class="btn btn-primary">View Appointments</a>
                            
                        </div>
                    </div>


                    <div class="card col-md-3" style="width: 15rem;margin-left:70px;;background-color:rgba(0, 54, 100, 0.9);border: 2px solid black;border-style: ridge;border-radius: 8px;opacity: 0.85;color:white"">
                        <img src="./Images/approve.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pending Appoinments</h5>
                          <a href="/updateAppointment" class="btn btn-primary">Approve Appointment</a>
                        </div>
                    </div>

                    <div class="card col-md-3" style="width: 15rem; margin-left:70px;;background-color:rgba(0, 54, 100, 0.9);border: 2px solid black;border-style: ridge;border-radius: 8px;opacity: 0.85;color:white"">
                    <img src="./Images/user.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">User List</h5>
                           <a href="/setadmin" class="btn btn-primary">Check All User</a>
                        </div>
                    </div>



                </div>

            </div>
</body>
@endsection