@extends('layouts.partials.master')
@section('title', 'Users')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-dark btn-lg btn-block">တစ်သင်းလျင်အနည်းဆုံး(၁၀၀၀)မှစ၍ အများဆုံး(၅၀၀၀၀၀)သိန်းအထိလောင်းနိုင်ပါသည်</button>
        
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table class="table">
                       <thead>
                            <tr>
                                {{-- <th class="font-weight-bold">နံပါတ်</th> --}}
                                <th class="font-weight-bold">ကြေး</th>
                                <th class="font-weight-bold">အိမ်ကွင်း</th>
                                <th class="font-weight-bold">ဂိုးပေါင်း</th>
                                <th class="font-weight-bold">အ၀ေးကွင်း</th>
                                <th class="font-weight-bold">ကြေး</th>
                            </tr>
                        </thead>
                      <tbody>
                           @foreach ($bodys as $body)
                            <tr>
                                {{-- <td>{{ $body->id }}</td> --}}
                                <td>
                                <h4><span class="badge badge-danger">{{ $body->plus }}</span></h4>
                                <td>
                                <h4><span class="badge badge-success">{{ $body->home }}</span></h4>
                                </td>
                                <td>
                                <h4><span class="badge badge-info badge-pill">{{ $body->gold }}</span></h4>
                                </td>
                                <td>
                                <h4><span class="badge badge-success">{{ $body->away }}</span></h4>
                                </td>
                                <td>
                                <h4><span class="badge badge-danger">{{ $body->minus }}</span></h4>
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
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('bodysl.store') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field()}}
                      <div class="form-group">
                             <label for="customer">အကောင့်နာမည်</label>
                            @if(Auth()->user()->hasRole('user'))
                              <select class="form-control" name="user_id">
                                <option>{{ Auth()->user()->name }}</option>
                              </select>
                            @endif
                        </div>
                        
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <select class="form-control" name="bodya" id="bodya" value="{{ old('bodya') }}">
                                @foreach ($bodys as $body)
                                  <option style="background: red">Null</option>
                                  <option>{{ $body->home }}</option>
                                  <option>{{ $body->away }}</option>
                                  <option>{{ $body->home }}/ဂိုပေါ်</option>
                                  <option>{{ $body->home }}/ဂိုးအောက်</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="moneya" name="moneya" placeholder="ငွေပမာဏရိုက်ထည့်ပါ">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <select class="form-control" name="bodyb" id="bodyb" value="{{ old('bodyb') }}">
                                @foreach ($bodys as $body)
                                  <option style="background: red">Null</option>
                                  <option>{{ $body->home }}</option>
                                  <option>{{ $body->away }}</option>
                                  <option>{{ $body->home }}/ဂိုပေါ်</option>
                                  <option>{{ $body->home }}/ဂိုးအောက်</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="moneyb" name="moneyb" placeholder="ငွေပမာဏရိုက်ထည့်ပါ">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <select class="form-control" name="bodyc" id="bodyc" value="{{ old('bodyc') }}">
                                @foreach ($bodys as $body)
                                  <option style="background: red">Null</option>
                                  <option>{{ $body->home }}</option>
                                  <option>{{ $body->away }}</option>
                                  <option>{{ $body->home }}/ဂိုပေါ်</option>
                                  <option>{{ $body->home }}/ဂိုးအောက်</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="moneyc" name="monec" placeholder="ငွေပမာဏရိုက်ထည့်ပါ">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <select class="form-control" name="bodyd" id="bodyd" value="{{ old('bodyd') }}">
                                @foreach ($bodys as $body)
                                  <option style="background: red">Null</option>
                                  <option>{{ $body->home }}</option>
                                  <option>{{ $body->away }}</option>
                                  <option>{{ $body->home }}/ဂိုပေါ်</option>
                                  <option>{{ $body->home }}/ဂိုးအောက်</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="moneyd" name="moneyd" placeholder="ငွေပမာဏရိုက်ထည့်ပါ">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <select class="form-control" name="bodye" id="bodye" value="{{ old('bodye') }}">
                                @foreach ($bodys as $body)
                                  <option style="background: red">Null</option>
                                  <option>{{ $body->home }}</option>
                                  <option>{{ $body->away }}</option>
                                  <option>{{ $body->home }}/ဂိုပေါ်</option>
                                  <option>{{ $body->home }}/ဂိုးအောက်</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="moneye" name="moneye" placeholder="ငွေပမာဏရိုက်ထည့်ပါ">
                          </div>
                        </div>
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
