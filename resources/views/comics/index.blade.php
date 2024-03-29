@php
$comics = config('comics');
@endphp

@extends('layouts.main')

@section('tag')
    <h2>CURRENT SERIES</h2>
@endsection

@section('content')
    <div class="container">
        <div class="cards-container">
            @foreach ($comics as $index => $comic)
                <div class="series-card">
                    <a href="{{ route('comics.show', ['id' => $index]) }}">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}" />
                    </a>
                    <p>{{ strtoupper($comic['series']) }}</p>
                </div>
            @endforeach
        </div>
        <div class="button-container">
            <button>LOAD MORE</button>
        </div>
    </div>
@endsection
