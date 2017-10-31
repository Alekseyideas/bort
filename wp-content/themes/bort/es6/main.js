jQuery(document).ready(function($) {
    function SiteLine() {
        $('.site-line').css('height', $(window).height() + 100 + 'px')
    }
    SiteLine();




    function Page2() {
        let padding =   $(window).width() > 767 ? 50 : 60;
        $('.page-2').css({
            'min-height': $(window).height() - padding + 'px',
        });
    }


    $(window).width() > 767 ? Page2() : false;

    $(window).resize(function () {
        $(window).width() > 767 ? Page2() : false;
        SiteLine();
    });

    let addData = ()=>{
        for (let i=2;i<$('.menu-item').length+1;i++){

                $(`.menu-item:nth-child(${i+1})`).attr('data-menuanchor',`page-${i}`);
                $(`.menu-item:nth-child(${i+1}) a`).attr('href',`/#page-${i}`);


        }


    };




    function MobileMenu() {
        if ($(window).width()<992){
            $('#site-navigation').css({
                'height': $(window).height() - $('header').height() - 40 +'px'
            });


            $('#primary-menu').css({
                'min-height': $(window).height() - $('header').height() - 97 +'px'
            });

        }else{
            $('#site-navigation').css({
                'height': 'auto'
            });


            $('#primary-menu').css({
                'min-height': 'auto'
            });
        }



    }
    MobileMenu();

    $(window).resize(function () {
        MobileMenu();
    });



    var arrowLeft = '<svg width="32px" height="22px" viewBox="0 0 32 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\n' +
        '    <!-- Generator: sketchtool 46.2 (44496) - http://www.bohemiancoding.com/sketch -->\n' +
        '    <title>ED92CC1E-EF2F-4636-A1B8-CE270ADF0168</title>\n' +
        '    <desc>Created with sketchtool.</desc>\n' +
        '    <defs></defs>\n' +
        '    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\n' +
        '        <g id="3-тарифы-бизнес-1440" transform="translate(-1192.000000, -270.000000)" fill-rule="nonzero" fill="#E6E6E6">\n' +
        '            <g id="arrows" transform="translate(1192.000000, 270.000000)">\n' +
        '                <path d="M21.5484281,0.330864421 C21.1124802,-0.11028814 20.3869165,-0.11028814 19.9357256,0.330864421 C19.4997777,0.757113179 19.4997777,1.46653419 19.9357256,1.89178936 L28.1130518,9.88718273 L1.12899333,9.88718273 C0.499968244,9.88817632 0,10.377021 0,10.9920513 C0,11.6070816 0.499968244,12.1118237 1.12899333,12.1118237 L28.1130518,12.1118237 L19.9357256,20.0923133 C19.4997777,20.5334658 19.4997777,21.2438804 19.9357256,21.6691356 C20.3869165,22.1102881 21.1134963,22.1102881 21.5484281,21.6691356 L31.6616069,11.7809593 C32.1127977,11.3547105 32.1127977,10.6452895 31.6616069,10.2200343 L21.5484281,0.330864421 Z" id="&lt;" transform="translate(16.000000, 11.000000) scale(-1, 1) translate(-16.000000, -11.000000) "></path>\n' +
        '            </g>\n' +
        '        </g>\n' +
        '    </g>\n' +
        '</svg>';
    var arrowRight = '<svg width="32px" height="22px" viewBox="0 0 32 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\n' +
        '    <!-- Generator: sketchtool 46.2 (44496) - http://www.bohemiancoding.com/sketch -->\n' +
        '    <title>5C66365F-CE97-407B-89FD-50AB0FE10FE6</title>\n' +
        '    <desc>Created with sketchtool.</desc>\n' +
        '    <defs></defs>\n' +
        '    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\n' +
        '        <g id="4-водители-1440" transform="translate(-1306.000000, -170.000000)" fill-rule="nonzero" fill="#E6E6E6">\n' +
        '            <path d="M1327.54843,170.330864 C1327.11248,169.889712 1326.38692,169.889712 1325.93573,170.330864 C1325.49978,170.757113 1325.49978,171.466534 1325.93573,171.891789 L1334.11305,179.887183 L1307.12899,179.887183 C1306.49997,179.888176 1306,180.377021 1306,180.992051 C1306,181.607082 1306.49997,182.111824 1307.12899,182.111824 L1334.11305,182.111824 L1325.93573,190.092313 C1325.49978,190.533466 1325.49978,191.24388 1325.93573,191.669136 C1326.38692,192.110288 1327.1135,192.110288 1327.54843,191.669136 L1337.66161,181.780959 C1338.1128,181.354711 1338.1128,180.645289 1337.66161,180.220034 L1327.54843,170.330864 Z" id="Shape"></path>\n' +
        '        </g>\n' +
        '    </g>\n' +
        '</svg>';



    addData();

    let mobile = $(window).width()<992;


  if (!mobile){
      FullPageStart();
  }


    if(mobile){
        ScrollTo();
    }

    
    function TabSlide() {
        if ($(window).width()<768){
            $('.tabs').addClass('owl-carousel');
            $('.tabs').owlCarousel({
                items: 4,
                autoplay: false,
                nav: false,
                loop: false,
                navText: [arrowLeft, arrowRight],
                dots: false,

                responsive: {
                    0:{
                        margin: 30
                    }
                }
            });
        }


    }

    TabSlide();

    $(window).resize(function () {
        mobile = $(window).width()<992;
        if(mobile){
            ScrollTo();
        }
        if (!mobile){
            FullPageStart();
        }
    });



    if ($(window).width()<992){
        $('.page-3').attr('id','page-2');
        $('.page-4').attr('id','page-3');
        $('.page-5').attr('id','page-4');
        $('.page-6').attr('id','page-5');

        $('.menu-toggle').click(()=> {
            $('#site-navigation').toggleClass('active');
            $('.header__tel').slideToggle(200);
        });
        $('.menu-item a').click(()=> {
            $('#site-navigation').removeClass('active');
            $('.header__tel').slideToggle(200);
        })
    }


    $(window).resize(function () {
        if ($(window).width()<992){
            $('.page-3').attr('id','page-2');
            $('.page-4').attr('id','page-3');
            $('.page-5').attr('id','page-4');
            $('.page-6').attr('id','page-5');
        }else{
            $('.page-3').attr('id','');
            $('.page-4').attr('id','');
            $('.page-5').attr('id','');
            $('.page-6').attr('id','');
        }

    });

    function ScrollTo() {
        $('.menu-item:nth-child(1)').click(function () {
            $.scrollTo('.page-1',500);
        });
        $('.menu-item:nth-child(2)').click(function () {
            $.scrollTo('.page-2',500);
        });
        $('.menu-item:nth-child(3)').click(function () {
            $.scrollTo('.page-3',500);
        });
        $('.menu-item:nth-child(4)').click(function () {
            $.scrollTo('.page-4',500);
        });
        $('.menu-item:nth-child(5)').click(function () {
            $.scrollTo('.page-5',500);
        });
        $('.menu-item:nth-child(6)').click(function () {
            $.scrollTo('.page-6',500);
        });

    }

    function FullPageStart() {
        $('#fullpage').fullpage({
            menu: '#primary-menu',
            sectionSelector: '.section',
            anchors:['page-1', 'page-2','page-3','page-4','page-5','page-6'],
        });
    }

    $('.page-3__slider').owlCarousel({
        items: 1,
        autoplay: false,
        navText: [arrowLeft, arrowRight],
        loop: false,
        responsive: {
            992 : {
                nav: true
            }
        }
    });

    $('.page-4__slider').owlCarousel({
        items: 1,
        autoplay: false,
        nav: false,
        loop: false,
        navText: [arrowLeft, arrowRight],
        dots: true,
        responsive: {
            600 : {
                items: 2,
            },
            1000 : {
                items: 3,
            },
            1200 : {
                items: 4,
                nav: true
            }
        }
    });

    for (let i=0; i < $('.tab').length; i++){
        $(`.tab[data-slide='${i+1}']`).click(function () {

            $('.page-3__slider').trigger('to.owl.carousel', i);
            $(this).addClass('tab--active');
        });
    }

    $('.page-3__slider').on('changed.owl.carousel', function(event) {
        let currentItem = event.item.index + 1;
        $(`.tab`).removeClass('tab--active');
        $(`.tab[ data-slide="${currentItem}"]`).addClass('tab--active');
        if(currentItem === $('.tab').length) {
            /*setTimeout(function () {
                $(`.tab[data-slide='${1}']`).click();
            },5000);*/

        }
    });



$('.header__logo').click(function () {
    $.scrollTo('.page-1',500);
})


    function Marg() {
        if ($(window).width()>992){
            console.clear();

            $('.page-1__title-btn,.page-3 .tabs').css({
                'left': $('#primary-menu').offset().left
            })
            $('.page-4__slider').css({
                'margin-left': $('#primary-menu').offset().left + 3
            })

        }
        else {
            $('.page-1__title-btn,.page-3 .tabs').css({
                'left': '0'
            })
            $('.page-4__slider').css({
                'margin-left': '0'
            })
        }
    }
    Marg();
    $(window).resize(function () {
        Marg();
    });





});





