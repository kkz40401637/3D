@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')
@include('function.function')
@role('user')
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
                    <th>အသင်း</th>
                    <th>ငွေ</th>
                    <th>အသင်း</th>
                    <th>ငွေ</th>
                    <th>အသင်း</th>
                    <th>ငွေ</th>
                    <th>အချိန်</th>
                   
                  </tr> 
                </thead>
                <tbody>
                     @foreach ($bodyls as  $bodys)
                    
                    <tr>
                      <td style="background-color:#EDD4F8 ">{{ $bodys->bodya }}</td>
                      <td style="background-color:#FCB27B"> {{ $bodys->moneya }}</td>
                      <td style="background-color:#EDD4F8 ">{{ $bodys->bodyb }}</td>
                      <td style="background-color:#FCB27B">{{ $bodys->moneyb }}</td>
                      <td style="background-color:#EDD4F8 ">{{ $bodys->bodyc }}</td>
                      <td style="background-color:#FCB27B"> {{ $bodys->moneyc }}</td>
                      <td style="background-color:#B3F9ED">{{ ChangeUTCtoSMT($bodys->created_at,'Asia/Yangon') }}</td>
                     
                    </tr>
                 
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        
         
        </div>
      </div>
    </div>
    @endrole
  </div>
  <!-- content-wrapper ends -->

@endsection
