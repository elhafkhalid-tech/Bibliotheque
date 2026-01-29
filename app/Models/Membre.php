<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    public function emprunts(){
        return $this->hasMany(Emprunt::class);
    }
}


// $membre = Membre::find($id);
// foreach($membre->emprunts as $e){
//     $e->livre->titre;
// }

