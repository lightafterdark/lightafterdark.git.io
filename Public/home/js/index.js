webpackJsonp([3], {
    0 : function(n, t, e) {
        "use strict";
        var i = e(2),
        o = e(21);
        e(1),
        e(9);
        var a = i.common.validate(),
        c = window.location.href;
        8 >= 0 ? (i.common.navActive(), i.common.fixedSide(), o.index.tab(), o.index.banner()) : i.common.go()
    },
    9 : function(n, t) {},
    21 : function(n, t, e) { (function(n) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var e = {
                tab: function() {
                    var t = n("#hotRecommend ul.hot-recommend-nav li"),
                    e = n("#hotRecommend .hot-recommend-content"),
                    i = n("#hotRecommend .active-line"),
                    o = t.width(),
                    a = e.find(".list").width(),
                    c = e.width() * e.find(".list").length;
                    e.css({
                        width: c + "px"
                    }),
                    i.css({
                        width: o + "px"
                    }),
                    t.on("click",
                    function() {
                        var c = n(this).index();
                        t.removeClass("active"),
                        n(this).addClass("active"),
                        i.stop().animate({
                            left: o * c
                        },
                        800),
                        e.stop().animate({
                            left: -(c * a)
                        },
                        1e3)
                    })
                },
                banner: function() {
                    function t() {
                        c = setInterval(function() {
                            a++,
                            a %= i.length,
                            o.stop().animate({
                                marginTop: 60 * a + "px"
                            },
                            600),
                            i.stop().animate({
                                opacity: 0,
                                zIndex: 1,
                                display: "none"
                            },
                            500),
                            i.eq(a).stop().animate({
                                opacity: 1,
                                zIndex: 44,
                                display: "block"
                            },
                            500)
                        },
                        3e3)
                    }
                    var e = n(".switch-btn-box ul li"),
                    i = n(".banner-left .content ul li"),
                    o = n(".switch-btn-box .hover-bg"),
                    a = 0,
                    c = null;
                    i.eq(0).css({
                        zIndex: 44
                    }),
                    e.hover(function() {
                        clearInterval(c);
                        var t = n(this).index();
                        o.stop().animate({
                            marginTop: 60 * t + "px"
                        },
                        600),
                        i.stop().animate({
                            opacity: 0,
                            zIndex: 1,
                            display: "none"
                        },
                        300),
                        i.eq(t).stop().animate({
                            opacity: 1,
                            zIndex: 44,
                            display: "block"
                        },
                        300),
                        a = t
                    },
                    function() {
                        t()
                    }),
                    t()
                }
            };
            t.index = e
        }).call(t, e(4))
    }
});
(function(){
    var box=document.querySelector("div.list ");
    // console.log(box);
    var ul=box.querySelector("ul");
    var height=35;
    var offsetTop=ul.offsetTop;
    var dex=ul.offsetHeight-box.offsetHeight;
    console.log(ul.offsetTop);
    console.log(dex);
    var flag=0;
    box.style.position='relative';
    ul.style.position="absolute";
    ul.style.top=0+'px';
   setInterval(function(){
       flag++;
       // console.log(flag);
        ul.style.transition="top 0.5s"
       ul.style.top=-flag*height+'px';
       offsetTop=ul.offsetTop;
       if(offsetTop<-dex){
           ul.style.transition="none";
           ul.style.top=0+'px';
           flag=0;
       }
       console.log(ul.offsetTop);

       // console.log(ul.offsetTop);
   },1000)
})();
(function(){
    var box=document.querySelector(".along-the-way div ");
    // console.log(box);
    var ul=box.querySelector("ul");
    var height=35;
    var offsetTop=ul.offsetTop;
    var dex=ul.offsetHeight-box.offsetHeight;
    console.log(ul.offsetTop);
    console.log(dex);
    var flag=0;
    box.style.position='relative';
    ul.style.position="absolute";
    ul.style.top=0+'px';
    setInterval(function(){
        flag++;
        // console.log(flag);
        ul.style.transition="top 0.7s"
        ul.style.top=-flag*height+'px';
        offsetTop=ul.offsetTop;
        if(offsetTop<-dex){
            ul.style.transition="none";
            ul.style.top=0+'px';
            flag=0;
        }
        console.log(ul.offsetTop);

    },2000)
})();