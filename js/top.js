/**
 * Created by 123 on 2015/12/28.
 */
define(['jquery'],function($){
        return function top() {
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 100) {
                    $("#to-top").fadeIn(1000);
                }
                else {
                    $("#to-top").fadeOut(1000);
                }
            });
            $("#to-top").click(function () {
                $('body,html').animate({scrollTop: 0}, 500);
                return false;
            });
        }
});