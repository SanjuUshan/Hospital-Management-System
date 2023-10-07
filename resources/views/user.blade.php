@extends('layouts.app')
@if(session('messege'))
<div class="alert alert-success" role="alert">
    {{session('done')}}
</div>
@endif



@section('content')

@if(session('update'))
    <div class="alert alert-success" role="alert">
        {{session('update')}}
    </div>
    @endif


<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Make Appointment</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" href="/user" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">View Appointment Status</button>
                </li>
                
            </ul>



            <div class="tab-content" id="myTabContent">



                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card" style="margin-top:50px;background-color:rgba(0, 54, 100, 0.9);border: 2px solid black;border-style: ridge;border-radius: 8px;opacity: 0.85;color:white">
                                    <div class="card-header">{{ __('Make Appointment') }}</div>

                                    <div class="card-body">
                                        <form method="POST" action="/appointments">
                                            @csrf

                                            <div class="row">
                                                <label for="name" class="col-md-4 col-form-label text-md-end" style="margin-top:10px;">{{ __('Select doctor name ') }}</label>

                                                <div class="col-md-6" style="margin-top:10px;">
                                                    <select class="form-select" name="select">
                                                    <option value="" selected disabled>Please select</option>
                                                        <option value="Dr (Mrs) T.D.Jayaneththi - Anaesthetists">Dr (Mrs) T.D.Jayaneththi - Anaesthetists</option>
                                                        <option value="Dr.A.S.K.Banagala - General Surgeons ">Dr.A.S.K.Banagala - General Surgeons </option>
                                                        <option value="Dr.Pathum Dissanayake - Paediatrician">Dr.Pathum Dissanayake - Paediatrician</option>
                                                        <option value="Dr (Mrs) A.H.N.Fernando - General Physicians">Dr (Mrs) A.H.N.Fernando - General Physicians </option>
                                                    </select>
                                                </div>



                                                <label for="name" class="col-md-4 col-form-label text-md-end" style="margin-top:10px;">{{ __('Date') }}</label>
                                                <div class="col-md-6 " style="margin-top:10px;">

                                                    <input id="date" type="date" class="form-control " name="date">

                                                </div>


                                                <label for="time" class="col-md-4 col-form-label text-md-end" style="margin-top:10px;">{{ __('Time') }}</label>

                                                <div class="col-md-6" style="margin-top:10px;">

                                                    <input id="name" type="time" class="form-control " name="time">
                                                    <div class="col-md-6" style="margin-top: 10px;">
                                                        <input type="submit" id="submit" class="btn btn-primary"></a>
                                                    </div>

                                                </div>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>







                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card" style="margin-top:50px;background-color:rgba(0, 54, 100, 0.9);border: 2px solid black;border-style: ridge;border-radius: 8px;opacity: 0.85;color:white">
                                    <div class="card-header" >{{ __('Your Appointment status') }} </div>

                                    <div class="card-body" >
                                        <form method="POST" action="/appointments">
                                            @csrf

                                            <div class="row">
                                                <table>
                                              
                                                    <td>
                                                      <a href="/view" class="btn btn-danger" value=""> Appoinment status</a>
                                                    </td>
                                                </table>

                                          
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>

                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>
    @endsection