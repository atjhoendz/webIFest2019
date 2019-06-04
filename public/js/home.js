$(document).ready(function(){
    $('.sidenav').sidenav();
    var myFullpage = new fullpage('#fullpage', {
        // navigation: true,
        responsive:700,
        menu: '#menu',
        // scrollOverflow:true,
        // navigationPosition:'right',
        // anchors: ['home', 'about', 'talkshow', 'competition', 'semnas', 'timeline', 'contact'],
        // parallax: true,
        // autoScroll:true,
        onLeave: function(origin, destination, direction){
            if(origin.anchor == 'home' && direction == 'down'){
                $('#navbar').removeClass('transparent');
                $('#navbar').removeClass('z-depth-0');
                $('#navbar').addClass('z-depth-1');
                $('#navbar').addClass('bg_navbar');
            }else if(origin.anchor == 'about' && direction == 'up'){
                $('#navbar').removeClass('z-depth-1');
                $('#navbar').addClass('z-depth-0');
                $('#navbar').removeClass('bg_navbar');
                $('#navbar').addClass('transparent');
            }else if(destination.anchor == 'sponsormedpart' && origin.anchor == 'contact'){
                $('#sponsormedpart-section').addClass('addPadding_top');
            }else if(destination.anchor == 'about' && origin.anchor == 'talkshow'){
                $('#about-section').addClass('addPadding_top');
            }else if(destination.anchor == 'talkshow' && origin.anchor == 'competition'){
                $('#talkshow-section').addClass('addPadding_top');
            }
            else{
                $('#sponsormedpart-section').removeClass('addPadding_top');
                $('about-section').removeClass('addPadding_top');
                $('#talkshow-section').removeClass('addPadding_top');
            }
        },
        afterLoad: function(origin, destination, direction){
            if(destination.anchor == 'home'){
                $('#navbar').removeClass('z-depth-1');
                $('#navbar').addClass('z-depth-0');
                $('#navbar').removeClass('bg_navbar');
                $('#navbar').addClass('transparent');
            }else if(destination.anchor == 'sponsormedpart' && origin.anchor == 'contact'){
                $('#sponsormedpart-section').addClass('addPadding_top');
            }else{
                $('#sponsormedpart-section').removeClass('addPadding_top');
            }
        }
    });
    window.sr = ScrollReveal({reset:true});
    sr.reveal('.animleft', {
        duration: 2000,
        origin:'left',
        distance:'200px'
    });
    // sr.reveal('#about-section', {
    //     duration: 2000,
    //     origin:'bottom',
    //     distance:'200px'
    // });
    // sr.reveal('#talkshow-section', {
    //     duration: 2000,
    //     origin:'bottom',
    //     distance:'200px'
    // });
    // sr.reveal('#semnas-section', {
    //     duration: 2000,
    //     origin:'bottom',
    //     distance:'200px'
    // });
    // sr.reveal('#competition-section', {
    //     duration: 2000,
    //     origin:'bottom',
    //     distance:'200px'
    // });
    // sr.reveal('#timeline-section', {
    //     duration: 2000,
    //     origin:'bottom',
    //     distance:'200px'
    // });
    // sr.reveal('#contact-section', {
    //     duration: 2000,
    //     origin:'bottom',
    //     distance:'200px'
    // });
    
    $('#btnLogin').on('click', function(){
        location.replace(baseUrl + '/login');
    });
    // Change color navbar onscroll
    // var scroll_start = 0;
    // var startchange = $('#about-section');
    // var offset = startchange.offset();
    // if(startchange.length){
    //     alert('a');
    //     $(window).scroll(function(){
    //         alert('scroll');
    //         scroll_start = $(this).scrollTop();
    //         if(scroll_start > offset.top){
    //             $('#navbar').removeClass('transparent');
    //             $('#navbar').addClass('blue');
    //         }else{
    //             $('#navbar').removeClass('blue');
    //             $('#navbar').addClass('transparent');
    //         }
    //     });
    // }
});