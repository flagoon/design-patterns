<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:17
 */

namespace App\Controller\FacadeCalc;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CalcController extends Controller
{
    public function index()
    {
        return $this->render('base.html.twig');
    }
}
