@extends('layouts.partials.master')
@section('title', 'Dashboard')
@section('content')
@include('function.function')
<div class="main-panel">          
  <div class="content-wrapper">
    
    <div class="row">
   
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">ချဲထိုးဇယား</h4>
            <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">ထိုးမယ်</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">ဒိုင်ပိတ်ဂဏန်းများ</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                <div>
                  <button type="button" class="btn btn-danger btn-fw" data-toggle="modal" data-target="#exampleModal-user" data-whatever="@mdo">ထိုးမယ်</button>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                          <div class="row">
                            <div class="col-sm-12">
                              <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                          <thead>
                            <tr role="row">
                             
                              <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 58px;"></th>
                              <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 104px;">နံပါတ်</th>
                              <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 73px;">ငွေပမာဏ</th>
                             
                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($reports as $report)
                            <tr>
                               <td>

                             @role('admin')
                               <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-outline-danger">Delete</button>
                          </form>
                            @endrole
                              </td>
                         
                              <td>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-inline-block pt-2">
                                            <div class="d-md-flex">
                                                <h2 class="mb-0">{{ $report->number }}</h2>
                                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                                    <i class="icon-sm fas fa-check-circle mr-2"></i>
                                                    <small class=" ml-1 mb-0"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-md-flex">
                                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                                <i class="fa fa-check">&nbsp;{{ ChangeUTCtoSMT($report->created_at,'Asia/Yangon') }}</i>
                                                <small class=" ml-1 mb-0"></small>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                              </td>
                              <td><div class="card-body">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-inline-block pt-2">
                                          <div class="d-md-flex">
                                              <h2 class="mb-0">{{ $report->ammount }}MMK</h2>
                                              <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                             
                                              </div>
                                          </div>
                                      
                                      </div>
                                      <div class="d-inline-block">
                                        <i class="fas fa-shopping-cart text-danger icon-lg"></i>                                    
                                      </div>
                                  </div>
                              </div></td>
                              {{-- @endif --}}
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
                </div>
                </div>
            
                <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                <div class="media">
                  <tbody>
                     @foreach($offnumbers as $offnumber)
                        <tr>
                          <label class="badge badge-outline-danger"><h2>{{ $offnumber->offnumber }}</h2> </label>&nbsp;
                        </tr>
                    @endforeach


                  </tbody>
                </div>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
 
</div>
</div>
<div class="modal fade" id="exampleModal-user" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-sample" method="POST" action="{{ route('reports.store') }}">
        {{ csrf_field()}}
        <div class="modal-body">
              <div class="form-group">
                      {{-- <label for="customer">User_id</label> --}}
                      @if(Auth()->user()->hasRole('user'))
                        <select class="form-control" name="user_id" disabled>
                          <option>{{ Auth()->user()->name }}</option>
                        </select>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="number">ထိုးမည့်နံပါတ်ထည့်ပါ</label>
                       <input name="number" required="ammount" aria-invalid="true"
                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                          type = "number" class="form-control"
                          maxlength = "3"/>
                        
                    </div>

                    <div class="form-group">
                      <label for="ammount">ငွေပမာဏထည့်ပါ</label>
                      <input type="number" id="ammount" class="form-control form-control-danger" name="ammount" required="ammount" aria-invalid="true" placeholder="အနည်းဆုံး/၁၀၀/အများဆုံး/၁၀၀၀၀၀">
                      <br>
                      <button type="button" class="btn btn-danger btn-fw" disabled><h2 class="mb-0">အနည်းဆုံး/၁၀၀/အများဆုံး/၁၀၀၀၀၀</h2></button>
                    </div>
                   

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
