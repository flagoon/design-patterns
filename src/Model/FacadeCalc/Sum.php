<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:28
 */
declare(strict_types=1);
namespace App\Model\FacadeCalc;


class Sum extends AbstractMathExpression
{
    public function summation(): int
    {
        return ($this->firstNumber + $this->secondNumber);
    }
}