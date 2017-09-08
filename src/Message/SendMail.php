<?php

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\MailParams;

class SendMail extends Message
{
    const NAME = 'send_mail';

    public function __construct(MailParams $params)
    {
        $this->params = $params;
    }

    public function getName(): string
    {
        return self::NAME;
    }
}
