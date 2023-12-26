<div>
    <h2>Title: {{ $result->title }}</h2>
    <h2>Slug: {{ $result->slug }}</h2>
    <h2>Path_legacy: {{ $result->path_legacy }}</h2>
    <img src="{{ "https://fotos.perfil.com/$result->image" }}" alt="Imagen">
</div>
