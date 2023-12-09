@extends('layouts.default')

<link rel="stylesheet" href={{asset('css/home.css')}}>

@section('title', 'Home')

@section('content')
    <div class="home">
        <div class="chat">
            <div class="chats">
                @foreach ($chats as $chat)
                    <div>
                        <div>
                            <div class="divChatUser">
                                <p class="chatUser">{{$chat->question}}</p>
                            </div>
                            <div class="divChatBot">
                                <p class="chatBot">{{$chat->answer}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="chatFormBox">
            <form class="chatForm" method="POST" action="/test">
            @csrf

            <select class="chatType" name="typeOfAnswer" id="typeOfAnswer">
                <option value="formal">Formal</option>
                <option value="friendly">Friendly</option>
                <option value="humorous">Humorous</option>
            </select>

            <textarea class="chatBox" name="question" id="question" cols="80" rows="1"></textarea>

            <input class="chatSend" type="submit" name="submit" id="submit" value="Send">
        </form>
        </div>
    </div>
@endsection