@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <!--towd -->
          {{-- <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">နှစ်လုံးထိုးထာားသူများစာရင်း</h4>
                <div class="template-demo">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>အမည်</th>
                        <th>ကြည်မယ်</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $user)
                          @foreach ($user->towds as $towd)
                       
                        <tr class="table-warning">
                          <td>{{ $user->name }}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('user_towds',$user->id) }}"> <i class="fas fa-eye"></i></a>
                           </td>
                      
                        </tr>
                      @endforeach
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
         
          <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">သုံးလုံးထိုးထာားသူများစာရင်း</h4>
                <div class="template-demo">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>အမည်</th>
                        <th>ကြည်မယ်</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $user)
                          @foreach ($user->reports as $report)
                        
                        <tr class="table-warning">
                          <td>{{ $user->name }}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('user_reports',$user->id) }}"> <i class="fas fa-eye"></i></a>
                           </td>
                      
                        </tr>
                      @endforeach
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
              
                <p class="card-description">ဆော့ထားသည့်ပွဲများ</p>
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">နှစ်လုံးထိုးထာားသူများစာရင်း</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">သုံးလုံးထိုးထာားသူများစာရင်း</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#body-1" role="tab" aria-controls="body-1" aria-selected="false">ဘောဒီထိုးထာားသူများစာရင်း</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#drive-1" role="tab" aria-controls="drive-2" aria-selected="false">မောင်းထိုးထာားသူများစာရင်း</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="media">
                      
                      <div class="media-body">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>အမည်</th>
                              <th>ကြည်မယ်</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach ($users as $user)
                                @foreach ($user->towds as $towd)
                       
                              <tr class="table-warning">
                                <td>{{ $user->name }}</td>
                                 <td>
                                  <a class="btn btn-success" href="{{ route('user_towds',$user->id) }}">နှစ်လုံး<i class="fas fa-eye"></i></a>
                                 </td>
                      
                              </tr>
                            @endforeach
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="media">
                      <div class="media-body">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>အမည်</th>
                              <th>ကြည်မယ်</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach ($users as $user)
                                @foreach ($user->reports as $report)
                        
                              <tr class="table-warning">
                                <td>{{ $user->name }}</td>
                                 <td>
                                  <a class="btn btn-success" href="{{ route('user_reports',$user->id) }}">သုံးလုံး<i class="fas fa-eye"></i></a>
                                 </td>
                      
                              </tr>
                            @endforeach
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="body-1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="media">
                      <div class="media-body">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>အမည်</th>
                              <th>ကြည်မယ်</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach ($users as $user)
                                @foreach ($user->bodyls as $bodys)
                              <tr class="table-warning">
                                <td>{{ $user->name }}</td>
                                 <td>
                                  <a class="btn btn-success" href="{{ route('user_bodylsl',$user->id) }}">ဘောဒီ<i class="fas fa-eye"></i></a>
                                 </td>
                      
                              </tr>
                            @endforeach
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="drive-1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="media">
                      <div class="media-body">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>အမည်</th>
                              <th>ကြည်မယ်</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach ($users as $user)
                                @foreach ($user->drives as $drive)
                              <tr class="table-warning">
                                <td>{{ $user->name }}</td>
                                 <td>
                                  <a class="btn btn-success" href="{{ route('user_drives',$user->id) }}">မောင်း <i class="fas fa-eye"></i></a>
                                 </td>
                      
                              </tr>
                            @endforeach
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!--threeD -->

          <div class="col-12">
            <h4 class="card-title">ထိုးသားများ</h4>
            <div class="table-responsive">
              <table id="order-listing" class="table table-bordered table-hover nowrap">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Delete</th>
                  </tr> 
                </thead>
                <tbody>
                  @foreach($users as  $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->phno }}</td>
                    {{-- <td>
                        <a class="btn btn-success" href="{{ route('user_wdraws',$user->id) }}">ငွေထုတ် <i class="fas fa-eye"></i></a>

                        <a class="btn btn-success" href="{{ route('user_towds',$user->id) }}">နှစ်လုံး <i class="fas fa-eye"></i></a>
                        <a class="btn btn-success" href="{{ route('user_reports',$user->id) }}">သုံးလုံး <i class="fas fa-eye"></i></a>
                        <a class="btn btn-success" href="{{ route('user_drives',$user->id) }}">ဘောလုံး/မောင်း <i class="fas fa-eye"></i></a>
                        <a class="btn btn-success" href="{{ route('user_bodylsl',$user->id) }}">ဘောလုံး/ဘောဒီ <i class="fas fa-eye"></i></a>
                    </td> --}}
                    <td>
                      <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-danger">ဖျက်မယ် <i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        
         
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

@endsection
