<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class ExtraController extends Controller
{
    public function index(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | page_403.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.page_403', $values);
    }

    public function page_404(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | page_404.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.page_404', $values);
    }

    public function page_500(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | page_500.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.page_500', $values);
    }

    public function plain_page(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | plain_page.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.plain_page', $values);
    }

    public function login(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | login.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.login', $values);
    }

    public function pricing_tables(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | pricing_tables.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.pricing_tables', $values);
    }
}
