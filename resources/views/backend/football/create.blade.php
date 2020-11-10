@extends('layouts.partials.master')
@section('title','Create User')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
     
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
                <form class="form-sample" method="POST" action="{{ route('footballs.store') }}">
                @csrf
                <p class="card-description">
                  <button type="button" class="btn btn-dark btn-lg btn-block">ပေါက်ကြေးများကိုသေချာစွာဂရုစိုက်၍ထည့်ပါ</button>
                </p>
                <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                       <label>အိမ်ကွင်း</label>
                        <input type="text" class="form-control" id="home" name="home" placeholder="အသင်းနာမည်">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>အ၀ေးကွင်း</label>
                     <input type="text" class="form-control" id="away" name="away" placeholder="အသင်းနာမည်">
                           
                    </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>ပေါက်ကြေး</label>
                        <input type="text" class="form-control" id="plus" name="plus" placeholder="ပေါက်ကြေး">
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>ပေါက်ကြေး</label>
                        <input type="text" class="form-control" id="minus" name="minus" placeholder="ပေါက်ကြေး">
                    </div>
                </div>
            </div>

             <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="product">ဂိုးပေါင်း</label>
                        <input type="text" class="form-control" name="gold" id="gold" placeholder="ဂိုးပေါင်း" value="{{ old('name') }}">
                                
                    </div>
                  </div>
                  
            </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ url()->previous() }}" class="btn btn-light">Back</a>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-description">
                <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('footbal.multiple-delete') }}">Delete All Selected</button>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th width="50px"><input type="checkbox" id="master"></th>
                      <th class="font-weight-bold">ကြေး</th>
                      <th class="font-weight-bold">အိမ်ကွင်း</th>
                      <th class="font-weight-bold">ဂိုးပေါင်း</th>
                      <th class="font-weight-bold">အ၀ေးကွင်း</th>
                      <th class="font-weight-bold">ကြေး</th>
                      <th class="font-weight-bold">ဖျက်မယ်</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if($footballs->count())
                        @foreach($footballs as $football)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id="{{ $football->id }}"></td>
                          
                            <td>
                            <h4><span class="badge badge-danger">{{ $football->plus }}</span></h4>
                            <td>
                            <h4><span class="badge badge-success">{{ $football->home }}</span></h4>
                            </td>
                            <td>
                            <h4><span class="badge badge-info badge-pill">{{ $football->gold }}</span></h4>
                            </td>
                            <td>
                            <h4><span class="badge badge-success">{{ $football->away }}</span></h4>
                            </td>
                            <td>
                            <h4><span class="badge badge-danger">{{ $football->minus }}</span></h4>
                            </td>
                          
                          <td>
                            <form action="{{ route('footballs.destroy',$football->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Are you sure want to delete this?')" type="submit" class="btn btn-outline-danger">Delete</button>
                              
                            </form>
                          </td>
                
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                  

                </table>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#master').on('click', function(e) {
             if($(this).is(':checked',true))  
             {
                $(".sub_chk").prop('checked', true);  
             } else {  
                $(".sub_chk").prop('checked',false);  
             }  
            });


            $('.delete_all').on('click', function(e) {


                var allVals = [];  
                $(".sub_chk:checked").each(function() {  
                    allVals.push($(this).attr('data-id'));
                });  


                if(allVals.length <=0)  
                {  
                    alert("Please select row.");  
                }  else {  


                    var check = confirm("Are you sure you want to delete this row?");  
                    if(check == true){  


                        var join_selected_values = allVals.join(","); 


                        $.ajax({
                            url: $(this).data('url'),
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids='+join_selected_values,
                            success: function (data) {
                                if (data['success']) {
                                    $(".sub_chk:checked").each(function() {  
                                        $(this).parents("tr").remove();
                                    });
                                    alert(data['success']);
                                } else if (data['error']) {
                                    alert(data['error']);
                                } else {
                                    alert('Whoops Something went wrong!!');
                                }
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });


                      $.each(allVals, function( index, value ) {
                          $('table tr').filter("[data-row-id='" + value + "']").remove();
                      });
                    }  
                }  
            });


            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.trigger('confirm');
                }
            });


            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();


                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });


                return false;
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
    <!-- content-wrapper ends -->
@endsection
