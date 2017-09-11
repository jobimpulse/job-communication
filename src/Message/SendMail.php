<?php

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\MailParams;

class SendMail extends Message
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
}
