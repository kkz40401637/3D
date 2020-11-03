@extends('layouts.partials.master')
@section('title', 'Users')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    {{-- <div class="page-header">
      <h3 class="page-title">
        User Lists
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Users</a></li>
          <li class="breadcrumb-item active" aria-current="page">User Lists</li>
        </ol>
      </nav>
    </div> --}}
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User Lists</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table table-bordered table-hover nowrap">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $key => $user)
                  <tr>
                    <td>{{++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>

                    <td>
                      <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-outline-warning" href="{{ route('users.edit',$user->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-outline-danger">Delete</button>
                        <a class="btn btn-outline-primary" href="{{ route('user_reports',$user->id) }}">Report</a>

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
