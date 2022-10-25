<?php


namespace App\Logging\Telegram;


use App\Services\Telegram\TelegramBotApi;
use Illuminate\Support\Carbon;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;

class TelegramLoggerHandler extends AbstractProcessingHandler
{

    protected int $chatId;
    protected string $token;

    public function __construct($config)
    {
        $level = Logger::toMonologLevel($config['level']);

        parent::__construct($level);

        $this->chatId = (int) $config['chat_id'];
        $this->token = $config['token'];
    }

    /**
     * Writes the record down to the log of the implementing handler
     *
     * @phpstan-param FormattedRecord $record
     * @param array $record
     */
    protected function write(array $record): void
    {
        $date = Carbon::parse($record['datetime'])->format('d-m-Y');

        $msg = 'Дата: ' .$date .PHP_EOL. 'Уровень: ' .$record['level_name'] .PHP_EOL.  'Сообщение: ' .$record['message'];

        //dd($msg);

        TelegramBotApi::sendMessage($this->token, $this->chatId, $msg);
    }
}