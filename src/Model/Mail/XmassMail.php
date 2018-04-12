<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:47
 */

namespace App\Model\Mail;


class XmassMail implements MailInterface
{

    private $mail;

    public function __construct(MailInterface $mail)
    {
        $this->mail = $mail;
    }

    public function getTitle()
    {
        return 'Xmass ' . $this->mail->getTitle();
    }

    public function getBody()
    {
        return $this->mail->getBody() . PHP_EOL . 'Marry Xmass!';
    }

    public function getStyle()
    {
        return 'xmass-' . $this->mail->getStyle();
    }
}