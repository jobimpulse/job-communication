<?php

declare(strict_types = 1);

namespace KWedrowicz\JobCommunication\Exception;

use Throwable;

class NoMessageException extends \Exception
{
    const NAME = 'no message in queue';

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(self::NAME, $code, $previous);
    }
}