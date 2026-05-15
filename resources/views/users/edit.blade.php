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
        <h1>Vista de editar</h1>
        <form action="{{route('users.update', $users->id)}}" method="post">
            @csrf
            @method ('put')
            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Nombre: </label>
                <input type="text" class="form-control" name="nombre" id="name" value="{{$user->name}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="birthday">Fecha de Nacimiento: </label>
                <input type="text" class="form-control" name="nacimiento" id="birthday" value="{{$user->birthday}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="email">Correo: </label>
                <input type="text" class="form-control" name="correo" id="email" value="{{$user->email}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="password">Contraseña: </label>
                <input type="password" class="form-control" name="contrasenia" id="password" value="{{$user->password}}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
</body>
</html>