<?php


namespace KWedrowicz\JobCommunication\Message;


use KWedrowicz\JobCommunication\Params\UserParams;

class InsertUserDocument extends CommandMessage
{
    public function __construct(UserParams $params)
    {
        $this->params = $params;
        parent::__construct();
    }

    public function getName(): string
    {
        return MessageType::INSERT_USER_DOCUMENT;
    }

    public function getChannel(): string
    {
        return MessageChannel::DOCUMENT;
    }
}