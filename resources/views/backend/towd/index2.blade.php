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
                    <th>အမည်</th>
                    <th>နံပါတ်</th>
                    <th>ငွေ</th>
                    <th>နံပါတ်</th>
                    <th>ငွေ</th>
                    <th>နံပါတ်</th>
                    <th>ငွေ</th>
                    <th>အချိန်</th>
                    <th>မှတ်ချက်</th>
                    <th>ဖျက်မယ်</th>
                  </tr> 
                </thead>
                <tbody>
                   @foreach ($users as $user)
                      @foreach ($user->towds as $towd)
                       
                    <tr>
                      <td style="background-color:#85929E">{{ $user->name }}</td>
                      <td style="background-color:#A9DFBF">{{ $towd->towda }}</td>
                      <td style="background-color:#EC7063">{{ $towd->moneya }}</td>
                      <td style="background-color:#A9DFBF">{{ $towd->towdb }}</td>
                      <td style="background-color:#EC7063">{{ $towd->moneyb }}</td>
                      <td style="background-color:#A9DFBF">{{ $towd->towdc }}</td>
                      <td style="background-color:#EC7063">{{ $towd->moneyc }}</td>
                      <td style="background-color:#839192 "> {{ ChangeUTCtoSMT($towd->created_at,'Asia/Yangon') }} </code></td>
                      <td><a  href="{{ route('users.edit',$user->id)}}"><button type="submit" class="btn btn-primary btn-lg btn-block">
                                          
                        ငွေဖြည့်မယ်
                      </button></a>
                    
                    </td>
                      <td><a  href="{{ route('users.edit',$user->id)}}"><button type="submit" class="btn btn-danger btn-lg btn-block">
                                          
                          ဖျက်မယ်
                        </button></a>
                    
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