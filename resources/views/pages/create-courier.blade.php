@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
<style>
.list-group{
    width: 300px !important;
   
    padding: 10px !important;
    list-style-type: none;
}
.list-group {
    max-height: 230px;
    overflow-y: auto;
    / prevent horizontal scrollbar /
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 100px;
  }
   li:hover{  
    color: blue;
 }  
 .editlable{
   
    color: gray;

 }
 
</style>
   
<div class="container">
                <div class="container">

                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Add New Courier</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Create New</a></li>
                            </ol>
                        </nav>
                    </div>
                     

                    <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            
                                        </div>                                                                        
                                    </div>
                                </div>
                                
                                <div class="widget-content widget-content-area">
                                <h5><b>Sender Details</b></h5>
                                <form id="new_courier_create" method="post" class="specify-numbers-price">
                                @csrf
            
                                        <div class="form-row mb-4">
                                         <div class="form-group col-md-4">
                                             <label for="inputEmail4">From </label>
                                             <input type="text" class="form-control" id="search" name="name_company"  placeholder=""                                  autocomplete="off">
                                             <div id="product_list"></div>
                                         </div>
                                         <div class="form-group col-md-4">
                                             <label for="inputPassword4">Location</label>
                                             <input type="text" class="form-control" id="location" name="location" placeholder="" readonly="readonly">
                                         </div>
                                         <div class="form-group col-md-4">
                                             <label for="inputPassword4">Telephone No.</label>
                                             <input type="text" class="form-control"  id="telephone_no" name="telephone_no" placeholder=""                                  autocomplete="off">
                                         </div>
                                     </div>
                                 
                                 
                                     <h5><b>Courier Details</b></h5>
                                    <div class="form-row mb-4">
                                    
                                       <div class="form-group col-md-4">
                                               <label for="inputState">Courier Name</label>
                                                  <select id="slct" name="slct" class="form-control" onchange="yesnoCheck(this);">
                                                  <option selected disabled>Select..</option>
                                                  @foreach($couriers as $courier)
                                                  <option value="{{$courier->courier_name}}">{{$courier->courier_name}}</option>
                                                  @endforeach
                                                  <option>Other</option>
                                        </select><br>
                                        <!--courier other field -->
                                     <div id="ifYes" style="display: none">
                                         <input type="text" class="form-control" id="other" name="other"  placeholder="Other" autocomplete="off">
                                    </div>
                                        <!-- end -->
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Docket No.</label>
                                        <input type="text" class="form-control" id="docket_no" name="docket_no" placeholder="" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Docket Date</label>
                                        <input type="date" class="form-control" id="docket_date" name="docket_date" placeholder="">
                                    </div>
                                </div>
                                
                                <h5><b>Document Details</b></h5>
                                <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                        <label for="inputState">Add Catagories</label>
                                        <select id="catagories" name="catagories[]" class="form-control">
                                            <option selected disabled>Select...</option>
                                            @foreach($categorys as $category)
                                            <option value="{{$category->catagories}}">{{$category->catagories}}</option>
                                              @endforeach
                                              <option>Other</option>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label for="inputState">For</label>
                                          <select id="for" name="for[]" class="form-control">
                                              <option selected>Select...</option>
                                              @foreach($forcompany as $forcomp)
                                              <option value="{{$forcomp->for_company}}">{{$forcomp->for_company}}</option>
                                              @endforeach
                                              <option>Other</option>
                                          </select>
                                      </div>
                                     
                                  </div>
                                  
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                              </form>
                                      
                               </div>
                            </div>
                        </div>
                    </div>
      
                </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

                <script type="text/javascript">
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       $(document).ready(function(){
     // alert('h'); die;


       $('#search').on('keyup',function () {
                var query = $(this).val();
                $.ajax({
                    url:'{{ url('autocomplete-search') }}',
                    type:'GET',
                    data:{'search':query},
                    success:function (data) {
                        $('#product_list').html(data);
                    }
                });
            });
            $(document).on('click', 'li', function(){
                var value = $(this).text();        
                var location = value.split('-');         //break value in js split
                for(var i = 0; i < location.length; i++){
           
                    
                $('#search').val(value);
                $('#location').val(location[1]);
                $('#telephone_no').val(location[2]);
                $('#product_list').html("");
                }
            });

});
</script>

<script>
     function yesnoCheck(that) {
    if (that.value == "Other") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}
</script>
@endsection