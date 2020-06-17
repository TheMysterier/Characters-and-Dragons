<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\UploadedFile;
use App\Stat;
use App\Hechizo;

class PersonajeController extends Controller
{

    public function getCreate($id) {
        $id =  Crypt::decrypt($id);
        $partida = DB::table('partida')
            ->where('id', $id)
            ->get();
        $clases = DB::table('clase')
            ->get();
        $razas = DB::table('raza')
            ->get();

        return view("personaje.form", compact('partida', 'clases', 'razas'));
    }

    public function save(Request $request, $id) {
        $user = auth()->user();
        //$clase = DB::table('clase')->where('nombre', $request->input('clase'))->first();
        //$raza = DB::table('raza')->where('nombre', $request->input('raza'))->first();
        $stats = new Stat(array(
            'fuerza'       => $request->input('statFue'),
            'destreza'     => $request->input('statDes'),
            'constitucion' => $request->input('statCon'),
            'inteligencia' => $request->input('statInt'),
            'sabiduria'    => $request->input('statSab'),
            'carisma'      => $request->input('statCar')
        ));

        $stats->save();

        $hechizos = new Hechizo(array(
            'trucos' => $request->input('trucos'),
            'nivel1' => $request->input('lvl1'),
            'nivel2' => $request->input('lvl2'),
            'nivel3' => $request->input('lvl3'),
            'nivel4' => $request->input('lvl4'),
            'nivel5' => $request->input('lvl5'),
            'nivel6' => $request->input('lvl6'),
            'nivel7' => $request->input('lvl7'),
            'nivel8' => $request->input('lvl8'),
            'nivel9' => $request->input('lvl9')
        ));

        $hechizos->save();

        if ($request->hasFile('imagen')) {
            $ruta = public_path().'/uploads/';
            $imagenOriginal = $request->file('imagen');
            $imagen = Image::make($imagenOriginal);
            $temp_name = Str::random().'.'.$imagenOriginal->extension();
            $imagen->resize(400,500);
            $imagen->save($ruta.$temp_name,100);
        }

        $personaje = DB::table('personaje')->insert(array(
            'idUsuario'        => $user->id,
            'idPartida'        => $id,
            'idClase'          => $request->input('clase'),
            'idRaza'           => $request->input('raza'),
            'nombre'           => $request->input('nombre'),
            'expTotal'         => $request->input('expTotal'),
            'alineamiento'     => $request->input('alineamiento'),
            'trasfondo'        => $request->input('trasfondo'),
            'idStats'          => $stats->id,
            'saveFuerza'       => Input::get('saveFue') == '1'? 1:0,
            'saveDestreza'     => Input::get('saveDes') == '1'? 1:0,
            'saveConstitucion' => Input::get('saveCon') == '1'? 1:0,
            'saveInteligencia' => Input::get('saveInt') == '1'? 1:0,
            'saveSabiduria'    => Input::get('saveSab') == '1'? 1:0,
            'saveCarisma'      => Input::get('saveCar') == '1'? 1:0,
            'acrobacias'       => Input::get('acrobacias') == '1'? 1:0,
            'tAnimales'        => Input::get('tAnimales') == '1'? 1:0,
            'arcano'           => Input::get('arcano') == '1'? 1:0,
            'atletismo'        => Input::get('atletismo') == '1'? 1:0,
            'mentir'           => Input::get('mentir') == '1'? 1:0,
            'historia'         => Input::get('historia') == '1'? 1:0,
            'perspicacia'      => Input::get('perspicacia') == '1'? 1:0,
            'intimidacion'     => Input::get('intimidacion') == '1'? 1:0,
            'investigacion'    => Input::get('investigacion') == '1'? 1:0,
            'medicina'         => Input::get('medicina') == '1'? 1:0,
            'naturaleza'       => Input::get('naturaleza') == '1'? 1:0,
            'percepcion'       => Input::get('percepcion') == '1'? 1:0,
            'actuacion'        => Input::get('actuacion') == '1'? 1:0,
            'persuasion'       => Input::get('persuasion') == '1'? 1:0,
            'religion'         => Input::get('religion') == '1'? 1:0,
            'jManos'           => Input::get('jManos') == '1'? 1:0,
            'sigilo'           => Input::get('sigilo') == '1'? 1:0,
            'supervivencia'    => Input::get('supervivencia') == '1'? 1:0,
            'oCompetencias'    => $request->input('oCompetencias'),
            'cArmadura'        => $request->input('cArmadura'),
            'velocidad'        => $request->input('velocidad'),
            'vMax'             => $request->input('vMax'),
            'vActual'          => $request->input('vActual'),
            'vTemporal'        => $request->input('vTemp'),
            'dadoGolpeActuales' => $request->input('dVidaActuales'),
            'armas'            => $request->input('armas'),
            'equipDiner'       => $request->input('equipDiner'),
            'rPersonalidad'    => $request->input('rPersonalidad'),
            'ideales'          => $request->input('ideales'),
            'lazos'            => $request->input('lazos'),
            'imperfecciones'   => $request->input('imperfecciones'),
            'cYRasgos'         => $request->input('cYRasgos'),
            'edad'             => $request->input('edad'),
            'altura'           => $request->input('altura'),
            'peso'             => $request->input('peso'),
            'ojos'             => $request->input('ojos'),
            'piel'             => $request->input('piel'),
            'pelo'             => $request->input('pelo'),
            'imagen'           => $temp_name,
            'aYOrganizaciones' => $request->input('aYOrga'),
            'biografia'        => $request->input('biografia'),
            'cYRAdicionales'   => $request->input('aCaracYRasgos'),
            'tesoros'          => $request->input('tesoros'),
            'idHechizos'       => $hechizos->id
        ));

        return redirect()->action('PartidaController@listarPartidas');
    }

    public function getEdit($idPartida, $idPersonaje) {
        $idPartida =  Crypt::decrypt($idPartida);
        $idPersonaje =  Crypt::decrypt($idPersonaje);
        $partida = DB::table('partida')
            ->where('id', $idPartida)
            ->get();
        $personaje = DB::table('personaje')
            ->where('id', $idPersonaje)
            ->get();
        $clase = DB::table('clase')
            ->get();
        $razas = DB::table('raza')
            ->get();
        $stats = DB::table('stats')
            ->get();
        $hechizos = DB::table('hechizos')
            ->get();

        return view("personaje.form", compact('personaje', 'clase', 'razas', 'stats', 'hechizos', 'partida'));
    }

    public function postEdit(Request $request, $idPartida, $idPersonaje, $idRaza) {
        $user = auth()->user();

        $stats = Stat::find($idPersonaje);
        $stats->fuerza       = $request->input('statFue');
        $stats->destreza     = $request->input('statDes');
        $stats->constitucion = $request->input('statCon');
        $stats->inteligencia = $request->input('statInt');
        $stats->sabiduria    = $request->input('statSab');
        $stats->carisma      = $request->input('statCar');
        $stats->save();

        $hechizos = Hechizo::find($idPersonaje);
        $hechizos->trucos = $request->input('trucos');
        $hechizos->nivel1 = $request->input('lvl1');
        $hechizos->nivel2 = $request->input('lvl2');
        $hechizos->nivel3 = $request->input('lvl3');
        $hechizos->nivel4 = $request->input('lvl4');
        $hechizos->nivel5 = $request->input('lvl5');
        $hechizos->nivel6 = $request->input('lvl6');
        $hechizos->nivel7 = $request->input('lvl7');
        $hechizos->nivel8 = $request->input('lvl8');
        $hechizos->nivel9 = $request->input('lvl9');
        $hechizos->save();


        if ($request->hasFile('imagen')) {
            $ruta = public_path().'/uploads/';
            $imagenOriginal = $request->file('imagen');
            $imagen = Image::make($imagenOriginal);
            $temp_name = Str::random().'.'.$imagenOriginal->extension();
            $imagen->resize(400,500);
            $imagen->save($ruta.$temp_name,100);
        } else {
            $imagen = DB::table('personaje')->select('imagen')->where('id', $idPersonaje)->get();
            $imagen = json_decode( json_encode($imagen), true);

            foreach($imagen as $picture) {
                $temp_name = Arr::get($picture, 'imagen');
            }
        }

        $personaje = DB::table('personaje')
            ->where('id', $idPersonaje)
            ->update(array(
                'idUsuario'        => $user->id,
                'idPartida'        => $idPartida,
                'idClase'          => $request->input('clase'),
                'idRaza'           => $idRaza,
                'nombre'           => $request->input('nombre'),
                'expTotal'         => $request->input('expTotal'),
                'alineamiento'     => $request->input('alineamiento'),
                'trasfondo'        => $request->input('trasfondo'),
                'idStats'          => $stats->id,
                'saveFuerza'       => Input::get('saveFue') == '1'? 1:0,
                'saveDestreza'     => Input::get('saveDes') == '1'? 1:0,
                'saveConstitucion' => Input::get('saveCon') == '1'? 1:0,
                'saveInteligencia' => Input::get('saveInt') == '1'? 1:0,
                'saveSabiduria'    => Input::get('saveSab') == '1'? 1:0,
                'saveCarisma'      => Input::get('saveCar') == '1'? 1:0,
                'acrobacias'       => Input::get('acrobacias') == '1'? 1:0,
                'tAnimales'        => Input::get('tAnimales') == '1'? 1:0,
                'arcano'           => Input::get('arcano') == '1'? 1:0,
                'atletismo'        => Input::get('atletismo') == '1'? 1:0,
                'mentir'           => Input::get('mentir') == '1'? 1:0,
                'historia'         => Input::get('historia') == '1'? 1:0,
                'perspicacia'      => Input::get('perspicacia') == '1'? 1:0,
                'intimidacion'     => Input::get('intimidacion') == '1'? 1:0,
                'investigacion'    => Input::get('investigacion') == '1'? 1:0,
                'medicina'         => Input::get('medicina') == '1'? 1:0,
                'naturaleza'       => Input::get('naturaleza') == '1'? 1:0,
                'percepcion'       => Input::get('percepcion') == '1'? 1:0,
                'actuacion'        => Input::get('actuacion') == '1'? 1:0,
                'persuasion'       => Input::get('persuasion') == '1'? 1:0,
                'religion'         => Input::get('religion') == '1'? 1:0,
                'jManos'           => Input::get('jManos') == '1'? 1:0,
                'sigilo'           => Input::get('sigilo') == '1'? 1:0,
                'supervivencia'    => Input::get('supervivencia') == '1'? 1:0,
                'oCompetencias'    => $request->input('oCompetencias'),
                'cArmadura'        => $request->input('cArmadura'),
                'velocidad'        => $request->input('velocidad'),
                'vMax'             => $request->input('vMax'),
                'vActual'          => $request->input('vActual'),
                'vTemporal'        => $request->input('vTemp'),
                'armas'            => $request->input('armas'),
                'equipDiner'       => $request->input('equipDiner'),
                'rPersonalidad'    => $request->input('rPersonalidad'),
                'ideales'          => $request->input('ideales'),
                'lazos'            => $request->input('lazos'),
                'imperfecciones'   => $request->input('imperfecciones'),
                'cYRasgos'         => $request->input('cYRasgos'),
                'edad'             => $request->input('edad'),
                'altura'           => $request->input('altura'),
                'peso'             => $request->input('peso'),
                'ojos'             => $request->input('ojos'),
                'piel'             => $request->input('piel'),
                'pelo'             => $request->input('pelo'),
                'imagen'           => $temp_name,
                'aYOrganizaciones' => $request->input('aYOrga'),
                'biografia'        => $request->input('biografia'),
                'cYRAdicionales'   => $request->input('aCaracYRasgos'),
                'tesoros'          => $request->input('tesoros'),
                'idHechizos'       => $hechizos->id
            ));

        return redirect()->action('PartidaController@listarPartidas');
    }

    public function deletePersonaje($id) {
        DB::table('personaje')
            ->where('id', $id)
            ->delete();
        
        DB::table('stats')
            ->where('id', $id)
            ->delete();

        DB::table('hechizos')
            ->where('id', $id)
            ->delete();

        return redirect()->action('PartidaController@listarPartidas');
    }
}
