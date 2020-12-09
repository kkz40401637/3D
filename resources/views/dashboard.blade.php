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
    @role('superadmin')
      <div class="row">
          <div class="col-md-6 grid-margin">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title mb-0">လက်ခွဲဒိုင်</h4>
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="d-inline-block pt-3">
                              <div class="d-md-flex">
                                   <h2 class="mb-0">{{ $users }}</h2>
                                  <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-check-circle"></i>
                                    <small class="ml-1 mb-0"><h2>ဦး</h2></small>
                                  </div>
                              </div>
                             
                          </div>
                          <div class="d-inline-block">
                            <i class="fas fa-user text-danger icon-lg"></i>                                  
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        
      </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <h4 class="card-title">
              <i class="fas fa-gift"></i>
              Admin
            </h4>
            <canvas id="orders-chart" width="461" height="230" class="chartjs-render-monitor" style="display: block; width: 461px; height: 230px;"></canvas>
            <div id="orders-chart-legend" class="orders-chart-legend"><ul class="legend0"><li><span class="legend-label" style="background-color:#392c70"></span>Delivered</li><li><span class="legend-label" style="background-color:#d1cede"></span>Estimated</li></ul></div>                  
          </div>
        </div>
      </div>
      
    </div>
    @endrole
    @role('admin')
     <div class="row">
          <div class="col-md-3 grid-margin">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title mb-0">ထိုးသားစာရင်း</h4>
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="d-inline-block pt-3">
                              <div class="d-md-flex">
                                   <h2 class="mb-0">{{ $users }}</h2>
                                  <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-check-circle"></i>
                                    <small class="ml-1 mb-0"><h2>ဦး</h2></small>
                                  </div>
                              </div>
                             
                          </div>
                          <div class="d-inline-block">
                            <i class="fas fa-user text-danger icon-lg"></i>                                  
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <div class="col-md-3 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">သုံးလုံးပိတ်ဂဏန်းများ</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                 <h2 class="mb-0">{{ $offnumber }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                  <i class="far fa-check-circle"></i>
                                  <small class="ml-1 mb-0"><h2>ကွက်</h2></small>
                                </div>
                            </div>
                             
                        </div>
                        <div class="d-inline-block">
                          <i class="fas fa-table text-danger icon-lg"></i>                                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-0">ထိုးသားများအားလုံးလက်ရှိသွင်းထားသောငွေပမာဏ</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                 <h2 class="mb-0">{{ $userss  }}</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                  <i class="far fa-check-circle"></i>
                                  <small class="ml-1 mb-0"><h2></h2></small>
                                </div>
                            </div>

                        </div>
                        <div class="d-inline-block">
                         <i class="fas fa-shopping-cart text-danger icon-lg"></i>
                        </div>
                    </div>

                </div>

            </div>
        </div>
      </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <h4 class="card-title">
              <i class="fas fa-gift"></i>
              လ အလိုက်ထိုးသားများ
            </h4>
            <canvas id="orders-chart" width="461" height="230" class="chartjs-render-monitor" style="display: block; width: 461px; height: 230px;"></canvas>
            <div id="orders-chart-legend" class="orders-chart-legend"><ul class="legend0"><li><span class="legend-label" style="background-color:#392c70"></span>Delivered</li><li><span class="legend-label" style="background-color:#d1cede"></span>Estimated</li></ul></div>                  
          </div>
        </div>
      </div>
      
    </div>
    @endrole
    
    @role('user')
    <div class="row grid-margin">
      <div class="col-12">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-chart-line mr-2"></i>
                    လက်ကျန်ငွေ 
                  </p>
                  <h3><i class="far fa-check-circle"></i>&nbsp;&nbsp;({{  Auth()->user()->money  }})</h3>
                 
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                    သုံးလုံးပိတ်ဂဏန်း
                  </p>
                  <h2><i class="far fa-check-circle"></i>&nbsp;&nbsp;({{ $offnumbers }})</h2>
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                   မောင်းပွဲများ
                  </p>
                  <h2><i class="far fa-check-circle"></i>&nbsp;&nbsp;({{ $footballs }})</h2>
                </div>
                <div class="statistics-item">
                  <p>
                    <i class="icon-sm fas fa-check-circle mr-2"></i>
                    ဘောဒီပွဲများ
                  </p>
                  <h2><i class="far fa-check-circle"></i>&nbsp;&nbsp;({{ $bodies }})</h2>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
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
              <a class="nav-link" id="pills-pills-germany" data-toggle="pill" href="#pills-germany" role="tab" aria-controls="pills-germany" aria-selected="false">ဘွန်ဒက်လီဂါ</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" id="pills-pills-serie-a" data-toggle="pill" href="#pills-serie-a" role="tab" aria-controls="pills-serie-a" aria-selected="false">စီးရီအေ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-pills-serie-a" data-toggle="pill" href="#pills-chan-a" role="tab" aria-controls="pills-chan-a" aria-selected="false">ချံပီယံလိဒ်</a>
            </li>
           
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="media">
                <iframe src="https://www.fctables.com/england/premier-league/iframe/?type=table&lang_id=2&country=67&template=10&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=0&form=0&width=100%25&height=100%25&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=0&hfb=0&hbc=388E3C&hfc=FFFFFF" height="500" width="600" title="Iframe Example" ></iframe>
                <iframe src="https://www.fctables.com/england/premier-league/iframe/?type=league-scores&lang_id=2&country=67&template=10&team=189577&timezone=Indian/Cocos&time=12&width=100%25&height=100%25&font=Times+new+roman&fs=12&lh=28&bg=FFFFFF&fc=000000&logo=1&tlink=1&scoreb=ff0000&scorefc=FFFFFF&sgdcoreb=388E3C&sgdcorefc=FFFFFF&sh=0&hfb=1&hbc=0000000&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="media">
                <iframe src="https://www.fctables.com/spain/liga-bbva/iframe/?type=table&lang_id=2&country=67&template=43&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=0&form=0&width=100%25&height=100%25&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=0&hfb=0&hbc=388E3C&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
                <iframe src="https://www.fctables.com/spain/liga-bbva/iframe/?type=league-scores&lang_id=2&country=67&template=43&team=184037&timezone=Indian/Cocos&time=12&width=100%25&height=100%25&font=Times+new+roman&fs=12&lh=28&bg=FFFFFF&fc=000000&logo=1&tlink=1&scoreb=ff0000&scorefc=FFFFFF&sgdcoreb=388E3C&sgdcorefc=FFFFFF&sh=0&hfb=1&hbc=0000000&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-germany" role="tabpanel" aria-labelledby="pills-germany-tab">
              <div class="media">
                <iframe src="https://www.fctables.com/germany/1-bundesliga/iframe/?type=table&lang_id=2&country=67&template=16&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=0&form=0&width=100%25&height=100%25font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=0&hfb=0&hbc=388E3C&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
                <iframe src="https://www.fctables.com/germany/1-bundesliga/iframe/?type=league-scores&lang_id=2&country=67&template=16&team=&timezone=Indian/Cocos&time=12&width=100%25&height=100%25&font=Times+new+roman&fs=12&lh=28&bg=FFFFFF&fc=000000&logo=1&tlink=1&scoreb=ff0000&scorefc=FFFFFF&sgdcoreb=388E3C&sgdcorefc=FFFFFF&sh=0&hfb=1&hbc=0000000&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-serie-a" role="tabpanel" aria-labelledby="pills-serie-a-tab">
              <div class="media">
                <iframe src="https://www.fctables.com/italy/serie-a/iframe/?type=table&lang_id=2&country=67&template=17&stage=&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=0&form=0&width=100%25&height=100%25&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=0&hfb=0&hbc=388E3C&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
                <iframe src="https://www.fctables.com/italy/serie-a/iframe/?type=league-scores&lang_id=2&country=67&template=17&team=&timezone=Indian/Cocos&time=12&width=100%25&height=100%25&font=Times+new+roman&fs=12&lh=28&bg=FFFFFF&fc=000000&logo=1&tlink=1&scoreb=ff0000&scorefc=FFFFFF&sgdcoreb=388E3C&sgdcorefc=FFFFFF&sh=0&hfb=1&hbc=0000000&hfc=FFFFFF" height="500" width="600" title="Iframe Example"></iframe>
              </div>
            </div>
             
            <div class="tab-pane fade" id="pills-chan-a" role="tabpanel" aria-labelledby="pills-chan-a-tab">
              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31155&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>

              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31156&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>

              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31157&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>

              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31158&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>

              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31159&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>

              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31160&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>

              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31161&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>

              <iframe frameborder="0"  scrolling="no" width="550" height="170" src="https://www.fctables.com/championsleague/iframe/?type=table&lang_id=2&country=5&template=5&stage=31162&team=&timezone=Pacific/Midway&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=520&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>
            </div>
            
        
          </div>
        </div>
      </div>
    </div>
  <!--a -->
  

  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">မှတ်ချက်</h4>
              <ul class="solid-bullet-list">
                  <li>
                      <h6>လူကြီးမင်းငွေထည့်ပြီးသည်နှင့်</h6>
                      <h6>ငါးမိနစ်အတွင်း လူကြီးမင်းအကောင့်ထဲသို့ငွေ၀င်ပါမည်။</h6>
                  </li>
                <li>
                    <h6>လူကြီးမင်းငွေထုတ်သည့်အချိန်မှစ၍</h6>
                    <h6>လူကြီးမင်းထံသို့ငါးမိနစ်အတွင်းငွေ၀င်ပါမည်။</h6>
                </li>
                <li>
                    <h6>အကောင့်ထဲသို့ငွေသွင်းရန်ဖုန်းနံပါတ်သည်</h6>
                    <h6>အမြဲတမ်းအပြောင်းအလဲရှိနိုင်ပါသည်။</h6>
                </li>
                <li>
                    <h6>lucky7 မိသားစုသည် မိမိသို့ဆီမှ ဘဏ်အကောင့်များနှင့်</h6>
                    <h6>မိမိသို့၏ မူပိုင်ခွင့်များကို မည့်သည့်အခါမှတောင်းခံလိမ့်မည်မဟုတ်ပါ။</h6>
                </li>
                <li>
                    <h6>မိမိသို့အခက်ခဲများ အချိန်မရွေး</h6>
                    <h6>ဖြေရှင်းပေးနိုင်ရန် Hotline ဖုန်းနံပါတ်သို့ဆက်သွယ်နိုင်ပါသည်</h6>
                </li>
                          
              </ul>
          </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          <i class="fas fa-rocket"></i>
          အကောာင်းထဲသို့ငွေသွင်းရန်ဖုန်းနံပါတ်များ
        </h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  ဖုန်းနံပါတ်
                </th>
                <th>
                  အမျိုးအစား
                </th>
                       
              </tr>
            </thead>
            <tbody>
              <tr>
              @foreach ($moneys as $money)
                  <tr>
                    <td class="btn btn-primary btn-icon-text">{{ $money->phno }}</td>
                    <td >{{ $money->type }}</td>

                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
   @endrole
  <!--end a -->
  </div>
  <!-- content-wrapper ends -->

@endsection