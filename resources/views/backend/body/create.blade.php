@extends('layouts.partials.master')
@section('title','Create User')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
     
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
                <form class="form-sample" method="POST" action="{{ route('bodys.store')}}">
                @csrf
                <p class="card-description">
                  <button type="button" class="btn btn-dark btn-lg btn-block">ဘောဒီ/ပေါက်ကြေးများကိုသေချာစွာဂရုစိုက်၍ထည့်ပါ</button>
                </p>
                <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                       <label>အိမ်ကွင်း</label>
                        <input type="text" class="form-control" id="home" name="home" placeholder="အသင်းနာမည်">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>အ၀ေးကွင်း</label>
                     <input type="text" class="form-control" id="away" name="away" placeholder="အသင်းနာမည်">
                           
                    </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>ပေါက်ကြေး</label>
                        <input type="text" class="form-control" id="plus" name="plus" placeholder="ပေါက်ကြေး">
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>ပေါက်ကြေး</label>
                        <input type="text" class="form-control" id="minus" name="minus" placeholder="ပေါက်ကြေး">
                    </div>
                </div>
            </div>

             <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="product">ဂိုးပေါင်း</label>
                        <input type="text" class="form-control" name="gold" id="gold" placeholder="ဂိုးပေါင်း" value="{{ old('name') }}">
                                
                    </div>
                  </div>
                  
            </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
