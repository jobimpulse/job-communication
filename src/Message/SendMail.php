<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\MailParams;

class SendMail extends CommandMessage
{
    public function __construct(MailParams $params)
    {
        $this->params = $params;
        parent::__construct();
    }

    public function getName(): string
    {
        return MessageType::SEND_MAIL;
    }

    public function getChannel(): string
    {
        return MessageChannel::SEND;
    }
}
