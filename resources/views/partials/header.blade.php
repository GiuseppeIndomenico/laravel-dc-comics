<header class="bg-light position-relative">

    <nav class="container d-flex justify-content-between">
        <div class="logo-header">
            <img class="img-fluid" src="/img/dc-logo.png" alt="logo">
        </div>
        <ul class="d-flex align-items-center justify-content-center m-0 ul-header">
            @foreach ($navs as $nav)
                <li class="p-3 d-flex align-items-center {{ Route::currentRouteName() == 'comics' ? 'active' : '' }}">
                    <a class="fw-semibold" href="{{ route('comics') }}">{{ $nav['title'] }}</a>
                </li>
            @endforeach
        </ul>

    </nav>
    <div class="jumbo">
        <img src="\img\jumbotron.jpg" alt="jumbo">
    </div>
    <span class="text-bg-primary py-2 px-4 fw-semibold gi-pos">CURRENT SERIES</span>
</header>
