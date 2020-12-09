@extends('layouts.partials.master')
@section('title','Create User')
@section('content')

    <div class="main-panel">        
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">ထိုးသာအသစ်များကိုစာရင်သွင်းမယ်</h4>
                  <form class="form-sample" method="POST" action="{{ route('users.store') }}">
                  @csrf
                  <div class="form-group">
                    <label>Username</label>
                    <input class="@error('name') is-invalid @enderror form-control" name="name" minlength="2" type="text" value="{{ old('name') }}" autocomplete="name" autofocus required />
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                     <input class="@error('email') is-invalid @enderror form-control" name="email" minlength="2" type="text" value="{{ old('email') }}" autocomplete="username" required />
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                     <input class="form-control" name="password" type="password" required />
                    @error('password')
                      <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" name="confirm-password" type="password" required />
                  </div>
                   
                  <div class="form-group">
                    <label>Phone</label>
                    <input class="@error('phno') is-invalid @enderror form-control" name="phno" minlength="9" type="text" placeholder="Your Phone" value="{{ old('phno') }}" autocomplete="phno" autofocus required />
                    @error('phno')
                      <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                  <div class="form-group">
                    <label>Money</label>
                     <input class="@error('money') is-invalid @enderror form-control" name="money" type="number" value="{{ old('money') }}"  autocomplete="money" autofocus required />
                   
                  </div>
                 
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
                </form>
              </div>
            </div>
          </div>

          <!--inmoney -->
          {{-- <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
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

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Scan_icon</label>
                    <input type="file" class="form-control" name="icon" onchange="loadPhoto(event)">
                  </div>
                  <div class="form-group">
                      <img id="photo" height="100" width="100">
           
                  </div>
                  
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
                </form>
                <script>
                    function loadPhoto(event) {
                        var reader = new FileReader();
                        reader.onload = function () {
                            var output = document.getElementById('photo');
                            output.src = reader.result;
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
              </div>
            </div>
          </div> --}}
          <!--endmoney-->
        
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
  </div>
    <!-- content-wrapper ends -->
@endsection
