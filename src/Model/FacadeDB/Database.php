<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 11.04.18
 * Time: 22:22
 */

namespace App\Model\FacadeDB;

class Database
{
    public function establishConnection()
    {
        return "Connection estabilished.";
    }

    public function getDataFromDatabase()
    {
        return "I got data.";
    }

    public function closeConnection()
    {
        return "Connection closed.";
    }

    public function putDataToDatabase()
    {
        return "Data put into Database";
    }
}
