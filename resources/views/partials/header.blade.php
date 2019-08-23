<nav id="navbar" class="z-depth-0">
    <div class="nav-wrapper">
        <a href="{{url('/')}}" class="brand-logo"><img src="{{url('img/logo_nav.png')}}" class="logo_nav"
                alt="IFest2019"></a>
        <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{url('/#about')}}">About</a></li>
            <li><a href="{{url('/talkshow')}}">Talkshow</a></li>
            <li><a class="dropdown-trigger" data-target="listCompt" href="#">Competition</a></li>
            <li><a href="{{url('/semnas')}}">Seminar</a></li>
            <li><a href="{{url('/expo')}}">IT Expo</a></li>
        </ul>
        <ul class="sidenav" id="mobile-menu">
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/talkshow')}}">Talkshow</a></li>
            <li><a href="{{url('/competition')}}">Competition</a></li>
            <li><a href="{{url('/semnas')}}">Seminar</a></li>
            <li><a href="{{url('/expo')}}">IT Expo</a></li>
        </ul>
        <ul id="listCompt" class="dropdown-content">
            <li><a href="{{url('/competition/dac')}}">Data Analysis</a></li>
            <li><a href="{{url('/competition/intention')}}">Intention App Dev</a></li>
            <li><a href="{{url('/competition/ctf')}}">Capture The Flag</a></li>
        </ul>
    </div>
</nav>