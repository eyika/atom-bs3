<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class PresentationController extends Controller
{
    public function index(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | chartjs.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.chartjs', $values);
    }

    public function chartjs2(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | chartjs2.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.chartjs2', $values);
    }

    public function morisjs(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | morisjs.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.morisjs', $values);
    }

    public function echarts(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | echarts.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.echarts', $values);
    }

    public function other_charts(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | other_charts.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.other_charts', $values);
    }
}
