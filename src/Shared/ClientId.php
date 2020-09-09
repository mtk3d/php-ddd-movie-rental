<?php


namespace App\Shared;

final class ClientId
{
    /**
     * @var UUID
     */
    private UUID $id;

    public function __construct(UUID $id)
    {
        $this->id = $id;
    }

    public function id(): UUID
    {
        return $this->id;
    }

    public static function newOne(): self
    {
        return new self(UUID::random());
    }

    public function isEqual(self $id): bool
    {
        return $this->id->isEqual($id->id);
    }

    public function __toString()
    {
        return sprintf('ClientId{id=%s}', $this->id);
    }
}
