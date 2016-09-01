@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class ="form-group">
                        <legend><center> Availability</center></legend>
                        </div>
                        <div align="center">
                            <label for="am" class="col-md-3 control-label">Am</label>
                            <input type="hidden" name="mondayam" value="0" />
                            <label class="checkbox-inline "><input name="mondayam" type="checkbox" value="1">Monday</label>
                            <input type="hidden" name="tuesdayam" value="0" />
                            <label class="checkbox-inline"><input name="tuesdayam" type="checkbox" value="1">Tuesday</label>
                            <input type="hidden" name="wednesdayam" value="0" />
                            <label class="checkbox-inline"><input name="wednesdayam" type="checkbox" value="1">Wednesday</label>
                            <input type="hidden" name="thursdayam" value="0" />
                            <label class="checkbox-inline"><input name="thursdayam" type="checkbox" value="1">Thursday</label>
                            <input type="hidden" name="fridayam" value="0" />
                            <label class="checkbox-inline"><input name="fridayam" type="checkbox" value="1">Friday</label>
                            <input type="hidden" name="saturdayam" value="0" />
                            <label class="checkbox-inline"><input name="saturdayam" type="checkbox" value="1">Saturday</label>
                            <input type="hidden" name="sundayam" value="0" />
                            <label class="checkbox-inline"><input name="sundayam" type="checkbox" value="1">Sunday</label>

                        </div>

                        <div align="center">
                            <label for="pm" class="col-md-3 control-label">Pm</label>
                            <input type="hidden" name="mondaypm" value="0" />
                            <label class="checkbox-inline "><input name="mondaypm" type="checkbox" value="1">Monday</label>
                            <input type="hidden" name="tuesdaypm" value="0" />
                            <label class="checkbox-inline"><input name="tuesdaypm" type="checkbox" value="1">Tuesday</label>
                            <input type="hidden" name="wednesdaypm" value="0" />
                            <label class="checkbox-inline"><input name="wednesdaypm" type="checkbox" value="1">Wednesday</label>
                            <input type="hidden" name="thursdaypm" value="0" />
                            <label class="checkbox-inline"><input name="thursdaypm" type="checkbox" value="1">Thursday</label>
                            <input type="hidden" name="fridaypm" value="0" />
                            <label class="checkbox-inline"><input name="fridaypm" type="checkbox" value="1">Friday</label>
                            <input type="hidden" name="saturdaypm" value="0" />
                            <label class="checkbox-inline"><input name="saturdaypm" type="checkbox" value="1">Saturday</label>
                            <input type="hidden" name="sundaypm" value="0" />
                            <label class="checkbox-inline"><input name="sundaypm" type="checkbox" value="1">Sunday</label>
                        </div>
                        </br>
                        <div align="center" class="form-group ">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

@endsection
