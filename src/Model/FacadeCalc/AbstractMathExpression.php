<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:37
 */

namespace App\Model\FacadeCalc;


class AbstractMathExpression
{
    protected $firstNumber;
    protected $secondNumber;

    public function __construct(int $firstNumber, int $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }
}