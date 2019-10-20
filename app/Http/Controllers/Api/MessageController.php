<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Telegram\Bot\Laravel\Facades\Telegram;

class MessageController extends Controller
{
    /**
     * Get request->message and send it to telegram channel
     *
     * @return void
     */
    public function sendMessage(): void
    {
        Telegram::sendMessage([
            'chat_id' => env('RECIPIENT_CHAT_ID', 'RECIPIENT_CHAT_ID'),
            'text' => request()->message
        ]);

        return;
    }
}
