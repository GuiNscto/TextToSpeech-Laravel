<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class TextToSpeechController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function speak(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:1000',
        ]);

        $text = $request->text;

        // Chamada para API TTS da OpenAI
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/audio/speech', [
            'model' => 'gpt-4o-mini-tts', // modelo TTS
            'voice' => 'alloy',
            'input' => $text,
        ]);

        if ($response->failed()) {
            return back()->withErrors($response->body());
        }

        // Converter audio binario em base64
        $audioBase64 = base64_encode($response->body());

        //cria URL para colocar no audio src
        $audioUrl = 'data:audio/mpeg;base64,' . $audioBase64;

        return view('welcome', compact('audioUrl'));
    }
}
