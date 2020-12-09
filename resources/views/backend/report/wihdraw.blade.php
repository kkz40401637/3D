@extends('layouts.partials.master')
@section('title', 'Admin')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
       
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table table-bordered table-hover nowrap">
                <thead>
                  <tr>
                    {{-- <th>No.</th> --}}
                    <th>Name</th>
                    <th>withdraw money</th>
                    <th>ph no</th>
                    <th>Withdraw Time</th>
                    <th>Delete</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($wdraws as $wdraw)
                  <tr>
                    {{-- <td>{{++$key }}</td> --}}
                    <td>{{ $user->name }}</td>

                    <td>{{ $wdraw->wmoney }}</td>
                    <td>{{ $wdraw->phno }}</td>
                    <td>{{ $wdraw->updated_at->format('d/m/Y H:i:s') }}</td>
                     <td>
                      <form action="{{ route('wdraws.destroy',$wdraw->id) }}" method="POST">
                        
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
