<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function calcs($num1, $operator, $num2)
    {

        $answer = 0;
        $error = false;
        $operator_str = '';

        switch ($operator) {
            case 'addition':
                $answer = $num1 + $num2;
                $operator_str = '+';
                break;
            case 'subtraction':
                $answer = $num1 - $num2;
                $operator_str = '-';
                break;
            case 'multiplication':
                $answer = $num1 * $num2;
                $operator_str = '*';
                break;
            case 'division':
                $answer = $num1 / $num2;
                $operator_str = '/';
                break;
            default:
                $error = true;
                break;
        }

        return view('calcs.calcs', ['answer' => $answer]);

    }
}
