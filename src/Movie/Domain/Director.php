<?php


namespace App\Movie;


class Director
{
    /**
     * @var string
     */
    private string $firstName;
    /**
     * @var string
     */
    private string $lastName;

    /**
     * Director constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName(): string
    {
        return "$this->firstName $this->lastName";
    }

    public function __toString(): string
    {
        return $this->getFullName();
    }
}