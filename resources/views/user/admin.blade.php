@extends('header&footer')
@section('content')
    <?php
        $clickable = 'disabled';
        if(session('user')->Access == '1')
        {
            $clickable = '';
        }
    ?>
    <div class="container">
        <form method="post" action="change_access">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Email</th>
                <th class="text-center">Access</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->ID}}</td>
                    <td>{{$user->Username}}</td>
                    <td>{{$user->Name}}</td>
                    <td>{{$user->DOB}}</td>
                    <td>{{$user->Email}}</td>
                    <td class="text-center">
                        <select class="form-control" name="{{$user->ID}}" required {{$clickable}}>
                            @if($user->Access == '1')
                                <option value="1" selected>Admin</option>
                                <option value="2">General</option>
                            @else
                                <option value="2" selected>General</option>
                                <option value="1">Admin</option>
                            @endif
                        </select>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <hr />
            <div class="col-md-offset-2">
                <div class="form-group col-md-4">
                    <button type='submit' class="btn btn-primary btn-lg btn-block" onclick="return alert('Submit successful!')">Submit</button>
                </div>
                <div class="form-group col-md-4">
                    <button type="reset" class="btn btn-primary btn-lg btn-block">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection