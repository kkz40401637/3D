@extends('layouts.partials.master')
@section('title','Create Admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
    
      <div class="row">
        <!--admin -->
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">ဒိုင်အသစ်စာရင်းသွင်းမယ်</h4>
                <form class="form-sample" method="POST" action="{{ route('admins.store') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input class="@error('name') is-invalid @enderror form-control" name="name" minlength="2" type="text" value="{{ old('name') }}" autocomplete="name" autofocus required />
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input class="@error('email') is-invalid @enderror form-control" name="email" minlength="2" type="text" value="{{ old('email') }}" autocomplete="username" required />
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input class="form-control" name="password" type="password" required />
                  @error('password')
                    <span class="invalid-feedback text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Confirm Password</label>
                  <input class="form-control" name="confirm-password" type="password" required />
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        <!--endadmin-->
      </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
