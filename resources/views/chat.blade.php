<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        
        <link rel="stylesheet" href={{asset('css/app.css')}}>
    </head>
    <body class="antialiased">
        <div class="">

            <h1>Hello {{Auth::user()->userName}}</h1>

            <form method="POST" action="/test">
                @csrf

                <textarea name="question" id="question" cols="30" rows="10"></textarea>

                <select name="typeOfAnswer" id="typeOfAnswer">
                    <option value="formal">Formal</option>
                    <option value="friendly">Friendly</option>
                    <option value="humorous">Humorous</option>
                </select>

                <input type="submit" name="submit" id="submit">
            </form>

            <form method="POST" action="/auth/logout">
                @csrf
                <input type="submit" value="Logout">
            </form>
        </div>
    </body>
</html>