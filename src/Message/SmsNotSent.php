<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\SmsParams;

class SmsNotSent extends SmsSent
{
    protected $reason;

    public function __construct(SmsParams $params, string $reason, ?string $uuid = null)
    {
        $this->reason = $reason;
        parent::__construct($params, $uuid);
    }

    public function getName(): string
    {
        return MessageType::SMS_NOT_SENT;
    }
}
