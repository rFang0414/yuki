@extends('header&footer')
@section('content')
<script type="text/javascript" language="JavaScript">
</script>
<div id="main" class="bg">
    <div class="container-fluid">
    <div class="panel-group col-md-8 col-md-offset-2" id="accordion" role="tablist" aria-multiselectable="true">
        <ol class="breadcrumb">
            <li>Home</li>
            <li class="active">People</li>
        </ol>
        <h4>You can see staff's information here</h4>
        <hr/>
        <div class="col-md-2">
            <img src="images/manyoo.png">
        </div>
        <div class="col-md-8">
        <?php
        $index = 1;
        foreach ($users as $user)
        {
        ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$index}}" aria-expanded="true" aria-controls="collapseOne">
                            {{$user->Name}}
                        </a>
                    </h4>
                </div>
                <div id="collapse{{$index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <li>Email: {{$user->Email}}</li>
                        <li>Birthday: {{$user->DOB}}</li>
                    </div>
                </div>
            </div>
        <?php
            $index++;
        }
        ?>
        </div>
        <div class="col-md-2">
            <img src="images/manyoo_mirror.png">
        </div>
    </div>

</div>
</div>
@endsection
