@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Tela de Produtos</h1>

@if($busca != '')
    <p>O usuário está bsucando por: {{$busca}}</p>
@endif

@endsection