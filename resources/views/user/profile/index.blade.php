@extends('layouts.user.dashboard.app')

@section('content')
<div class="container-fluid">
                <section class="details_wrapper">

                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="card card-stats">
                             
                                <div class="card-content">
                                    <p class="text-left pl-2 pt-2">Profile</p>
                                   
                                    
                                </div>
                                <div class="card-footer">
                                    <form action="{{route('user.update.profile')}}" method="post" enctype="multipart/form-data">
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
                                                <input type="file" name="image" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-group">Password</label>
                                                <input type="password" name="password" class="form-control" >
                                            </div>
                                            
                                            <div class="col-md-12 text-right" style="margin: 28px auto;">
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