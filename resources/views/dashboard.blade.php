@extends('layouts.partials.master')
@section('title', '')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    {{-- <div class="page-header">
      <h3 class="page-title">
        Dashboard
      </h3>
    </div> --}}
    @role('admin')
    <div class="row grid-margin">
      <div class="col-12">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fa fa-user mr-2"></i>
                    ထိုးသား
                  </p>
                  <h3><i class="far fa-check-circle"></i>&nbsp;&nbsp;{{ $users }}</h3>
                 
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                    Avg Time
                  </p>
                  <h2>123.50</h2>
                  <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                    Downloads
                  </p>
                  <h2>3500</h2>
                  <label class="badge badge-outline-success badge-pill">12% increase</label>
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-check-circle mr-2"></i>
                    Update
                  </p>
                  <h2>7500</h2>
                  <label class="badge badge-outline-success badge-pill">57% increase</label>
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-chart-line mr-2"></i>
                    Sales
                  </p>
                  <h2>9000</h2>
                  <label class="badge badge-outline-success badge-pill">10% increase</label>
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-circle-notch mr-2"></i>
                    Pending
                  </p>
                  <h2>7500</h2>
                  <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endrole
  
    {{-- <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <h4 class="card-title">
              <i class="fas fa-chart-pie"></i>
              Sales status
            </h4>
            <div class="flex-grow-1 d-flex flex-column justify-content-between">
              <canvas id="sales-status-chart" class="mt-3"></canvas>
              <div class="pt-4">
                <div id="sales-status-chart-legend" class="sales-status-chart-legend"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="far fa-futbol"></i>
              Activity
            </h4>
            <ul class="solid-bullet-list">
              <li>
                <h5>4 people shared a post
                  <span class="float-right text-muted font-weight-normal small">8:30 AM</span>
                </h5>
                <p class="text-muted">It was an awesome work!</p>
                <div class="image-layers">
                  <div class="img-sm profile-image-text bg-warning rounded-circle image-layer-item">M</div>
                  <img class="img-sm rounded-circle image-layer-item" src="{{ asset('assets/backend/images/faces/face3.jpg') }}" alt="profile"/>
                  <img class="img-sm rounded-circle image-layer-item" src="{{ asset('assets/backend/images/faces/face5.jpg') }}" alt="profile"/>
                  <img class="img-sm rounded-circle image-layer-item" src="{{ asset('assets/backend/images/faces/face8.jpg') }}" alt="profile"/>
                </div>
              </li>
              <li>
                <h5>Stella posted in a group
                  <span class="float-right text-muted font-weight-normal small">11:40 AM</span>
                </h5>
                <p class="text-muted">The team has done a great job</p>
              </li>
              <li>
                <h5>Dobrick posted in material
                  <span class="float-right text-muted font-weight-normal small">4:30 PM</span>
                </h5>
                <p class="text-muted">Great work. Keep it up!</p>
              </li>
            </ul>
            <div class="border-top pt-3">
              <div class="d-flex justify-content-between">
                <button class="btn btn-outline-dark">More</button>
                <button class="btn btn-primary btn-icon-text">
                  Add new task
                  <i class="btn-icon-append fas fa-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <h4 class="card-title">
              <i class="fas fa-tachometer-alt"></i>
              Daily Sales
            </h4>
            <p class="card-description">Daily sales for the past one month</p>
            <div class="flex-grow-1 d-flex flex-column justify-content-between">
              <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
              <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-envelope"></i>
              Inbox(31)
            </h4>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <img src="{{ asset('assets/backend/images/faces/face13.jpg') }}" alt="profile" class="img-sm rounded-circle"/>
                    </td>
                    <td class="font-weight-bold">
                      Andrew Bowen
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Development</label>
                    </td>
                    <td>
                      The required fields are added in the database
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <img src="{{ asset('assets/backend/images/faces/face2.jpg') }}" alt="profile" class="img-sm rounded-circle"/>
                    </td>
                    <td class="font-weight-bold">
                      Mae Saunders
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Development</label>
                    </td>
                    <td>
                      The application will be completed by tomorrow
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <div class="img-sm rounded-circle bg-warning profile-image-text">M</div>
                    </td>
                    <td class="font-weight-bold">
                      Manuel Yates
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Design</label>
                    </td>
                    <td>
                      The new design is uploaded in zeplin
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <img src="{{ asset('assets/backend/images/faces/face11.html') }}" alt="profile" class="img-sm rounded-circle"/>
                    </td>
                    <td class="font-weight-bold">
                      Marguerite Phillips
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Development</label>
                    </td>
                    <td>
                      Please send me the latest requirements
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <div class="img-sm rounded-circle bg-info profile-image-text">C</div>
                    </td>
                    <td class="font-weight-bold">
                      Clifford Wilson
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Testing</label>
                    </td>
                    <td>
                      The issues are documented in the shared sheet
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-table"></i>
              တစ်ပါတ်စာထွက်ဂဏန်းများ
            </h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>နေ့</th>
                    <th>9:30AM</th>
                    <th>2:00PM</th>
                    <th>12:00PM</th>
                    <th>4:00PM</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-weight-bold">
                     တနင်္ဂလာ
                    </td>
                    <td class="text-muted">
                      <h4>90</h4>
                    </td>
                    <td>
                     <h4>90</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      အင်္ဂါ
                    </td>
                    <td class="text-muted">
                      <h4>90</h4>
                    </td>
                    <td>
                     <h4>90</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      ဗုဒ္ဓဟူး
                    </td>
                    <td class="text-muted">
                      <h4>90</h4>
                    </td>
                    <td>
                     <h4>90</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      ကြာသပတေး
                    </td>
                    <td class="text-muted">
                      <h4>90</h4>
                    </td>
                    <td>
                     <h4>90</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      သောကြာ
                    </td>
                    <td class="text-muted">
                      <h4>90</h4>
                    </td>
                    <td>
                     <h4>90</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                    <td>
                      <h4>00</h4>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-calendar-alt"></i>
              Calendar
            </h4>
            <div id="inline-datepicker-example" class="datepicker"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-thumbtack"></i>
              Todo
            </h4>
            <div class="add-items d-flex">
							<input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
							<button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
						</div>
						<div class="list-wrapper">
							<ul class="d-flex flex-column-reverse todo-list">
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Meeting with Alisa
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Call John
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Create invoice
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Print Statements
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Prepare for presentation
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Pick up kids from school
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
							</ul>
						</div>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-rocket"></i>
              Projects
            </h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      Assigned to
                    </th>
                    <th>
                      Project name
                    </th>
                    <th>
                      Priority
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img src="{{ asset('assets/backend/images/faces/face1.jpg') }}" alt="profile" class="img-sm rounded-circle"/>
                    </td>
                    <td>
                      South Shyanne
                    </td>
                    <td>
                      <label class="badge badge-warning badge-pill">Medium</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{ asset('assets/backend/images/faces/face2.jpg') }}" alt="profile" class="img-sm rounded-circle"/>
                    </td>
                    <td>
                      New Trystan
                    </td>
                    <td>
                      <label class="badge badge-danger badge-pill">High</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{ asset('assets/backend/images/faces/face3.jpg') }}" alt="profile" class="img-sm rounded-circle"/>
                    </td>
                    <td>
                      East Helga
                    </td>
                    <td>
                      <label class="badge badge-success badge-pill">Low</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{ asset('assets/backend/images/faces/face4.jpg') }}" alt="profile" class="img-sm rounded-circle"/>
                    </td>
                    <td>
                      Omerbury
                    </td>
                    <td>
                      <label class="badge badge-warning badge-pill">Medium</label>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="d-md-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-facebook btn-rounded">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Facebook</h5>
                  <p class="mb-0">813 friends</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-twitter btn-rounded">
                  <i class="fab fa-twitter"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Twitter</h5>
                  <p class="mb-0">9000 followers</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-google btn-rounded">
                  <i class="fab fa-google-plus-g"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Google plus</h5>
                  <p class="mb-0">780 friends</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <button class="btn btn-social-icon btn-linkedin btn-rounded">
                  <i class="fab fa-linkedin-in"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Linkedin</h5>
                  <p class="mb-0">1090 connections</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    {{-- <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <iframe src="https://www.fctables.com/italy/serie-a/iframe/?type=league-scores&lang_id=2&country=67&template=17&team=&timezone=Indian/Cocos&time=12&width=100%25&height=100%25&font=Times+new+roman&fs=12&lh=28&bg=FFFFFF&fc=000000&logo=1&tlink=1&scoreb=ff0000&scorefc=FFFFFF&sgdcoreb=388E3C&sgdcorefc=FFFFFF&sh=0&hfb=1&hbc=0000000&hfc=FFFFFF" height="380" title="Iframe Example"></iframe>
      </div>
    </div> --}}
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ဘောလုံးပွဲများဇယား</h4>
          <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ပရီမီယာလိဒ်</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">လာလီဂါ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">မှတ်ချက်</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="media">
                <iframe src="https://www.fctables.com/england/premier-league/iframe/?type=table&lang_id=2&country=67&template=10&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=0&form=0&width=100%25&height=100%25&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=0&hfb=0&hbc=388E3C&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
                <iframe src="https://www.fctables.com/england/premier-league/iframe/?type=league-scores&lang_id=2&country=67&template=10&team=189577&timezone=Indian/Cocos&time=12&width=100%25&height=100%25&font=Times+new+roman&fs=12&lh=28&bg=FFFFFF&fc=000000&logo=1&tlink=1&scoreb=ff0000&scorefc=FFFFFF&sgdcoreb=388E3C&sgdcorefc=FFFFFF&sh=0&hfb=1&hbc=0000000&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
                
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="media">
                <iframe src="https://www.fctables.com/spain/liga-bbva/iframe/?type=table&lang_id=2&country=67&template=43&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=0&form=0&width=100%25&height=100%25&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=0&hfb=0&hbc=388E3C&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
                <iframe src="https://www.fctables.com/england/premier-league/iframe/?type=league-scores&lang_id=2&country=67&template=10&team=189577&timezone=Indian/Cocos&time=12&width=100%25&height=100%25&font=Times+new+roman&fs=12&lh=28&bg=FFFFFF&fc=000000&logo=1&tlink=1&scoreb=ff0000&scorefc=FFFFFF&sgdcoreb=388E3C&sgdcorefc=FFFFFF&sh=0&hfb=1&hbc=0000000&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="media">
                
                  <div class="card-body">
                    <h4 class="card-title">
                      kkkkkk
                    </h4>
                    {{-- <p class="card-description">
                      A simple suggestion engine
                    </p> --}}
                    <div class="form-group row">
                      <div class="col">
                        <label>n</label>
                        <div id="the-basics">
                          <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="typeahead tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input class="typeahead tt-input" type="text" placeholder="States of USA" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: PTSans, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-states"></div></div></span>
                        </div>
                      </div>
                      <div class="col">
                        <label>k</label>
                        <div id="bloodhound">
                          <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="typeahead tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input class="typeahead tt-input" type="text" placeholder="States of USA" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: PTSans, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-states"></div></div></span>
                        </div>
                      </div>

                      <div class="col">
                        
                        <div id="bloodhound">
                          <button type="button">submit</button>
                        </div>
                      </div>
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

@endsection
