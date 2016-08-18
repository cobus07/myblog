;(function($){
    $.fn.extend({
        layer: function(){
            this.on('click',function(){
                //var index = $(this).index();
                //$container = $("<div id='container'><div class='over-lay'></div></div>");
                //$container.remove();
                $container = $("<div id='container'></div>");
                $overLay = $('<div class="over-lay"></div>');
                $container.append($overLay);

                $overLay.on('click',function(){
                    $container.fadeOut(function(){$(this).remove()});
                });
                var iWidth = this.getAttribute('data-width')>=600?600:this.getAttribute('data-width');
                $div = $("<div class='layer-img'><div class='loading'>loading</div></div>").css({
                    width: iWidth,
                    height: this.getAttribute("data-width"),
                    left: ($(window).width()-iWidth)/2,
                    top: ($(window).height()-this.getAttribute("data-height"))/2
                }).appendTo($container);
                $container.fadeIn().appendTo(document.body);
                var oImg = new Image();
                oImg.onload = function(){
                    $div.children(".loading").hide();
                    this.width = iWidth;
                    $div.append(oImg);
                };
                oImg.src = this.getAttribute("data-src");
                //oImg.src = now[index];
                //oImg.src = $(this).data("src");
                //oImg.src = $(this).attr('data-src');
                //oImg.src =  "http://localhost:88/myblog9/imgs/port-pic.jpg";

            });
        }
        //alert: function(){
            //var $box = $('<div class="window-box">'+content+'</div>');
            //var $btn = $('<button class="close">确定</button>').on('click',function(){
            //    handler && handler(); //注意这里的写法
            //    $box.remove();
            //});
            //$box.append($btn).appendTo(document.body);
        //    var $overLay = $('<div class="over-lay"></div>').on('click',function(){
        //        $overLay.remove();
        //    });
        //
        //}
        //close: function(){
        //    $('#container .over-lay').on('click',function(){
        //        $('#container').animate({
        //            'opacity': 0
        //        },function(){
        //            $('#container').remove();
        //        })
        //    })
        //}
        //close: function(){
        //    $gone = $(this.parents('#container').children('.over-lay'));
        //        $gone.on('click',function(){
        //        $(this).parent('#container').remove();
        //    })
        //}
    });
})(jQuery);