@extends('layouts.app')
@section('content')
    <h4>Contact Details.</h4>
    <form action="/contact" method="post">
        {{ csrf_field() }}
        Email: <input type="text" name="email" value="{{old('email')}}">
        @if ($errors->has('email'))
            <strong>{{$errors->first('email')}}</strong>
        @endif<br/>
        Phone no: <input type="text" name="phone" value="{{old('phone')}}">
        @if ($errors->has('phone'))
            <strong>{{$errors->first('phone')}}</strong>
        @endif<br/>
        <input type="submit" value="Register">
    </form>
@endsection