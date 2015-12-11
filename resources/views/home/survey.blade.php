<script type="text/javascript" language="JavaScript">
    window.item =
    {
        China:
        {
            Jiangsu:'nantong,suzhou,nanjin',
            Shanghai:'pudong,nanhui',
            Sichuan:'chengdu,mianyang,yaan'
        },
        Australia:
        {
            NewSouthWales:'City1,City2,City3',
            Queensland:'City4,City5,City6',
            Tasmania:'City7,City8,City9'
        }
    };
    function set_state(country)
    {
        window.country = country;

        if($('#country select').val() == "")
        {
            $('#State').hide();
            $('#City').hide();
        }
        else
            $('#State').show();

        var states = item[country];
        var state_select = $('#State select');
        var city_select = $('#City select');

        $('#City select option').remove();
        $('#State select option').remove();

        state_select.append('<option value="" selected>Not Set</option>');
        for(var state in states)
        {
            var option = '<option value="'+ state +'">'+state+'</option>';
            state_select.append(option)
        }
    }

    function set_city(state)
    {
        if($('#State select').val() == "")
            $('#City').hide();
        else
            $('#City').show();


        var city_select = $('#City select');

        $('#City select option').remove();

        city_select.append('<option value="" selected>Not Set</option>');
        var cities = item[window.country][state].split(',');
        for(var index in cities)
        {
            var option = '<option value="'+ cities[index] +'">'+cities[index]+'</option>'
            city_select.append(option)
        }

    }

    function valid_form()
    {
        alert('Survey submit success. Thank You!')
    }

    function reset_form()
    {
        $('#City select option').remove();
        $('#State select option').remove();
        $('#State').hide();
        $('#City').hide();
    }

</script>
@extends('header&footer')
@section('content')
<script>
    $(function() {
        $('#State').hide();
        $('#City').hide();
    })
</script>
<div id="main" class="bg1">
    <div class="container-fluid">
    <div class="row col-md-offset-3 col-md-6">
        <ol class="breadcrumb">
            <li>Home</li>
            <li class="active">Member</li>
        </ol>
        <hr/>
        @if(isset($error))
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                {{$error}}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">Survey</div>
            <div class="panel-body">
                <form action="online_survey" method="post" onsubmit="valid_form()">
                    <div class="radio">
                        <label><span>1:<br>Gender:</span></label>
                        <label>
                            <input type="radio" name="gender" id="gender1" value="Male" required>Male
                        </label>
                        <label>
                            <input type="radio" name="gender" id="gender2" value="Female">Female
                        </label>
                    </div>
                    <hr>
                    <div class="radio">
                        <label><span>2:<br>Satisfaction:</span></label>
                        <label>
                            <input type="radio" name="satisfaction" id="satisfaction1" value="yes" required>Yes
                        </label>
                        <label>
                            <input type="radio" name="satisfaction" id="satisfaction2" value="no">No
                        </label>
                    </div>
                    <hr>
                    <div class="radio">
                        <span><label>3:Location</label></span><br>
                        <div class="col-md-4" id="country">
                            <select class="form-control" name="country" required
                                    onchange="set_state(this.options[this.options.selectedIndex].value)">
                                <option value="" selected>Country</option>
                                <option value="China">China</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="col-md-4" id="State">
                            <select class="form-control" name="state" required
                                    onchange="set_city(this.options[this.options.selectedIndex].value)">
                            </select>
                        </div>
                        <div class="col-md-4" id="City">
                            <select class="form-control" name="city" required>
                            </select>
                        </div>
                    </div>
                    <br><hr>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="reset" class="btn btn-primary btn-sm btn-block" onclick="reset_form()">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection