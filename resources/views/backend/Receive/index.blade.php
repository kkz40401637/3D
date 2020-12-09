@extends('layouts.partials.master')
@section('title','Create')
@section('content')
@include('function.function')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          
          <!--inmoney -->
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                  <i class="fas fa-rocket"></i>
                   ငွေထုတ်ထားသူများစာရင်း
                </h4>
                <div class="table-responsive">
                     <table id="example" class="table table-striped m-b-none" data-ride="datatables">
                    <thead>
                      <tr>
                         <th>နာမည်</th>
                        <th>ငွေပမာဏ</th>
                        <th>ဖုန်းနံပါတ်</th>
                        <th>အမျိုးအစား</th>
                        <th>ငွေထုတ်ချိန်</th>
                        <th>အတည်ပြုမယ်</th>
                      </tr>
                    </thead>
                     <tbody>
                      @foreach ($users as $user)
                        @foreach ($user->wdraws as $wdraw)
                      <tr class="table-danger">
                        <td>{{ $user->name }}</td>
                        <td>{{ $wdraw->wmoney }}</td>
                        <td>{{ $wdraw->phno }}</td>
                        <td>{{ $wdraw->type }}</td>
                        <td>{{ ChangeUTCtoSMT($wdraw->created_at,'Asia/Yangon') }}</td>
                       <td>
                        

                         <form id="delete-form-{{ $wdraw->id }}" method="post" action="{{ route('wdraws.destroy', $wdraw->id) }}" class="d-inline" method="post" >
                            {{csrf_field()}}
                            {{method_field('Delete')}}
                            
                            
                          <button type="submit" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-user"></i>                      
                            {{ $wdraw->ban_status }}
                          </button>
                        </form>
                        
                       </td>
                      
                      </tr>
                    @endforeach
                    @endforeach


                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--endmoney-->

          <!--inmoney -->
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                  <i class="fas fa-rocket"></i>
                  အကောင့်ထဲသို့ငွေးသွင်းထားသူများစာရင်း
                </h4>
                <div class="table-responsive">
                  <table id="example" class="table table-striped m-b-none" data-ride="datatables">
                    <thead>
                      <tr>
                         <th>နာမည်</th>
                        <th>သွင်းငွေ</th>
                        <th>အိုင်ဒီနံပါတ်</th>
                        <th>ငွေသွင်းချိန်</th>
                        <th>စစ်ဆေး</th>
                        <th>ငွေထည့်မည်</th>
                      </tr>
                    </thead>
                     <tbody>
                      @foreach ($users as $user)
                        @foreach ($user->inmoneys as $inmoney)
                        
                      <tr class="table-warning">
                        <td>{{ $user->name }}</td>

                         <td class="table-danger">{{ $inmoney->money }}</td>
                        <td>{{ $inmoney->textid }}</td>
                        <td>{{ ChangeUTCtoSMT($inmoney->created_at,'Asia/Yangon') }}</td>
                       
                    
                         <td>
                          <form id="delete-form-{{ $inmoney->id }}" method="post" action="{{ route('inmoneys.destroy',$inmoney->id) }}" class="d-inline" method="post" >
                              {{csrf_field()}}
                              {{method_field('Delete')}}
                            
                            
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                              <i class="fa fa-user"></i>                      
                              {{ $inmoney->ban_status }}
                            </button>
                          </form>
                         </td>
                        <td><a  href="{{ route('users.edit',$user->id)}}"><button type="submit" class="btn btn-primary btn-lg btn-block">
                          <i class="fa fa-user"></i>                      
                          ငွေဖြည့်မယ်
                        </button></a></td>
                      </tr>
                    @endforeach
                    @endforeach


                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--endmoney-->
          <!--inmoney -->
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card" >
              <div class="card-body">
                <h4 class="card-title">ငွေလက်ခံမည့်အရာများကိုဖြည့်သွင်းပါ</h4>
                  <form class="form-sample" method="POST" action="{{ route('moneys.store') }}">
                  @csrf
                  <div class="form-group">
                    <label>ဖုန်းနံပါတ်</label>
                    <input name="phno" required="phno" aria-invalid="true"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    type = "number" class="form-control"
                    maxlength = "11"/>
                  </div>
                  <div class="form-group">
                    <label>Type</label>
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
                  <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
                </form>
          
              </div>
            </div>
          </div>
          <!--endmoney-->
          <!--table -->
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                  <i class="fas fa-rocket"></i>
                   ငွေလက်ခံရန်ဖုန်းနံပါတ်များ
                </h4>
                <div class="table-responsive">
                  <table class="table" border=2 width=100>
                    <thead>
                      <tr>
                        <th>ဖုန်းနံပါတ်</th>
                        <th>အမျိုးအစား</th>
                        <th>ပြင်မယ်</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach ($moneys as $money)
                          <tr>
                            <td><label class="btn btn-success btn-icon-text">{{ $money->phno }}</label></td>
                            <td><label class="btn btn-warning btn-icon-text">{{ $money->type }}</label></td>
                            <td><a class="btn btn-danger btn-icon-text" href="{{ route('moneys.edit',$money->id)}}">ပြင်မယ်<i class="fas fa-pencil-alt btn-icon-append"></i></a></td>
                          </tr>
                      @endforeach
                      </tr>
                       
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--endtable -->
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
  </div>
    <!-- content-wrapper ends -->
@endsection