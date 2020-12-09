@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')
@include('function.function')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <div class="row">
         
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table table-bordered table-hover nowrap">
                <thead>
                  <tr>
                    
                    <th>နံပါတ်</th>
                    <th>ငွေ</th>
                    <th>နံပါတ်</th>
                    <th>ငွေ</th>
                    <th>နံပါတ်</th>
                    <th>ငွေ</th>
                    <th>အချိန်</th>
                   
                  </tr> 
                </thead>
                <tbody>
                    @foreach ($towds as $towd)  
                    <tr>
                      <td style="background-color:#EDD4F8">{{ $towd->towda }}</td>
                      <td style="background-color:#FCB27B">{{ $towd->moneya }}</td>
                      <td style="background-color:#EDD4F8">{{ $towd->towdb }}</td>
                      <td style="background-color:#FCB27B">{{ $towd->moneyb }}</td>
                      <td style="background-color:#EDD4F8">{{ $towd->towdc }}</td>
                      <td style="background-color:#FCB27B">{{ $towd->moneyc }}</td>
                      <td style="background-color:#839192 "> {{ ChangeUTCtoSMT($towd->created_at,'Asia/Yangon') }} </code></td>
                     
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