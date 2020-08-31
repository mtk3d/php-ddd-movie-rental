<?php


namespace App\Movie;


class Description
{
    /**
     * @var string
     */
    private string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function __toString(): string
    {
        return $this->description;
    }
}