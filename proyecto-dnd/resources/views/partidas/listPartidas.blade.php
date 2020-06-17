@extends('layouts.master')

@section('titulo', 'Lista de partidas')

@section('navbar')
  <nav class="nav nav-pills nav-justified p-4">
    <a class="nav-item nav-link bg-danger text-white" href="{{url('/partidas/')}}">Partidas</a>
    <a class="nav-item nav-link text-danger" href="{{url('/tablas/')}}">Tabla de clases</a>
    <a class="nav-item nav-link text-danger" href="{{url('/dados/')}}">Dados virtuales</a>
    <form action="{{ url('/logout') }}" method="POST" style="display:inline">
        {{ csrf_field() }}
        <a class="nav-item nav-link text-danger"> <button type="submit" style="background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;">
            Cerrar sesión</button>
        </a>
    </form>
  </nav>
@stop

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <form method="POST" action="{{url('/partida/create')}}">
      {{csrf_field()}}
      <div class="row align-items-center">
          <div class="col-3">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre de la partida" required>
          </div>

          <div class="col-3">
            <input class="form-control" type="text" name="nombreDM" placeholder="Nombre del Dungeon Master" required>
          </div>

          <div class="col-6">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="trasfondo" placeholder="Trasfondo" required></textarea>
          </div>
      </div>

      <div class="row justify-content-center mt-3">
        <button type="submit" class="btn btn-danger mb-2 btn-lg">Añadir partida</button>
      </div>
    </form>
  </div>
</div>

<div id="accordion">
  @if(@isset($partidas))
    @php
      $aux = 1;
    @endphp
    @foreach($partidas as $partida)
      <div class="card mb-3">
        <div class="card-header" id="heading{{$aux}}">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed text-danger" data-toggle="collapse" data-target="#collapse{{$aux}}" aria-expanded="true" aria-controls="collapse{{$aux}}">
              {{$partida->nombre}} (por {{$partida->nombreDM}})
            </button>
          </h5>
        </div>

        <div id="collapse{{$aux}}" class="collapse" aria-labelledby="heading" data-parent="#accordion">
          <div class="card-body">
            <div>
              {{$partida->trasfondo}}
            </div>

            <div>
              @isset($personajes)
                @foreach($personajes as $personaje)
                  @if($personaje->idPartida == $partida->id)
                    <div class="row align-items-center">
                      <div class="col-11">
                        <a class="text-danger" href="{{url('/personaje/edit/'.Crypt::encrypt($partida->id).'/'.Crypt::encrypt($personaje->id))}}"><h3>{{$personaje->nombre}}</h3></a>
                      </div>

                      <div class="col-1">
                        <a href="{{url('/personaje/delete/'.$personaje->id)}}"><img src="{{asset('images\basura.svg')}}" data-toggle="tooltip" data-placement="right" title="Eliminar personaje" width="30px" height="50px"/></a>
                      </div>
                    </div>
                  @endif
                @endforeach
              @endisset
            </div>

            <div class="row">
              <div class="col-11">
                <a href="{{url('/personaje/create/'.Crypt::encrypt($partida->id))}}" type="submit" class="btn btn-danger mb-2 mt-2">Añadir personaje</a>
              </div>

              <div class="col-1">
                <button type="button" style="padding-bottom:1px;padding-top:1px;padding-left:7px;padding-right:7px" class="btn btn-danger" data-toggle="modal" data-target="#{{$partida->id}}"><img src="{{asset('images\borrar.svg')}}" data-toggle="tooltip" data-placement="right" title="Eliminar partida" width="30px" height="50px"/></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="{{$partida->id}}" tabindex="-1" role="dialog" aria-labelledby="ventanaConfirmacion" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ventanaConfirmacion">Eliminar Partida</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              La partida seleccionada se eliminará con todos los personajes en ella. ¿Está seguro de que desea eliminarla?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <a href="{{url('/partida/delete/'.$partida->id)}}" type="button" class="btn btn-danger">Eliminar</a>
            </div>
          </div>
        </div>
      </div>
      @php
        $aux += 1;
      @endphp
    @endforeach
  @endif
</div>


@stop