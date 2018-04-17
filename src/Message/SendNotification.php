<?php

namespace App\Message;

class SendNotification
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var array
     */
    private $users = [];

    /**
     * SendNotification constructor.
     * @param string $message
     * @param array $users
     */
    public function __construct(string $message, array $users = [])
    {
        $this->message = $message;
        $this->users = $users;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return SendNotification
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param array $users
     *
     * @return SendNotification
     */
    public function setUsers(array $users): self
    {
        $this->users = $users;

        return $this;
    }
}