<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class ElementController extends Controller
{
    public function index(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | general_elements.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.general_elements', $values);
    }

    public function media_gallery(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | media_gallery.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.media_gallery', $values);
    }

    public function typography(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | typography.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.typography', $values);
    }

    public function icons(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | cons.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.icons', $values);
    }

    public function glyphicons(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | glyphicons.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.glyphicons', $values);
    }

    public function widgets(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | widgets.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.widgets', $values);
    }

    public function invoice(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | invoice.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.invoice', $values);
    }

    public function inbox(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | inbox.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.inbox', $values);
    }

    public function calendar(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | calendar.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.calendar', $values);
    }
}
