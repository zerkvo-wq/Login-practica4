<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PalindromoController extends Controller
{
    public function index()
    {
        return view("palindromo");
    }

    public function verificar(Request $request)
    {
        $texto = $request->input("texto", "");
        $limpio = mb_strtolower(trim($texto));
        $limpio = preg_replace("/[^a-z0-9]/u", "", $limpio);
        $esPalindromo = ($limpio === strrev($limpio));
        $mensaje = $esPalindromo ? "SI es un palindromo" : "NO es un palindromo";
        return response()->json([
            "texto" => $texto,
            "es_palindromo" => $esPalindromo,
            "mensaje" => $mensaje
        ]);
    }
}
