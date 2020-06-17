@extends('layouts.master')

@section('adicion')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="DnD, dangeon and dragons, roleplay, dice, roller, 3D, RPG, wargame"/>
    <meta name="description" content="Online 3D dice roller"/>
    <style type="text/css" src="{{asset('css\main.css')}}"></style>
    <style type="text/css" src="{{asset('css\dice.css')}}"></style>
@stop

@section('titulo', 'Dados virtuales')

@section('navbar')
  <nav class="nav nav-pills nav-justified p-4">
    <a class="nav-item nav-link text-danger" href="{{url('/partidas/')}}">Partidas</a>
    <a class="nav-item nav-link text-danger" href="{{url('/tablas/')}}">Tabla de clases</a>
    <a class="nav-item nav-link bg-danger text-white" href="{{url('/dados/')}}">Dados virtuales</a>
    <a class="nav-item nav-link text-danger" href="#">Cerrar sesión</a>
  </nav>
@stop

@section('dados')
    <div id="control_panel" class="control_panel">
        <p id="loading_text">Loading libraries, please wait a bit...</p>
    </div>
    <div id="info_div" style="display: none">
        <div class="row text-center">
            <div class="col-12">
                <div class="center_field">
                    <span id="label"></span>
                </div>
            </div>
        </div>
        <div class="center_field">
            <div class="bottom_field">
                <span id="labelhelp">Haga clic para continuar o toque y arrastre nuevamente</span>
            </div>
        </div>
    </div>
    <div id="selector_div" style="display: none;width:100%">
        <div class="center_field">
            <div class="row text-center">
                <div class="col-12">
                    <div id="sethelp">
                        Elige el cojunto de dados que deseas lanzar haciendo clic en los dados o mediante la caja de texto,<br/>
                        toque y arrastre en el espacio libre de la pantalla o presione el botón para lanzar.
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <div class="center_field">
                    <input class="form-control-lg m-3" type="text" id="set" value="4d6" style="width:100px"></input><br/>
                    <button class="btn btn-danger mb-3" id="clear">Limpiar</button>
                    <button class="btn btn-danger mb-3"style="margin-left: 0.6em" id="throw">Lanzar</button>
                </div>
            </div>
        </div>
        
    </div>
    <div id="canvas"></div>

    <script src="{{asset('js\libs\three.min.js')}}"></script>
    <script src="{{asset('js\libs\cannon.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('js\teal.js')}}"></script>
    <script type="text/javascript" src="{{asset('js\dice.js')}}"></script>
    <script type="text/javascript" src="{{asset('js\main.js')}}"></script>
    <script type="text/javascript" defer="defer">
        dice_initialize(document.body);
    </script>
@stop
