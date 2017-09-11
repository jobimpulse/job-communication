<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Communication;

use KWedrowicz\JobCommunication\Message\MessageInterface;

interface CommunicationInterface
{
    public function send(MessageInterface $message): void;
}
