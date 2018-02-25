@extends('Admin.layouts.master')
@section('title','Add-Catagory')
@section('catagory_active','active')
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
                           
                            {!! Form::open(['url' =>'/add-catagory','mathod'=>'POST']) !!}
                                <div class="input-info">
                                    <h3>Catagory Name:</h3>
                                </div>

                                <label for="field-1"><span class="at-required-highlight">*{{$errors->has('catagory_name')? $errors->first('catagory_name'):''}}</span></label>
                                <div class="form-group">
                                    <input type="text" name="catagory_name" id="field-1" required="true" class="form-control">
                                </div>

                              
                        <hr>

                        <h4>Catagory Description:</h4>

                        <label for="field-4"><span class="at-required-highlight">*{{$errors->has('catagory_description')? $errors->first('catagory_description'):''}}</span></label>
                        <div class="form-group">
                            <textarea name="catagory_description" id="field-4" required="true" class="form-control"></textarea>
                        </div>

                                <h4>Publication Status:</h4>

                                <label for="field-2"><span class="at-required-highlight">*</span></label>
                                <div class="form-group">
                                    <select name="publication_status" id="field-2" required="true" class="form-control">
                                        <option value="">Select Catagory Status</option>
                                        <option value="1">Published</option>
                                        <option value="2">Unpublished</option>
                                    </select>
                                </div>

                                <p>
                                    <input type="submit" name="sub-1" value="Save Catagory Info" class="btn btn-primary">
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

@endsection
