@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User Lists</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table table-bordered table-hover nowrap">
                <thead>
                  <tr>
                    {{-- <th>No.</th> --}}
                    <th>အမည်</th>
                    <th>ငွေထည့်မယ်</th>
                    <th>ထိုးသားများလောင်းထားသည့်အရာများကိုကြည့်မယ်</th>
                    <th>အကောင့်ဖျက်မယ်</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as  $user)
                  <tr>
                    {{-- <td>{{++$key }}</td> --}}
                    <td>{{ $user->name }}</td>
                    <td><a class="btn btn-dark btn-icon-text" href="{{ route('users.edit',$user->id)}}">ပြင်မယ်<i class="fas fa-pencil-alt btn-icon-append"></i></a></td>
                    {{-- <td>{{ $user->email}}</td> --}}

                    <td>
                        <a class="btn btn-success" href="{{ route('user_towds',$user->id) }}">နှစ်လုံး <i class="fas fa-eye"></i></a>
                        <a class="btn btn-success" href="{{ route('user_reports',$user->id) }}">သုံးလုံး <i class="fas fa-eye"></i></a>
                        <a class="btn btn-success" href="{{ route('user_drives',$user->id) }}">ဘောလုံး/မောင်း <i class="fas fa-eye"></i></a>
                        <a class="btn btn-success" href="{{ route('user_bodylsl',$user->id) }}">ဘောလုံး/ဘောဒီ <i class="fas fa-eye"></i></a>
                    </td>
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
