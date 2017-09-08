<?php


namespace KWedrowicz\JobCommunication\Message;


use KWedrowicz\JobCommunication\Params\ParamsInterface;

abstract class Message implements MessageInterface
{
    /** @var  ParamsInterface */
    protected $params;

    public function getParams(): ParamsInterface
    {
        return $this->params;
    }

   abstract public function getName(): string;
}