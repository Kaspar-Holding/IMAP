@extends('layouts.app')
@section('pageTitle','User Detail')
@section('content')
    @foreach ($users as $user)
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>User Details</h2>
               </div>
            </div>
        </div>
         <!-- row -->
        <div class="row p-3">
            <!-- table section -->
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                         <div class="heading1 margin_0">
                            <h2>{{ $user['first_name'] }} {{$user['last_name']}} Details</h2>
                         </div>
                    </div>
        
                    <form class="container-fluid" action="user_status_update" method="post">
                        @csrf
                        <div>
                            @include('flashmessages')
                        </div>

                        <div class="row p-3">
                            <div class="col-6">
                                <h5>First Name:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user['first_name'] }}</h5>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>Last Name:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user['last_name'] }}</h5>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>Email:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user['email'] }}</h5>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>Phone Number:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user['phone_number'] }}</h5>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>Identification Type:</h5>
                            </div>
                            <div class="col-6">
                                @if ( $user->identification_type == 1)
                                    <h5>South African ID</h5>                            
                                @else
                                    <h5>Passport</h5>
                                @endif
                                {{-- <input type="text" class="form-control h5" name="last_name" value="{{ $user->identification_num }}" disabled> --}}
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>Identification Number:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user['identification_num'] }}</h5>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>Gender:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user->gender }}</h5>
                                {{-- <input type="text" class="form-control h5" name="last_name" value="{{ $user->phone_number }}" disabled> --}}
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6"> 
                                <h5>Date of Birth:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user->dob }}</h5>
                                {{-- <input type="text" class="form-control h5" name="last_name" value="{{ $user->phone_number }}" disabled> --}}
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>Nationality:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{ $user->nationality }}</h5>
                                {{-- <input type="text" class="form-control h5" name="last_name" value="{{ $user->phone_number }}" disabled> --}}
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <h5>User Status:</h5>
                            </div>
                            <div class="col-6">
                                @if ($user['user_status'] == "0")
                                    <h5>New Registration</h5>
                                @elseif ($user['user_status'] == "1")
                                    <h5>Active</h5>
                                @elseif ($user['user_status'] == "2")
                                    <h5>Denied</h5>
                                @elseif ($user['user_status'] == "-1")
                                    <h5>Blocked</h5>
                                @endif
                                {{-- <input type="text" class="form-control h5" name="last_name" value="{{ $user->phone_number }}" disabled> --}}
                            </div>
                        </div>
                        <hr>
                        @if ( $user->identification_type == 1)
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>DHA Detail</h2>
                                </div>
                            </div>               
                            @if (($dha_profile))
                                @if ($dha_profile->dha_api_status == -1)
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Status:</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>Invalid credentials</h5>
                                            {{-- <input type="text" class="form-control h5" name="first_name" style="text-transform: capitalize; backgroundColor: 'transparent'" value="{{ $user->first_name }}" disabled> --}}
                                        </div>
                                    </div>
                                @else
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Name:</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>{{ $dha_profile->personName }} {{ $dha_profile->personSurname }}</h5>
                                            {{-- <input type="text" class="form-control h5" name="first_name" style="text-transform: capitalize; backgroundColor: 'transparent'" value="{{ $user->first_name }}" disabled> --}}
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Gender:</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>{{ $dha_profile->gender }}</h5>
                                            {{-- <input type="text" class="form-control h5" name="first_name" style="text-transform: capitalize; backgroundColor: 'transparent'" value="{{ $user->first_name }}" disabled> --}}
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Date of Birth:</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>{{ $dha_profile->dateOfBirth }}</h5>
                                            {{-- <input type="text" class="form-control h5" name="first_name" style="text-transform: capitalize; backgroundColor: 'transparent'" value="{{ $user->first_name }}" disabled> --}}
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Status:</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>{{ $dha_profile->aliveStatus }}</h5>
                                            {{-- <input type="text" class="form-control h5" name="first_name" style="text-transform: capitalize; backgroundColor: 'transparent'" value="{{ $user->first_name }}" disabled> --}}
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Address:</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>{{ $dha_address->addressLine1 }}
                                                @if (!is_null($dha_address->addressLine2))
                                                , {{ $dha_address->addressLine2 }}
                                                @endif
                                                @if (!is_null($dha_address->addressLine3))
                                                , {{ $dha_address->addressLine3 }}
                                                @endif
                                                @if (!is_null($dha_address->addressLine4))
                                                , {{ $dha_address->addressLine4 }}
                                                @endif
                                                @if (!is_null($dha_address->addressLine5))
                                                , {{ $dha_address->addressLine5 }}
                                                @endif
                                            </h5>
                                            {{-- <input type="text" class="form-control h5" name="first_name" style="text-transform: capitalize; backgroundColor: 'transparent'" value="{{ $user->first_name }}" disabled> --}}
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="row p-3">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('fetch_dha_profile',$user->user_id)}}" type="submit" class="btn btn-primary link-light col-sm-4">Fetch DHA Information</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>
                            @endif
                        @endif
                        <div class="d-flex justify-content-center">
                            <a href="{{route('approve_user',$user->user_id)}}" type="submit" class="btn btn-primary link-light col-sm-4">Approve</a> &nbsp;
                            {{-- <button type="submit" class="btn btn-primary link-light col-sm-4">Approve</button> --}}
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('deny_user',$user->user_id)}}" type="submit" class="btn btn-warning link-light col-sm-4">Deny</a> &nbsp;
                            <a href="{{route('block_user',$user->user_id)}}" type="submit" class="btn btn-danger link-light col-sm-4">Block</a>
                        </div>
                    </form>
                    <!--@if ($user->user_status == "0")-->
                    <!--    <div class="d-flex justify-content-center">-->
                    <!--        <a href="/deny_user/{{$user->user_id}}" type="submit" class="btn btn-warning link-light col-sm-4">Deny</a> &nbsp;-->
                    <!--        <a href="/block_user/{{$user->user_id}}" type="submit" class="btn btn-danger link-light col-sm-4">Block</a>-->
                    <!--    </div>-->
                    <!--@endif-->
                    <br>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@stop