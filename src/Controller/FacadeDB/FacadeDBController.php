<?php

namespace App\Controller\FacadeDB;

use App\Model\FacadeDB\ConnectionFacade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FacadeDBController extends Controller
{
    public function db2src()
    {
        $connectionFacade = new ConnectionFacade();
        $db2src = $connectionFacade->sendDatbaseDataToSource();
        return $this->render('facade_db/index.html.twig', [
            'instructions' => $db2src
        ]);
    }

    public function src2db() {
        $connectionFacade = new ConnectionFacade();
        $src2db = $connectionFacade->getDataFromSourceAndPutInsideDatabase();
        return $this->render('facade_db/index.html.twig', [
            'instructions' => $src2db
        ]);
    }
}
