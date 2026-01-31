<!DOCTYPE html>
<html>
<head>
    <title>Créer un livre</title>
</head>
<body>

<h1>Ajouter un livre</h1>

<form action="{{ route('livres.store') }}" method="POST">
    @csrf

    <label>Titre</label>
    <input type="text" name="titre" value="{{ old('titre') }}">

    <br><br>

    <label>Auteur</label>
    <input type="text" name="auteur" value="{{ old('auteur') }}">

    <br><br>
  
    <label>Catégorie</label>
    <select name="category_id" id="">
         @foreach ($categories as $categorie)
             <option value="{{$categorie->id}}">
                 {{$categorie->name}}
             </option>
         @endforeach
    </select>

    <br><br>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>
