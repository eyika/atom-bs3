<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class LayoutController extends Controller
{
    public function index(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | fixed_sidebar.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.fixed_sidebar', $values);
    }

    public function fixed_footer(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | fixed_footer.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.fixed_footer', $values);
    }
}
