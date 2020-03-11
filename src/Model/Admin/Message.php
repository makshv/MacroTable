<?php

namespace App\Model\Admin;

class Message
{
    private $id;
    private $subject;
    private $text;
    private $dateCreate;

    public function getId(): ?int
    {
        return $id;
    }

    public function getSubject(): string
    {
        return $subject;
    }

    public function getText(): ?string
    {
        return $text;
    }

    public function getDateCreate(): string
    {
        return $dateCreate;
    }

    public function setSubject(string $subject): Message
    {
        $this->subject = $subject;

        return $this;
    }

    public function setId(int $id): Message
    {
        $this->id = $id;

        return $this;
    }

    public function setText(string $text): Message
    {
        $this->text = $text;

        return $this;
    }

    public function setDateCreate(\DateTime $dateTime): Message
    {
        $this->dateCreate = $dateTime;

        return $this;
    }

    public function _toArray() {
            $response = [];
            foreach ($this as $key => $value) {
                $response[$key] = $value;
            }
            return $response;
    }

}
