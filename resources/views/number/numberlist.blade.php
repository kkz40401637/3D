@extends('layouts.partials.master')
@section('title', 'Dashboard')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                      <button type="button" class="btn btn-dark btn-lg btn-block">ပိတ်ဂဏန်းများကို သေချာစွာစစ်ဆေး၍ထည့်ပါ</button><hr>
                        <form role="form" action="{{ route('offnumber.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                    <div class="form-group">
                              
                    <input name="offnumber"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        type = "number" class="form-control" placeholder="ပိတ်ဂဏန်းများကို သေချာစွာစစ်ဆေး၍ထည့်ပါ"
                        maxlength = "3"/>
                                
                    </div>
                           
                    <div class="form-group">
                    <div class="form-check form-check-flat form-check-primary">
                                    
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>

          <!--table -->
      <div class="card-body">
        <h4 class="card-title">ပိတ်ဂဏန်းများ</h4>
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
                   @foreach($threeds as $key => $threed)
                  <tr>
                    <td>{{++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                      <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-outline-warning" href="{{ route('users.edit',$user->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-outline-danger">Delete</button>
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
          <!-- endtable -->
                
            </div>  
            
          
          </div>
</div>


@endsection
