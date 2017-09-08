<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\SMSParams;

class SendSMS extends Message
{
    const NAME = 'send_sms';

    public function __construct(SMSParams $params)
    {
        $this->params = $params;
    }

    public function getName(): string
    {
        return self::NAME;
    }
}
