<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\SmsParams;

class SendSms extends Message
{
    public function __construct(SmsParams $params)
    {
        $this->params = $params;
        parent::__construct();
    }

    public function getName(): string
    {
        return MessageType::SEND_SMS;
    }

    public function getChannel(): string
    {
        return MessageChannel::SEND;
    }
}
