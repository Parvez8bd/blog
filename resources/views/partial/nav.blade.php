<nav>
    <ul>
        <li class="{{ ($item == 'home') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
        <li class="{{ ($item == 'about') ? 'active' : '' }}"><a href="{{ route('blog.about') }}">About</a></li>
    </ul>
</nav>