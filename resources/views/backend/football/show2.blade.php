@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')
@include('function.function')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <h4 class="card-title">
      {{-- {{ $user->name }} --}}
      <div class="card-body">
        <div class="row">
         
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table table-bordered table-hover nowrap">
                <thead>
                  <tr>
                    <th>အမည်</th>
                    <th>အသင်း</th>
                    <th>ငွေ</th>
                    <th>အချိန်</th>
                    <th>ဖျက်မယ်</th>
                  </tr> 
                </thead>
                <tbody>
                     @foreach ($users as $user)
                     @foreach ($user->drives as $drive)        
                    <tr>
                          <td>{{ $user->name}}</td>
                          <td><div class="d-flex content-between">
                               <button class="btn btn-primary btn-icon-text" disabled>
                                1&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->foot }}</button>&nbsp;
                                <button class="btn btn-primary btn-icon-text" disabled>
                                2&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->foota }}</button>
                              </div><br>
                            
                              <div class="d-flex content-between">
                                <button class="btn btn-primary btn-icon-text" disabled>
                                3&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->footb }}</button>&nbsp;
                                <button class="btn btn-primary btn-icon-text" disabled>
                                4&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->footc }}</button>
                              </div><br>
                             
                              <div class="d-flex content-between">
                                <button class="btn btn-primary btn-icon-text" disabled>
                                5&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->footd }}</button>&nbsp;
                                <button class="btn btn-primary btn-icon-text" disabled>
                                6&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->foote }}</button>
                              </div><br>
                          
                              <div class="d-flex content-between">
                                <button class="btn btn-primary btn-icon-text" disabled>
                                7&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->footf }}</button>&nbsp;
                                <button class="btn btn-primary btn-icon-text" disabled>
                                8&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->footg }}</button>
                                </div><br>
                            
                              <div class="d-flex content-between">
                                 <button class="btn btn-primary btn-icon-text"  disabled>
                                9&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->footh }}</button>&nbsp;
                                <button class="btn btn-primary btn-icon-text" disabled>
                                10&nbsp;<i class="far fa-futbol"></i>&nbsp;{{ $drive->footi }}</button>
                              </div><br>
                              </td>
                              <td> 
                                <button class="btn btn-primary btn-icon-text" disabled>
                                <i class="fa fa-window-maximize"></i>
                                {{ $drive->money }}/ကျပ်မောင်း
                                </button>
                              </td>          
                          <td>
                            <label class="badge badge-info">{{ ChangeUTCtoSMT($drive->created_at,'Asia/Yangon') }} </label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                    @endforeach
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
