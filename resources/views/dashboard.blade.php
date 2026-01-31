<!DOCTYPE html>
<html>
<head>
    <title>Bibliothèque</title>
</head>
<body>

<h1>Gestion de la Bibliothèque</h1>

<hr>

<h2>📚 Catégories</h2>

<a href="{{ route('categories.index') }}">
    <button>Afficher les catégories</button>
</a>

<a href="{{ route('categories.create') }}">
    <button>Créer une catégorie</button>
</a>

<hr>

<h2>📖 Livres</h2>

<a href="{{ route('livres.index') }}">
    <button>Afficher les livres</button>
</a>

<a href="{{ route('livres.create') }}">
    <button>Créer un livre</button>
</a>

<h2> Membres </h2>

<a href="{{ route('membres.index') }}">
    <button>Afficher les membres</button>
</a>

<a href="{{ route('membres.create') }}">
    <button>Créer un membre</button>
</a>

</body>
</html>
