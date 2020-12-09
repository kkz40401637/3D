<!DOCTYPE html>
<html>
    <head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Lucky7</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.jpg">
    <link rel="stylesheet" href="{{ asset('assets/font/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/font/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/font/css/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/font/css/light-box.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/font/css/templatemo-style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="{{ asset('assets/font/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>

    <nav>
        <div class="logo">
          <div class="flex-center position-ref full-height">
              @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('dashboard') }}">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" style="color:red"><h2>အကောင့်၀င်မယ်</h2></a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif


          </div>
        </div>
        {{-- <div class="menu-icon">
        <span></span> --}}
      </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Lucky7 <em>အပျော်တမ်းကစားမယ်</em></h1><hr>
              <p>Lucky7 တွင်ကစားနိုင်သောကစားနည်းများကို</p>
              <p>အောက်တွင်အသေးစိတ်ကြည့်ရှု့လေ့လာနိုင်ပါသည်</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="{{ asset('assets/font/img/scroll-icon.png')}}" alt=""></a>
                </div>
            </div>
        </div>
        <video autoplay loop muted>
          <source src="{{ asset('assets/font/football.mp4')}}" type="video/mp4" />
        </video>
    </div>


    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ asset('assets/font/img/football.png')}}" data-lightbox="image-1"><div class="thumb">
    
                        <div class="image">
                            <img src="{{ asset('assets/font/img/football.png')}}">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ asset('assets/font/img/football.png')}}" data-lightbox="image-1"><div class="thumb">
                       
                        <div class="image">
                            <img src="{{ asset('assets/font/img/football.png')}}">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ asset('assets/font/img/football.png')}}" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="{{ asset('assets/font/img/football.png')}}">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <iframe src="#" width="1400" height="800"></iframe>
            </div>
            <div class="col-md-4 col-sm-6">
                
            </div>
            
            
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2020 Company Name

    | Designed by TemplateMo</p>
            </div>
        </div>
    </footer>


      <!-- Modal button -->
    <div class="popup-icon">
      <button id="modBtn" class="modal-btn"><img src="{{ asset('assets/font/img/favicon.png')}}" alt=""></button>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <!-- Modal Content -->
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h3 class="header-title">အကောင့်လုပ်မယ်</h3>
            <div class="close-btn"><img src="{{ asset('assets/font/img/close_contact.png')}}" alt=""></div>
          </div>
          <!-- Modal Body -->
          <div class="modal-body">
            <div class="col-md-6 col-md-offset-3">
              <form class="form-sample" method="POST" action="{{ route('register.store') }}">
              @csrf
                  <div class="row">
                      <div class="col-md-12">
                        <fieldset>
                          {{-- <label>Username</label> --}}
                          <input class="@error('name') is-invalid @enderror form-control" name="name" minlength="2" type="text" value="{{ old('name') }}" placeholder="Your Name" autocomplete="name" autofocus required />
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </fieldset>
                        
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                          {{-- <label>Email Address</label> --}}
                           <input class="@error('email') is-invalid @enderror form-control" name="email" minlength="2" type="text" value="{{ old('email') }}" placeholder="Your Email" autocomplete="username" required />
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                      {{-- <label>Password</label> --}}

                           <input class="form-control" name="password" type="password" placeholder="Password" required />
                          @error('password')
                            <span class="invalid-feedback text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                      {{-- <label>Confirm Password</label> --}}

                          <input class="form-control" name="confirm-password" type="password" placeholder="Confirm Password" required />
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                          <fieldset>
                      

                        <input class="@error('phno') is-invalid @enderror form-control" name="phno" minlength="9" type="text" placeholder="Your Phone" value="{{ old('phno') }}" autocomplete="phno" autofocus required />
                            @error('phno')
                              <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </fieldset>
                        </div>

                      <div class="col-md-12">
                        <fieldset>
                          <button type="submit" class="btn">အတည်ပြုမယ်</button>
                        </fieldset>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

  <script src="{{ asset('assets/font/js/vendor/bootstrap.min.js')}}"></script>

  <script src="{{ asset('assets/font/js/plugins.js')}}"></script>
  <script src="{{ asset('assets/font/js/main.js')}}"></script>


</body>
</html>
