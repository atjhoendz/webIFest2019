<div class="navbar-fixed">
    <nav id="navbar" class="transparent z-depth-0">
        <div class="nav-wrapper">
            <a data-menuanchor="home" href="#home" onclick="$('#header-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" class="brand-logo"><img src="{{url('/img/logo_nav.png')}}" class="logo_nav" alt="IFest"></a>
            <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="menu" class="right hide-on-med-and-down">
                <li data-menuanchor='about'><a href="#about" onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">About</a></li>
                <li data-menuanchor='talkshow'><a href="#talkshow" onclick="$('#talkshow-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Talkshow</a></li>
                <li data-menuanchor='competition'><a href="#competition" onclick="$('#competition-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Competition</a></li>
                <li data-menuanchor='semnas'><a href="#semnas" onclick="$('#semnas-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Seminar Nasional</a></li>
                <li data-menuanchor='expo'><a href="#semnas" onclick="$('#semnas-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Expo Startup IT</a></li>
                <li data-menuanchor='timeline'><a href="#timeline" onclick="$('#timeline-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Timeline</a></li>
                <li data-menuanchor='contact'><a href="#contact" onclick="$('#contact-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Contact</a></li>
                {{-- <li><button id="btnLogin" class="waves-effect waves-light btn-small blue btnMain">Login</button></li> --}}
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav z-depth-1" id="mobile-demo">
    <li data-menuanchor='about'><a href="#about" onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">About</a></li>
    <li data-menuanchor='talkshow'><a href="#talkshow" onclick="$('#talkshow-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Talkshow</a></li>
    <li data-menuanchor='competition'><a href="#competition" onclick="$('#competition-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Competition</a></li>
    <li data-menuanchor='semnas'><a href="#semnas" onclick="$('#semnas-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Seminar Nasional</a></li>
    <li data-menuanchor='expo'><a href="#semnas" onclick="$('#semnas-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Expo Startup IT</a></li>
    <li data-menuanchor='timeline'><a href="#timeline" onclick="$('#timeline-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Timeline</a></li>
    <li data-menuanchor='contact'><a href="#contact" onclick="$('#contact-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Contact</a></li>
</ul>