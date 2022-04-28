@extends('layouts.admin.dashboard.app')

@section('content')
<div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">weekend</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Profile</p>
                                   
                                    
                                </div>
                                <div class="card-footer">
                                    <form action="{{route('admin.update.profile')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <label class="form-group">Name*</label>
                                                <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">Email*</label>
                                                <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">Image</label>
                                                <input type="file" name="image" class="form-control"style="position: absolute;top: 1px;right: 0;bottom: 0px;left: 0;width: 100%;height: 35px;z-index: 100; opacity: 1;">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-group">Password</label>
                                                <input type="password" name="password" class="form-control" >
                                            </div>
                                            
                                            <div class="col-md-6" style="margin: 28px auto;">
                                                <button type="submit" class="btn btn-primary ">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                  
              
                    
                </div>
            </div>
@endsection
<style type="text/css">
    .row{
        width: 100%;
    }
    .form-group{
        width: 100%;
    }
</style>