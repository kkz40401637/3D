<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('js/fuelux/fuelux.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('js/select2/theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" type="text/css" media="print">



    <!--dashboard--->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Custom Css -->
    
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!----->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>



    <!--[if lt IE 9]>
    <script src="{{ asset('js/ie/html5shiv.js') }}"></script>
    <script src="{{ asset('js/ie/respond.min.js') }}"></script>
    <script src="{{ asset('js/ie/excanvas.js') }}"></script>
    <![endif]-->
</head>
<body>
<section class="vbox">
    <header class="bg-dark dk header">
        <div class="navbar-header aside-md">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="fa fa-bars"></i>
            </a>
             <!-- <a href="#" class="navbar-brand" style="color: #fb6b5b; font-weight: 200" data-toggle="fullscreen">Grace Myanmar <span style="font-size: 15px; color: rgb(101, 189, 119); font-weight: 900">IT-Solution</span></a> -->
            <a href="#" class="navbar-brand" style="color: #fb6b5b; font-weight: 200" data-toggle="fullscreen">Grace Myanmar </a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                <i class="fa fa-cog"></i>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
            <!-- <li class="hidden-xs"><a href="#" class="dropdown-toggle"> <b>  {{ Auth::user()->name }} <span class="caret"></span></b></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li>
                        <a href="{{ url('password') }}">Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" >Logout</a>
                    </li>
                </ul>
            </li> -->

        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-dark lter aside-md hidden-print" id="nav">
                <section class="vbox">
                    <header class="header bg-primary lter text-center clearfix">

                        <div class="btn-group">
                            <a  type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-user"></i></a>
                            <div class="btn-group hidden-nav-xs">
                                <a href="" type="button" class="btn btn-sm btn-primary dropdown-toggle">
                                     {{ Auth::user()->name }}
                                </a>
                            </div>
                        </div>
                    </header>
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <ul class="nav">
                                    <li  class="active">
                                        <a href="/home"   class="active">
                                            <i class="fa fa-dashboard icon">
                                                <b class="bg-danger"></b>
                                            </i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pos.index') }}">
                                            <i class="fa fa-clock-o">
                                                <b class="bg-primary"></b>
                                            </i>
                                            <span>POS</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times-circle">
                                                <b class="bg-info"></b>
                                            </i>
                                            <span>နှစ်ချုပ်စာရင်း</span>
                                        </a>
                                    </li>

                                    <li >
                                        <a href=""  >
                                            <i class="fa fa-shopping-cart icon">
                                                <b class="bg-warning"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                              <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>Order</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li >
                                                <a href="{{ route('order.index') }}" >
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>All Orders</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="{{ route('order.create') }}" >
                                                    <!-- <i class="fa fa-angle-right"></i> -->
                                                    <i class="fa fa-plus"></i>
                                                    <span>Add Order</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                
                             

                                    <li >
                                        <a href=""  >
                                            <i class="fa fa-suitcase icon">
                                                <b class="bg-success"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                              <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>ကုန်ပစ္စည်းများ</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li >
                                                <a href="{{ route('product.index')}}" >
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>All Product</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="{{ route('product.create') }}" >
                                                   <i class="fa fa-plus"></i>
                                                    <span>Add Product</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li >
                                        <a href=""  >
                                            <i class="fa fa-bars icon">
                                                <b class="bg-info"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>Profile</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li >
                                                <a href="" >
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Change Password</span>
                                                </a>
                                            </li>
                                            <!-- <li >
                                                <a href="" >
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Logout</span>
                                                </a>
                        
                                            </li> -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    <i class="nav-icon fa fa-power-off red red"></i>
                                                    <p>
                                                        {{ __('Logout') }}
                                                    </p>
                                                </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        </ul>
                                    </li>
                                    
                                    
                                     
                                </ul>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>

                    <footer class="footer lt hidden-xs b-t b-dark">
                        <div id="chat" class="dropup">
                            <section class="dropdown-menu on aside-md m-l-n">
                                <section class="panel bg-white">
                                    <header class="panel-heading b-b b-light">About</header>
                                    <div class="panel-body animated fadeInRight">
                                        <p class="text-sm">Copyright © {{ date("Y") }} <b>Grace Myanmar IT-Solution</b></p>
                                        <p>BY <strong><span style="color: green">INZAMUL</span><span style="color:red"> HAQUE</span></strong></p>
                                    </div>
                                </section>
                            </section>
                        </div>
                        <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                            <i class="fa fa-angle-left text"></i>
                            <i class="fa fa-angle-right text-active"></i>
                        </a>
                        <div class="btn-group hidden-nav-xs">
                            <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-question"></i></button>
                        </div>
                    </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">

                @if(Session::has('message'))
                    <div class="alert {{ Session::get('m-class') }} alert-dismissible fade in" style="margin: 20px 30px">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong> {{ Session::get('message') }}
                    </div>
                @endif

                @yield('body')

                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
            </section>
        </section>
    </section>
</section>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/app.plugin.js') }}"></script>
<script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/fuelux/fuelux.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function () {

        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 5000);

    });
</script>

<script type="text/javascript" src="{{ asset('js/tableExport/tableExport.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jquery.base64.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/libs/sprintf.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/jspdf.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/libs/base64.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/select2/select2.min.js') }}"></script>
<script type="text/javascript">
    $('#product_id').select2();
</script>


</body>
</html>