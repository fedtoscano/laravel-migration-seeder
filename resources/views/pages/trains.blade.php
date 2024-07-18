<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center">Lista dei Treni</h1>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario di Partenza</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->azienda }}</td>
                <td>{{ $train->stazione_partenza }}</td>
                <td>{{ $train->stazione_arrivo }}</td>
                <td>{{ $train->orario_partenza }}</td>
                <td>{{ $train->orario_arrivo }}</td>
                <td>{{ $train->codice_treno }}</td>
                <td>{{ $train->numero_carrozze }}</td>
                <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
