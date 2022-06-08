@extends('layouts.app')
@section('content')

<div id="content-container">
    <div class="pageheader">
        <div id="page-content">
            <div class="panel">

                <div class="panel-heading ">
                    <h3 class="panel-title">User Details

                    </h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{config('app.baseURL')}}/user/update/{{$user->user_id}}" id="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="demo-text-input" name="name" class="form-control" placeholder="Name" value="{{$user->name}}"/>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="demo-text-input" name="email" class="form-control" placeholder="Email" value="{{$user->email}}"/>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="tel" id="demo-text-input" name="contact" class="form-control" placeholder="Contact Number" value="{{$user->contact}}"/>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" id="demo-text-input" name="city" class="form-control" placeholder="City" value="{{$user->city}}"/>
                                </div>
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" id="demo-text-input" name="profile_image" class="form-control-xl" placeholder="Enter Profile Image" maxlength="100" value="{{$user->profile_image}}" />
                                    @if ("{{config('app.baseURL')}}/storage/app/profile_image/{{ $user->profile_image}}")
                                    <img src= "{{config('app.baseURL')}}/storage/app/{{ $user->profile_image}}" id="profile-img-tag" style="width: 50px;height: 50px;margin-left:194px;margin-top: -36px;"/>
                                    @else
                                    image <input type="file" name="profile_image" value="{{ $user->profile_image}}"/>
                                    @endif
                                </div>                            
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" rowspan="5" colspan="30">{{$user->address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="full-name-1">Role</label>
                                    <select class="form-control" name="role" id="role" required/>
                                    <option value="" selected disabled>Select</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3" style="text-align: center; float: right;">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Submit
                                    </button>           
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#role option[value ={{$user->role}}]").prop("selected",true);
</script>
@endsection