<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora', ['resultado' => null]);
    }

    public function sumar(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = $num1 + $num2;
        return view('calculadora', ['resultado' => $resultado]);
    }

    public function restar(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = $num1 - $num2;
        return view('calculadora', ['resultado' => $resultado]);
    }

    public function multiplicar(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = $num1 * $num2;
        return view('calculadora', ['resultado' => $resultado]);
    }

    public function dividir(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = $num1 / $num2;
        return view('calculadora', ['resultado' => $resultado]);
    }
}
?>