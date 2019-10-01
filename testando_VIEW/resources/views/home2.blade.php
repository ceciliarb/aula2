@extends('layouts.base2')

@section('title', 'Home')

@section('maisinfo', 'Estou inserindo mais, pq nao?')

@section('content')
    @component('alert')
        <strong>OPA</strong> Deu ruim!
    @endcomponent
    <div class="jumbotron">
        OI
    </div>
@endsection
       
@section('sidebar')
    <p>mais uma info</p>
@endsection
    
