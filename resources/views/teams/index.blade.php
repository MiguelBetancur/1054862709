<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body> 
    <div class="container text-center">
        <h1>Formulario para crear equipo </h1>
        <form action="{{route('teams.store')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Nombre: </label>
                <input type="text" class="form-control" id="name" name="nombre">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="created_date">Fecha: </label>
                <input type="date" class="form-control" id="created_date" name="fecha_creada">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="is_active">Está Activo: </label>
                <input type="radio" name="esta_activo" id="is_active">SI
                <input type="radio" name="esta_activo" id="is_active">NO
            </div>
            <button type="submit" class="btn btn-primary">Guardar equipo</button>
        </form>

        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Nombres del Equipo</th>
                <th>Fecha de Creación</th>
                <th>Esta Activo</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->email }}</td> 
                        <td>{{ $team->role_id }}</td>
                        <td>
                            <a href="{{route('teams.edit', $team->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('teams.destroy', $team->id)}}" method="post">
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

