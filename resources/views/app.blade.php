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
        <link rel="icon" href="{{url('img/favicon-32x32.png')}}" type="image/png" sizes="32x32">
    </head>
    <body id="b_ifest19">
        @include('partials.navbar');
        <main id="fullpage">
            <div id="header-section" class="section" data-anchor='home'>
                <div class="container">
                    <div class="row">
                        <div class="col m12 header-content">
                            <img src="{{url('/img/Logo.png')}}" class="imglogo" alt="logoIFest">
                            {{-- <img src="{{url('/img/himatif.png')}}" class="imglogo" alt="logoHimatif"> --}}
                            <h2 class="text_shadow" style="margin-top:0">INFORMATICS FESTIVAL 2019</h2>
                            <h3 class="text_shadow" style="font-family:'MADE Evolve Sans EVO';">INNOVATE TO ELEVATE</h3>
                            <a href="#about"><button class="waves-effect waves-light btn-small light-blue btnMain_border">About</button></a>
                            {{-- <button class="waves-effect waves-light btn-small light-blue btnMain">Login</button> --}}
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

            <div id="competition-section" class="section" data-anchor='competition'>
                <div class="container">
                    <h2>Competition</h2>
                    <div class="row">
                        <div class="col m4">
                            <div class="card pink small" id="intention_card">
                                <div class="card-image">
                                    <img src="{{url('img/img_comp.jpg')}}" alt=""/>
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
                                    <img src="{{url('img/img_comp.jpg')}}" alt=""/>
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
                                    <img src="{{url('img/img_comp.jpg')}}" alt=""/>
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

            <div id="semnas-section" class="section" data-anchor='semnas'>
                <div class="container">
                    <h1>Seminar Nasional</h1>
                    <div class="row">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio minus consequuntur perferendis. Rerum sit fuga natus sunt necessitatibus illum sapiente doloremque ipsa exercitationem cumque minus, quod vero cum eaque!</p>
                    </div>
                </div>
            </div>

            <div id="expo-section" class="section" data-anchor='expo'>
                <div class="container">
                    <h1>Expo IT</h1>
                    <div class="row">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio minus consequuntur perferendis. Rerum sit fuga natus sunt necessitatibus illum sapiente doloremque ipsa exercitationem cumque minus, quod vero cum eaque!</p>
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
                    <h1>Our Sponsor</h1>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti similique, nesciunt rerum quo consectetur dolorum totam vel ea quis officiis minus ipsum quos eum veritatis dolor! Minima repellat ut eos!</p>
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
                <div class="row">
                    <div class="col m12 center-align">
                        <span>&copy IFest 2019 - HIMATIF FMIPA UNPAD</span>
                    </div>
                </div>
            </div>
        </main>

        {{-- <script src="{{asset('js/scrolloverflow.js')}}"></script> --}}
        <script src="{{asset('js/fullpage.min.js')}}"></script>
        <script src="{{asset('js/home.js')}}"></script>
        {{-- <script src="{{asset('js/animatescroll.min.js')}}"></script> --}}
        <script> var baseUrl = {!! json_encode(url('/')) !!}</script>
    </body>
</html>
