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
                 @foreach ($bodysl as $bodys)
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                       
                            <div class="border-top">
                                <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-success" disabled>{{ $bodys->bodya }}</button>
                                <button class="btn btn-primary btn-icon-text">
                                    <i class="fa fa-window-maximize"></i>
                                    {{ $bodys->moneya }}
                                </button>
                                </div>
                            </div>
                         <div class="border-top pt-3">
                            <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-success" disabled>{{ $bodys->bodyb }}</button>
                            <button class="btn btn-primary btn-icon-text">
                                <i class="fa fa-window-maximize"></i>
                                {{ $bodys->moneyb }}
                            </button>
                            </div>
                        </div>
                        <div class="border-top pt-3">
                            <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-success" disabled>{{ $bodys->bodyc }}</button>
                            <button class="btn btn-primary btn-icon-text">
                                <i class="fa fa-window-maximize"></i>
                                {{ $bodys->moneyc }}
                            </button>
                            </div>
                        </div>
                        <div class="border-top pt-3">
                            <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-success" disabled>{{ $bodys->bodyd }}</button>
                            <button class="btn btn-primary btn-icon-text">
                                <i class="fa fa-window-maximize"></i>
                                {{ $bodys->moneyd }}
                            </button>
                            </div>
                        </div>
                        <div class="border-top pt-2">
                            <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-success" disabled>{{ $bodys->bodye }}</button>
                            <button class="btn btn-primary btn-icon-text">
                                <i class="fa fa-window-maximize"></i>
                                {{ $bodys->moneye }}
                            </button>
                            </div>
                        </div>
                        

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
