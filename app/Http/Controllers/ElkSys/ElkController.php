<?php

namespace App\Http\Controllers\ElkSys;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ElkController extends Controller
{
    /*public function index()
    {   
        $user = User::first();
        return view('ElkSys.index', compact('user'));
    }*/

    public function index()
    {   
        return view('ElkSys.index');
    }

    public function login()
    {   
        return view('ElkSys.loginOs');
    }

    public function dashboard()
    {   
        return view('ElkSys.dashboardOs');
    }

    public function cadastroCliOs()
    {   
        return view('ElkSys.cadastroCliOs');
    }

    public function cadastroEmpresaOs()
    {   
        return view('ElkSys.cadastroEmpresaOs');
    }
}
