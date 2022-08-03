@extends('layouts.app')
@section('pageTitle','Payment Methods')
@section('content')
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Dj Lists</h2>
               </div>
            </div>
        </div>
         <!-- row -->
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                    <div>
                        @include('flashmessages')
                    </div>
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        <div class="row">
                            <div class="col-md-9">
                                <h2>Admin Dj Lists</h2>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('register_new_djuser')}}" class="btn btn-inverse my-button btn-outline-primary">Add New Dj User</a>
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="table_section padding_infor_info">
                     <div class="table-responsive-sm">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone Number</th>
                                 <th>Dj Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $count = 1;?>
                              @foreach ($dj_list as $dj)
                              <tr>
                                <td class="text-capitalize">{{$count}}</td>
                                <td class="text-capitalize">{{$dj['first_name']}} {{$dj['last_name']}}</td>
                                <td class="text-capitalize">{{$dj['email']}}</td>
                                <td class="text-capitalize">{{$dj['phone_number']}}</td>
                                @if($dj->dj_status == 1)         
                                       <td class="text-capitalize">Approved<a></td>         
                                 @else
                                       <td class="text-capitalize">New Registration</td>        
                                 @endif
                                
                                <td>
                                    <a href="edit_djadmin_details/{{$dj['id']}}" class="btn btn-sm btn-blue  btn-inverse btn-outline-primary">
                                         <i class="fa fa-pencil"></i> 
                                    </a>
                                    <a href="delete_djadmin_details/{{$dj['id']}}" class="btn btn-sm btn-red btn-inverse btn-outline-danger">
                                    <i class="fa fa-trash"></i> 
                                    </a>
                                   
                                </td>
                              </tr>
                              <?php $count = $count+1;?>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>            
        </div>
    </div>
@stop