<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de noticias</title>
</head>
<body>
    <h1>Lista de Noticias</h1>
    @if(Session::has("exito"))
        <p style="color: #0e7a0e">{{Session::get("exito")}}</p>
    @endif
    @if(Session::has("error"))
        <p style="color: #a11919a1">{{Session::get("error")}}</p>
    @endif
    <a href="{{ route("admin.noticias.create") }}">Crear nueva noticia</a>
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
                    <a href="{{ route("admin.noticias.show", $noticia->id)}}">VER</a>
                    <a href="{{ route("admin.noticias.edit", $noticia->id)}}">Editar</a>
                    <a href="{{ route("admin.noticias.confirmdelete", $noticia->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>