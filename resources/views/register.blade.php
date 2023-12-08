<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="/auth/register">
        @csrf
        <label for="userName">User name</label>
        <input type="text" name="userName" id="userName">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Register">
    </form>

    <a href="/auth/login">Login</a>
</body>
</html>