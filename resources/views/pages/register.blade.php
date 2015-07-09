@extends('layouts.app')

@section('content')
<h1>Register</h1>
<form method="post" action="/register">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="fname">First Name</label>
        <input class="form-control" type="text" name="fname" id="fname" />
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input class="form-control" type="text" name="lname" id="lname" />
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input class="form-control" id="email" type="email" name="email" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" />
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" />
    </div>
    <div class="form-group">
        <label for="subscribe">Subscribe to the newsletter </label>
        <input type="checkbox" name="subscribe" id="subscribe" checked />
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" name="submit" value="Register" />
    </div>

</form>
@endsection