<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membres</title>
</head>
<body>

    <h1>Membres</h1>

    <ul>
        @foreach ($membres as $membre)
            <li>
                {{ $membre->nom }}
                <!-- EDIT -->
                <a href="{{ route('membres.edit', $membre->id) }}">
                    ✏️ Modifier
                </a>

                <!-- DELETE -->
                <form action="{{ route('membres.destroy', $membre->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        onclick="return confirm('Supprimer ce membre ?')">
                        🗑️ Supprimer
                    </button>

                    <a href="{{ route('membres.show', $membre->id) }}">
                    👁️ Voir
                </a>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>
