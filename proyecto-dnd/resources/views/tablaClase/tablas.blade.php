@extends('layouts.master')

@section('titulo', 'Tablas de clase')

@section('navbar')
  <nav class="nav nav-pills nav-justified p-4">
    <a class="nav-item nav-link text-danger" href="{{url('/partidas/')}}">Partidas</a>
    <a class="nav-item nav-link bg-danger text-white" href="{{url('/tablas/')}}">Tabla de clases</a>
    <a class="nav-item nav-link text-danger" href="{{url('/dados/')}}">Dados virtuales</a>
    <a class="nav-item nav-link text-danger" href="#">Cerrar sesión</a>
  </nav>
@stop

@section('content')
    <div class="row justify-content-center mb-4">
        <div class="col-2">
            <select class="form-control" id="tablasClases">
                <option value="0">--Clases--</option>
                @isset($clases)
                    @foreach($clases as $clase)
                        <option value="{{$clase->id}}">{{$clase->nombre}}</option>
                    @endforeach
                @endisset
            </select>
        </div>
    </div>

    <div class="row">
        <table class="table" id="1">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Furias</th>
                    <th scope="col">Daño de la furia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Furia, defensa sin armadura</td>
                    <td>2</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Ataque temerario, sentido de peligro</td>
                    <td>2</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>Camino primario</td>
                    <td>3</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>Ataque extra, movimiento rápido</td>
                    <td>3</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Rasgo de camino</td>
                    <td>4</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>Instinto salvaje</td>
                    <td>4</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>+2</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>Crítico brutal (1 dado)</td>
                    <td>4</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Rasgo de camino</td>
                    <td>4</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>Ira implacable</td>
                    <td>4</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>Crítico brutal (2 dados)</td>
                    <td>5</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Rasgo de camino</td>
                    <td>5</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>Ira persistente</td>
                    <td>5</td>
                    <td>+3</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>+4</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>Crítico brutal (3 dados)</td>
                    <td>6</td>
                    <td>+4</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Poder indomable</td>
                    <td>6</td>
                    <td>+4</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>6</td>
                    <td>+4</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Campeón primario</td>
                    <td>Ilimitados</td>
                    <td>+4</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="2">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Trucos conocidos</th>
                    <th scope="col">hechizos conocidos</th>
                    <th scope="col">Ranuras de nivel 1</th>
                    <th scope="col">Ranuras de nivel 2</th>
                    <th scope="col">Ranuras de nivel 3</th>
                    <th scope="col">Ranuras de nivel 4</th>
                    <th scope="col">Ranuras de nivel 5</th>
                    <th scope="col">Ranuras de nivel 6</th>
                    <th scope="col">Ranuras de nivel 7</th>
                    <th scope="col">Ranuras de nivel 8</th>
                    <th scope="col">Ranuras de nivel 9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Lanzamiento de hechizos, inspiración bárdica (d6)</td>
                    <td>2</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Aprendiz de todo, canción del descanso (d6)</td>
                    <td>2</td>
                    <td>5</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>Colegio de bardos, pericia</td>
                    <td>2</td>
                    <td>6</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>7</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>Inspiración bárdica (d8), fuente de inspiración</td>
                    <td>3</td>
                    <td>8</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Contraencanto, rasgo de colegio de bardo</td>
                    <td>3</td>
                    <td>9</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>3</td>
                    <td>10</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>11</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>Canción del descanso (d8)</td>
                    <td>3</td>
                    <td>12</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Inspiración bárdica (d10), pericia, secretos mágicos</td>
                    <td>4</td>
                    <td>14</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>4</td>
                    <td>15</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>15</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>Canción del descanso (d10)</td>
                    <td>4</td>
                    <td>16</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Secretos mágicos, rasgo de colegio de bardos</td>
                    <td>4</td>
                    <td>18</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>Inspiración bárdica (d12)</td>
                    <td>4</td>
                    <td>19</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>19</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>Canción del descanso (d12)</td>
                    <td>4</td>
                    <td>20</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Secretos mágicos</td>
                    <td>4</td>
                    <td>22</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>22</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Inspiración superior</td>
                    <td>4</td>
                    <td>22</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="3">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Trucos conocidos</th>
                    <th scope="col">Ranuras de nivel 1</th>
                    <th scope="col">Ranuras de nivel 2</th>
                    <th scope="col">Ranuras de nivel 3</th>
                    <th scope="col">Ranuras de nivel 4</th>
                    <th scope="col">Ranuras de nivel 5</th>
                    <th scope="col">Ranuras de nivel 6</th>
                    <th scope="col">Ranuras de nivel 7</th>
                    <th scope="col">Ranuras de nivel 8</th>
                    <th scope="col">Ranuras de nivel 9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Lanzamiento de hechizos, dominio divino</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Canalizar divinidad (1/des), rasgo de dominio divino</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>-</td>
                    <td>3</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>Destruir no muertos (CR 1/2)</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Canalizar divinidad (2/des), rasgo de dominio divino</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad, destruir no muertos (CR 1), rasgo de dominio divino</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Intervención divina</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>Destruir no muertos (CR 2)</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Destruir no muertos (CR 3)</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>Destruir no muertos (CR 4), rasgo de dominio divino</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Canalizar divinidad (3/des)</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Mejora de intervención divina</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="4">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Trucos conocidos</th>
                    <th scope="col">Ranuras de nivel 1</th>
                    <th scope="col">Ranuras de nivel 2</th>
                    <th scope="col">Ranuras de nivel 3</th>
                    <th scope="col">Ranuras de nivel 4</th>
                    <th scope="col">Ranuras de nivel 5</th>
                    <th scope="col">Ranuras de nivel 6</th>
                    <th scope="col">Ranuras de nivel 7</th>
                    <th scope="col">Ranuras de nivel 8</th>
                    <th scope="col">Ranuras de nivel 9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Druídico, lanzamiento de hechizos</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Forma salvaje, círculo de druida</td>
                    <td>2</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>-</td>
                    <td>2</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de forma salvaje, mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Rasgo de círculo de druida</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de forma salvaje, mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Rasgo de círculo de druida</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Rasgo de círculo de druida</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Cuerpo atemporal, hechizos de bestia</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Archidruida</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="5">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Estilo de combate, second wind</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Oleada de acción (un uso)</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>Arquetipo marcial</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>Ataque extra</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>ejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>Rasgo de arquetipo marcial</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>Indomable (un uso)</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Rasgo de arquetipo marcial</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>Ataque extra (2)</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>Indomable (dos usos)</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>Rasgo de arquetipo marcial</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>Oleada de acción (dos usos), indomable (tres usos)</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Rasgo de arquetipo marcial</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Ataque extra (3)</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="6">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Artes marciales</th>
                    <th scope="col">Puntos de Ki</th>
                    <th scope="col">Movimiento sin armadura</th>
                    <th scope="col">Rasgos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>1d4</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Defensa sin armadura, artes marciales</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>1d4</td>
                    <td>2</td>
                    <td>+10''</td>
                    <td>Ki, movimiento sin armadura</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>1d4</td>
                    <td>3</td>
                    <td>+10''</td>
                    <td>Tradición monástica, desviar proyectiles</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>1d4</td>
                    <td>4</td>
                    <td>+10''</td>
                    <td>Mejora de puntuación de habilidad, Caída lenta</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>1d6</td>
                    <td>5</td>
                    <td>+10''</td>
                    <td>Ataque extra, golpe aturdidor</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>1d6</td>
                    <td>6</td>
                    <td>+15''</td>
                    <td>Golpes potenciados por Ki, rasgo de tradición monástica</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>1d6</td>
                    <td>7</td>
                    <td>+15''</td>
                    <td>Evasión, quietud de la mente</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>1d6</td>
                    <td>8</td>
                    <td>+15''</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>1d6</td>
                    <td>9</td>
                    <td>+15''</td>
                    <td>Mejora de movimiento sin armadura</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>1d6</td>
                    <td>10</td>
                    <td>+20''</td>
                    <td>Pureza del cuerpo</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>1d8</td>
                    <td>11</td>
                    <td>+20''</td>
                    <td>Rasgo de tradición monástica</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>1d8</td>
                    <td>12</td>
                    <td>+20''</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>1d8</td>
                    <td>13</td>
                    <td>+20''</td>
                    <td>Lengua del sol y la luna</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>1d8</td>
                    <td>14</td>
                    <td>+25''</td>
                    <td>Alma de diamante</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>1d8</td>
                    <td>15</td>
                    <td>+25''</td>
                    <td>Cuerpo atemporal</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>1d8</td>
                    <td>16</td>
                    <td>+25''</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>1d10</td>
                    <td>17</td>
                    <td>+25''</td>
                    <td>Rasgo de tradición monástica</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>1d10</td>
                    <td>18</td>
                    <td>+30''</td>
                    <td>Cuerpo vacío</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>1d10</td>
                    <td>19</td>
                    <td>+30''</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>1d10</td>
                    <td>20</td>
                    <td>+30''</td>
                    <td>Ser perfecto</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="7">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Ranuras de nivel 1</th>
                    <th scope="col">Ranuras de nivel 2</th>
                    <th scope="col">Ranuras de nivel 3</th>
                    <th scope="col">Ranuras de nivel 4</th>
                    <th scope="col">Ranuras de nivel 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Sentido divino, imponer manos</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Estilo de combate, lanzamiento de conjuros, golpe divino</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>Salud divina, camino sagrado</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>Ataque extra</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Aura de protección</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>Rasgo de camino divino</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Aura de corage</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>Mejora de golpe divino</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Toque purificador</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>Rasgo de camino divino</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>-</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Mejoras de aura</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Rasgo de camino divino</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="8">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Hechizos conocidos</th>
                    <th scope="col">Ranuras de nivel 1</th>
                    <th scope="col">Ranuras de nivel 2</th>
                    <th scope="col">Ranuras de nivel 3</th>
                    <th scope="col">Ranuras de nivel 4</th>
                    <th scope="col">Ranuras de nivel 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Enemigo favorito, explorador natural</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Estilo de combate, lanzamiento de conjuros</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>Arquetipo de explorador</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>Ataque extra</td>
                    <td>4</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Mejora de enemigo favorito y explorador natural</td>
                    <td>4</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>Rasgo de arquetipo de explorador</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad, paso de la tierra</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>6</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Mejora de explorador natural, ocultarse a simple vista</td>
                    <td>6</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>Rasgo de arquetipo de explorador</td>
                    <td>7</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>7</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>8</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Mejora de enemigo favorito, desaparecer</td>
                    <td>8</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>Rasgo de arquetipo de explorador</td>
                    <td>9</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>9</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>-</td>
                    <td>10</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Sentidos salvajes</td>
                    <td>10</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>11</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Asesino de enemigos</td>
                    <td>11</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="9">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Ataque sigiloso</th>
                    <th scope="col">Rasgos</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>1d6</td>
                    <td>Pericia, ataque sigiloso, jerga de ladrón</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>1d6</td>
                    <td>Acción astuta</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>2d6</td>
                    <td>Arquetipo de pícaro</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>2d6</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>3d6</td>
                    <td>Esquiva misteriosa</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>3d6</td>
                    <td>Pericia</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>4d6</td>
                    <td>Evasión</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>4d6</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>5d6</td>
                    <td>Rasgo de arquetipo de pícaro</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>5d6</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>6d6</td>
                    <td>Talento confiable</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>6d6</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>6d6</td>
                    <td>Rasgo de arquetipo de pícaro</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>7d6</td>
                    <td>Sentido ciego</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>8d6</td>
                    <td>Mente resbaladiza</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>8d6</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>9d6</td>
                    <td>Rasgo de arquetipo de pícaro</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>9d6</td>
                    <td>Esquivo</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>10d6</td>
                    <td>Mejora de puntuación de habilidad</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>10d6</td>
                    <td>Golpe de suerte</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="10">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Puntos de hechicero</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Trucos conocidos</th>
                    <th scope="col">hechizos conocidos</th>
                    <th scope="col">Ranuras de nivel 1</th>
                    <th scope="col">Ranuras de nivel 2</th>
                    <th scope="col">Ranuras de nivel 3</th>
                    <th scope="col">Ranuras de nivel 4</th>
                    <th scope="col">Ranuras de nivel 5</th>
                    <th scope="col">Ranuras de nivel 6</th>
                    <th scope="col">Ranuras de nivel 7</th>
                    <th scope="col">Ranuras de nivel 8</th>
                    <th scope="col">Ranuras de nivel 9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>-</td>
                    <td>Lanzamiento de hechizos, origen hechicero</td>
                    <td>4</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>2</td>
                    <td>Fuente de magia</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>3</td>
                    <td>Metamagia</td>
                    <td>4</td>
                    <td>4</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>5</td>
                    <td>6</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>6</td>
                    <td>Rasgo de origen de hechicero</td>
                    <td>5</td>
                    <td>7</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>7</td>
                    <td>-</td>
                    <td>5</td>
                    <td>8</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>8</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>9</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>9</td>
                    <td>-</td>
                    <td>5</td>
                    <td>10</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>10</td>
                    <td>Metamagia</td>
                    <td>6</td>
                    <td>11</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>11</td>
                    <td>-</td>
                    <td>6</td>
                    <td>12</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>12</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>6</td>
                    <td>12</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>13</td>
                    <td>-</td>
                    <td>6</td>
                    <td>13</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>14</td>
                    <td>Rasgo de origen de hechicero</td>
                    <td>6</td>
                    <td>13</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>15</td>
                    <td>-</td>
                    <td>6</td>
                    <td>14</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>16</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>6</td>
                    <td>14</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>17</td>
                    <td>Metamagia</td>
                    <td>6</td>
                    <td>15</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>18</td>
                    <td>Rasgo de origen de hechicero</td>
                    <td>6</td>
                    <td>15</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>19</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>6</td>
                    <td>15</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>20</td>
                    <td>Restauración hechicera</td>
                    <td>6</td>
                    <td>15</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>

        </table>

        <table class="table" id="11">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Trucos conocidos</th>
                    <th scope="col">Hechizos conocidos</th>
                    <th scope="col">Ranuras de hechizo</th>
                    <th scope="col">Nivel de ranura</th>
                    <th scope="col">invocaciones conocidas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Patrón de otro mundo, pacto mágico</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Invocaciones Eldritch</td>
                    <td>2</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>Bendición del pacto</td>
                    <td>2</td>
                    <td>4</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>5</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>3</td>
                    <td>6</td>
                    <td>2</td>
                    <td>3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Rasgo de patrón de otro mundo</td>
                    <td>3</td>
                    <td>7</td>
                    <td>2</td>
                    <td>3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>3</td>
                    <td>8</td>
                    <td>2</td>
                    <td>4</td>
                    <td>4</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>3</td>
                    <td>9</td>
                    <td>2</td>
                    <td>4</td>
                    <td>4</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>3</td>
                    <td>10</td>
                    <td>2</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Rasgo de patrón de otro mundo</td>
                    <td>4</td>
                    <td>10</td>
                    <td>2</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>Arcano místico (nivel 6)</td>
                    <td>4</td>
                    <td>11</td>
                    <td>3</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>11</td>
                    <td>3</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>Arcano místico (nivel 7)</td>
                    <td>4</td>
                    <td>12</td>
                    <td>3</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Rasgo de patrón de otro mundo</td>
                    <td>4</td>
                    <td>12</td>
                    <td>3</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>Arcano místico (nivel 8)</td>
                    <td>4</td>
                    <td>13</td>
                    <td>3</td>
                    <td>5</td>
                    <td>7</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>13</td>
                    <td>3</td>
                    <td>5</td>
                    <td>7</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>Arcano místico (nivel 9)</td>
                    <td>4</td>
                    <td>14</td>
                    <td>4</td>
                    <td>5</td>
                    <td>7</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>-</td>
                    <td>4</td>
                    <td>14</td>
                    <td>4</td>
                    <td>5</td>
                    <td>8</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>15</td>
                    <td>4</td>
                    <td>5</td>
                    <td>8</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Maestro eldritch</td>
                    <td>4</td>
                    <td>15</td>
                    <td>4</td>
                    <td>5</td>
                    <td>8</td>
                </tr>
            </tbody>
        </table>

        <table class="table" id="12">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Bonus por competencia</th>
                    <th scope="col">Rasgos</th>
                    <th scope="col">Trucos conocidos</th>
                    <th scope="col">Ranuras de nivel 1</th>
                    <th scope="col">Ranuras de nivel 2</th>
                    <th scope="col">Ranuras de nivel 3</th>
                    <th scope="col">Ranuras de nivel 4</th>
                    <th scope="col">Ranuras de nivel 5</th>
                    <th scope="col">Ranuras de nivel 6</th>
                    <th scope="col">Ranuras de nivel 7</th>
                    <th scope="col">Ranuras de nivel 8</th>
                    <th scope="col">Ranuras de nivel 9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>+2</td>
                    <td>Lanzamiento de hechizos, recuperación arcana</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>+2</td>
                    <td>Tradición arcana</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>+2</td>
                    <td>-</td>
                    <td>3</td>
                    <td>4</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>+2</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>+3</td>
                    <td>Rasgo de tradición arcana</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>+3</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>+3</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>+4</td>
                    <td>Rasgo de tradición arcana</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>+4</td>
                    <td>-</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>+4</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>+5</td>
                    <td>Rasgo de tradición arcana</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>+5</td>
                    <td>-</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>+5</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>+6</td>
                    <td>-</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>+6</td>
                    <td>Dominio de hechizos</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>+6</td>
                    <td>Mejora de puntuación de habilidad</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>+6</td>
                    <td>Hechizos exclusivos</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
@stop