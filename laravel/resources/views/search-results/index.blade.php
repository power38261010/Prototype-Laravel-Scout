<!DOCTYPE html>
<html>
<head>
    <title>Resultados de búsqueda</title>
</head>
<body>
    <h1>Resultados de búsqueda</h1>

    <h2>Consulta Básica:</h2>
    @foreach($results['basic'] as $result)
        @include('search-results.result', ['result' => $result])
    @endforeach

    {{-- <h2>Consulta con Puntuación:</h2>
    @foreach($results['score'] as $result)
        @include('search-results.result', ['result' => $result])
    @endforeach --}}

    <h2>Consulta con Paginación:</h2>
    @foreach($results['pagination'] as $result)
        @include('search-results.result', ['result' => $result])
    @endforeach

    {{-- <h2>Consulta con Filtros:</h2>
    @foreach($results['filters'] as $result)
        @include('search-results.result', ['result' => $result])
    @endforeach --}}

    {{-- <h2>Consulta con Resaltado de Términos:</h2>
    @foreach($results['highlight'] as $result)
        @include('search-results.result', ['result' => $result])
    @endforeach --}}

    {{-- <h2>Consulta con Búsqueda Fuzzy:</h2>
    @foreach($results['fuzzy'] as $result)
        @include('search-results.result', ['result' => $result])
    @endforeach --}}

    {{-- <h2>Consulta con Orden Personalizado:</h2>
    @foreach($results['customOrder'] as $result)
        @include('search-results.result', ['result' => $result])
    @endforeach --}}

    {{-- Partial View para mostrar cada resultado --}}
    @include('search-results.result')

</body>
</html>
