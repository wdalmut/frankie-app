<?php
class Mailer
{
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function serialize()
    {
vaR_dump($this);
    }
}
