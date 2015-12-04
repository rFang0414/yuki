<script type="text/javascript" language="JavaScript">
    function validate()
    {
        var username = $('#username').val()
        if(/^[A-Za-z0-9]+$/.test(username)==false){
            alert('username invalid!')
            return false
        }
        if($('#pwd').val() != $('#pwd_confirm').val()) {
            alert('the password should be the same');
            return false;
        }
        if($('#pwd').val().length<5) {
            alert('password requires more than 5 characters')
            return false;
        }
    }
</script>
@extends('header&footer')
@section('content')
    <script>
        $(function() {
            //$("#datepicker").datepicker();
            $("#datepicker").datepicker({dateFormat: "yy/mm/dd"})
        });
    </script>
    <div class="container">
        <div class="row col-md-offset-2 col-md-8">
            <div class="modal-header">
                <h1 class="text-center text-primary">Sign up now</h1>
            </div>
            @if(isset($error))
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                {{$error}}
            </div>
            @endif
            <div class="modal-body">
                <form action="/register" method="post" class="form col-md-12 center-block">
                    <div class="form-group">
                        <input id="username" name="Username" type="text" class="form-control input-lg" placeholder="Username to login" required>
                    </div>
                    <div class="form-group">
                        <input id='pwd' name="pwd" type="password" class="form-control input-lg" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input id='pwd_confirm' name="pwd_confirm" type="password" class="form-control input-lg" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control input-lg" placeholder="Your real name" required>
                    </div>
                    <div class="form-group">
                        <input name="DOB" type="text" class="form-control input-lg" id="datepicker" placeholder="Date of Born"></p>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control input-lg" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                        <button type='submit' class="btn btn-primary btn-lg btn-block" onclick="return validate()">Sign Up</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="reset" class="btn btn-primary btn-lg btn-block">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
