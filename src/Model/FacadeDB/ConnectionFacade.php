<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 11.04.18
 * Time: 22:23
 */

namespace App\Model\FacadeDB;

class ConnectionFacade
{
    private $database;
    private $source;
    public function __construct()
    {
        $this->database = new Database();
        $this->source = new Source();
    }

    public function sendDatbaseDataToSource()
    {
        return [
            $this->database->establishConnection(),
            $this->database->getDataFromDatabase(),
            $this->database->closeConnection(),
            $this->source->establishConnection(),
            $this->source->sendCredentials(),
            $this->source->publishDataToSource(),
            $this->source->closeConection()
        ];
    }

    public function getDataFromSourceAndPutInsideDatabase()
    {
        return [
            $this->source->establishConnection(),
            $this->source->sendCredentials(),
            $this->source->publishDataToSource(),
            $this->source->closeConection(),
            $this->database->establishConnection(),
            $this->database->getDataFromDatabase(),
            $this->database->closeConnection()
        ];
    }
}
