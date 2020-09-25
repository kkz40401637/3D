@extends('layouts.partials.master')
@section('title', 'Dashboard')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                 <!-- <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                  <h2 class="badge badge-outline-danger badge-pill">သေချာစွာစစ်ဆေး၍ထည့်ပါ</h2>
                    <form role="form" action="{{ route('allnumber.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="form-group">
                        <label for="allnumber">Add_Number</label>
                        <input name="allnumber"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(100, this.maxLength);"
                            type = "number" class="form-control"
                            maxlength = "3"
                        />

                        </div>

                        <div class="form-group">
                        <div class="form-check form-check-flat form-check-primary">

                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                    </div>
                </div>
                </div> -->


            <!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Number_List</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <tbody>
                       @foreach($allnumbers as $allnumber)
                        <tr>
                           <label class="badge badge-outline-success badge-pill"><h2>{{ $allnumber->allnumber }}</h2> </label>&nbsp;
                        </tr>
                        @endforeach


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div> -->
        <!-- content-wrapper ends -->




              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Old_Number</h4>
                  <!-- <p class="card-description">Horizontal bootstrap tab</p> -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">2020</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">2019</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false">2018</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                      <div class="media">
                          @hasanyrole('superadmin|admin')

                            <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo">Open</button> -->
                            <button type="button" class="btn btn-primary btn-rounded btn-icon" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo"><i class="fa fa-plus"></i></button>&nbsp;&nbsp;

                            @endhasanyrole
                        <div class="media-body">
                          <tbody>
                       @foreach($allnumbers as $allnumber)
                        <tr>
                           <label class="badge badge-outline-success badge-pill"><h2>{{ $allnumber->allnumber }}</h2> </label>&nbsp;
                        </tr>
                        @endforeach


                      </tbody>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="media">
                        <img class="mr-3 w-25 rounded" src="../../images/faces/face12.jpg" alt="sample image">
                        <div class="media-body">
                          <h4 class="mt-0">John Doe</h4>
                          <p>
                              Fail most room even gone her end like. Comparison dissimilar unpleasant six compliment two unpleasing
                              any add. Ashamed my company thought wishing colonel it prevent he in. Pretended residence are something
                              far engrossed old off.
                          </p>
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

        <!-- partial:../../partials/_footer.html -->

      </div>
@endsection
