@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/comic_details.css') }}">
@endsection

@section('tag')
    <div class="comic-thumb">
        <span class="thumb-text">
            COMIC BOOK
        </span>
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX"
            alt="thumb">
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
                <h1>Action Comics #1000: The Deluxe Edition</h1>
                <div class="buy">
                    <div class="buy-text">
                        <div class="p-container">
                            <p>U.S Price: <span>$19.99</span></p>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="check">
                            <a href="#" class="">Check Availablity
                                &#9660;</a>
                        </div>
                    </div>
                </div>
                <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing
                    comic that won raves when it hit comics shops in April! This hardcover includes all the stories from
                    that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action
                    Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee
                    for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by
                    Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories
                    Action Comics #1 and 2 from 1938!</p>
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
            ciao
        </div>
    </div>
@endsection
