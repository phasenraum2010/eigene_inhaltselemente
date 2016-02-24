/*
 Eigene Inhaltselemente
 */
var $carousel = $('#carousel-id');
$carousel.carousel(
    interval: 10000;
);
var handled=false;
var itemclicked="";
$carousel.bind('slide.bs.carousel', function (e) {
    var current=$(e.target).find('.item.active');
    var indx=$(current).index();
    if((indx+2)>$('.carousel-indicators li').length) {
        indx = -1;
    }
    if(!handled){
        $('.carousel-indicators li').removeClass('active');
        $('.carousel-indicators li:nth-child('+(indx+2)+')').addClass('active');
    } else {
        handled=!handled;
    }
});

$(".carousel-indicators li").on('click',function(){
    $(this).addClass('active').siblings().removeClass('active');
    handled=true;
});