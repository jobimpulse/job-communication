<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Params;

class UserParams implements ParamsInterface
{
    private $id;
    private $firstName;
    private $lastName;
    private $login;
    private $email;
    private $phoneNumber;
    private $pesel;
    private $city;
    private $lastLoginAt;

    public function getType(): string
    {
        return ParamsType::USER;
    }

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        string $login,
        string $email,
        string $phoneNumber,
        string $pesel,
        string $city,
        ?string $lastLoginAt
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->pesel = $pesel;
        $this->city = $city;
        $this->lastLoginAt = $lastLoginAt;
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

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getPesel(): string
    {
        return $this->pesel;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getLastLoginAt(): ?string
    {
        return $this->lastLoginAt;
    }
}
