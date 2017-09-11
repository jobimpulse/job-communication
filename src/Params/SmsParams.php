<?php


namespace KWedrowicz\JobCommunication\Params;


class SmsParams implements ParamsInterface
{
    private $phone;
    private $content;
    private $sender;

    public function __construct(string $phone, string $content, string $sender)
    {
        $this->phone = $phone;
        $this->content = $content;
        $this->sender = $sender;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function getType(): string
    {
        return ParamsType::SMS;
    }
}