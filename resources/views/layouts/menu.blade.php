<li class="nav-item">
    <a href="{{ route('schedules.index') }}"
       class="nav-link {{ Request::is('schedules*') ? 'active' : '' }}">
        <p>Schedules</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


