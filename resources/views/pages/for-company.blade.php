@extends('layouts.main')
@section('title', 'Sender-List')
@section('content')
  <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
  <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_custom.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
<div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">For</a></li>
                            
                        </ol>
                    </nav>
                </div>
                
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th>For</th>
                                        <th class="text-center dt-no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($forcompanys as $forcompany)
							<tr>
                            <td>{{$forcompany->for_company}}</td>
                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li><a href="#" type="button" class="bs-tooltip editbtn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  value="{{$forcompany->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                    <li><a href="delete-forcompany/{{$forcompany->id}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                                </ul>
                                            </td>
                           </tr>
                         @endforeach
                              
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                </div>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Upload New</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <form action="{{ url('updated-company')}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    
                                                    <div class="form-row mb-4">
                                                    <input type="hidden" name="for_id" id="for_id" value=""/>
                                                
                                                    <div class="form-group col-md-6">
                                                <label for="inputEmail4">For Company</label>
                                                <input type="text" class="form-control" id="for_company" name="for_company"  placeholder="" autocomplete="off">
                                                 </div>   
    
                                                    </div>
                                                                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>


  



@endsection