@extends('layouts.app') @section('titulo')
    Página principal
@endsection
@section('contenido')
    @if ($posts->count())
        <p>Si hay posts</p>
    @else
        <p>No hay posts</p>
    @endif
@endsection
