@extends('layouts.auth')

@section('content')

    <form method="post" action=" {{ action('AuthController@register')  }}">
        <div class="form-group">
            <label for="">Email address</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="inputConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        <div class="change-auth-type-row">Already have account? <a href = "{{ route('login') }}" class="btn btn-link">Login</a>
        </div>
    </form>

@stop