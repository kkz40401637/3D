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
                    <th>နံပါတ်</th>
                    <th>ငွေ</th>
                    <th>အချိန်</th>
                    <th>မှတ်ချက်</th>
                    <th>ဖျက်မယ်</th>
                  </tr> 
                </thead>
                <tbody>
                   @foreach ($users as $user)
                      @foreach ($user->reports as $report)
                       
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td style="background-color:#FF0000">{{ $report->number }}</td>
                      <td style="background-color:#54ff1f">{{ $report->ammount }}MMK</td>
                      <td style="background-color:#839192 ">{{ ChangeUTCtoSMT($report->created_at,'Asia/Yangon') }}</td>
                      <td><a  href="{{ route('users.edit',$user->id)}}"><button type="submit" class="btn btn-primary btn-lg btn-block">
                                          
                        ငွေဖြည့်မယ်
                      </button></a>
                    
                    </td>
                      <td>
                         @role('admin')
                             <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-danger btn-lg btn-block">ဖျက်မယ်</button>
                        </form>
                          @endrole
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
