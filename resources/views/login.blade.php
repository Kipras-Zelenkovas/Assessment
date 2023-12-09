@extends('layouts.default')
<link rel="stylesheet" href={{asset('css/login.css')}}>

@section('title', 'Login')

@section('content')
    <div class="login">
        <form class="loginForm" method="POST" action="/auth/login">
            @csrf
            <div class="formDiv">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="formDiv">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="formDivSubmit">
                <input type="submit" value="Login">
            </div>
        </form>

    </div>
@endsection