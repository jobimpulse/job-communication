<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use Ramsey\Uuid\Uuid;

abstract class EventMessage extends Message
{
    public function __construct(?string $uuid = null)
    {
        if (!$uuid) {
            $uuid = Uuid::uuid4()->toString();
        }
        $this->uuid = $uuid;
    }
}
