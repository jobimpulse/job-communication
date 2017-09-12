<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\ParamsInterface;

abstract class Message implements MessageInterface
{
    /** @var string */
    protected $uuid;

    /** @var ParamsInterface */
    protected $params;

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
