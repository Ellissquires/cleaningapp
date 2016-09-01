@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">   
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <center>
                    <div class="welcomebuttondiv">
                        <a href="{{ url('/login') }}"><button type="button" style="height:40px;width:120px" class=" btn btn-default"><i class="fa fa-btn fa-sign-in"></i>Login</button></a>
                        <a href="{{ url('/register') }}"><button type="button" style="height:40px;width:120px" class="btn btn-default "><i class="fa fa-btn fa-user"></i>Register</button></a>
                        <button type="button" style="height:40px;width:120px" class="btn btn-default"><i class="fa fa-btn fa-phone"></i>Contact</button>
                    </div>
                    <center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
