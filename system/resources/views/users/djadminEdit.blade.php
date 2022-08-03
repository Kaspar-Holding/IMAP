@extends('layouts.app')
@section('pageTitle','Edit Admin Settings')
@section('content')
    <div class="container-fluid">
        <div class="row column_title">
          <div class="col-md-12">
            <div class="page_title">
              <h2>Edit DJ User</h2>
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
                  <h2></h2>
                </div>
              </div>
              <form class="container-fluid" action="{{route('update_djadmin_user')}}" method="POST" style="padding:30px; padding-bottom:40px;">
                @csrf
                <div>
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" >
                    <input type="hidden" name="id" class="form-control" value="{{ $user->id }}" >
                  </div>
                  <br>
                <div>
                  <label class="form-label">Last Name</label>
                  <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" >
                  <input type="hidden" name="id" class="form-control" value="{{ $user->id }}" >
                </div>
                <br>
                <div>
                  <label class="form-label">Email</label>
                  <input type="email" name="user_email" class="form-control" value="{{ $user->email }}" >
                </div>
                <br>
                <div>
                    <label class="form-label">Phone Number</label>
                    <input type="text" pattern="[^\+][0-9]{6,14}[0-9]$" name="phone_number" class="form-control" value="{{ $user->phone_number }}" >
                  </div>
                  <br>
                <div>
                  <label class="form-label">Change Password</label>
                  <input type="password" id="upass" name="user_password" class="form-control">
                  <i class="fa fa-eye btn icon-control" style="color:black; cursor:pointer;position: relative;
    left: 79rem;
    bottom: 2rem;" id="toggleBtn" onclick="toggePassword()"></i>
                </div>
                <br>
                <div>
                  <label class="form-label">DJ Status</label>
                  <select name="dj_status" class="form-control" required>
                    <option>Select Status</option>
                    <option value="1" @if($user['dj_status'] == '1') selected @endif>Approved</option>
                    <option value="0" @if($user['dj_status'] == '0') selected @endif>Not Approved</option>
                  </select>
                </div>
                <br>
                <br>
                <div class="row" style="padding-left:30px; padding-top:10px;">
                  <button type="submit" class="btn my-button col-md-2 btn-primary link-light col-sm-4">Update</button>
                </div>
                <div class="d-flex justify-content-center"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      function toggePassword() {
          var upass = document.getElementById('upass');
          var toggleBtn = document.getElementById('toggleBtn');
          if (upass.type == "password") {
              upass.type = "text";
              toggleBtn.value = "Hide password";
          } else {
              upass.type = "Password";
              toggleBtn.value = "Show the password";
          }
      }

  </script>
@stop