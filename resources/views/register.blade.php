@extends('layouts.default')

<link rel="stylesheet" href={{asset('css/register.css')}}>

@section('title', 'Register')

@section('content')

    <div class="register">
        <form class="registerForm" method="POST" action="/auth/register">
            @csrf
            <div class="formDiv">
                <label for="userName">User name</label>
                <input type="text" name="userName" id="userName">
            </div>
            <div class="formDiv">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="formDiv">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="formDivSubmit">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>    

@endsection