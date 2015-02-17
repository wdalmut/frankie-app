<?php
class NewsletterManager
{
    private $mailer;

    public function getMailer()
    {
        return $this->mailer;
    }

    public function setMailer($mailer)
    {
        $this->mailer = $mailer;
        return $this;
    }

    public function serialize($data)
    {
        var_Dump($data, $this);
    }
}
