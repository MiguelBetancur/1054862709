<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>Formulario para crear usuario</h1>
        <form action="{{route('users.store)}}" method="post">
            @csrf

            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Nombre: </label>
                <input type="text" class="form-control" name="nombre" id="name">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="birthday">Fecha de Nacimiento: </label>
                <input type="text" class="form-control" name="nacimiento" id="birthday">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="email">Correo: </label>
                <input type="text" class="form-control" name="correo" id="email">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="password">Contraseña: </label>
                <input type="password" class="form-control" name="contrasenia" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </form>


        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th>E-mail</th>
                <th>Contraseña</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                endforeach
            </tbody>
        </table>
    </div>
</body>
</html>