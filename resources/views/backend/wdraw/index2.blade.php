@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')
@include('function.function')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              {{-- <h4 class="card-title">Default form</h4>
              <p class="card-description">
                Basic form layout
              </p> --}}
                <form class="form-sample" method="POST" action="{{ route('wdraws.store') }}">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <label>Ph No</label>
                        <input class="@error('phno') is-invalid @enderror form-control" name="phno" minlength="9" type="text" value="{{ old('phno') }}" autocomplete="phno" autofocus required />
                        @error('phno')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                    <div class="col">
                        <label>Withdraw Money</label>
                         <input class="@error('wmoney') is-invalid @enderror form-control" name="wmoney" type="number" value="{{ old('wmoney') }}" autocomplete="money" autofocus required />
                         @error('wmoney')
                         <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                    </div>
                    <div class="col">
                      <label>Type</label>
                        <select class="form-control" name="type" id="type">
                            <option></option>
                            <option value="KBZPAY">KBZPAY</option> 
                            <option value="WAVE">WAVE</option> 
                            <option value="CBPAY">CBPAY</option> 

                        </select>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      
        <div class="col-12">
          <div class="table-responsive">
                    <table id="order-listing" class="table table-bordered table-hover nowrap">
                    <thead>
                    <tr>
                        
                        <th>အမည်</th>
                        <th>withdraw money</th>
                        <th>ph no</th>
                        <th>Type</th>
                        <th>Withdraw Time</th>

                    </tr>
                    </thead>
                  <tbody>
                                      @foreach ($wdraws as $wdraw)
                                    <tr>
                                      {{-- <td>{{++$key }}</td> --}}
                                      <td>{{ $user->name }}</td>

                                      <td>{{ $wdraw->wmoney }}</td>
                                      <td>{{ $wdraw->phno }}</td>
                                      <td>{{ ChangeUTCtoSMT($wdraw->created_at,'Asia/Yangon') }}</td>
                                      {{-- <td>{{ $user->email}}</td> --}}
                                    </tr>
                  @endforeach
                                  </tbody>
                
                </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

@endsection
