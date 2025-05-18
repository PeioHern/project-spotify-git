@extends('layouts.plantilla')

@section('content')
    <h2>LISTADO DE SONGS</h2>

    <form action="{{ route('searchSongs') }}" method="POST">
        @csrf
        <input type="text" name="searchName" placeholder="Search by name">
        <button type="submit">Search</button>
        <br><br>
    </form>

    {{-- FORMATO LISTA --}}
    <ul class="podcast-list">
        @foreach ($songs as $song)
            <li>{{ $song->nombre }} - {{ $song->artista }} (Playlist: {{ $song->playlist->nombre ?? 'Sin nombre' }})</li>
        @endforeach
    </ul>



@endsection
