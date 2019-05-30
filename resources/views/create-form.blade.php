@extends('layouts.app')

@section('title','form')

@section('content')
<!-- <div class = "containner">{{$header}}</div>

<label><input type="radio" name="gender" value="0">หญิง</label>
<label><input type="radio" name="gender" value="1">ชาย</label>

@foreach($genders as $gender)
<label>
    <input type="radio" name="gender" value="{{$gender['id']}}">{{$gender['name']}}
    </label>
@endforeach -->

<!-- <form action="/store" method="get">
    username: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit" value="Submit">
</form> -->

<form action="/store" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
    username: <input type="text" name="username"><br/>
    Password: <input type="text" name="password"><br>
    <input type="submit" value="Submit">
</form>
@endsection