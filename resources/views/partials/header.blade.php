<header>
    <div class="container d-flex justify-content-between align-content-center py-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
        <ul class="d-flex list-item-none align-items-center text-uppercase">
            @foreach ($navbar as $button)
                <li class="p-2">
                    <a href="{{ $button['url'] }}">{{ $button['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="header-bottom">
    </div>
</header>

<style lang="scss" scoped>
    .header-bottom {
        width: 100%;
        height: 300px;
        background-image: url({{ Vite::asset('resources/img/jumbotron.jpg') }});
        background-size: cover;
    }

    header li {
        list-style: none;
    }

    header a {
        text-decoration: none;
        color: grey
    }

    header a:hover {
        color: #0082F9;
        padding-bottom: 56px;
        border-bottom: 10px solid #0082F9;
    }
</style>
