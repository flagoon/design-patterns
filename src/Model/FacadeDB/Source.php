<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 11.04.18
 * Time: 22:23
 */

namespace App\Model\FacadeDB;

class Source
{
    public function establishConnection()
    {
        return "Connection to source established.";
    }

    public function sendCredentials()
    {
        return "Credentials has been sent.";
    }

    public function retriveDataFromSource()
    {
        return "Data retrieve.";
    }

    public function publishDataToSource()
    {
        return "Data published.";
    }

    public function closeConection()
    {
        return "Connection closed";
    }
}
