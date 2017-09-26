<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Params;

class UserParams implements ParamsInterface
{
    private $id;
    private $firstName;
    private $lastName;

    public function getType(): string
    {
        return ParamsType::USER;
    }

    public function __construct(int $id, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}
