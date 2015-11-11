/*
  Theme Name: Sapona - One Page Responsive Corporate Template
  Theme URL: http://themewar.com/html/saponaLanding
  Author: ThemeWar
  Author URI: http://themewar.com
  Description: One Page Responsive Corporate Template
  Version: 1.0.0
*/
(function ($) {
    'use strict';
    //========================
    // Loader
    //========================
    $(window).load(function () {
        if ($(".loaderArea").length > 0)
        {
            $(".loaderArea").delay(800).fadeOut("slow");
        }
    });
    
    /*============================
     // Color Preset
     =============================*/
    if ($(".switherDive").length > 0)
    {
        var switStatus = true;
        $("#switch").on('click', function (e) {
            e.preventDefault();
            if (switStatus)
            {
                $(".switherDive").animate({'left': '0px'}, 800);
                switStatus = false;
            }
            else
            {
                $(".switherDive").animate({'left': '-216px'}, 800);
                switStatus = true;
            }
        });

        $(".collorsSet a").on('click', function (e) {
            e.preventDefault();
            var color = $(this).attr('href');
            $("#colorpreset").attr('href', 'css/colorpreset/' + color + '.css');
            $(".collorsSet a").removeClass('active');
            $(this).addClass('active');
        });
    }



    /*============================
     // Search Div Expand
     =============================*/
    if ($(".searchDiv").length > 0)
    {
        var searchStatus = true;
        $(".searchIcons a").on('click', function (e) {
            e.preventDefault();
            if (searchStatus)
            {
                $(".searchDiv").animate({'width': '245px'}, 500);
                $(this).addClass('active');
                searchStatus = false;
            }
            else
            {
                $(".searchDiv").animate({'width': '0px'}, 500);
                $(this).removeClass('active');
                searchStatus = true;
            }

        });
        $(document).mouseup(function (e) {
            var container = $(".searchIcons");
            var container2 = $(".language");

            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                $(".searchDiv").animate({'width': '0px'}, 500);
                $(".searchIcons a").removeClass('active');
                searchStatus = true;
            }

            if (!container2.is(e.target) && container2.has(e.target).length === 0)
            {
                $(".language ul").slideUp('slow');
                $(".language > a").removeClass('active');
            }

            if ($(window).width() < 768)
            {
                var container3 = $(".mainMenu");
                if (!container3.is(e.target) && container3.has(e.target).length === 0)
                {
                    $(".mainMenu ul").slideUp('slow');
                    $(".menuButton").removeClass('active');
                }
            }
            if ($(".switherDive").length > 0)
            {
                var container4 = $(".switherDive");
                if (!container4.is(e.target) && container4.has(e.target).length === 0)
                {
                    $(".switherDive").animate({'left': '-216px'}, 800);
                    switStatus = true;
                }
            }

        });
    }

    if ($(".language").length > 0)
    {
        $(".language a").on('click', function (e) {
            e.preventDefault();
            $(this).next('ul').slideToggle(400);
            $(this).toggleClass('active');
        });
    }

    if ($(".videoSection").length > 0)
    {
        $(".player").YTPlayer();
        $(".yPlay").on('click', function (e) {
            e.preventDefault();
            if ($(this).hasClass('alreadyPlay'))
            {
                $(this).removeClass('alreadyPlay');
                $('#bgndVideo').YTPPause();
            }
            else
            {
                $(this).addClass('alreadyPlay');
                $('#bgndVideo').YTPPlay();
            }
        });
    }
    //========================
    // About Skill
    //========================
    if ($(".skillBarWrap").length > 0)
    {
        $('.skillBarWrap').appear();
        $('.skillBarWrap').on('appear', loadSkills);
    }
    var coun = true;
    function loadSkills()
    {
        $(".skillBarWrap").each(function () {
            var datacount = $(this).attr("data-limit");
            $(".skillBar", this).animate({'width': datacount + '%'}, 2000);
            $(".skillBar2", this).animate({'width': datacount + '%'}, 2000);
            if (coun)
            {
                $(this).find('.skilPercent').each(function () {
                    var $this = $(this);
                    $({Counter: 0}).animate({Counter: datacount}, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter) + '%');
                        }
                    });
                });

            }
        });
        coun = false;
    }

    //========================
    // History
    //========================
    if ($("#historyTabs").length > 0)
    {
        $("#historyTabs").tabs();
    }


    //========================
    // Menu
    //========================
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 40)
        {
            $("#header").addClass('fixedHeader');
        }
        else
        {
            $("#header").removeClass('fixedHeader');
        }

        /************ Menu Active on Scroll **********************/
        Scroll();

    });

    $(".menuButton").on('click', function () {
        $(this).next('ul').slideToggle('slow');
        $(this).toggleClass('active');
    });

    $('.mainMenu ul li.scroll a').on('click', function () {
        if ($(window).width() < 767)
        {
            if ($(this).parent().hasClass('hsChildItem'))
            {
                alert('hi');
                $(this).next('ul.dropMenu').slideToggle();
                $(this).parent('.mainMenu ul li.hsChildItem').toggleClass('active');
            }
            else
            {
                $('html, body').animate({scrollTop: $(this.hash).offset().top - 68}, 1000);
                $(".mainMenu ul").slideUp('slow');
                $(".menuButton").removeClass('active');
            }

        }
        else
        {
            $('html, body').animate({scrollTop: $(this.hash).offset().top - 68}, 1000);
        }
        return false;
    });
    
    
    if ($(window).width() < 767)
    {
        $(".mainMenu ul li.hsChildItem a").on('click', function (e) {
            e.preventDefault();
            $(this).next('ul.dropMenu').slideToggle();
            $(this).parent('.mainMenu ul li.hsChildItem').toggleClass('active');
        });
    }

    // User define function
    function Scroll() {

        var contentTop = [];
        var contentBottom = [];
        var winTop = $(window).scrollTop();
        var rangeTop = 200;
        var rangeBottom = 500;

        $('.mainMenu').find('.scroll > a').each(function () {
            var atr = $(this).attr('href');
            if ($(atr).length > 0)
            {
                contentTop.push($($(this).attr('href')).offset().top);
                contentBottom.push($($(this).attr('href')).offset().top + $($(this).attr('href')).height());
            }

        });

        $.each(contentTop, function (i) {

            if (winTop > contentTop[i] - rangeTop) {

                $('.mainMenu li.scroll')
                        .removeClass('active')
                        .eq(i).addClass('active');
            }
        });

    }
    ;
    //========================
    // Menu
    //========================
    if ($(".slider").length > 0)
    {
        if($(window).width() > 767)
        {
            var win_height = $(window).height();
            var h_height = $(".topHeader").height() + $("#header").height();
            var slCon = $(".slContent").height();
            var sH = win_height - h_height;

            $(".slider, .sliderItem").height(win_height - h_height);
            $(".slContent").css('margin-top', (sH - slCon) / 2);

            $(window).on('resize', function () {
                var win_height = $(window).height();
                var h_height = $(".topHeader").height() + $("#header").height();
                var slCon = $(".slContent").height();
                var sH = win_height - h_height;

                $(".slider, .sliderItem").height(win_height - h_height);
                $(".slContent").css('margin-top', (sH - slCon) / 2);
            });
        }
    }
    //=======================================================
    // Portfolio Mixing
    //=======================================================
    if ($('#mixer').length > 0)
    {
        $('#mixer').themeWar();
    }
    //========================
    // Pretty Photo
    //========================
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        social_tools: false
    });

    //========================
    // WOW INIT
    //========================
    if ($(window).width() > 766)
    {
         var wow = new WOW({
             mobile: false 
         });
         wow.init();
    }


    //========================
    // Back To Top
    //========================
    $("body, html").on("click", "#backToTop", function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 800);
    });

    //========================
    // Contact Submit
    //========================
    if($("#contactForm").length > 0)
    {
        $("#contactForm").on('submit', function(e){
            e.preventDefault();
            $("#con_submit span").text('Wait..');
            var con_name = $("#con_name").val();
            var con_email = $("#con_email").val();
            var con_message = $("#con_message").val();
            
            var required = 0;
	    $(".required", this).each(function() {
		if ($(this).val() == '')
		{
		    $(this).addClass('reqError');
		    required += 1;
		}
		else
		{
		    if ($(this).hasClass('reqError'))
		    {
			$(this).removeClass('reqError');
			if (required > 0)
			{
			    required -= 1;
			}
		    }
		}
	    });
            if (required === 0)
            {
                $.ajax({
                    type: "POST",
                    url: 'mail.php',
                    data: {con_name:con_name, con_email:con_email, con_message:con_message}, 
                    success: function(data)
                    {
                        $("#con_submit span").text('Done!!');
                        $("#contactForm #con_name").val('');
                        $("#contactForm #con_email").val('');
                        $("#contactForm #con_message").val('');
                    }
                });
            }
            else
            {
                $("#con_submit span").text('failed!!');
            }
            
        });
    }




})(jQuery);