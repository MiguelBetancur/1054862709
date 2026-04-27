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
                <input type="radio" id="is_active" name="esta_activo" value="True">SI
                <input type="radio" id="is_active" name="esta_activo" value="False">NO
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
                        <td>{{ $team->created_date }}</td> 
                        <td>{{ $team->is_active }}</td>
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

