<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class GeneralController extends Controller
{
    public function index(Request $request)
    {

    }

    public function level2(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | level2.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.level2', $values);
    }
}