@extends('layouts.partials.master')
@section('title', 'Users')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-dark btn-lg btn-block">အနည်းဆုံး(၅)သင်းမှစ၍မောင်းလောင်းနိုင်သည်/အသင်းထပ်အသင်းမှားဒိုင်စားမည်/ဘော်ဒီဂိုးပေါင်း ၂ သင်းထက်ပို၍မရပါ</button>
        
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th class="font-weight-bold">ကြေး</th>
                            <th class="font-weight-bold">အိမ်ကွင်း</th>
                            <th class="font-weight-bold">ဂိုးပေါင်း</th>
                            <th class="font-weight-bold">အ၀ေးကွင်း</th>
                            <th class="font-weight-bold">ကြေး</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach ($footballs as $football)
                            <tr>
                                <td>
                                <h4><span class="badge badge-danger">{{ $football->plus }}</span></h4>
                                <td>
                                <h4><span class="badge badge-success">{{ $football->home }}</span></h4>
                                </td>
                                <td>
                                <h4><span class="badge badge-info badge-pill">{{ $football->gold }}</span></h4>
                                </td>
                                <td>
                                <h4><span class="badge badge-success">{{ $football->away }}</span></h4>
                                </td>
                                <td>
                                <h4><span class="badge badge-danger">{{ $football->minus }}</span></h4>
                                </td>

                               <td>
                               @hasanyrole('superadmin|admin')
                              <button class="btn btn-outline-primary">ဖျက်မယ်</button>
                               @endhasanyrole
                              
                            </td>
                            </tr>
                            @endforeach
                                       
                        </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          @role('user')
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('drives.store') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field()}}
                      <div class="form-group">
                             <label for="customer">@if(Auth()->user()->hasRole('user'))
                               လက်ကျန်ငွေ ( {{  Auth()->user()->money  }} )ကျပ်
                            @endif</label>
                            @if(Auth()->user()->hasRole('user'))
                              <select class="form-control" name="user_id">
                                <option>{{ Auth()->user()->name }}</option>
                              </select>
                            @endif
                        </div>
                        
                        
                        <div class="form-group">
                            <select class="form-control" name="foot" id="foot" value="{{ old('foot') }}">
                                @foreach ($footballs as $football)
                                <option style="background: red">Null</option>
                                <option>{{ $football->home }}</option>
                                <option>{{ $football->away }}</option>
                                <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                <option>{{ $football->home }}/ဂိုးအောက်</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="foota" id="foota" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>
                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                        
                                         @endforeach
                                        </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="footb" id="footb" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                    
                                         @endforeach
                                        </select>
                        </div>
                       <div class="form-group">
                             <select class="form-control" name="footc" id="footc" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                         @endforeach
                                        </select>


                        </div>
                        <div class="form-group">
                            <select class="form-control" name="footd" id="footd" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                         @endforeach
                                        </select>
                        </div>
                       <div class="form-group">
                            <select class="form-control" name="foote" id="foote" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                         @endforeach
                                        </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="footf" id="footf" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                       
                                         @endforeach
                                        </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="footg" id="footg" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                         @endforeach
                                        </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="footh" id="footh" value="{{ old('foot') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>
                                         @endforeach
                                        </select>
 
                        </div>
                        <div class="form-group">
                               <select class="form-control" name="footi" id="footi" value="{{ old('footi') }}">
                                        @foreach ($footballs as $football)
                                        <option style="background: red">Null</option>
                                        <option>{{ $football->home }}</option>
                                         <option>{{ $football->away }}</option>

                                         <option>{{ $football->home }}/ဂိုးပေါ်</option>
                                         <option>{{ $football->home }}/ဂိုးအောက်</option>

                                         @endforeach
                                        </select>
                        </div>
                        
                        <div class="form-group">
                             <input type="number" class="form-control" id="money" name="money" placeholder="ငွေပမာဏရိုက်ထည့်ပါ">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                            
                    </form>
                </div>
              </div>
            </div>
          </div>
        @endrole
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

@endsection
