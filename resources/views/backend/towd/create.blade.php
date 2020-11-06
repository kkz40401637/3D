@extends('layouts.partials.master')
@section('title', 'Users')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <button class="btn btn-dark btn-lg btn-block">တစ်ကွက်လျင်အနည်းဆုံး၂၀၀ မှ စ၍ဆော့နိုင်သည်</button>
    <div class="card">
      <div class="card-body">
        <div class="row">
          @role('user')
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('towds.store') }}" method="post" enctype="multipart/form-data">
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
                        
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="towda" name="towda" placeholder="ထိုးမည့်ဂဏန်းရိုက်ထည့်ပါ(၁)">
                            
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="moneya" name="moneya" value="No" placeholder="ငွေပမာဏရိုက်ထည့်ပါ(၁)">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="towdb" name="towdb" placeholder="ထိုးမည့်ဂဏန်းရိုက်ထည့်ပါ(၂)">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="moneyb" name="moneyb" placeholder="ငွေပမာဏရိုက်ထည့်ပါ(၂)">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="towdc" name="towdc" placeholder="ထိုးမည့်ဂဏန်းရိုက်ထည့်ပါ(၃)">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="moneyc" name="moneyc" placeholder="ငွေပမာဏရိုက်ထည့်ပါ(၃)">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="towdd" name="towdd" placeholder="ထိုးမည့်ဂဏန်းရိုက်ထည့်ပါ(၄)">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="moneyd" name="moneyd" placeholder="ငွေပမာဏရိုက်ထည့်ပါ(၄)">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="towde" name="towde" placeholder="ထိုးမည့်ဂဏန်းရိုက်ထည့်ပါ(၅)">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number" class="form-control" id="moneye" name="moneye" placeholder="ငွေပမာဏရိုက်ထည့်ပါ(၅)">
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
