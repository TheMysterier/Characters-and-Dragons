<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function getIndex() {
        return redirect()->action('PartidaController@listarPartidas');
    }

    public function save(Request $request) {
        $user = auth()->user();
        $partida = DB::table('partida')->insert(array(
            'idUser' => $user->id,
            'nombre' => $request->input('nombre'),
            'nombreDM' => $request->input('nombreDM'),
            'trasfondo' => $request->input('trasfondo')
        ));

        return redirect()->action('PartidaController@listarPartidas');
    }

    public function listarPartidas() {
        $user = auth()->user();
        $partidas = DB::table('partida')
            ->where('idUser', $user->id)
            ->get();
        $personajes = DB::table('personaje')
            ->where('idUsuario', $user->id)
            ->get();
        
        return view('partidas.listPartidas', compact('partidas'), compact('personajes'));
    }
    
    public function deletePartida($id) {
        $personajes = DB::table('personaje')
            ->select("id")
            ->where('idPartida', $id)
            ->get();
        
        $personajes= json_decode( json_encode($personajes), true);

        foreach($personajes as $idPersonaje) {
            DB::table('personaje')
                ->where('id', $idPersonaje)
                ->delete();
        }

        foreach($personajes as $idPersonaje) {
            DB::table('hechizos')
                ->where('id', $idPersonaje)
                ->delete();
        }

        foreach($personajes as $idPersonaje) {
            DB::table('stats')
                ->where('id', $idPersonaje)
                ->delete();
        }

        DB::table('partida')
            ->where('id', $id)
            ->delete();
        
        return redirect()->action('PartidaController@listarPartidas');
    }
}
