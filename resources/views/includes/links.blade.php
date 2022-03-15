@php
$links = config('links');
@endphp


<section id="links">
    <div class="container d-flex">
        @foreach ($links as $link)
            <div class="item-link">
                <img src="{{ asset("images/$link[src]") }}" alt="" />
                <a href="#">
                    <p>{{ $link['text'] }}</p>
                </a>
            </div>
        @endforeach
    </div>
</section>
