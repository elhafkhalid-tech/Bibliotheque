<!DOCTYPE html>
<html>

<head>
    <title>Modifier Membre</title>
</head>

<body>

    <h1>Modifier le membre</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('membres.update', $membre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>nom</label>
            <input type="text" name="nom" value="{{ old('', $membre->nom) }}">
        </div>
        <div>
            <label>email</label>
            <input type="text" name="email" value="{{ old('', $membre->email) }}">
        </div>
        
        <button type="submit">Mettre à jour</button>
    </form>

</body>

</html>
