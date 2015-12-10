@extends('header&footer')
@section('content')
<?php
?>

<div class="container">
    <ol class="breadcrumb">
        <li>Home</li>
        <li class="active">Member</li>
    </ol>
    <hr/>
    <div class="col-md-8">
        <form onsubmit="return checkForm();" method="post" action="add_member">
            <table>
                <tr>
                    <td>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="last_name">Last Name:&emsp;</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="">&emsp;&emsp;&emsp;&emsp;
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name:&emsp;</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:&emsp;</label>&emsp;&nbsp;&nbsp;
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gander_male" checked value="male"> male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gander_female" value="female"> female
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="email">Email:&emsp;</label>
                                <input type="email" class="form-control" style="width: 533px;" name="email" id="email" placeholder="">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-inline">
                            <div class="form-group">
                                <label>State:&emsp;</label>
                                <select class="form-control" id="state" name="state">
                                    <option value="" selected></option>
                                    <option value="ACT">ACT</option>
                                    <option value="NSW">NSW</option>
                                    <option value="NT">NT</option>
                                    <option value="QLD">QLD</option>
                                    <option value="SA">SA</option>
                                    <option value="TAS">TAS</option>
                                    <option value="VIC">VIC</option>
                                    <option value="WA">WA</option>
                                </select>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/><br/><hr/>
                        <input class="btn btn-primary" type="submit" style="width: 120px;" name="sub" value="Submit">&emsp;
                        <input class="btn btn-default" type="reset" name="sub" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <br/><br/>
        <p>Please fill in your information so that we can contact you in time. You can join us, to complete the fashion industry.</p>
    </div>
    <div class="col-md-4">
        <img src="/images/astray.png">
    </div>
</div>

<div class="modal fade bs-example-modal-sm" id="error" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <h4 style="text-align: center" id="error_tip"></h4>
            </div>
            <div class="modal-footer" style="text-align: center">
                <button type="button" id="btn" class="btn btn-default">ok</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" language="javascript">
    <?php if(!empty($res)): ?>
    $('#error_tip').html('{{$res}}');
    $('#error').modal('show');
    $('#btn').unbind();
    $('#btn').click(function(){
        hideModal('');
    });
    <?php endif; ?>
    $("#last_name").focus();
    function checkForm(){
        var lastName = $("#last_name").val().trim();
        var firstName = $("#first_name").val().trim();
        var gender = $("input:radio[name='gender']:checked").val();
        var email = $("#email").val().trim();
        var state = $("#state").val();

        var flag = false;

        if(lastName == ''){
            $('#error_tip').html('Please enter your Last Name');
            $('#error').modal('show');
            $('#btn').unbind();
            $('#btn').click(function(){
                hideModal('last_name');
            });
        }
        else if(firstName == ''){
            $('#error_tip').html('Please enter your First Name');
            $('#error').modal('show');
            $('#btn').unbind();
            $('#btn').click(function(){
                hideModal('first_name');
            });
        }
        else if(email == ''){
            $('#error_tip').html('Please enter your Email');
            $('#error').modal('show');
            $('#btn').unbind();
            $('#btn').click(function(){
                hideModal('email');
            });
        }
        else if(state == ''){
            $('#error_tip').html('Please choose State');
            $('#error').modal('show');
            $('#btn').unbind();
            $('#btn').click(function(){
                hideModal('state');
            });
        }
        else{
            flag = true;
        }

        return flag;
    }

    function hideModal(ele){
        $('#error').modal('hide');
        if(ele != ''){
            $('#'+ele).focus();
        }
        else{
            $("#last_name").focus();
        }
    }

</script>
@endsection