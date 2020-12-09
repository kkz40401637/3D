@extends('layouts.partials.master')
@section('title', 'User')
@section('content')
@include('function.function')
 @role('user')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <div class="row">
        <!--table -->
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">ငွေထုတ်ရန်ဖြည့်ပါ</h4>
                  <form class="form-sample" method="POST" action="{{ route('wdraws.store') }}">
                  @csrf
                  <div class="form-group">
                    <label>ငွေထုတ်ယူမည့်ဖုန်းနံပါတ်ဖြည့်ပါ</label>
                    <input class="@error('phno') is-invalid @enderror form-control" name="phno" minlength="9" type="text" value="{{ old('phno') }}" autocomplete="phno" autofocus required />
                    @error('phno')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>ထုတ်ယူမည့်ငွေပမာဏရေးပါ</label>
                     <input class="@error('wmoney') is-invalid @enderror form-control" name="wmoney" type="number" value="{{ old('wmoney') }}" autocomplete="money" autofocus required />
                     @error('wmoney')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label>ငွေထုတ်ယူမည့်အမျိုးအစားရွေးပါ</label>
                    <select class="form-control" name="type" id="type">
                      <option></option>
                      <option value="KBZPAY">KBZPAY</option> 
                      <option value="WAVE">WAVE</option> 
                      <option value="CBPAY">CBPAY</option>
                      <option value="AYA">AYAPAY</option>
                      <option value="MYTELPAY">MYTELPAY</option> 
                      <option value="MPTMONEY">MPTMONEY</option>
                      <option value="TRUE">TRUEMONEY</option>


                    </select>
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
     
       
          <!--table-->
          <!--table -->
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">အကောင့်ထဲသို့ငွေသွင်းရန်</h4>
                  <form class="form-sample" method="POST" action="{{ route('inmoneys.store') }}">
                  @csrf
                  <div class="form-group">
                    <label>ငွေပမာဏဖြည့်ပါ</label>
                    <input class="@error('money') is-invalid @enderror form-control" name="money" type="number" value="{{ old('money') }}" autocomplete="money" autofocus required />
                     @error('money')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label>ငွေလွဲပြီးရလာသည့်(ID)နံပါတ်ဖြည့်ပါ</label>
                     <input class="@error('textid') is-invalid @enderror form-control" name="textid" type="number" value="{{ old('textid') }}" autocomplete="textid" autofocus required />
                     @error('textid')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                  <div><hr>
                    <label>id နံပါတ်မှန်ကန်ပါက ၂ မိနစ်အတွင်းငွေ၀င်ပါမည်</label>
                  </div>
                </form>
              </div>
            </div>
          </div>
     
       
          <!--table-->
        <!--withdraw -->
        <div class="col-12">
         
          {{-- <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                  <i class="fas fa-rocket"></i>
                  အကောာင်းထဲသို့ငွေသွင်းရန်ဖုန်းနံပါတ်များ
                </h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          ဖုန်းနံပါတ်
                        </th>
                        <th>
                          အမျိုးအစား
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach ($moneys as $money)
                          <tr>
                            <td class="btn btn-primary btn-icon-text">{{ $money->phno }}</td>
                            <td >{{ $money->type }}</td>

                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">မှတ်ချက်</h4>
                      <ul class="solid-bullet-list">
                          <li>
                              <h6>လူကြီးမင်းငွေထည့်ပြီးသည်နှင့်</h6>
                              <h6>ငါးမိနစ်အတွင်း လူကြီးမင်းအကောင့်ထဲသို့ငွေ၀င်ပါမည်။</h6>
                          </li>
                        <li>
                            <h6>လူကြီးမင်းငွေထုတ်သည့်အချိန်မှစ၍</h6>
                            <h6>လူကြီးမင်းထံသို့ငါးမိနစ်အတွင်းငွေ၀င်ပါမည်။</h6>
                        </li>
                        <li>
                            <h6>အကောင့်ထဲသို့ငွေသွင်းရန်ဖုန်းနံပါတ်သည်</h6>
                            <h6>အမြဲတမ်းအပြောင်းအလဲရှိနိုင်ပါသည်။</h6>
                        </li>
                          
                      </ul>
                  </div>
              </div>
          </div> --}}
         
          <!--endtext-->
            <div class="table-responsive"><hr>
                   <table id="example" class="table table-dark" data-ride="datatables">
                  <thead>
                  <tr>
                        
                
                      <th>ထုတ်ငွေစာရင်း</th>
                      <th>ဖုန်းနံပါတ်</th>
                      <th>အမျိုးအစား</th>
                      <th>ငွေထုတ်ချိန်</th>
                      <th>စစ်ဆေးနေသည်</th>

                  </tr>
                  </thead>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach ($wdraws as $wdraw)
                     <tr class="table table-blue"> 
                       <td>{{ $wdraw->wmoney }}/ကျပ်</td>
                       <td>{{ $wdraw->phno }}</td>
                       <td>{{ $wdraw->type }}</td>
                      <td>{{ ChangeUTCtoSMT($wdraw->created_at,'Asia/Yangon') }}</td>
                      <td>
                        <button class="btn btn-primary btn-icon-text">
                          <i class="far fa-check-square btn-icon-prepend"></i>
                          {{ $wdraw->ban_status }}
                        </button>
                      </td>
                     </tr>
                          
                    @endforeach
                  </tbody>
                
              </table>
            </div>

            <!--inmoney -->
            <div class="table-responsive">
                  <table id="order-listing" class="table table-dark">
                  <thead>
                  <tr>
                        
                
                      <th>သွင်းငွေစာရင်း</th>
                      <th>id နံပါတ်</th>
                      <th>ငွေသွင်းချိန်</th>
                      <th>စစ်ဆေးနေသည်</th>

                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($inmoneys as $inmoney)
                     <tr class="table table-blue"> 
                        <td>{{ $inmoney->money }}</td>
                        <td>{{ $inmoney->textid }}</td>
                        <td>{{ ChangeUTCtoSMT($inmoney->created_at,'Asia/Yangon') }}</td>
                       <td>
                        <button class="btn btn-primary btn-icon-text">
                          <i class="far fa-check-square btn-icon-prepend"></i>
                          {{ $inmoney->ban_status }}
                        </button>
                        
                      </td>
                     
                     </tr>
                          
                    @endforeach
                  </tbody>
                
              </table>
            </div>
            <!--endinmoney -->
          </div>
        </div>
      </div>
    </div>
    @endrole
  </div>
  <!-- content-wrapper ends -->

@endsection