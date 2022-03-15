@php
$menu_items = config('menu_items');
@endphp


<header>
    <div class="container">
        <div class="nav-container">
            <figure>
                <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" />
            </figure>
            <nav>
                <ul>
                    @foreach ($menu_items as $item)
                        <li>
                            <a href="{{-- {{ route($item['route']) }} --}}#">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
