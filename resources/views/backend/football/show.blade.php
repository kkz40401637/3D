@extends('layouts.partials.master')
@section('title', 'Dashboard')
@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h4 class="card-title">
                     @if(Auth()->user()->hasRole('user'))
                        {{ Auth()->user()->name }}၏မောင်းစာရင်းများ
                    @endif</h4>
                  </h4>
          </div>
  
            <div class="row">
                @foreach ($drives as $drive)
                <div class="col-md-3 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                        <div class="border">
                            <div class="d-flex justify-content-belotween">
                            {{-- <button class="btn btn-outline-success" disabled><i>အမှတ်စဥ်</i>{{ $drive->id }}</button> --}}
                            <button class="btn btn-primary btn-icon-text">
                                <i class="fa fa-window-maximize"></i>
                                {{ $drive->money }}/ကျပ်မောင်း
                            </button>
                            </div>
                        </div>
                        <br>
                        <div class="border">
                            <div class="d-flex justify-content-between">
                              1
                            <button class="btn btn-outline-success" disabled>{{ $drive->foot }}</button>
                            </div>
                        </div>
                       <div class="border">
                          <div class="d-flex justify-content-between">
                            2
                          <button class="btn btn-outline-success" disabled>{{ $drive->foota }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            3
                          <button class="btn btn-outline-success" disabled>{{ $drive->footb }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            4
                          <button class="btn btn-outline-success" disabled>{{ $drive->footc }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            5
                          <button class="btn btn-outline-success" disabled>{{ $drive->footd }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            6
                          <button class="btn btn-outline-success" disabled>{{ $drive->foote }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            7
                          <button class="btn btn-outline-success" disabled>{{ $drive->footf }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            8
                          <button class="btn btn-outline-success" disabled>{{ $drive->footg }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            9
                          <button class="btn btn-outline-success" disabled>{{ $drive->footh }}</button>
                          </div>
                      </div>
                      <div class="border">
                          <div class="d-flex justify-content-between">
                            10
                          <button class="btn btn-outline-success" disabled>{{ $drive->footi }}</button>
                          </div>
                      </div><br>
                      
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
  
        <!-- partial -->
      </div>
</div>
@endsection
