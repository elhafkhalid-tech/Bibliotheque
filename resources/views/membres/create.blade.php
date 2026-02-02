<form action="{{ route('membres.store') }}" method="POST">
    @csrf

    <label>Nom</label>
    <input type="text" name="name" value="{{ old('name') }}">

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}">

    <label>Password</label>
    <input type="password" name="password">

    <label>Confirmer Password</label>
    <input type="password" name="password_confirmation">

    <button type="submit">Ajouter</button>
</form>
