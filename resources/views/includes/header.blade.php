@php
$menu_items = config('menu_items');
@endphp

<div class="top-header">
    <div class="container">
        <a href="#">DC POWER&#8482;VISA&#174;</a>
        <a href="#">ADDITIONAL DC SITES
            &#9660;</a>
    </div>
</div>
<header>
    <div class="container">
        <div class="nav-container">
            <a href="{{ url('/') }}">
                <figure>
                    <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" />
                </figure>
            </a>
            <nav>
                <ul>
                    @foreach ($menu_items as $item)
                        <li>
                            <a class="{{ request()->routeIs($item['route']) ? 'active' : '' }}
                                {{ (Request::is('comics/*') ? $loop->index == 1 : '') ? 'active' : '' }}"
                                href="{{ route($item['route']) }}">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <input class="icon" type="text" placeholder="Search">
        </div>
    </div>
</header>
