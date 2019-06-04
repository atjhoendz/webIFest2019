<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {!! MaterializeCSS::include_full() !!}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        {{-- <script src="https://unpkg.com/scrollreveal"></script> --}}
        
        <title>{{ config('app.name') }}</title>
    </head>
    <body id="b_ifest19">
        <div class="navbar-fixed">
            <nav id="navbar" class="transparent z-depth-0">
                <div class="nav-wrapper">
                    <a data-menuanchor="home" href="#home" onclick="$('#header-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" class="brand-logo"><img src="{{url('/img/logo_nav.png')}}" class="logo_nav" alt="IFest"></a>
                    <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="menu" class="right hide-on-med-and-down">
                        <li data-menuanchor='about'><a href="#about" onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">About</a></li>
                        <li data-menuanchor='talkshow'><a href="#talkshow" onclick="$('#talkshow-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Talkshow</a></li>
                        <li data-menuanchor='competition'><a href="#competition" onclick="$('#competition-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Competition</a></li>
                        <li data-menuanchor='semnas'><a href="#semnas" onclick="$('#semnas-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Seminar & IT Expo</a></li>
                        <li data-menuanchor='timeline'><a href="#timeline" onclick="$('#timeline-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Timeline</a></li>
                        <li data-menuanchor='contact'><a href="#contact" onclick="$('#contact-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Contact</a></li>
                        <li><button id="btnLogin" class="waves-effect waves-light btn-small blue btnMain">Login</button></li>
                    </ul>
                </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="#about-section" onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">About</a></li>
            <li><a href="#talkshow-section" onclick="$('#talkshow-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Talkshow</a></li>
            <li><a href="#competition-section" onclick="$('#competition-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Competition</a></li>
            <li><a href="#semnas-section" onclick="$('#semnas-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Seminar & IT Expo</a></li>
            <li><a href="#timeline-section" onclick="$('#timeline-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Timeline</a></li>
            <li><a href="#contact-section" onclick="$('#contact-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Contact</a></li>
            <li><button id="btnLogin" class="waves-effect waves-light btn-small blue btnMain">Login</button></li>
        </ul>

        <div id="fullpage">
            <div id="header-section" class="section" data-anchor='home'>
                <div class="container">
                    <div class="row">
                        <div class="col s12 header-content">
                            <img src="{{url('/img/Logo.png')}}" class="imglogo" alt="logoIFest">
                            {{-- <img src="{{url('/img/himatif.png')}}" class="imglogo" alt="logoHimatif"> --}}
                            <h2 class="text_shadow" style="margin-top:0">INFORMATICS FESTIVAL 2019</h2>
                            <h3 class="text_shadow" style="font-family:'MADE Evolve Sans EVO';">INNOVATE TO ELEVATE</h3>
                            <a href="#about"><button class="waves-effect waves-light btn-small light-blue btnMain_border">About</button></a>
                            <button class="waves-effect waves-light btn-small light-blue btnMain">Login</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="about-section" class="section" data-anchor='about'>
                <div class="container">
                    <div class="row">
                        <div class="col m6 center-align">
                            <img src="{{url('/img/Logo.png')}}" class="logoAbout" alt="logoIFest">
                            {{-- <img src="{{url('/img/himatif.png')}}" class="logoBE" alt="logoHimatif"> --}}
                        </div>
                        <div class="col m6">
                            <p>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;IFest atau Informatics Festival merupakan rangkaian acara IT tahunan yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika Universitas Padjadjaran sejak tahun 2015.
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Tahun ini IFest membawa tema <span style="font-style:italic; color:yellow;">"Boot Up the Nations with Tech Innovations to Conquer Industrial Revolution"</span>, dengan rangkain acara Talkshow, IFest Competition, Seminar Nasional, IT Expo dan ditutup dengan hiburan sebagai closing ceremonial.
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Dengan diadakannya IFest ini diharapkan dapat mengembangkan wawasan pengetahuan masyarkat Indonesia di bidang teknologi serta memfasilitasi bibit unggul bangsa untuk saling berkompetisi menjadi yang terbaik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="talkshow-section" class="section" data-anchor='talkshow'>
                <div class="container talkshow_content">
                    <div class="row">
                        <div class="col s12">
                            <h2>Talkshow</h2>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate consectetur quibusdam maxime molestias excepturi accusantium itaque dignissimos, id harum ipsum? Nulla rerum, praesentium corporis sed eos assumenda rem eligendi totam?
                        </div>
                    </div>
                </div>
            </div>

            <div id="competition-section" class="section" data-anchor='competition'>
                <div class="container">
                    <div class="row">
                        <h2>Competition</h2>
                        <div class="col s6">
                            <div class="card blue accent-4">
                                <div class="card-content white-text">
                                    <span class="card-title"></span>
                                    <p>Competition</p>
                                </div>
                            </div>
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"></span>
                                    <p>Competition</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"></span>
                                    <p>Competition</p>
                                </div>
                            </div>
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"></span>
                                    <p>Competition</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="semnas-section" class="section" data-anchor='semnas'>
                <div class="container">
                    <div class="row">
                        <h1>Seminar Nasional</h1>
                    </div>
                </div>
            </div>

            <div id="timeline-section" class="section" data-anchor='timeline'>
                <div class="container">
                    <div class="row">
                        <h1>Timeline</h1>
                    </div>
                </div>
            </div>

            <div id="sponsormedpart-section" class="section" data-anchor="sponsormedpart">
                <div class="container">
                    <div class="row">
                        <h1>Our Sponsor</h1>
                    </div>
                </div>
            </div>

            <div id="contact-section" class="section fp-auto-height-responsive" data-anchor="contact">
                <div class="container">
                    <img src="{{asset('img/logo_nav.png')}}" alt="logo_IFest" class="logoFooter">
                    <div class="right">
                        <img src="{{asset('img/himatif.png')}}" alt="logo_himatif" class="logoFooter">
                        <img src="{{asset('img/unpad.png')}}" alt="logo_unpad" class="logoFooter">
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <p>
                                ig: ifestunpad <br>
                                line: @ifestunpad <br>
                                email: informaticsfest@gmail.com
                            </p>
                        </div>
                        <div class="col s6">
                            (Alamat)Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt velit quod aperiam repellendus voluptates quisquam omnis ipsum vitae placeat facilis consectetur quidem excepturi, sint, at ipsam possimus sed quibusdam. Perferendis.
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <span>&copy IFest 2019 - HIMATIF FMIPA UNPAD</span>
                </div>
            </div>
        </div>

        {{-- <script src="{{asset('js/scrolloverflow.js')}}"></script> --}}
        <script src="{{asset('js/fullpage.min.js')}}"></script>
        <script src="{{asset('js/home.js')}}"></script>
        {{-- <script src="{{asset('js/animatescroll.min.js')}}"></script> --}}
        <script> var baseUrl = {!! json_encode(url('/')) !!}</script>
    </body>
</html>
