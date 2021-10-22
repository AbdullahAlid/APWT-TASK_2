@extends('layouts.app')
@section('content')
    <h4>Registration Form</h4>
    <form action="/registration" method="post">
        {{ csrf_field() }}
        Name: <input type="text" name="name" value="{{old('name')}}">
        @if ($errors->has('name'))
            <strong>{{$errors->first('name')}}</strong>
        @endif<br/>
        Id: <input type="text" name="id" value="{{old('id')}}">
        @if ($errors->has('id'))
            <strong>{{$errors->first('id')}}</strong>
        @endif<br/>
        DOB: <input type="date" name="dob" value="{{old('dob')}}">
        @if ($errors->has('dob'))
            <strong>{{$errors->first('dob')}}</strong>
        @endif<br/>
        <input type="submit" value="Register">
    </form>
@endsection