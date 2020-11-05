<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="{{ asset('assets/backend/images/logo-mini.png') }}" alt="image"/>
        </div>
        <div class="profile-name">
            @role('superadmin')
          <p class="name">
            {{-- Welcome --}}
            @if(Auth()->user()->hasRole('superadmin'))
            {{ Auth()->user()->name }}
            @endif
          </p>
          @endrole('superadmin')

          @role('admin')
          <p class="name">
            {{-- Welcome --}}
            @if(Auth()->user()->hasRole('admin'))
            {{ Auth()->user()->name }}
            @endif
          </p>
          @endrole('admin')

          @role('user')
          <p class="name">
            {{-- Welcome --}}
            @if(Auth()->user()->hasRole('user'))
            {{ Auth()->user()->name }}
            @endif
          </p>
          @endrole('user')

          @role('superadmin')
          <p class="designation">
            Super Admin
          </p>
          @endrole
          @role('admin')
          <p class="designation">
             Admin
          </p>
          @endrole
          @role('user')
          <p class="designation">
             User
          </p>
          @endrole
        </div>
      </div>
    </li>
@role('superadmin')
<li class="nav-item">
  <a class="nav-link" href="home">
    <i class="fa fa-home menu-icon"></i>
    <span class="menu-title">Dashboard</span>
  </a>
</li>
@endrole


@role('superadmin')
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#admins" aria-expanded="false" aria-controls="admins">
            <i class="fas fa-user-shield menu-icon"></i>
          <span class="menu-title">လက်ခွဲဒိုင်များ</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="admins">
          <ul class="nav flex-column sub-menu">
            
            <li class="nav-item"> <a class="nav-link" href="{{ route('admins.create') }}">ဒိုင်းများထည့်မယ်</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admins.store') }}"> လက်ခွဲဒိုင်များစာရင်း </a></li>

          </ul>
        </div>
      </li>
@endrole

@role('admin')
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
        <i class="fas fa-user-shield menu-icon"></i>
      <span class="menu-title">ထိုးသားများ</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="users">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}">ထိုးသားများထည့်မယ်</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('users.store') }}">ထိုးသားများကြည့်မယ်</a></li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#football" aria-expanded="false" aria-controls="football">
        <i class="fas fa-user-shield menu-icon"></i>
      <span class="menu-title">ဘောလုံး</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="football">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ route('footballs.create') }}">မောင်းကြေးဖွင့်မယ်</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('bodys.create') }}">ဘောဒီကြေးဖွင့်မယ်</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">လောင်းထားသည့်မောင်းများ</a></li>
      </ul>
    </div>
  </li>

@endrole

@role('admin')
    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
        <i class="fas fa-users menu-icon"></i>

        <span class="menu-title">သုံးလုံးပိတ်ဂဏန်းများ</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">

            <li class="nav-item"> <a class="nav-link" href="{{url('offnumber')}}">ပိတ်ဂဏန်းများ</a></li>
            
            {{-- <li class="nav-item"> <a class="nav-link" href="{{url('allnumber')}}">Number_List</a></li> --}}

        </ul>
      </div>
    </li>
@endrole
   
@role('user')
    <li class="nav-item">
      <a class="nav-link" href="{{url('reports')}}">
       <i class="fas fa-file menu-icon"></i>
        <span class="menu-title">ချဲထိုးမယ်</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('footballs.index') }}">
       <i class="fas fa-file menu-icon"></i>
        <span class="menu-title">မောင်းလောင်းမယ်</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('bodys.index') }}">
       <i class="fas fa-file menu-icon"></i>
        <span class="menu-title">ဘောဒီလောင်းမယ်</span>
      </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('drives.index') }}">
        <i class="fas fa-table menu-icon"></i>
          <span class="menu-title">လောင်းထားသည့်မောင်းများ</span>

        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('bodysl.index') }}">
         <i class="fas fa-table menu-icon"></i>
          <span class="menu-title">လောင်းထားသည့်ဘောဒီများ</span>

        </a>
    </li>
@endrole
  
  </ul>
</nav>
<!-- partial -->
