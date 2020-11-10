@extends('layouts.partials.master')
@section('title', 'Dashboard')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
    </div>
     
   <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> 
                   
                    @if(Auth()->user()->hasRole('user'))
                       ({{ Auth()->user()->name }})၏ လက်ကျန်ငွေ ( {{  Auth()->user()->money  }} )ကျပ်
                    @endif
                  </h4>
                  <!-- <p class="card-description">Horizontal bootstrap tab</p> -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Report</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">ဒိုင်ပိတ်ဂဏန်းများ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false">နေ့စဥ်ရှင်ရောင်းရငွေ/ရှင်းတမ်း</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                      <div class="media">
                        <div class="media-body">
                          <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">

                 <button type="button" class="btn btn-danger btn-fw" data-toggle="modal" data-target="#exampleModal-user" data-whatever="@mdo">ဒိုင်ကိုတင်မယ်</button>
                </h4>
                  <div class="table-responsive">
                      <header class="panel-heading">
                <button class="dt-button buttons-print btn" onClick ="$('#table').tableExport({type:'pdf',escape:'false',pdfFontSize:12,separator: ','});" class="btn btn-default btn-xs pull-right">PDF</i></button>
                <button class="dt-button buttons-print btn" onClick ="$('#table').tableExport({type:'csv',escape:'false'});" class="btn btn-default btn-xs pull-right">CSV</button>
                <button class="dt-button buttons-print btn" onClick ="$('#table').tableExport({type:'excel',escape:'false'});" class="btn btn-default btn-xs pull-right">Excel</i></button>
                <button class="dt-button buttons-print btn" onClick ="$('#table').tableExport({type:'sql',escape:'false',tableName:'orders'});" class="btn btn-default btn-xs pull-right">SQL</i></button>
                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>

            </header>
                     <table class="table table-striped m-b-none" data-ride="datatables" id="data">
                      <thead>
                        <tr>
                         <th></th>
                          <th>Number</th>
                          <th>Ammount</th>

                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($reports as $report)
                        <tr>
                           <td>

                         @hasanyrole('superadmin|admin')
                           <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-outline-danger">Delete</button>
                      </form>
                        @endhasanyrole
                          </td>
                          {{-- @if(auth()->user()->can('see this post')&& $some_other_condition) --}}
                          <td><label class="badge badge-danger badge-pill"><h5>{{ $report->number }}</h5></label></td>
                          <td><label class="badge badge-success badge-pill"><h5>{{ $report->ammount }}MMK</h5></label></td>
                          {{-- @endif --}}
                        </tr>


                        @endforeach

                      </tbody>
                      <tfoot>
                      <tr>
                       <th colspan="2">Total</th>
                        
                      </tr>
                      
                    </table>
                  </div>
                </div>

              </div>
      </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="media">

                        <div class="media-body">
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
                    <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
                      <h4>Contact us </h4>
                      <p>
                        Feel free to contact us if you have any questions!
                      </p>
                      <p>
                        <i class="fa fa-phone text-info"></i>
                        +123456789
                      </p>
                      <p>
                        <i class="far fa-envelope-open text-success"></i>
                        contactus@example.com
                      </p>
                    </div>
                  </div>
                </div>
              </div>

<div class="modal fade" id="exampleModal-user" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-sample" method="POST" action="{{ route('reports.store') }}">
        {{ csrf_field()}}
        <div class="modal-body">
              <div class="form-group">
                      <label for="customer">User_id</label>
                      @if(Auth()->user()->hasRole('user'))
                        <select class="form-control" name="user_id">
                          <option>{{ Auth()->user()->name }}</option>
                        </select>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="number">Number</label>
                       <input name="number" required="ammount" aria-invalid="true"
                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                          type = "text" class="form-control"
                          maxlength = "4"/>

                    </div>

                    <div class="form-group">
                      <label for="ammount">Ammount</label>
                      <input type="number" id="ammount" class="form-control form-control-danger" name="ammount" required="ammount" aria-invalid="true" placeholder="အနည်းဆုံး/၁၀၀/အများဆုံး/၁၀၀၀၀၀">
                      <br>
                      <button type="button" class="btn btn-danger btn-fw"><h2 class="mb-0">အများဆုံး/၁၀၀၀၀၀</h2></button>
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
