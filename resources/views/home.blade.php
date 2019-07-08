<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! MaterializeCSS::include_full() !!}
    <title>IFest 2019</title>
    <link rel="icon" href="{{url('img/favicon-32x32.png')}}" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header>
        <div class="navbar-fixed">
            <nav id="navbar" class="z-depth-0">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img src="{{url('img/logo_nav.png')}}" class="logo_nav" alt="IFest2019"></a>
                    <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about">About</a></li>
                        <li><a href="#">Talkshow</a></li>
                        <li><a href="#">Competition</a></li>
                        <li><a href="#">Seminar</a></li>
                        <li><a href="#">IT Expo</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                    <ul class="sidenav" id="mobile-menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Talkshow</a></li>
                        <li><a href="#">Competition</a></li>
                        <li><a href="#">Seminar</a></li>
                        <li><a href="#">IT Expo</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div id="header-parallax" class="parallax-container">
            <div class="parallax">
                <img src="{{url('img/header.jpg')}}" alt="">
            </div>  
            <div class="container" id="header">
                <div class="row">
                    <div class="col m12 header-content">
                        <img id="flagheader" src="{{url('/img/Logo.png')}}" class="imglogo" alt="logoIFest">
                        {{-- <img src="{{url('/img/himatif.png')}}" class="imglogo" alt="logoHimatif"> --}}
                        <h2 class="text_shadow" style="margin-top:0">INFORMATICS FESTIVAL 2019</h2>
                        <h3 class="text_shadow" style="font-family:'MADE Evolve Sans EVO';">INNOVATE TO ELEVATE</h3>
                        {{-- <a href="#about"><button class="waves-effect waves-light btn-small light-blue btnMain_border">About</button></a> --}}
                        {{-- <button class="waves-effect waves-light btn-small light-blue btnMain">Login</button> --}}
                        <div class="contain-box">
                            <div class="container-scrolldown">
                                <div class="chevron"></div>
                                <div class="chevron"></div>
                                <div class="chevron"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col m6 center-align valign-wrapper">
                        <img src="{{url('/img/Logo.png')}}" class="logoAbout" alt="logoIFest">
                        {{-- <img src="{{url('/img/himatif.png')}}" class="logoBE" alt="logoHimatif"> --}}
                    </div>
                    <div class="col m6">
                        <p class="about-txt">
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;IFest atau Informatics Festival merupakan rangkaian acara IT tahunan yang diselenggarakan oleh <b>Himpunan Mahasiswa Teknik Informatika Universitas Padjadjaran</b> sejak tahun 2015.
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;Tahun ini IFest membawa tema <span style="font-style:italic; color:yellow;">"Boot Up the Nations with Tech Innovations to Conquer Industrial Revolution"</span>, dengan rangkain acara Talkshow, IFest Competition, Seminar Nasional, IT Expo dan ditutup dengan hiburan sebagai closing ceremonial.
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;Dengan diadakannya IFest ini diharapkan dapat mengembangkan wawasan pengetahuan masyarkat Indonesia di bidang teknologi serta memfasilitasi bibit unggul bangsa untuk saling berkompetisi menjadi yang terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="{{url('img/about.jpg')}}" alt=""></div>
        </div>

        <div class="section" id="talkshow">
            <div class="container talkshow_content">
                    <div class="row">
                        <h2 class="txtJudul">TALKSHOW</h2>
                        <div class="col m6">
                            <img class="responsive-img z-depth-3" src="{{url('img/img_talk.jpg')}}" alt="img_talks">
                        </div>
                        <div class="col m6 blue darken-4 descRangkaian">
                            <p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate consectetur quibusdam maxime molestias excepturi accusantium itaque dignissimos, id harum ipsum? Nulla rerum, praesentium corporis sed eos assumenda rem eligendi totam?</p>
                            <p class="yellow-text">8 September 2019</p>
                            <p>Bandung Creative Hub</p>
                        </div>
                        <a href="#" class="waves-effect waves-light btnRSVP btn">RSVP NOW <i class="material-icons">mail</i></a>
                    </div>
                </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="{{url('img/talkshow.jpg')}}" alt=""></div>
        </div>

        <div class="section" id="competition">
            <div class="container">
                <h2>Competition</h2>
                <div class="row">
                    <div class="col m4">
                        <div class="card pink small" id="intention_card">
                            <div class="card-image">
                                <img src="{{url('img/img_comp.jpg')}}" alt="" />
                                <span class="card-title"></span>
                            </div>
                            <div class="card-content">
                                <p>INTENTION APP Dev</p>
                            </div>
                            <div class="card-action">
                                <a href="#competition">Show more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m4">
                        <div class="card blue small" id="da_card">
                            <div class="card-image">
                                <img src="{{url('img/img_comp.jpg')}}" alt="" />
                                <span class="card-title"></span>
                            </div>
                            <div class="card-content">
                                <p>Data Analysis</p>
                            </div>
                            <div class="card-action">
                                <a href="#competition">Show more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m4">
                        <div class="card green small" id="ctf_card">
                            <div class="card-image">
                                <img src="{{url('img/img_comp.jpg')}}" alt="" />
                                <span class="card-title"></span>
                            </div>
                            <div class="card-content">
                                <p>Capture The Flag</p>
                            </div>
                            <div class="card-action">
                                <a href="#competition" id="ctf_action">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="{{url('img/competition.jpg')}}" alt=""></div>
        </div>

        <div class="section" id="semnas">
            <div class="container">
                <h1>Seminar Nasional</h1>
                <div class="row">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio minus consequuntur
                        perferendis. Rerum sit fuga natus sunt necessitatibus illum sapiente doloremque ipsa
                        exercitationem cumque minus, quod vero cum eaque!</p>
                </div>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="{{url('img/semnas.jpg')}}" alt=""></div>
        </div>

        <div class="section" id="expo">
            <div class="container">
                <h1>Expo IT</h1>
                <div class="row">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio minus consequuntur
                        perferendis. Rerum sit fuga natus sunt necessitatibus illum sapiente doloremque ipsa
                        exercitationem cumque minus, quod vero cum eaque!</p>
                </div>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="{{url('img/expo.jpg')}}" alt=""></div>
        </div>

        <div class="section indigo" id="gallery">
            <div class="carousel">
                <h1>Gallery of IFest</h1>
                <a class="carousel-item" href="#head"><img src="{{url('img/header.jpg')}}"></a>
                <a class="carousel-item" href="#about"><img src="{{url('img/about.jpg')}}"></a>
                <a class="carousel-item" href="#comp"><img src="{{url('img/competition.jpg')}}"></a>
                <a class="carousel-item" href="#semnas"><img src="{{url('img/semnas.jpg')}}"></a>
                <a class="carousel-item" href="#expo"><img src="{{url('img/expo.jpg')}}"></a>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="{{url('img/timeline.jpg')}}" alt=""></div>
        </div>
    </main>

    <footer class="page-footer blue darken-4">
        <div class="container">
            <img src="{{asset('img/logo_nav.png')}}" alt="logo_IFest" class="logoFooter">
            <div class="right">
                <img src="{{asset('img/himatif.png')}}" alt="logo_himatif" class="logoFooter">
                <img src="{{asset('img/unpad.png')}}" alt="logo_unpad" class="logoFooter">
            </div>
            <div class="row">
                <div class="col m6">
                    <p>
                        ig: ifestunpad <br>
                        line: @ifestunpad <br>
                        email: informaticsfest@gmail.com
                    </p>
                </div>
                <div class="col m6">
                    <p>
                        Himpunan Mahasiswa Teknik Informatika, Fakultas Matematika dan Ilmu Pengetahuan Alam, Universitas Padjadjaran, Jatinangor, Sumedang, Jawa Barat, Indonesia.
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                &copy IFest 2019 - HIMATIF FMIPA UNPAD
            </div>
        </div>
    </footer>

    <script src="{{url('js/home.js')}}"></script>
</body>
</html>