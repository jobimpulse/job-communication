<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Params;

class MailParams implements ParamsInterface
{
    private $address;
    private $title;
    private $content;
    private $attachments;
    private $sentAt;
    private $provider;

    public function __construct(
        string $address,
        string $title,
        string $content,
        array $attachments = [],
        string $provider = MailProvidersType::BASIC,
        ?\DateTime $sentAt = null
    ) {
        $this->address = $address;
        $this->title = $title;
        $this->content = $content;
        $this->attachments = $attachments;
        $this->provider = $provider;
        $this->sentAt = $sentAt;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function getSentAt(): ?\DateTime
    {
        return $this->sentAt;
    }

    public function getType(): string
    {
        return ParamsType::MAIL;
    }
}
