@extends('header&footer')
@section('content')
    <div class="container">
        <div class="row col-md-offset-2 col-md-8">
            <div class="modal-header">
                <h1 class="text-center text-primary">Login</h1>
            </div>
            @if(isset($error))
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    {{$error}}
                </div>
            @endif
            <div class="modal-body">
                <form action="/sign_in" method="post" class="form col-md-12 center-block">
                    <div class="form-group">
                        <input name="Username" type="text" class="form-control input-lg" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input name="pwd" type="password" class="form-control input-lg" placeholder="Password" required >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Login Now</button>
                        <span><a href="#">forget password</a></span>
                        <span><a href="/register" class="pull-right">Register</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
