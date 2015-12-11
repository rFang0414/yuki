@extends('header&footer')
@section('content')
<script>
    $(function() {
        //$("#datepicker").datepicker();
        $("#datepicker").datepicker({dateFormat: "yy/mm/dd"})
    });
</script>
<?php
    $user = session('user');
?>
<div id="main" class="bg1">
    <div class="container">
        <div class="row col-md-offset-3 col-md-6">
            <div class="modal-header">
                <h1 class="text-center text-primary">My Infomation</h1>
            </div>
            <div class="modal-body">
                <form action="my_page" method="post" class="form col-md-12 center-block">
                    <div class="form-group">
                        <input value="{{$user->Username}}" name="Username" id="username" type="text" class="form-control input-lg" placeholder="Username to login" readonly required>
                    </div>
                    <div class="form-group">
                        <input value="{{$user->Name}}" name="name" type="text" class="form-control input-lg" placeholder="Your real name" required>
                    </div>
                    <div class="form-group">
                        <input value="{{$user->DOB or ''}}" name="DOB" type="text" class="form-control input-lg" id="datepicker" placeholder="Date of Born" required></p>
                    </div>
                    <div class="form-group">
                        <input value="{{$user->Email or ''}}" name="email" type="email" class="form-control input-lg" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                        <button type='submit' class="btn btn-primary btn-lg btn-block" onclick="return alert('Submit successful!')">Edit</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="reset" class="btn btn-primary btn-lg btn-block">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection