$(window).scroll(
    {
        previousTop: 0
    }, 
   
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
        $(".sidebar em").text("Up");
        $(".navbar-menu").show();
    } else {
        $(".sidebar em").text("Down");
        $(".navbar-menu").hide();
    }
    this.previousTop = currentTop;
});