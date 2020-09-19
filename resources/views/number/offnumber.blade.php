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
                  <div class="tooltip-inner badge-outline-success">Hot ဏန်များ</div><br>
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

                 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="tooltip-inner badge-outline-danger">ဒိုင်ပိတ်ဂဏန်များ</div><br>
                  <div class="table-responsive">
                    <table class="table">
                
                      <tbody>
                       @foreach($offnumbers as $offnumber)
                        <tr>
                           <label class="badge badge-outline-danger badge-pill"><h2>{{ $offnumber->offnumber }}</h2> </label>&nbsp;
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
