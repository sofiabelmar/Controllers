<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar eliminiación</title>
</head>
<body>
    <a href="{{ route("admin.noticias.index")}}">Volver a la lista de noticias</a>
    <h1>Confirmar eliminacion de noticia: </h1>
    <p>Estas seguro de eliminar la noticia: ?</p>
    <form method="POST" action="{{route("admin.noticias.destroy", $noticia->id)}}">
    @csrf
    @method("delete")
    <a href="{{ route("admin.noticias.index")}}"><button>Cancelar</button></a>
    <button type="submit">Confirmar</button>
    </form>

    
</body>
</html>