<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boa tarde, {{ $nome }}!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="jumbotron">
@if ($idade)
    <h1>Boa tarde, {{ $nome }}! Já tem {{ $idade }} anos?? Putz!</h1>
@else
    <h1>Boa tarde, {{ $nome }}! Idade é apenas um número...</h1>
@endif
</div>

<div class="alert alert-warning">
    @json($tabela)
</div>

<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    @forelse ($tabela as $linha)
        <tr>
            <td>{{ $linha['nome'] }}</td>
            <td>{{ $linha['idade'] ?? 'Idade é apenas um número...' }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="2"> tá vazio, mermão! </td>
        </tr>
    @endforelse

    {!! $html !!}
    {{ $html }}
  
</table>
        </div>
</body>
</html>