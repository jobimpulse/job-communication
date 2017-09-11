<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

use KWedrowicz\JobCommunication\Params\ParamsInterface;

interface MessageInterface
{
    public function getUuid(): string;

    public function getName(): string;

    public function getChannel(): string;

    public function getParams(): ParamsInterface;
}
