@extends('layouts.app')
@section('content')
    <h4>Login Form</h4>
    <form action="/login" method="post">
        {{ csrf_field() }}
        Username: <input type="text" name="username" value="{{old('username')}}">
        @if ($errors->has('username'))
            <strong>{{$errors->first('username')}}</strong>
        @endif<br/>
        Password: <input type="password" name="password" value="">
        @if ($errors->has('password'))
            <strong>{{$errors->first('password')}}</strong>
        @endif<br/>
        <input type="submit" value="Login">
        {{$err}}
    </form>
@endsection