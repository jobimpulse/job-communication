<?php


namespace KWedrowicz\JobCommunication\Params;


class MailParams implements ParamsInterface
{
    private $address;
    private $title;
    private $content;
    private $attachments;

    public function __construct(string $address, string $title, string $content, array $attachments)
    {
        $this->address = $address;
        $this->title = $title;
        $this->content = $content;
        $this->attachments = $attachments;
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

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function getType(): string
    {
        return ParamsType::MAIL;
    }
}