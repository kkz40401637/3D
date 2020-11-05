<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard| @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/iconfonts/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.png') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">


  <!--roms -->
   
    <link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}" type="text/css"/>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" type="text/css" media="print">



</head>
@include('layouts.partials.nav')
@include('layouts.partials.sidebar')
@include('flash-message')
@yield('content')
@include('layouts.partials.footer')
