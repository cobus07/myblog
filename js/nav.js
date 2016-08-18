/**
 * Created by 123 on 2016/1/3.
 */

define(['jquery'], function($) {
    return function nav() {
        var $nav = $('#nav'),
        $navClose = $('.nav-close', $nav),
        $navMenu = $('.nav-menu', $nav),
        $header = $('#header'),
        $navShow = $('.nav-show', $header);
        $navShow.on('click', function () {
            $nav.animate({top: 0});
        });
        $navClose.on('click', function () {
            $nav.animate({top: -192});
        });
        //导航栏字体悬浮变色
        $('#nav li').children().hover(function () {
        $(this).css({
            'color': 'blue'
            });
        }, function () {
            $(this).css({
            'color': '#fff'
             });
        });
    }
});