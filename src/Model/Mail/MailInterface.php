<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:42
 */

namespace App\Model\Mail;


interface MailInterface
{
    public function getTitle();
    public function getBody();
    public function getStyle();
}