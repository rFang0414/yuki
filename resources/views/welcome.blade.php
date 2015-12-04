<style>

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
</style>

@extends('header&footer')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                {{$name}} {{$title}}
            </div>
        </div>
    </div>
@endsection

