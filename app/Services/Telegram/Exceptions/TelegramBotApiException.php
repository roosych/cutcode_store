<?php


namespace App\Services\Telegram\Exceptions;


use Illuminate\Http\Request;

class TelegramBotApiException extends \Exception
{

//    // тот же метод renderable() который можно прописать в файле Exceptions/Handler
//    public function render(Request $request)
//    {
//        return response()->json([]);
//    }
//
//    // тот же метод reportable() который можно прописать в файле Exceptions/Handler
//    public function report(Request $request)
//    {
//        // Отправка в канады (telescop, sentry, telegram)
//    }
}