@extends('layouts.master')

@section('titulo', 'Ficha Personaje')

@section('content')
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#datosBasicos">Datos básicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#perfil">Perfil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#hechizos">Hechizos</a>
  </li>
</ul>
@if(@isset($personaje))
  @foreach($personaje as $character)
    @foreach($partida as $game)
      <form method="POST" enctype='multipart/form-data' action="{{url('/personaje/edit/'.$game->id.'/'.$character->id.'/'.$character->idRaza.'/save')}}">
    @endforeach
  @endforeach
@else
  @foreach($partida as $game)
    <form method="POST" enctype='multipart/form-data' action="{{url('/personaje/create/'.$game->id.'/save')}}">
  @endforeach
@endif
  {{method_field('PUT')}}
  {{csrf_field()}}
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="datosBasicos">
      <div class="jumbotron">
        <div class="row p-2 justify-content-center">
          <div class="col-3">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <input class="form-control" type="text" name="nombre" placeholder="Nombre personaje" value="{{$character->nombre}}">
              @endforeach
            @else
              <input class="form-control" type="text" name="nombre" placeholder="Nombre personaje">
            @endif
          </div>

          <div class="col-2">
            <select class="form-control" id="clase" name="clase">
              @if(@isset($clases))
                <option>--Clase--</option>
                @foreach($clases as $clase)
                  <option value="{{$clase->id}}">{{$clase->nombre}}</option>
                @endforeach
              @else
                <?php $cont = 1; ?>
                @if(@isset($personaje) && isset($clase))
                  @foreach($personaje as $character)
                    @foreach($clase as $class)
                      <option value="{{$class->id}}" @if($class->id == $character->idClase) selected="selected" @endif>{{$class->nombre}}</option>
                      <?php $cont += 1; ?>
                    @endforeach
                  @endforeach
                @endif
              @endif
            </select>
          </div>

          <div class="col-2">
            <select class="form-control" id="nivel" name="nivel">
              <option>--Nivel--</option>
              <option value="1" @if(@isset($personaje)) selected="selected" @endif>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

          <div class="col-2">
            @if(@isset($personaje))
              <select class="form-control" name="trasfondo" readonly disabled>
              @foreach($personaje as $character)
                <option value="{{$character->trasfondo}}" selected>{{$character->trasfondo}}</option>
              @endforeach
            @else
              <select class="form-control" name="trasfondo">
                <option>--Trasfondo--</option>
                <option value="Acólito">Acólito</option>
                <option value="Charlatán">Charlatán</option>
                <option value="Criminal">Criminal</option>
                <option value="Artista">Artista</option>
                <option value="Héroe popular">Héroe popular</option>
                <option value="Artesano del gremio">Artesano del gremio</option>
                <option value="Hermitaño">Hermitaño</option>
                <option value="Noble">Noble</option>
                <option value="Forastero">Forastero</option>
                <option value="Sabio">Sabio</option>
                <option value="Navegante">Navegante</option>
                <option value="Soldado">Soldado</option>
                <option value="Criajo">Criajo</option>
            @endif
            </select>
          </div>
        </div>
        
        <div class="row justify-content-center">
          <div class="col-2">
            @if(@isset($personaje) && @isset($razas))
              <select class="form-control" name="raza" id="raza" readonly disabled>
              @foreach($personaje as $character)
                @foreach($razas as $raza)
                  @if($raza->id == $character->idRaza)
                    <option value="{{$raza->id}}">{{$raza->nombre}}</option>
                  @endif
                @endforeach
              @endforeach
            @else
              <select class="form-control" name="raza" id="raza">
                <option value="0">--Raza--</option>
                @if(@isset($razas))
                  @foreach($razas as $raza)
                    <option value="{{$raza->id}}">{{$raza->nombre}}</option>
                  @endforeach
                @endif
            @endif
            </select>
          </div>

          <div class="col-3">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <input class="form-control" type="text" name="alineamiento" id="alineamiento" placeholder="Alineamiento" value="{{$character->alineamiento}}">
              @endforeach
            @else
              <input class="form-control" type="text" name="alineamiento" id="alineamiento" placeholder="Alineamiento">
            @endif
          </div>
        </div>
      </div>

      <div class="jumbotron ">
        <h3 class="text-center">Experiencia</h3>

        <div class="row align-items-center justify-content-center">
          
          <div class="col-1">
            <label for="exampleFormControlInput1" id="expInicial">0</label>
          </div>

          <div class="col-4">
            @if(@isset($personaje))
              @foreach($personaje as $character)
              <div id="exp" class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="125" aria-valuemin="0" aria-valuemax="300">{{$character->expTotal}}</div>
              @endforeach
            @else
              <div id="exp" class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="125" aria-valuemin="0" aria-valuemax="300">0</div>
            @endif
            <input type="hidden" name="expTotal"/>
          </div>

          <div class="col-1">
            <label for="exampleFormControlInput1" id="expFinal">300</label>
          </div>

          <div class="col-2">
            <input id="sumarExp" class="form-control" type="number" name="cantEXP" placeholder="0">
          </div>
        </div>
      </div>

      <div class="row p-2 ml-3">
        <div class="col-4">
          <div class="row">
            <div class="col-1 mr-5">
              @if(@isset($personaje) && @isset($stats))
                @foreach($personaje as $character)
                  @foreach($stats as $stat)
                    @if($stat->id == $character->idStats)
                      <div class="row justify-content-center">
                        <label>Fuerza</label>
                        <input class="form-control form-control-lg" style="width: 60px" type="text" name="modFue" placeholder="0" readonly>
                        <input class="form-control" type="number" style="width: 60px" name="statFue" value="{{$stat->fuerza}}">
                      </div>
                      <div class="row justify-content-center">
                        <label>Destreza</label>
                        <input class="form-control form-control-lg" style="width: 60px" type="text" name="modDes" placeholder="0" readonly>
                        <input class="form-control" type="number" style="width: 60px" name="statDes" value="{{$stat->destreza}}">
                      </div>

                      <div class="row justify-content-center">
                        <label>Constitución</label>
                        <input class="form-control form-control-lg" style="width: 60px" type="text" name="modCon" placeholder="0" readonly>
                        <input class="form-control" type="number" style="width: 60px" name="statCon" value="{{$stat->constitucion}}">
                      </div>

                      <div class="row justify-content-center">
                        <label>Inteligencia</label>
                        <input class="form-control form-control-lg" style="width: 60px" type="text" name="modInt" placeholder="0" readonly>
                        <input class="form-control" type="number" style="width: 60px" name="statInt" value="{{$stat->inteligencia}}">
                      </div>

                      <div class="row justify-content-center">
                        <label>Sabiduría</label>
                        <input class="form-control form-control-lg" style="width: 60px" type="text" name="modSab" placeholder="0" readonly>
                        <input class="form-control" type="number" style="width: 60px" name="statSab" value="{{$stat->sabiduria}}">
                      </div>

                      <div class="row justify-content-center">
                        <label>Carisma</label>
                        <input class="form-control form-control-lg" style="width: 60px" type="text" name="modCar" placeholder="0" readonly>
                        <input class="form-control" type="number" style="width: 60px" name="statCar" value="{{$stat->carisma}}">
                      </div>
                    @endif
                  @endforeach
                @endforeach
              @else
                <div class="row justify-content-center">
                  <label>Fuerza</label>
                  <input class="form-control form-control-lg" style="width: 60px" type="text" name="modFue" placeholder="0" readonly>
                  <input class="form-control" type="number" style="width: 60px" name="statFue" value="10">
                </div>

                <div class="row justify-content-center">
                  <label>Destreza</label>
                  <input class="form-control form-control-lg" style="width: 60px" type="text" name="modDes" placeholder="0" readonly>
                  <input class="form-control" type="number" style="width: 60px" name="statDes" value="10">
                </div>

                <div class="row justify-content-center">
                  <label>Constitución</label>
                  <input class="form-control form-control-lg" style="width: 60px" type="text" name="modCon" placeholder="0" readonly>
                  <input class="form-control" type="number" style="width: 60px" name="statCon" value="10">
                </div>

                <div class="row justify-content-center">
                  <label>Inteligencia</label>
                  <input class="form-control form-control-lg" style="width: 60px" type="text" name="modInt" placeholder="0" readonly>
                  <input class="form-control" type="number" style="width: 60px" name="statInt" value="10">
                </div>

                <div class="row justify-content-center">
                  <label>Sabiduría</label>
                  <input class="form-control form-control-lg" style="width: 60px" type="text" name="modSab" placeholder="0" readonly>
                  <input class="form-control" type="number" style="width: 60px" name="statSab" value="10">
                </div>

                <div class="row justify-content-center">
                  <label>Carisma</label>
                  <input class="form-control form-control-lg" style="width: 60px" type="text" name="modCar" placeholder="0" readonly>
                  <input class="form-control" type="number" style="width: 60px" name="statCar" value="10">
                </div>
              @endif
            </div>

            <div class="col-6 ml-5">
              <div class="row">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Inspiración</label>
              </div>

              <div class="row align-items-center">
                <div class="col-7">
                  <label class="form-check-label" for="defaultCheck1">Competencia</label>
                </div>
                
                <div class="col-5">
                  <input class="form-control" type="number" name="competencia" value="1" readonly>
                </div>
              </div>
              
              <div class="row">
                <label>Tiradas de Salvación</label>
              </div>

              @if(@isset($personaje))
                @foreach($personaje as $character)
                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="saveFue" value="1" id="defaultCheck1" @if($character->saveFuerza == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Fuerza</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="saveDes" value="1" id="defaultCheck1"  @if($character->saveDestreza == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Destreza</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="saveCon" value="1" id="defaultCheck1" @if($character->saveConstitucion == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Constitución</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="saveInt" value="1" id="defaultCheck1" @if($character->saveInteligencia == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Inteligencia</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="saveSab" value="1" id="defaultCheck1" @if($character->saveSabiduria == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Sabiduría</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="saveCar" value="1" id="defaultCheck1" @if($character->saveCarisma == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Carisma</label>
                  </div>
                  
                  <div class="row">
                    <label>Habilidades</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="acrobacias" value="1" id="defaultCheck1"  @if($character->acrobacias == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Acrobacias (Des)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="tAnimales" value="1" id="defaultCheck1" @if($character->tAnimales == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Trato con animales (Sab)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="arcano" value="1" id="defaultCheck1" @if($character->arcano == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Arcano (Int)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="atletismo" value="1" id="defaultCheck1" @if($character->atletismo == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Atletismo (Fue)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="mentir" value="1" id="defaultCheck1" @if($character->mentir == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Mentir (Car)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="historia" value="1" id="defaultCheck1" @if($character->historia == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Historia (Int)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="perspicacia" value="1" id="defaultCheck1" @if($character->perspicacia == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Perspicacia (Sab)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="intimidacion" value="1" id="defaultCheck1" @if($character->intimidacion == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Intimidación (Car)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="investigacion" value="1" id="defaultCheck1" @if($character->investigacion == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Investigación (Int)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="medicina" value="1" id="defaultCheck1" @if($character->medicina == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Medicina (Sab)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="naturaleza" value="1" id="defaultCheck1" @if($character->naturaleza == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Naturaleza (Int)</label>
                  </div>
                  
                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="percepcion" value="1" id="defaultCheck1" @if($character->percepcion == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Percepción (Sab)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="actuacion" value="1" id="defaultCheck1" @if($character->actuacion == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Actuación (Car)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="persuasion" value="1" id="defaultCheck1" @if($character->persuasion == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Persuasión (Car)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="religion" value="1" id="defaultCheck1" @if($character->religion == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Religión (Int)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="jManos" value="1" id="defaultCheck1" @if($character->jManos == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Juego de manos (Des)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="sigilo" value="1" id="defaultCheck1" @if($character->sigilo == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Sigilo (Des)</label>
                  </div>

                  <div class="row">
                    <input class="form-check-input" type="checkbox" name="supervivencia" value="1" id="defaultCheck1" @if($character->supervivencia == 1) checked @endif>
                    <label class="form-check-label" for="defaultCheck1">Supervivencia (Sab)</label>
                  </div>
                @endforeach
              @else
                <div class="row">
                  <input class="form-check-input" type="checkbox" name="saveFue" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Fuerza</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="saveDes" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Destreza</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="saveCon" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Constitución</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="saveInt" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Inteligencia</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="saveSab" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Sabiduría</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="saveCar" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Carisma</label>
                </div>
                
                <div class="row">
                  <label>Habilidades</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="acrobacias" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Acrobacias (Des)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="tAnimales" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Trato con animales (Sab)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="arcano" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Arcano (Int)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="atletismo" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Atletismo (Fue)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="mentir" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Mentir (Car)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="historia" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Historia (Int)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="perspicacia" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Perspicacia (Sab)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="intimidacion" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Intimidación (Car)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="investigacion" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Investigación (Int)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="medicina" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Medicina (Sab)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="naturaleza" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Naturaleza (Int)</label>
                </div>
                
                <div class="row">
                  <input class="form-check-input" type="checkbox" name="percepcion" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Percepción (Sab)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="actuacion" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Actuación (Car)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="persuasion" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Persuasión (Car)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="religion" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Religión (Int)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="jManos" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Juego de manos (Des)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="sigilo" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Sigilo (Des)</label>
                </div>

                <div class="row">
                  <input class="form-check-input" type="checkbox" name="supervivencia" value="1" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">Supervivencia (Sab)</label>
                </div>
              @endif
            </div>
          </div>

          <div class="row p-2 align-items-center">
            <div class="col-3">
              <input class="form-control" type="number" name="ppercepcion" readonly>
            </div>

            <div class="col-6">
              <label>Percepción pasiva</label>
            </div>
          </div>

          <div class="row">
          <textarea class="form-control" id="vacio" name="oCompetenciasNO" rows="3" placeholder="Otras competencias y lengas"></textarea>
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <textarea class="form-control" name="oCompetencias" rows="3" placeholder="Otras competencias y lengas">{{$character->oCompetencias}}</textarea>
              @endforeach
            @else
              @if(@isset($clases) && @isset($razas))
                @foreach($clases as $clase)
                  @foreach($razas as $raza)
                    <?php $texto = $clase->otrasCompetencias."\n\n".$raza->lenguas; ?>
                    <textarea class="form-control {{$clase->nombre}}{{$raza->id}}oCompetencias" id="oCompetencias" name="oCompetenciasNO" rows="3" placeholder="Otras competencias y lengas">{{$texto}}</textarea>
                  @endforeach
                @endforeach
              @endif
            @endif
          </div>
        </div>

        <div class="col-4 ml-2">
          <div class="row">
            <div class="col-6">
              <label>Clase de armadura</label>
              @if(@isset($personaje))
                @foreach($personaje as $character)
                  <input class="form-control" type="number" name="cArmadura" width="50px" value="{{$character->cArmadura}}" required>
                @endforeach
              @else
                <input class="form-control" type="number" name="cArmadura" width="50px" required>
              @endif
            </div>

            <div class="col-3">
              <label>Iniciativa</label>
              <input class="form-control" type="number" name="iniciativa" value="10" readonly>
            </div>

            <div class="col-3">
              <label>Velocidad</label>
              @if(@isset($personaje))
                @foreach($personaje as $character)
                  <input class="form-control" type="number" name="velocidad" value="{{$character->velocidad}}" required>
                @endforeach
              @else
                <input class="form-control" type="number" name="velocidad" required>
              @endif
            </div>
          </div>

          <div class="row align-items-center mt-2">
            <div class="col-5">
              <label>Vida máxima</label>
            </div>

            <div class="col-6">
              @if(@isset($personaje))
                @foreach($personaje as $character)
                  <input class="form-control" type="number" name="vMax" value="{{$character->vMax}}" required>
                @endforeach
              @else
                <input class="form-control" type="number" name="vMax" required>
              @endif
            </div>
          </div>

          <div class="row align-items-center mt-2">
            <div class="col-5">
              <label>Vida actual</label>
            </div>

            <div class="col-6">
              @if(@isset($personaje))
                @foreach($personaje as $character)
                  <input class="form-control" type="number" name="vActual" value="{{$character->vActual}}" required>
                @endforeach
              @else
                <input class="form-control" type="number" name="vActual" required>
              @endif
            </div>
          </div>

          <div class="row align-items-center mt-2">
            <div class="col-5">
              <label>Vida temporal</label>
            </div>

            <div class="col-6">
              @if(@isset($personaje))
                @foreach($personaje as $character)
                  <input class="form-control" type="number" name="vTemp" value="{{$character->vTemporal}}">
                @endforeach
              @else
                <input class="form-control" type="number" name="vTemp">
              @endif
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-6">
              <div class="row">
                <label>Dados de vida</label>
              </div>

              <div class="row">
                <div class="col-6">
                  @if(@isset($personaje))
                    @foreach($personaje as $character)
                      <input class="form-control" type="number" name="dVidaActuales" value="{{$character->dadoGolpeActuales}}" required>
                    @endforeach
                  @else
                    <input class="form-control" type="number" name="dVidaActuales" required>
                  @endif
                </div>
                
                <div class="col-6" style="font-size: 25px">
                  @if(@isset($clases))
                    @foreach($clases as $clase)
                      @foreach($razas as $raza)
                        <label class="{{$clase->nombre}}{{$raza->id}}dGolpe">d{{$clase->dadoGolpe}}</label>
                      @endforeach
                    @endforeach
                  @else
                    @if(@isset($clase))
                      @foreach($clase as $class)
                        @foreach($razas as $raza)
                          <label class="{{$class->nombre}}{{$raza->id}}dGolpe">d{{$class->dadoGolpe}}</label>
                        @endforeach
                      @endforeach
                    @endif
                  @endif
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="row">
                <label>Salvación de muerte</label>
              </div>

              <div class="row">
                <div class="col-6">
                  <label>Aciertos</label>
                </div>

                <div class="col-1">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1">
                </div>

                <div class="col-1">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1">
                </div>

                <div class="col-1">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1">
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <label>Fallos</label>
                </div>

                <div class="col-1">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1">
                </div>

                <div class="col-1">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1">
                </div>

                <div class="col-1">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <textarea class="form-control" id="exampleFormControlTextarea1" name="armas" rows="11" placeholder="Armas">{{$character->armas}}</textarea>
              @endforeach
            @else
              <textarea class="form-control" id="exampleFormControlTextarea1" name="armas" rows="11" placeholder="Armas"></textarea>
            @endif
          </div>

          <div class="row mt-2">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <textarea class="form-control" id="exampleFormControlTextarea1" name="equipDiner" rows="10" placeholder="Equipamiento y dinero">{{$character->equipDiner}}</textarea>
              @endforeach
            @else
              <textarea class="form-control" id="exampleFormControlTextarea1" name="equipDiner" rows="10" placeholder="Equipamiento y dinero"></textarea>
            @endif
          </div>
        </div>

        <div class="col-3 ml-5">
          @if(@isset($personaje))
            @foreach($personaje as $character)
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="rPersonalidad" rows="3" placeholder="Rasgos de personalidad">{{$character->rPersonalidad}}</textarea>
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="ideales" rows="3" placeholder="Ideales">{{$character->ideales}}</textarea>
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="lazos" rows="3" placeholder="Lazos">{{$character->lazos}}</textarea>
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="imperfecciones" rows="3" placeholder="Imperfecciones">{{$character->imperfecciones}}</textarea>
              <textarea class="form-control" name="cYRasgos" rows="19" placeholder="Características y rasgos">{{$character->cYRasgos}}</textarea>
            @endforeach
          @else
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="rPersonalidad" rows="3" placeholder="Rasgos de personalidad"></textarea>
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="ideales" rows="3" placeholder="Ideales"></textarea>
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="lazos" rows="3" placeholder="Lazos"></textarea>
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="imperfecciones" rows="3" placeholder="Imperfecciones"></textarea>
            <textarea class="form-control" id="vacio2" name="cYRasgosNO" rows="19" placeholder="Características y rasgos"></textarea>
          @endif
          @if(@isset($clases) && isset($razas))
            @foreach($clases as $clase)
              @foreach($razas as $raza)
                <?php $text = $raza->habilidadesRaciales."\n\n".$clase->habilidades; ?>
                <textarea class="form-control {{$clase->nombre}}{{$raza->id}}cYRasgos" id="cYRasgos" name="cYRasgosNO" rows="19" placeholder="Características y rasgos">{{$text}}</textarea>
              @endforeach
            @endforeach
          @endif
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="perfil">
      <div class="jumbotron">
        <div class="row justify-content-center">
          <div class="col-3">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <input class="form-control mb-2" type="text" name="edad" placeholder="Edad" value="{{$character->edad}}" required>
                <input class="form-control" type="text" name="ojos" placeholder="Ojos" value="{{$character->ojos}}" required>
              @endforeach
            @else
              <input class="form-control mb-2" type="text" name="edad" placeholder="Edad" required>
              <input class="form-control" type="text" name="ojos" placeholder="Ojos" required>
            @endif
          </div>

          <div class="col-3">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <input class="form-control mb-2" type="text" name="altura" placeholder="Altura" value="{{$character->altura}}" required>
                <input class="form-control" type="text" name="piel" placeholder="Piel" value="{{$character->piel}}" required>
              @endforeach
            @else
              <input class="form-control mb-2" type="text" name="altura" placeholder="Altura" required>
              <input class="form-control" type="text" name="piel" placeholder="Piel" required>
            @endif
          </div>

          <div class="col-3">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                <input class="form-control mb-2" type="text" name="peso" placeholder="Peso" value="{{$character->peso}}" required>
                <input class="form-control" type="text" name="pelo" placeholder="Pelo" value="{{$character->pelo}}" required>
              @endforeach
            @else
              <input class="form-control mb-2" type="text" name="peso" placeholder="Peso" required>
              <input class="form-control" type="text" name="pelo" placeholder="Pelo" required>
            @endif
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label>Apariencia del personaje</label>
          @if(@isset($personaje))
            @foreach($personaje as $character)
              <img style="width: 400px;height: auto;" src="{{asset('uploads/'.$character->imagen)}}" width="400" height="500">
            @endforeach
          @else
            <img style="width: 400px;height: auto;" src="" width="400" height="500">
          @endif
          <input accept="image/*" type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
        </div>

        <div class="col-7">
          @if(@isset($personaje))
            @foreach($personaje as $character)
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="aYOrga" rows="23" placeholder="Aliados y organizaciones">{{$character->aYOrganizaciones}}</textarea>
            @endforeach
          @else
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="aYOrga" rows="23" placeholder="Aliados y organizaciones"></textarea>
          @endif
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-5">
          @if(@isset($personaje))
            @foreach($personaje as $character)
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="biografia" rows="24" placeholder="Biografía de personaje">{{$character->biografia}}</textarea>
            @endforeach
          @else
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="biografia" rows="24" placeholder="Biografía de personaje"></textarea>
          @endif
        </div>

        <div class="col-7">
          @if(@isset($personaje))
            @foreach($personaje as $character)
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="aCaracYRasgos" rows="11" placeholder="Características y rasgos adicionales">{{$character->cYRAdicionales}}</textarea>
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="tesoros" rows="12" placeholder="Tesoros">{{$character->tesoros}}</textarea>
            @endforeach
          @else
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="aCaracYRasgos" rows="11" placeholder="Características y rasgos adicionales"></textarea>
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="tesoros" rows="12" placeholder="Tesoros"></textarea>
          @endif
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="hechizos">
      <div class="jumbotron">
        <div class="row place-content-center">
          <div class="col-3">
            <select class="form-control" id="claseHechizos" name="cSpellcast">
              <option>Clase de lanzamiento hechizos</option>
              @if(@isset($clases))
                @foreach($clases as $clase)
                  <option value="{{$clase->id}}">{{$clase->nombre}}</option>
                @endforeach
              @else
                @if(@isset($personaje) && @isset($clase))
                  @foreach($personaje as $character)
                    @foreach($clase as $class)
                      <option value="{{$class->id}}" @if($character->idClase == $class->id) selected='selected' @endif>{{$class->nombre}}</option>
                    @endforeach
                  @endforeach
                @endif
              @endif
            </select>
          </div>

          <div class="col-3">
            <input class="form-control" type="text" name="hSpellcast" placeholder="Habilidad lanzamiento hechizo" readonly>
          </div>

          <div class="col-3">
            <input class="form-control" type="text" name="sSpellcast" placeholder="Tirada salvación de hechizo" readonly>
          </div>

          <div class="col-3">
            <input class="form-control" type="text" name="bASpellcast" placeholder="Bonus ataque de hechizo" readonly>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-4 mr-3">
          <div class="row">
            <label class="mr-2">0</label>
            <label>Trucos</label>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="trucos" rows="12">{{$spells->trucos}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="trucos" rows="12"></textarea>
            @endif
          </div>

          <div class="row">
            <div class="col-3">
              <label>Nivel de hechizo</label>
            </div>

            <div class="col-4">
              <label>Ranuras totales</label>
            </div>

            <div class="col-4">
              <label>Ranuras gastadas</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-3">
              <label>1</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl1" rows="12" placeholder="Nombre de hechizo">{{$spells->nivel1}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl1" rows="12" placeholder="Nombre de hechizo"></textarea>
            @endif
          </div>

          <div class="row align-items-center">
            <div class="col-3">
              <label>2</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl2" rows="12">{{$spells->nivel2}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl2" rows="12"></textarea>
            @endif
          </div>
        </div>

        <div class="col-4 mr-3">
          <div class="row align-items-center">
            <div class="col-2">
              <label>3</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl3" rows="12">{{$spells->nivel3}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl3" rows="12"></textarea>
            @endif
          </div>

          <div class="row align-items-center">
            <div class="col-2">
              <label>4</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl4" rows="12">{{$spells->nivel4}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl4" rows="12"></textarea>
            @endif
          </div>

          <div class="row align-items-center">
            <div class="col-2">
              <label>5</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl5" rows="12">{{$spells->nivel5}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl5" rows="12"></textarea>
            @endif
          </div>
        </div>

        <div class="col-3">
          <div class="row align-items-center">
            <div class="col-2">
              <label>6</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl6" rows="12">{{$spells->nivel6}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl6" rows="12"></textarea>
            @endif
          </div>

          <div class="row align-items-center">
            <div class="col-2">
              <label>7</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl7" rows="8">{{$spells->nivel7}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl7" rows="8"></textarea>
            @endif
          </div>

          <div class="row align-items-center">
            <div class="col-2">
              <label>8</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl8" rows="8">{{$spells->nivel8}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl8" rows="8"></textarea>
            @endif
          </div>

          <div class="row align-items-center">
            <div class="col-2">
              <label>9</label>
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasT">
            </div>

            <div class="col-4">
              <input class="form-control" type="number" name="ranurasG">
            </div>
          </div>

          <div class="row">
            @if(@isset($personaje))
              @foreach($personaje as $character)
                @foreach($hechizos as $spells)
                  @if($spells->id == $character->idHechizos)
                    <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl9" rows="7">{{$spells->nivel9}}</textarea>
                  @endif
                @endforeach
              @endforeach
            @else
              <textarea class="form-control mb-2 mt-2" id="exampleFormControlTextarea1" name="lvl9" rows="7"></textarea>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center p-3">
    @if(@isset($personaje))
      <button type="submit" class="btn btn-danger btn-lg">Actualizar personaje</button>
    @else
      <button type="submit" class="btn btn-danger btn-lg">Crear personaje</button>
    @endif
  </div>
</form>
@stop