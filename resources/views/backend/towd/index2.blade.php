@extends('layouts.partials.master')
@section('title', 'Dashboard')
@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h4 class="card-title">
                     @if(Auth()->user()->hasRole('user'))
                        {{ Auth()->user()->name }}/ထိုးထားသောနှစ်လုံးစာရင်း
                    @endif</h4>
            </h4>
          </div>
  
            <div class="row">
                @foreach ($towds as $towd)
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                            <div class="border-top">
                                <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-success" disabled>{{ $towd->towda }}</button>
                                <button class="btn btn-primary btn-icon-text">
                                    <i class="fa fa-window-maximize"></i>
                                    {{ $towd->moneya }}
                                </button>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-success" disabled>{{ $towd->towdb }}</button>
                                <button class="btn btn-primary btn-icon-text">
                                    <i class="fa fa-window-maximize"></i>
                                    {{ $towd->moneyb }}
                                </button>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-success" disabled>{{ $towd->towdc }}</button>
                                <button class="btn btn-primary btn-icon-text">
                                    <i class="fa fa-window-maximize"></i>
                                    {{ $towd->moneyc }}
                                </button>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-success" disabled>{{ $towd->towdd }}</button>
                                <button class="btn btn-primary btn-icon-text">
                                    <i class="fa fa-window-maximize"></i>
                                    {{ $towd->moneyd }}
                                </button>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-success" disabled>{{ $towd->towde }}</button>
                                <button class="btn btn-primary btn-icon-text">
                                    <i class="fa fa-window-maximize"></i>
                                    {{ $towd->moneye }}
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
