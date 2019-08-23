$(document).ready(function(){
    
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
    $('.dropdown-trigger').dropdown({
        hover: true,
    });

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        $('#navbar').toggleClass('z-depth-0', scroll < $('#flagheader').offset().top);
        $('#navbar').toggleClass('z-depth-3', scroll >= $('#flagheader').offset().top);
        $('#navbar').toggleClass('bg_navbar', scroll >= $('#flagheader').offset().top);
        // $('#navbar').addClass('z-depth-0', scroll == 0);
    });
});