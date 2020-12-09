@extends('layouts.partials.master')
@section('title','Edit User')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit User</h4>
              <form class="form-sample" method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PATCH')
                <p class="card-description">
                  User info
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="name"type="text" value="{{ $user->name }}" required  disabled/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                    {{-- <label class="col-sm-3 col-form-label">Email</label> --}}
                    <div class="col-sm-9">
                      {{-- <input class="@error('email') is-invalid @enderror form-control" name="email" minlength="2" type="text" value="{{ $user->email }}" autocomplete="email" required />
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror --}}
                    </div>
                  </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                       <label class="col-sm-3 col-form-label">Money</label>
                      <div class="col-sm-9">
                        <input class="@error('name') is-invalid @enderror form-control" name="money" type="number" value="{{ $user->money }}" autocomplete="money" autofocus required />
                        @error('money')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                    {{-- <label class="col-sm-3 col-form-label">Confirm Password</label> --}}
                    <div class="col-sm-9">
                        {{-- <input class="form-control" name="confirm-password" type="password" required /> --}}
                    </div>
                  </div>
                </div>
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
@endsection
