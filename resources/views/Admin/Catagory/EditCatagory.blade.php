@extends('Admin.layouts.master')
@section('title','Update-Catagory')
@section('mainContent')
<div class="main-grid">
    <div class="agile-grids">	
        <!-- validation -->
        <div class="grids">
            <div class="progressbar-heading grids-heading">
                
                <h2>Add Catagory</h2>
            </div>
              <div class="progressbar-heading grids-heading">
             <h2 style="color:green">{{Session::get('message')}}</h2>
              </div>
            <div class="forms-grids">
                <div class="w3agile-validation">
                    <div class="panel panel-widget agile-validation">
                        <div class="my-div">
                           
                            {!! Form::open(['url' =>'/Edit-catagory','mathod'=>'POST','name'=>'ShowPublication']) !!}
                                <div class="input-info">
                                    <h3>Catagory Name:</h3>
                                </div>

                                <label for="field-1"><span class="at-required-highlight"></span></label>
                                <div class="form-group">
                                    <input type="text" name="catagory_name" id="field-1" required="true" class="form-control" value="{{$UpdateCatagories->catagory_name}}">
                                    <input type="hidden" name="catagory_id" id="field-1" required="true" class="form-control" value="{{$UpdateCatagories->catagory_id}}">
                                </div>

                              
                        <hr>

                        <h4>Catagory Description:</h4>

                        <label for="field-4"><span class="at-required-highlight">*</span></label>
                        <div class="form-group">
                            <textarea name="catagory_description" id="field-4" required="true" class="form-control">{{$UpdateCatagories->catagory_description}}</textarea>
                        </div>

                                <h4>Publication Status:</h4>

                                <label for="field-2"><span class="at-required-highlight">*</span></label>
                                <div class="form-group">
                                    <select name="publication_status" id="field-2" required="true" class="form-control" value="{{$UpdateCatagories->publication_status}}">
                                        <option value="">Select Catagory Status</option>
                                        <option value="1">Published</option>
                                        <option value="2">Unpublished</option>
                                    </select>
                                </div>

                                <p>
                                    <input type="submit" name="sub-1" value="Update Catagory Info" class="btn btn-primary">
                                    <input type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger">
                                    <input type="button" name="but-1" value="Button 1" class="btn btn-default">
                                </p>
                             {!! Form::close() !!}
                              </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //validation -->
    </div>
<script>
    document.forms['ShowPublication'].elements['publication_status'].value={{$UpdateCatagories->publication_status}}
    </script>

@endsection


