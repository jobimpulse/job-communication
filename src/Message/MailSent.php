<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\MailParams;

class MailSent extends EventMessage
{
    public function __construct(MailParams $params, $uuid = null)
    {
        $this->params = $params;
        parent::__construct($uuid);
    }

    public function getName(): string
    {
        return MessageType::MAIL_SENT;
    }

    public function getChannel(): string
    {
        return MessageChannel::SENT;
    }
}
