<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name'];
    
    public function livres(){
        return $this->hasMany(Livre::class);
    }
}


// $categorie = Category::find($id);
// $livres = $categorie->livres;

// foreach($livres as $livre){
//     $livre->titre;
// }

