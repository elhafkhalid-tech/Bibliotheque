<!DOCTYPE html>
<html>
<head>
    <title>Détail du livre</title>
</head>
<body>

    <h1>Détails du livre</h1>

    <p><strong>Titre :</strong> {{ $livre->titre }}</p>
    <p><strong>Auteur :</strong> {{ $livre->auteur }}</p>
    <p><strong>Catégorie :</strong> {{ $livre->category->name }}</p>

    <a href="{{ route('livres.edit', $livre->id) }}">Modifier</a>

    <form action="{{ route('livres.destroy', $livre->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>

</body>
</html>
