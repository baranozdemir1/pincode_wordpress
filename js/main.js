//FEATURED HOVER
$(document).ready(function(){
      $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );
});

// init Infinite Scroll
$('.article-feed').infiniteScroll({
    path: '.pagination__next',
    append: '.article',
    status: '.scroller-status',
    hideNav: '.pagination',
});
