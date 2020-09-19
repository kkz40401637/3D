<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="{{ asset('assets/backend/images/shan_star.jpg') }}" alt="image"/>
        </div>
        <div class="profile-name">
          <p class="name">
            Welcome
            {{-- @if(Auth::guard('admin')->check())
            {{ Auth::guard('admin')->user()->name }}
            @endif --}}
          </p>
          <p class="designation">
            Super Admin
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
<<<<<<< HEAD
      <a class="nav-link" href="home">
=======
      <a class="nav-link" href="">
>>>>>>> 2915ddcd68af1feaf47e2ce9e8ecc1395bc50546
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
<<<<<<< HEAD
    <li class="nav-item">
      <a class="nav-link" href="{{url('allnumber')}}">
=======

     <li class="nav-item">
      <a class="nav-link" href="{{url('numberlist')}}">
>>>>>>> 2915ddcd68af1feaf47e2ce9e8ecc1395bc50546
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Number_List</span>
      </a>
    </li>
<<<<<<< HEAD
    
=======
>>>>>>> 2915ddcd68af1feaf47e2ce9e8ecc1395bc50546

    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
        <i class="fas fa-users menu-icon"></i>
<<<<<<< HEAD
        <span class="menu-title">ဒိုင်ဂဏန်များ</span>
=======
        <span class="menu-title">Sale Persons</span>
>>>>>>> 2915ddcd68af1feaf47e2ce9e8ecc1395bc50546
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
<<<<<<< HEAD
            <li class="nav-item"> <a class="nav-link" href="{{url('numberlist')}}">AddNumber</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('offnumber')}}">Number_List</a></li>
=======
            <li class="nav-item"> <a class="nav-link" href="">Sale Person lists</a></li>
            <li class="nav-item"> <a class="nav-link" href="">Create Sale Person</a></li>
>>>>>>> 2915ddcd68af1feaf47e2ce9e8ecc1395bc50546
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#accounts" aria-expanded="false" aria-controls="accounts">
        <i class="fas fa-exclamation-circle menu-icon"></i>
        <span class="menu-title">Items</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="accounts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href=""> Category Lists</a></li>
          <li class="nav-item"> <a class="nav-link" href=""> Create Category </a></li>
          <li class="nav-item"> <a class="nav-link" href=""> Item Lists</a></li>
          <li class="nav-item"> <a class="nav-link" href=""> Create Item </a></li>
        </ul>
      </div>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <i class="fas fa-file menu-icon"></i>
        <span class="menu-title">General Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
        <i class="fas fa-briefcase menu-icon"></i>
        <span class="menu-title">Apps</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="apps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/apps/email.html"> Email </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/apps/calendar.html"> Calendar </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/apps/todo.html"> Todo </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/apps/gallery.html"> Gallery </a></li>
        </ul>`
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
        <i class="fas fa-shopping-cart menu-icon"></i>
        <span class="menu-title">Threed</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="e-commerce">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/documentation.html">
        <i class="far fa-file-alt menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> --}}
  </ul>
</nav>
<!-- partial -->
