<?php


namespace App\Movie;

use Webmozart\Assert\Assert;

class Title
{
    /**
     * @var string
     */
    private string $title;

    public function __construct(string $title)
    {
        Assert::minLength($title, 1);

        $this->title = $title;
    }

    public function __toString(): string
    {
        return $this->title;
    }
}
