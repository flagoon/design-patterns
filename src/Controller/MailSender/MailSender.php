<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:40
 */

namespace App\Controller\MailSender;

use App\Model\Mail\NormalMail;
use App\Model\Mail\XmassMail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailSender extends Controller
{
    public function index()
    {
        $mail = new NormalMail();
        $mail = new XmassMail($mail);


        return $this->json([$mail->getTitle(), $mail->getBody(), $mail->getStyle()]);
    }
}
