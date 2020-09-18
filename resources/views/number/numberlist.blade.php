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
                        <label for="number">Add_Number</label>
                        <!-- <input type="number" class="form-control" id="number" name="number" minlength="3" maxlength="3" placeholder="Number"> -->
                        <input name="number"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
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
                <!-- <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Horizontal Form</h4>
                    <p class="card-description">
                        Horizontal form layout
                    </p>
                    <form class="forms-sample">
                        <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Remember me
                            <i class="input-helper"></i></label>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                    </div>
                </div>
                </div> -->
                <div class="col-12 grid-margin stretch-card">
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
                </div>
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      
      </div>
@endsection
