@extends('layouts.main')
@section('title', 'Add Sender')
@section('content')

<div class="container">
                <div class="container">

                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Add Sender</a></li>
                            </ol>
                        </nav>
                    </div>
                     
                    <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add Sender</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <form id="new_sender_add" method="post">
                                 @csrf
                                <div class="widget-content widget-content-area">
                                   
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="" autocomplete="off">
                                            </div>

                                            <div class="form-group col-md-6">

                                                <label for="inputPassword4">Type</label>
                                                </br>
                                                <div class="form-check form-check-inline">
                                                   
                                    <label class="new-control new-radio new-radio-text radio-classic-primary">
                                      <input type="radio" class="new-control-input" name="type" value="Vendor">
                                      <span class="new-control-indicator"></span><span class="new-radio-content">Vendor</span>
                                    </label>
                                </div>
                                
                                
                                <div class="form-check form-check-inline">
                                    <label class="new-control new-radio new-radio-text radio-classic-primary">
                                      <input type="radio" class="new-control-input" name="type" value="Government Department">
                                      <span class="new-control-indicator"></span><span class="new-radio-content">Government Department</span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="new-control new-radio new-radio-text radio-classic-primary">
                                      <input type="radio" class="new-control-input" name="type" value="Customer">
                                      <span class="new-control-indicator"></span><span class="new-radio-content">Customer</span>
                                    </label>
                                </div>

                                            </div>
                                        </div>
                                        
                                        <div class="form-row mb-4">
                                       <div class="form-group col-md-6">
                                      <label for="inputEmail4">Location</label>
                                      <input type="text" class="form-control" id="location" placeholder="" name="location" autocomplete="off">
                                      </div>
                                      <div class="form-group col-md-6">
                                     <label for="inputPassword4">Telephone No.</label>
                                     <input type="text" class="form-control" name="telephone_no" id="telephone_no" placeholder="" autocomplete="off">
                                     </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary"><span class="indicator-label">Save</span>
		                            <span class="indicator-progress" style="display: none;">Please wait...
	                            	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button> 
                                      
                                    </form>
       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                

@endsection