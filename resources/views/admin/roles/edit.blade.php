@extends('layouts.app')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 float-leftt">
                    <h3>Edit User Role</h3>

                </div>
                <div class="col-md-3  col-sm-3 col-xs-12 " >
                    <div class="">
                        <a type="button" href="{{route('roles')}}" class="btn btn-info btn-lg">Manage  Role</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <div id="response"></div>
                        <form id="role-edit-submit" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Role Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="role" name="role" value="{{$roleInfo->role}}" required="required" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" id="roleId" name="roleId" value="{{$roleInfo->id}}" required="required" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" id ="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" id ="role-update" name ="role-update" class="btn btn-primary">Update</button>
                                <button class="btn btn-default" type="reset" id="resetBtn">Reset</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection