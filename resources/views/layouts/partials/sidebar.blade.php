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
          <h1 class="designation" >
             လက်ကျန်ငွေ ( {{  Auth()->user()->money  }} )ကျပ်
            
          </h1>
          @endrole
        </div>
      </div>
    </li>

<li class="nav-item">
  <a class="nav-link" href="{{url('dashboard')}}">
    <i class="fa fa-home menu-icon"></i>
    <span class="menu-title">Dashboard</span>
  </a>
</li>

@role('user')
 <li class="nav-item">
  <a class="nav-link" href="{{ url('wdraws') }}">
    <i class="fas fa-file-invoice-dollar menu-icon" style="background: rgb(250, 3, 45)"></i>
    <span class="menu-title">ငွေးသွင်း/ငွေထုတ်</span>
  </a>
</li>
@endrole


@role('superadmin')
   
<li class="nav-item">
  <a class="nav-link" href="{{ route('admins.create') }}">
    <i class="fas fa-window-restore menu-icon"></i>
    <span class="menu-title">ဒိုင်းအသစ်းထည့်မယ်</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('admins.store') }}">
    <i class="fas fa-table menu-icon"></i>
    <span class="menu-title">လက်ခွဲဒိုင်များစာရင်း</span>
  </a>
</li>
@endrole

@role('admin')

<li class="nav-item">
  <a class="nav-link" href="{{ route('moneys.index') }}">
    <i class="fas fa-futbol menu-icon"></i>
    <span class="menu-title">ငွေလက်ခံနှင်ငွေထုတ်နေရာ</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link" href="{{ route('users.create') }}">
    <i class="fas fa-user-shield menu-icon"></i>
    <span class="menu-title">ထိုးသားများထည့်မယ်</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('users.store') }}">
    <i class="fas fa-user-shield menu-icon"></i>
    <span class="menu-title">ထိုးသားများစာရင်း</span>
  </a>
</li>
 <li class="nav-item">
  <a class="nav-link" href="{{ route('footballs.create') }}">
    <i class="fas fa-futbol menu-icon"></i>
    <span class="menu-title">မောင်းကြေးဖွင့်မယ်</span>
  </a>
</li>
 <li class="nav-item">
  <a class="nav-link" href="{{ route('bodys.create') }}">
    <i class="fas fa-futbol menu-icon"></i>
    <span class="menu-title">ဘောဒီကြေးဖွင့်မယ်</span>
  </a>
</li>

@endrole

@role('admin')
   
 <li class="nav-item">
  <a class="nav-link" href="{{url('offnumber')}}">
    <i class="fab fa-css3-alt menu-icon"></i>
    <span class="menu-title">သုံးလုံးပိတ်ဂဏန်းများ</span>
  </a>
</li>

@endrole

@role('user')

    <li class="nav-item">
      <a class="nav-link" href="{{url('reports')}}">
        <i class="fab fa-css3-alt menu-icon"></i>
        <span class="menu-title">ချဲထိုးမယ်</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('towds/create')}}">
      <i class="fab fa-draft2digital menu-icon"></i>
        <span class="menu-title">နှစ်လုံးထိုးမယ်</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('footballs.index') }}">
        <i class="fas fa-futbol menu-icon"></i>
        <span class="menu-title">မောင်းလောင်းမယ်</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('bodys.index') }}">
        <i class="fas fa-futbol menu-icon"></i>
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
          <i class="fas fa-futbol menu-icon"></i>
          <span class="menu-title">လောင်းထားသည့်ဘောဒီများ</span>

        </a>
    </li>

<li class="nav-item">
  <a class="nav-link" href="{{url('towds')}}">
    <i class="fab fa-draft2digital menu-icon"></i>
    <span class="menu-title">နှစ်လုံးထိုးထားသည့်ဂဏန်းများ</span>
  </a>
</li>

@endrole
  </ul>
</nav>
