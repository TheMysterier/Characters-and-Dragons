<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use App\Stat;
use App\Hechizo;

class DadosController extends Controller
{
    public function getDados() {

        return view("dados.dados");
    }
}
