<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:44
 */

namespace App\Model\Mail;


class NormalMail implements MailInterface
{

    private $title = 'Newsletter';
    private $body = 'Just a friendly newsletter.';
    private $style = 'mail.css';

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getStyle()
    {
        return $this->style;
    }
}