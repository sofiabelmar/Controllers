<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de noticias</title>
</head>
<body>
    <h1>Lista de Noticias</h1>
    <a href="#">Crear nueva noticia</a>
    <table>
        <thead>
            <th>Titulo</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->titulo}}</td>
                    <td>
                    <a href="#">Editar</a>
                    <a href="#">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>