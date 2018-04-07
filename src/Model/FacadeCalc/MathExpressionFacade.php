<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:32
 */
declare(strict_types=1);
namespace App\Model\FacadeCalc;

class MathExpressionFacade
{
    private $operator;
    private $firstNumber;
    private $secondNumber;

    public function __construct(string $expression)
    {
        $matches=[];
        preg_match_all('/[^\d]/', $expression, $matches);
        if (count($matches[0]) !== 1) {
            return "Wrong expression";
        }
        $this->operator = $matches[0][0];
        $numberArray = explode($this->operator, $expression);
        $this->firstNumber = (int)$numberArray[0];
        $this->secondNumber = (int)$numberArray[1];
    }

    public function letsDoMath()
    {
        if ($this->operator === '+') {
            $operation = new Sum($this->firstNumber, $this->secondNumber);
            return $operation->summation();
        } elseif ($this->operator === '-') {
            $operation = new Subtract($this->firstNumber, $this->secondNumber);
            return $operation->subtraction();
        } elseif ($this->operator === '*') {
            $operation = new Multiply($this->firstNumber, $this->secondNumber);
            return $operation->multiplication();
        }elseif ($this->operator === ':') {
            $operation = new Divide($this->firstNumber, $this->secondNumber);
            return $operation->division();
        } else {
            return "Wrong operator";
        }
    }
}
