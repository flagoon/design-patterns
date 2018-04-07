<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:31
 */
declare(strict_types=1);
namespace App\Model\FacadeCalc;


class Multiply extends AbstractMathExpression
{
    public function multiplication(): int
    {
        return $this->firstNumber * $this->secondNumber;
    }
}

