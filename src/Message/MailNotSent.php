<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\MailParams;

class MailNotSent extends MailSent
{
    protected $reason;

    public function __construct(MailParams $params, string $reason, ?string $uuid = null)
    {
        $this->reason = $reason;
        parent::__construct($params, $uuid);
    }

    public function getName(): string
    {
        return MessageType::MAIL_NOT_SENT;
    }
}
