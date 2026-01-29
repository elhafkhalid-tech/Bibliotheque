<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    public function membre(){
        return $this->belongsTo(Membre::class);
    }

    public function livre(){
        return $this->belongsTo(Livre::class);
    }
}


// $emprunt = Emprunt::find($id);
// $emprunt->membre->nom;
// $emprunt->livre->titre;