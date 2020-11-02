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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($offnumbers as $key => $offnumber)
                  <tr>
                    <td>{{++$key }}</td>
                    <td>{{ $offnumber->offnumber }}</td>
                    <td>
                      <form action="{{ route('offnumber.destroy',$offnumber->id) }}" method="POST">
                        {{-- <a class="btn btn-primary" href="{{ route('offnumber.edit',$offnumber->id)}}"><i class="fa fa-edit"></i></a> --}}
                        
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

{{-- <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-sample" method="POST" action="{{ route('offnumber.edit',$offnumber->offnumber)}}">
        {{ csrf_field()}}
        <div class="modal-body">
              <div class="form-group">
                
                    </div>
                    <div class="form-group">
                      <label for="number">Number</label>
                     
                          <input type="numbr"  value="{{ $offnumber->offnumber }}">
                          
                    </div>
                
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}
@endsection
