@extends('layouts.main')

@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css'
        integrity='sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="{{ asset('css/comic_details.css') }}">
@endsection

@section('tag')
    <div class="comic-thumb">
        <span class="thumb-text">
            COMIC BOOK
        </span>
        <img src="{{ $comic['thumb'] }}" alt="thumb">
        <span class="thumb-text">
            VIEW GALLERY
        </span>
    </div>
@endsection

@section('content')
    <div class="primary-bar"></div>
    <div class="container">
        <div class="wrapper">
            <div class="content-comic">
                <h1>{{ $comic['title'] }}</h1>
                <div class="buy">
                    <div class="buy-text">
                        <div class="p-container">
                            <p>U.S Price: <span>{{ $comic['price'] }}</span></p>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="check">
                            <a href="#" class="">Check Availablity
                                &#9660;</a>
                        </div>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="advertisement">
                <p>ADVERTISEMENT</p>
                <img src="{{ asset('images/adv.jpg') }}" alt="adv">
            </div>
        </div>
    </div>
    <div class="info-comic">
        <hr>
        <div class="container">
            <div class="talent-specs">
                <div class="talent-sec">
                    <h2>Talent</h2>
                    <hr>
                    <div class="content">
                        <p class="title">Art By:</p>
                        <p class="blue">
                            @forelse ($comic['artists'] as $artist)
                                {{ $artist }}{!! $loop->last ? '<span>.</span>' : '<span>, </span>' !!}
                            @empty
                                There isn't Artists
                            @endforelse
                        </p>
                    </div>
                    <hr>
                    <div class="content">
                        <p class="title">Written By:</p>
                        <p class="blue">
                            @forelse ($comic['writers'] as $writer)
                                {{ $writer }}{!! $loop->last ? '<span>.</span>' : '<span>, </span>' !!}
                            @empty
                                There isn't Writers
                            @endforelse
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="specs-sec">
                    <h2>Specs</h2>
                    <hr>
                    <div class="content">
                        <p class="title">Series</p>
                        <p class="blue">{{ $comic['series'] }}</p>
                    </div>
                    <hr>
                    <div class="content">
                        <p class="title">U.S. PRICE</p>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                    <hr>
                    <div class="content">
                        <p class="title">On Sale Date</p>
                        <p>{{ $comic['sale_date'] }}</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation prev">
        <a href="{{ route('comics.show', ['id' => $prev]) }}">
            <i class="fa-solid fa-angle-left fa-4x"></i>
        </a>
    </div>
    <div class="navigation next">
        <a href="{{ route('comics.show', ['id' => $next]) }}">
            <i class="fa-solid fa-angle-right fa-4x"></i>
        </a>
    </div>
@endsection
