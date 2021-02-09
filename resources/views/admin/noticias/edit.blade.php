<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Editar noticia {{ $noticia->id}}</title>
</head>
<body>
    <a href="{{ route("admin.noticias.index")}}">Volver a la lista de noticias</a>
    @if(Session::has("exito"))
        <p style="color: #0e7a0e">{{Session::get("exito")}}</p>
    @endif
    @if(Session::has("error"))
        <p style="color: #7a0e0e">{{Session::get("error")}}</p>
    @endif
    <h1>Editar noticia {{ $noticia->id}}</h1>
    <form method="POST" action="{{route("admin.noticias.update", $noticia->id)}}">
        @csrf
        @method('put')
        <label>Titulo:</label>
        <input name="titulo" type="text" value="{{ $noticia->titulo}}">
        <label>Fecha:</label>
        <input name="fecha" type="date" value="{{ $noticia->fecha}}">
        <label>Autor:</label>
        <input name="autor" type="text" value="{{ $noticia->autor}}">
        <label>Cuerpo:</label>
        <textarea rows="5" name="cuerpo" type="text" >{{$noticia->cuerpo}}</textarea>
        <label>Foto:</label>
        <input name="foto" type="text" value="{{ $noticia->foto}}">
        <button type="submit">Actualizar noticia</button>
    </form>
</body>
</html>