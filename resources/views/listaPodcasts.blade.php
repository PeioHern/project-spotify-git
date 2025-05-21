@extends('layouts.plantilla')

@section('content')
    <h2>LISTADO DE PODCASTS</h2>

    {{-- FORMATO TABLA --}}

    {{-- <table id="alumnos">
        <tr>
            <th>Nombre </th>
            <th>Descripcion</th>
        </tr>

        @foreach ($podcasts as $podcast)
            <tr>
                <td> {{ $podcast->nombre }}</td>
                <td> {{ $podcast->descripcion }}</td>
            </tr>
        @endforeach

    </table> --}}

    {{-- FORMATO LISTA --}}

    {{-- <ul class="podcast-list">
        @foreach ($podcasts as $podcast)
            <li>{{ $podcast->nombre }} - {{ $podcast->descripcion }} (Faved-User: {{ $podcast->descripcion }})</li>
        @endforeach
    </ul> --}}

    <h1>Mi Usuario: {{ $miUser }}</h1>

    <ul class="podcast-list">
        @foreach ($podcasts as $podcast)
            <li>
                {{ $podcast->nombre }} - {{ $podcast->descripcion }} <br>

                Faved by:
                @if ($podcast->usuarios->isEmpty())
                    No one yet
                @else
                    {{ $podcast->usuarios->pluck('name')->join(', ') }}
                @endif
            </li>
        @endforeach
    </ul>




@endsection
