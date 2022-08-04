@extends('base')

@section('content')
    <h1>Lista de Produtos</h1>
    <ul>
        @if(isset($products))
            @foreach($products as $prod)
                <li>{{$prod}}</li>
            @endforeach
            @else
                <h3>Não há produtos!</h3>
            @endif
    </ul>
@endsection
