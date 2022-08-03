@extends('layouts.app')
@section('pageTitle','Blocked Users')
@section('content')
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Blocked Users Lists</h2>
               </div>
            </div>
        </div>
         <!-- row -->
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        
                     </div>
                  </div>
                  <div class="table_section padding_infor_info">
                     <div class="table-responsive-sm">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>User ID</th>
                                 <th>First name</th>
                                 <th>Last name</th>
                                 <th>Email</th>
                                 <th>Blocked at</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              @if(!empty($users_list))
                              <?php $count = 1;?>
                              @foreach ($users_list as $user)
                              <tr>
                                <td class="text-capitalize">{{$count}}</td>
                                <td class="text-capitalize">{{$user['user_id']}}</td>
                                <td class="text-capitalize">{{$user['first_name']}}</td>
                                <td class="text-capitalize">{{$user['last_name']}}</td>
                                <td class="text-capitalize">{{$user['email']}}</td>
                                <td class="text-capitalize">{{$user['updated_at']}}</td>
                                <td class="text-capitalize">Blocked</td>
                              </tr>
                              
                              <?php $count = $count+1;?>
                              @endforeach
                              @else
                              <tr>
                                <th>No User Found</th>
                              </tr>
                              @endif
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>            
        </div>
    </div>
@stop