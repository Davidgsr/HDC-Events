@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="banner">

        @if (10 > 5)
            <p>A condição é true</p>
        @endif
        <p>{{$nome}}</p>

        @if ($nome == "Pedro")
            <p>O nome é Pedro</p>
        @elseif ($nome == "David")
            <p>O nome é {{$nome}} e ele tem {{$idade}} anos de idade e trabalha como {{$profissao}}</p>
        @endif

        @for ($i=0; $i < count ($arr); $i++)
            <p>{{$arr[$i]}}</p>
        @endfor

        @foreach ($nomes as $nome)
            <p>{{$nome}}</p>
        @endforeach

        @php
            $name = 'João';
            echo $name;
        @endphp
@endsection