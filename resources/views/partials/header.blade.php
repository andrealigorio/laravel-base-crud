<header>
    <div class="logo">
        <img src="{{asset('img/logo-myShop.png')}}" alt="Logo My Shop">
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li><a class="{{ Request::route()->getName() == 'pagina-home' ? 'active' : null }}" href="/">Home</a></li>
                <li><a class="{{ Request::route()->getName() == 'dresses.index' || Request::route()->getName() == 'dresses.show' ? 'active' : null }}" href="/dresses">Dresses</a></li>
                <li><a class="{{ Request::route()->getName() == 'pagina-news' ? 'active' : null }}" href="/news">News</a></li>
            </ul>
        </nav>
        <i class="fas fa-shopping-cart"></i>
    </div>
</header>