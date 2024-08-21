<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | index ','username'=>'Hillary Trump'];

        return Response::view('home.index', $values);
    }

    public function index2(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | index2.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.index2', $values);
    }

    public function index3(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | index3.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.index2', $values);
    }
}
