@extends('layouts.app')

@section('content')
<h1>Register</h1>
<form method="post" action="/register">
    {{ csrf_field() }}
    <label for="fname">First Name</label>
    <input type="text" name="fname" />
    <label for="lname">Last Name</label>
    <input type="text" name="lname" />
    <label for="email">Email Address</label>
    <input type="email" name="email" />
    <label for="password">Password</label>
    <input type="password" name="password" />
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" />
    <input type="checkbox" name="subscribe" checked />
    <input type="submit" name="submit" value="Register" />

</form>
@endsection