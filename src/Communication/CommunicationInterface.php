<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Communication;

use KWedrowicz\JobCommunication\Params\ParamsInterface;

interface CommunicationInterface
{
    public function send(ParamsInterface $message): void;
}
