@extends('layouts.default')

<link rel="stylesheet" href={{asset('css/home.css')}}>

@section('title', 'Home')

@section('content')
    <div class="home">
        <div class="chatBox">
            @foreach ($chats as $chat)
                <div>
                    <div>
                        <p style="color: red; text-align: right">{{$chat->question}}</p>
                        <p style="color: blue; text-align: left">{{$chat->answer}}</p>
                    </div>
                </div>
            @endforeach
        </div>

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
    </div>
@endsection