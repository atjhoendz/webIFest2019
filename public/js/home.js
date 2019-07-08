$(document).ready(function(){
    
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.carousel').carousel();

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        $('#navbar').toggleClass('z-depth-0', scroll < $('#flagheader').offset().top);
        $('#navbar').toggleClass('z-depth-3', scroll >= $('#flagheader').offset().top);
        $('#navbar').toggleClass('bg_navbar', scroll >= $('#flagheader').offset().top);
        // $('#navbar').addClass('z-depth-0', scroll == 0);
    });


    // var myFullpage = new fullpage('#fullpage', {
    //     // navigation: true,
    //     responsive:700,
    //     menu: '#menu',
    //     // scrollOverflow:true,
    //     // navigationPosition:'right',
    //     // anchors: ['home', 'about', 'talkshow', 'competition', 'semnas', 'timeline', 'contact'],
    //     // parallax: true,
    //     // autoScroll:true,
    //     onLeave: function(origin, destination, direction){
    //         if(origin.anchor == 'home' && direction == 'down'){
    //             $('#navbar').removeClass('transparent');
    //             $('#navbar').removeClass('z-depth-0');
    //             $('#navbar').addClass('z-depth-1');
    //             $('#navbar').addClass('bg_navbar');
    //         }else if(origin.anchor == 'about' && direction == 'up'){
    //             $('#navbar').removeClass('z-depth-1');
    //             $('#navbar').addClass('z-depth-0');
    //             $('#navbar').removeClass('bg_navbar');
    //             $('#navbar').addClass('transparent');
    //         }else if(destination.anchor == 'sponsormedpart' && origin.anchor == 'contact'){
    //             $('#sponsormedpart-section').addClass('addPadding_top');
    //         }else if(destination.anchor == 'about' && origin.anchor == 'talkshow'){
    //             $('#about-section').addClass('addPadding_top');
    //         }else if(destination.anchor == 'talkshow' && origin.anchor == 'competition'){
    //             $('#talkshow-section').addClass('addPadding_top');
    //         }
    //         else{
    //             $('#sponsormedpart-section').removeClass('addPadding_top');
    //             $('about-section').removeClass('addPadding_top');
    //             $('#talkshow-section').removeClass('addPadding_top');
    //         }
    //     },
    //     afterLoad: function(origin, destination, direction){
    //         if(destination.anchor == 'home'){
    //             $('#navbar').removeClass('z-depth-1');
    //             $('#navbar').addClass('z-depth-0');
    //             $('#navbar').removeClass('bg_navbar');
    //             $('#navbar').addClass('transparent');
    //         }else if(destination.anchor == 'sponsormedpart' && origin.anchor == 'contact'){
    //             $('#sponsormedpart-section').addClass('addPadding_top');
    //         }else{
    //             $('#sponsormedpart-section').removeClass('addPadding_top');
    //         }
    //     }
    // });
    // window.sr = ScrollReveal({reset:true});
    // sr.reveal('.animleft', {
    //     duration: 2000,
    //     origin:'left',
    //     distance:'200px'
    // });
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
    
    // $('#btnLogin').on('click', function(){
    //     location.replace(baseUrl + '/login');
    // });
    
    // $('#ctf_action').on('click', function(){
    //     $('.card').css("height", "210px");
    // });
});