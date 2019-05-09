$(document).ready(function(){
    $('.sidenav').sidenav();
    new fullpage('#fullpage', {
        navigation: true,
        responsive:700,
        navigationPosition:'right',
        // anchors: ['home', 'about', 'talkshow', 'competition', 'semnas', 'timeline', 'contact'],
        // parallax: true,
        // autoScroll:true,
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
    })
});