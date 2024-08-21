<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;

class AdditionalController extends Controller
{
    public function index(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | e_commerce.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.e_commerce', $values);
    }

    public function projects(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | projects.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.projects', $values);
    }

    public function project_detail(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | project_detail.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.project_detail', $values);
    }

    public function contacts(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | contacts.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.contacts', $values);
    }

    public function profile(Request $request)
    {
        $values = ['title'=>'Gentelella-bladeone | profile.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.profile', $values);
    }
}
