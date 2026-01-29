<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['titre','auteur','categorie_id'];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function emprunts(){
        return $this->hasMany(Emprunt::class);
    }
}


// $livres = Livre::with('category')->get();
// foreach($livres as $livre){
//     $livre->titre . "  " . $livre->category->nom;
 
//     "\n";
// }

// $livre = Livre::find($id);  
// $categorie = $livre->category;    
// echo "Titre: " . $livre->titre . "\n";
// echo "Categorie: " . $categorie->nom . "\n";
// foreach($livre->emprunts as $emprunt){
//     echo $emprunt->date_emprunt;
// }