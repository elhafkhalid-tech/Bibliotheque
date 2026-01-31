<!DOCTYPE html>
<html>

<head>
    <title>Créer une Category</title>
</head>

<body>
    <h1>Ajouter une nouvelle Category</h1>
    
    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

   <form action="{{route('categories.store')}}" method="POST">
       @csrf
       <label for="">Nom de la category</label>
       <input type="text" name="name" value="{{ old('name') }}">
       <button type="submit">Ajouter</button>
   </form>
</body>
</html>

