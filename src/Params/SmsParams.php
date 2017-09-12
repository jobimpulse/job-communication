<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Params;

class SmsParams implements ParamsInterface
{
    private $phone;
    private $content;
    private $sender;
    private $sentAt;

    public function __construct(string $phone, string $content, string $sender, ?\DateTime $sentAt = null)
    {
        $this->phone = $phone;
        $this->content = $content;
        $this->sender = $sender;
        $this->sentAt = $sentAt;
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

    public function getSentAt(): ?\DateTime
    {
        return $this->sentAt;
    }

    public function getType(): string
    {
        return ParamsType::SMS;
    }
}
