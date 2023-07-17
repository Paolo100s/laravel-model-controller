@extends('layouts.main-layout')

@section('content')
    @foreach ($movies as $movie)
        <div class="card">
            <h3>{{ $movie -> title }} ( {{ $movie -> original_title}} )</h3>
            <h4>Vote: {{ $movie -> vote}}  Nationality: {{ $movie -> nationality }}  Date: {{ $movie -> date }} </h4>
        </div>
    @endforeach
@endsection