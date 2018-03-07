<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Streamers extends Model
{
    protected $table = "streamer";

    public static function GetAll() {
        $all = Streamers::all();
    }

    public static function GetMovie() {
        $movie = Streamers::where('type', 1)->get();
        return $movie;
    }

    public static function GetSerie() {
        $serie = Streamers::where('type', 2)->get();
        return $serie;
    }

    public static function GetKind( $kind ) {
           $kinder = Streamers::where('streamer.type', 'streamer_type.id')->join("streamer_type", "streamer_type.type", "=", $kind)->get();
           return $kinder;
    }

    public static function GetVideo( $video ) {
        $video = Streamers::where('nom', $video)->get()[0];
        return $video;
    }

    public static function AddVideo( Request $request ) {
        $inputs = $request->all();
        $new = new Streamers;
        $new->nom = $inputs['nom'];
        $new->synopsis = $inputs['synopsis'];
        $new->sortie = $inputs['sortie'];
        $new->genre = $inputs['genre'];
        $new->type = $inputs['type'];
        $new->duree = "00:00:00";
        $new->ration = 0.0;
        $new->save();
    }
}
