<!DOCTYPE html>
<html>
<head>
    <title>Détail du membre</title>
</head>
<body>

    <h1>Détails du membre</h1>

    <p><strong>Nom :</strong> {{ $membre->nom }}</p>
    <p><strong>Email :</strong> {{ $membre->email }}</p>
    <a href="{{ route('membres.edit', $membre->id) }}">Modifier</a>

    <form action="{{ route('membres.destroy', $membre->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>

</body>
</html>
