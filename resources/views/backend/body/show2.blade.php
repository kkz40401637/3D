@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')
@include('function.function')
@role('admin')
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
                    <th>အသင်း</th>
                    <th>ငွေ</th>
                    <th>အသင်း</th>
                    <th>ငွေ</th>
                    <th>အသင်း</th>
                    <th>ငွေ</th>
                    <th>အချိန်</th>
                    <th>ငွေဖြည့်</th>
                    <th>ဖျက်မယ်</th>
                  </tr> 
                </thead>
                <tbody>
                   @foreach ($users as $user)
                      @foreach ($user->bodyls as $bodys)
                    
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td style="background-color:#FF0000">{{ $bodys->bodya }}</td>
                      <td style="background-color:#54ff1f">{{ $bodys->moneya }}</td>
                      <td style="background-color:#FF0000">{{ $bodys->bodyb }}</td>
                      <td style="background-color:#54ff1f">{{ $bodys->moneyb }}</td>
                      <td style="background-color:#FF0000">{{ $bodys->bodyc }}</td>
                      <td style="background-color:#54ff1f">{{ $bodys->moneyc }}</td>
                      <td style="background-color:#063ef6">{{ ChangeUTCtoSMT($bodys->created_at,'Asia/Yangon') }}</td>
                        <td>
                            <a  href="{{ route('users.edit',$user->id)}}"><button class="btn btn-outline-primary">View</button></a>
                        </td>
                  
                        <td>
                            
                                 <form action="{{ route('bodysl.destroy',$bodys->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                            
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
    @endrole
  </div>
  <!-- content-wrapper ends -->

@endsection
