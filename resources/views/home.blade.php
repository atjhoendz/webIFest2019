@extends('layouts.home')

@section('main')
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
    <div class="section scrollspy" id="about">
        <div class="container">
            <div class="row valign-wrapper">
                <div class="col m6">
                    <img src="{{url('/img/Logo.png')}}" class="logoAbout" alt="logoIFest">
                </div>
                <div class="col m6">
                    <p class="about-txt">
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;IFest atau Informatics Festival merupakan rangkaian acara IT tahunan
                        yang diselenggarakan oleh <b>Himpunan Mahasiswa Teknik Informatika Universitas Padjadjaran</b> sejak
                        tahun 2015.
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;Tahun ini IFest membawa tema <span
                            class="yellow-text">"Boot Up the Nations with Tech Innovations to Conquer
                            Industrial Revolution"</span>, dengan rangkaian acara Talkshow, IFest Competition, Seminar
                        Nasional, IT Expo dan ditutup dengan hiburan sebagai closing ceremonial.
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;Dengan diadakannya IFest ini diharapkan dapat mengembangkan wawasan
                        pengetahuan masyarkat Indonesia di bidang teknologi serta memfasilitasi bibit unggul bangsa untuk
                        saling berkompetisi menjadi yang terbaik.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="{{url('img/about.jpg')}}" alt=""></div>
    </div>

    <div class="section scrollspy" id="talkshow">
        <div class="contentRangkaian">
            <div class="row">
                <div class="col m7 descWrapper">
                    <h2 class="txtJudul">TALKSHOW</h2>
                    <h6 style="padding-top=0px">Collaborating with <br> Developer Circles Bandung</h6>
                    <p class="descRangkaian">Talkshow merupakan event pembuka rangkaian IFest 2019 yang mengundang narasumber berkompeten untuk memberikan wawasan baru dengan topik <span class="yellow-text">"Why Data is So Important"</span> sebagai pengenalan Big Data.</p>
                    <a href="{{url('/talkshow')}}" class="waves-effect waves-light btnRSVP btn btnDetail1">Show Detail</a>
                </div>
                <div class="col m5">
                    <img src="{{url('img/img_talk.jpg')}}" class="responsive-img" alt="img_talk">
                </div>
                <a href="{{url('/talkshow')}}" class="waves-effect waves-light btnRSVP btn btnDetail2">Show Detail</a>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="{{url('img/talkshow.jpg')}}" alt=""></div>
    </div>

    <div class="section scrollspy" id="competition">
        <div class="container">
            <h2 class="txtJudul">COMPETITION</h2>
            <div class="horizontal-scroll-wrapper">
                <div class="horizontal-scroll-content">
                    <div class="card pink small" id="intention_card">
                        <div class="card-image">
                            <img src="{{url('img/img_comp.jpg')}}" alt="" />
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p>INTENTION APP Dev</p>
                        </div>
                        <div class="card-action">
                            <a href="{{url('/competition/intention')}}">Show more</a>
                        </div>
                    </div>
                </div>
                <div class="horizontal-scroll-content">
                    <div class="card blue small" id="da_card">
                        <div class="card-image">
                            <img src="{{url('img/img_comp.jpg')}}" alt="" />
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p>Data Analysis Competition</p>
                        </div>
                        <div class="card-action">
                            <a href="{{url('/competition/dac')}}">Show more</a>
                        </div>
                    </div>
                </div>
                <div class="horizontal-scroll-content">
                    <div class="card green small" id="ctf_card">
                        <div class="card-image">
                            <img src="{{url('img/img_comp.jpg')}}" alt="" />
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p>Capture The Flag</p>
                        </div>
                        <div class="card-action">
                            <a href="{{url('/competition/ctf')}}" id="ctf_action">Show more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="{{url('img/competition.jpg')}}" alt=""></div>
    </div>

    <div class="section scrollspy" id="semnas">
        <div class="contentRangkaian">
            <div class="row">
                <h1 class="txtJudul btnDetail2">SEMINAR NASIONAL</h1>
                <div class="col m5">
                    <img src="{{url('img/img_seminar.jpg')}}" alt="img_seminar" class="responsive-img">
                </div>
                <div class="col m7 descWrapper">
                    <h1 class="txtJudul btnDetail1">SEMINAR NASIONAL</h1>
                    <p class="descRangkaian">Seminar Nasional Informatika (Semnas) adalah salah satu rangkaian IFest 2019 dengan membawakan tema <span class="yellow-text">'The Role of Big Data Analytics in Industry Revolution'</span> sebagai lanjutan dari rangkaian talkshow yang akan membahas lebih dalam dengan pemateri ahli dibidangnya.</p>
                    <a href="{{url('/semnas')}}" class="waves-effect waves-light btnRSVP btn">Show Detail</a>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="{{url('img/semnas.jpg')}}" alt=""></div>
    </div>

    <div class="section scrollspy" id="expo">
        <div class="contentRangkaian">
            <div class="row">
                <div class="col m7 descWrapper">
                    <h1 class="txtJudul">IT EXPO</h1>
                    <p class="descRangkaian">Expo IFest 2019 Adalah salah satu rangkaian IFest 2019 yang menghadirkan puluhan startup dari berbagai
                    macam industri kreatif, mahasiswa, komunitas, dan entrepreneur yang akan memperkenalkan produk, karya,
                    dan inovasi terbarunya dalam bidang teknologi.</p>
                    <a href="{{url('/expo')}}" class="waves-effect waves-light btnRSVP btn btnDetail1">Show Detail</a>
                </div>
                <div class="col m5">
                    <img src="{{url('/img/img_expo.jpg')}}" alt="img_expo" class="responsive-img">
                </div>
                <a href="{{url('/expo')}}" class="waves-effect waves-light btnRSVP btn btnDetail2">Show Detail</a>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="{{url('img/expo.jpg')}}" alt=""></div>
    </div>

    <div class="section scrollspy indigo contentRangkaian" id="gallery">
        <div class="carousel">
            <h1 class="txtJudul">Gallery of IFest</h1>
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

    <div class="section" id="sponsor">
        <div class="container">
            <h1>Sponsor</h1>
            <div class="sponsorXL">
                <a href="#!"><img src="{{url('img/DqLab.png')}}" alt="dqlab_logo"></a>
                <a href="#!"><img src="{{url('img/idcloudhost.png')}}" alt="idcloudhost_logo"></a>
                <a href="#!"><img src="{{url('img/dewaweb.png')}}" alt="dewaweb_logo"></a>
            </div>
            <div class="sponsorM">
                <a href="#!"><img src="{{url('img/dicoding.png')}}" alt="dicoding_logo"></a>
            </div>
            <div class="video-container">
                <iframe width="500" height="255" src="https://www.youtube.com/embed/KgJDkyeNYSc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="{{url('img/sponsormedpart.jpg')}}" alt=""></div>
    </div>
@endsection