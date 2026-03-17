<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Ofertas</title>
</head>
<body>
    <h1>Catálogo de Ofertas</h1>
    <a href="{{ route('ofertas.create') }}">Crear Nueva Oferta</a>
    <hr>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Tienda</th>
                <th>Vigencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ofertas as $oferta)
            <tr>
                <td>{{ $oferta->id }}</td>
                <td>{{ $oferta->titulo }}</td>
                <td>{{ $oferta->tienda }}</td>
                <td>{{ $oferta->vigencia }}</td>
                <td>
                    <a href="{{ route('ofertas.show', $oferta) }}">Ver</a> | 
                    <a href="{{ route('ofertas.edit', $oferta) }}">Editar</a> | 
                    <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que deseas eliminarla?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>