<script type="text/javascript" language="JavaScript">
    var day_in_month = [0,31,29,31,30,31,30,31,31,30,31,30,31];
    function validate()
    {
        var username = $('#username').val()
        if(/^[A-Za-z0-9]+$/.test(username)==false){
            alert('username invalid!')
            return false;
        }

        if(/[^\d]/.test(username)==false)
        {
            alert('Username must contain at least one letter')
            return false;
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

    function set_year()
    {
        $('#month').show();
    }

    function set_month(month)
    {
        $('#day select option').remove();
        var day_select = $('#day select');
        var days = day_in_month[month];
        for(var i=1; i<=days; i++)
        {
            var option = '<option value="'+ i +'">'+i+'</option>';
            day_select.append(option);
        }
        $('#day').show();
    }

    function  reset_form()
    {
        $('#day select option').remove();
        $('#month').hide();
        $('#day').hide();
    }
</script>
@extends('header&footer')
@section('content')
    <script>
        $(function() {
            var year_select = $('#year select');
            var month_select = $('#month select');

            for(var i=2014; i>=1100; i--)
            {
                var option = '<option value="'+ i +'">'+i+'</option>';
                year_select.append(option)
            }

            for(var i=1; i<=12; i++)
            {
                var option = '<option value="'+ i +'">'+i+'</option>';
                month_select.append(option)
            }
            $('#month').hide();
            $('#day').hide();
        })
    </script>
    <?php
        $day_in_month = [31,29,31,30,31,30,31,31,30,31,30,31,];
    ?>
    <script>
        $(function() {
            $("#datepicker").datepicker({dateFormat: "yy/mm/dd"})
        });
    </script>
    <div class="container">
        <div class="row col-md-offset-2 col-md-8">
            <div class="modal-header">
                <h1 class="text-center text-primary">Create Your Account</h1>
            </div>
            @if(isset($error))
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                {{$error}}
            </div>
            @endif
            <div class="modal-body">
                <form action="register" method="post" class="form col-md-12 center-block">
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
                        <input name="first_name" type="text" class="form-control input-lg" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input name="last_name" type="text" class="form-control input-lg" placeholder="Last Name" required>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <label style="padding-top: 10px">DOB:</label>
                        </div>
                        <div class="col-md-3" id="year">
                            <select class="form-control" name="year" required
                                    onchange="set_year()">
                            </select>
                        </div>
                        <div class="col-md-3" id="month">
                            <select class="form-control" name="month" required
                                    onchange="set_month(this.options[this.options.selectedIndex].value)">
                            </select>
                        </div>
                        <div class="col-md-3" id="day">
                            <select class="form-control" name="day" required>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control input-lg" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                        <button type='submit' class="btn btn-primary btn-lg btn-block" onclick="return validate()">Sign Up</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="reset" class="btn btn-primary btn-lg btn-block" onclick="reset_form()">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
