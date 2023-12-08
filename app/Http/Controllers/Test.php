<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

            $typeOfAnswer   = " Answer in " . $request->typeOfAnswer . " way.";
            $question       = $request->question;

            $data = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [[
                    'role' => 'user',
                    'content' => $question . $typeOfAnswer,
                ]],
            ]);

            return response()->json($data);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
