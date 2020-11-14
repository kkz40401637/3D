@extends('layouts.partials.master')
@section('title','Create User')
@section('content')

    <div class="main-panel">        
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">လက်ခွဲဒိုင်များထည့်မယ်</h4>
                  @extends('layouts.partials.master')
                  @section('title','Create User')
                  @section('content')

                      <div class="main-panel">        
                        <div class="content-wrapper">
                          <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">ထိုးသာအသစ်များကိုစာရင်သွင်းမယ်</h4>
                                     <form class="form-sample" method="POST" action="{{ route('admins.store') }}">
                                    @csrf
                                    <div class="form-group">
                                      <label>Username</label>
                                      <input class="@error('name') is-invalid @enderror form-control" name="name" minlength="2" type="text" value="{{ old('name') }}" autocomplete="name" autofocus required />
                                      @error('name')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label>Email address</label>
                                      <input class="@error('email') is-invalid @enderror form-control" name="email" minlength="2" type="text" value="{{ old('email') }}" autocomplete="username" required />
                                      @error('email')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label>Password</label>
                                      <input class="form-control" name="password" type="password" required />
                                      @error('password')
                                        <span class="invalid-feedback text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label>Confirm Password</label>
                                       <input class="form-control" name="confirm-password" type="password" required />
                                    </div>

                                    
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
                                  </form>
                                </div>
                              </div>
                            </div>
        
                          </div>
                        </div>
                        <!-- content-wrapper ends -->
                      </div>
                    </div>
                      <!-- content-wrapper ends -->
                  @endsection

                  <div class="form-group">
                    <label>Username</label>
                    <input class="@error('name') is-invalid @enderror form-control" name="name" minlength="2" type="text" value="{{ old('name') }}" autocomplete="name" autofocus required />
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                     <input class="@error('email') is-invalid @enderror form-control" name="email" minlength="2" type="text" value="{{ old('email') }}" autocomplete="username" required />
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                     <input class="form-control" name="password" type="password" required />
                    @error('password')
                      <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" name="confirm-password" type="password" required />
                  </div>

                  <div class="form-group">
                    <label>Money</label>
                     <input class="@error('money') is-invalid @enderror form-control" name="money" type="number" value="{{ old('money') }}" autocomplete="money" autofocus required />
                   
                  </div>
                 
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
                </form>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
  </div>
    <!-- content-wrapper ends -->
@endsection
