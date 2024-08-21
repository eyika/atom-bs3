<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class TableController extends Controller
{
    public function index(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | tables.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.tables', $values);
    }

    public function dynamic(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | tables_dynamic.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.tables_dynamic', $values);
    }
}
