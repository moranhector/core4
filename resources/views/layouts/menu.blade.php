





<li class="nav-item">
    <a href="{{ route('historialoperaciones.index') }}"
       class="nav-link {{ Request::is('historialoperaciones*') ? 'active' : '' }}">
        <p>Historialoperaciones</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ url('historial/graficar/0') }}"
       class="nav-link {{ Request::is('historialoperaciones*') ? 'active' : '' }}">
        <p>Expedientes 2022</p>
    </a>
</li>

Graficos