<!DOCTYPE html>
<html>

<head>
    <title>Modifier Livre</title>
</head>

<body>

    <h1>Modifier le livre</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('livres.update', $livre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Titre</label>
            <input type="text" name="name" value="{{ old('', $livre->titre) }}">
        </div>
        <div>
            <label>Auteur</label>
            <input type="text" name="auteur" value="{{ old('', $livre->auteur) }}">
        </div>

        <div>
            <label>Catégorie</label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"{{ $livre->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Mettre à jour</button>
    </form>

</body>

</html>
