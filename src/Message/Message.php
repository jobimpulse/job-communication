<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\ParamsInterface;
use Ramsey\Uuid\Uuid;

abstract class Message implements MessageInterface
{
    /** @var string */
    protected $uuid;

    /** @var ParamsInterface */
    protected $params;

    public function __construct()
    {
        $this->uuid = Uuid::uuid4()->toString();
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getParams(): ParamsInterface
    {
        return $this->params;
    }

    abstract public function getName(): string;

    abstract public function getChannel(): string;
}
