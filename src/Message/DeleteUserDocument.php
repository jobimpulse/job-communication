<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\UserParams;

class DeleteUserDocument extends CommandMessage
{
    public function __construct(UserParams $params)
    {
        $this->params = $params;
        parent::__construct();
    }

    public function getName(): string
    {
        return MessageType::DELETE_USER_DOCUMENT;
    }

    public function getChannel(): string
    {
        return MessageChannel::DOCUMENT;
    }
}
