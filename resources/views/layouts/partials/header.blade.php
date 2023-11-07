<header>
    <h1>Administrador de Usuarios de Prueba</h1>

    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li><a href="{{route('usuarios.index')}}" class="{{request()->routeIs('usuarios.*') ? 'active' : ''}}">Usuarios</a>
            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
            </li>
        </ul>
    </nav>
</header>