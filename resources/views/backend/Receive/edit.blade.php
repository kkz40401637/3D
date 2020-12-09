@extends('layouts.partials.master')
@section('title','Create User')
@section('content')

    <div class="main-panel">        
      <div class="content-wrapper">
        <div class="row">
          <!--inmoney -->
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">ငွေလက်ခံမည့်အရာများကိုဖြည့်သွင်းပါ</h4>
                  <form class="form-sample" method="POST" action="{{ route('moneys.update', $moneys->id) }}">
                 @csrf
                @method('PATCH')
                  <div class="form-group">
                    <label>ဖုန်းနံပါတ်</label>
                    <input class="form-control" name="phno" type="text" value="{{ $moneys->phno }}"/>
                  </div>
                  <div class="form-group">
                    <label>Type</label>
                     <select class="form-control" name="type"  id="type">
                        <option>{{ $moneys->type }}</option>
                        <option value="KBZPAY">KBZPAY</option> 
                        <option value="WAVE">WAVE</option> 
                        <option value="CBPAY">CBPAY</option> 

                    </select>
                  </div>

                  {{-- <div class="form-group">
                    <label>Scan_icon</label>
                    <input type="file" class="form-control" name="icon" onchange="loadPhoto(event)">
                  </div>
                  <div class="form-group">
                      <img id="photo" height="100" width="100">
           
                  </div> --}}
                  
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
                </form>
                {{-- <script>
                    function loadPhoto(event) {
                        var reader = new FileReader();
                        reader.onload = function () {
                            var output = document.getElementById('photo');
                            output.src = reader.result;
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script> --}}
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
                      
                          <tr>
                              <td><label class="btn btn-success btn-icon-text">{{ $moneys->phno }}</label></td>
                            <td><label class="btn btn-warning btn-icon-text">{{ $moneys->type }}</label></td>
                            
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
