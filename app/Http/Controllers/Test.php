<?php

namespace App\Http\Controllers;

use App\Models\Chats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OpenAI\Laravel\Facades\OpenAI;

class Test extends Controller
{

    public function submit(Request $request)
    {

        try {
            $request->validate([
                'typeOfAnswer'  => 'required|in:formal,friendly,humorous|string',
                'question'      => 'required|string'
            ]);

            $typeOfAnswer   = ' Answer in ' . $request->typeOfAnswer . ' way.';
            $question       = $request->question;

            $data = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [[
                    'role' => 'user',
                    'content' => $question . $typeOfAnswer,
                ]],
            ]);

            $chat = Chats::create([
                'user_id'   => Auth::id(),
                'question'  => $question . $typeOfAnswer,
                'answer'    => $data['choices'][0]['message']['content']
            ]);

            $chat->save();

            return redirect('/');
        } catch (\Throwable $th) {
            // return redirect()->back();
            return response()->json($th->getMessage());
        }
    }
}
