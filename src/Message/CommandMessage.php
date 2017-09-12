<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use Ramsey\Uuid\Uuid;

abstract class CommandMessage extends Message
{
    public function __construct()
    {
        $this->uuid = Uuid::uuid4()->toString();
    }
}
