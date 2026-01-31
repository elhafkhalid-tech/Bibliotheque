<!DOCTYPE html>
<html>
<head>
    <title>Créer un membre</title>
</head>
<body>

<h1>Ajouter un membre</h1>

<form action="{{ route('membres.store') }}" method="POST">
    @csrf
    <label>nom</label>
    <input type="text" name="nom" value="{{ old('nom') }}">

    <br><br>

    <label>email</label>
    <input type="text" name="email" value="{{ old('email') }}">

    <br><br>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>
