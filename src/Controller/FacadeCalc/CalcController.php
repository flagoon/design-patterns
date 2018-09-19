<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:17
 */

namespace App\Controller\FacadeCalc;

use App\Model\FacadeCalc\MathExpressionFacade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalcController extends Controller
{
    public function index()
    {
        return $this->render('base.html.twig');
    }

    public function maths($expression)
    {
        $mathExpression = new MathExpressionFacade($expression);
        return $this->render('maths.html.twig', [
            'solution' => $mathExpression->letsDoMath()
        ]);
    }
}
