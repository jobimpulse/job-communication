<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Communication;

interface CommunicationInterface
{
    public function send($message): void;
}
