@extends('layouts.partials.master')
@section('title', 'Dashboard')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <!-- <div class="page-header">
            <h3 class="page-title">
                Form elements
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
          </div> -->
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <!-- <h4 class="card-title">သေချာစွာစစ်ဆေး၍ထည့်ပါ</h4> -->
                  <h2 class="badge badge-outline-danger badge-pill">သေချာစွာစစ်ဆေး၍ထည့်ပါ</h2>
                    <!-- <p class="card-description">
                        Basic form layout
                    </p> -->
                    <form role="form" action="{{ route('numberlist.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="form-group">
                        <label for="number">Hot_umber</label>
                        <!-- <input type="number" class="form-control" id="number" name="number" minlength="3" maxlength="3" placeholder="Number"> -->
                        <input name="number"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(100, this.maxLength);"
                            type = "number" class="form-control"
                            maxlength = "3"
                        />
                        
                        </div>
                   
                        <div class="form-group">
                        <div class="form-check form-check-flat form-check-primary">
                            
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                    </div>
                </div>
                </div>


                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    
                  <h2 class="badge badge-outline-danger badge-pill">ပိတ်ဂဏန်ကို သေချာစွာစစ်ဆေး၍ထည့်ပါ</h2>
                    <!-- <p class="card-description">
                        Basic form layout
                    </p> -->
                    <form role="form" action="{{ route('offnumber.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="form-group">
                        <label for="offnumber">Off_Number</label>
                        <!-- <input type="number" class="form-control" id="number" name="number" minlength="3" maxlength="3" placeholder="Number"> -->
                        <input name="offnumber"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(100, this.maxLength);"
                            type = "number" class="form-control"
                            maxlength = "3"
                        />
                        
                        </div>
                   
                        <div class="form-group">
                        <div class="form-check form-check-flat form-check-primary">
                            
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                    </div>
                </div>
                </div>
                
                <!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">On_Number</h4>
                  <div class="table-responsive">
                    <table class="table">
                
                      <tbody>
                       @foreach($threeds as $threed)
                        <tr>
                           <label class="badge badge-outline-success badge-pill"><h2>{{ $threed->number }}</h2> </label>&nbsp;
                        </tr>
                        @endforeach
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div> -->
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      
      </div>
@endsection
