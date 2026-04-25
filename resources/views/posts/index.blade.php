<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="container text-center">
        <h1>Formulario para crear usuario </h1>
        <form action="{{route('users.store')}}" method="post">
            @csrf
          //<div class="input-group mb-3">
                <label class="input-group-text" for="name">Nombre: </label>
                <input type="text" class="form-control" id="name" name="nombre">
            </div>// (Así con todos los atributos que se piden)
            <button type="submit" class="btn btn-primary">Guardar usuario</button>
        </form>

        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Nombres de las columnas</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td> 
                        <td>{{ $user->role_id }}</td>
                        <td>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                @csrf 
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

