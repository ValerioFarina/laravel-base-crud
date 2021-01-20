<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::route()->getName() == 'homepage' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item  {{ Request::route()->getName() == 'products.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('products.index') }}">Prodotti</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
