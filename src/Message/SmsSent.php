<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\SmsParams;

class SmsSent extends EventMessage
{
    public function __construct(SmsParams $params, $uuid = null)
    {
        $this->params = $params;
        parent::__construct($uuid);
    }

    public function getName(): string
    {
        return MessageType::SMS_SENT;
    }

    public function getChannel(): string
    {
        return MessageChannel::SENT;
    }
}
