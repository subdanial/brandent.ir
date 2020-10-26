function maping() {
    var myMap = new L.Map('map', {
        key: 'web.XBwlSx3YJ7iiikEV27TOTqwgPMuhUdFM7HV9sGVN',
        maptype: 'standard-night',
        poi: true,
        traffic: false,
        center: [35.699739, 51.338097],
        zoom: 14,

    });
}
// maping();
//ENDMAP
$(document).on('click', '.js-btn-menu', function () {
    $('.js-menu-full').fadeIn(600);
    $('.js-menu-full').css('display', 'flex');
})
$(document).on('.js-menu-close', 'click', function () {
    $('.js-menu-full').fadeOut(600);
})
//END-MENU
var win = $(window);
var vh = win.height();
var vw = win.width();
var vb = $('.js-background img').width();
var ch = $('.js-content').height();
var mr_left = vw / 2 - vb;
var mr_top = vh / 2 - ch / 2;

function contentAlign() {
    win = $(window);
    vh = win.height();
    vw = win.width();
    vb = $('.js-background img').width();
    ch = $('.js-content').height();
    mr_left = vw / 2 - vb / 2;
    mr_top = vh / 2 - ch / 2;
    if (vw > 1182) {
        $('.js-content').css('margin-left', mr_left);
        $('.js-content').css('margin-top', mr_top);
        $('.js-content').css('padding-top', "0");
        $('.js-content').css('padding-bottom', "0");
        $('.js-content').width('100%');
    } else {
        $('.js-content').css('margin-left', 0);
        $('.js-content').css('margin-top', 0);
        $('.js-content').width(vw);
        $('.js-content').css('padding-top', "2rem");
        $('.js-content').css('padding-bottom', "2rem");
    }
}
$(window).on('resize', function () {
    contentAlign();
});
contentAlign();
//END_SIGNUPALIGN
function flash() {
    var tlf = gsap.timeline({})
    tlf.to('body', {
        overflow: 'hidden'
    });
    tlf.to('.flash', {
        opacity: 1,
        duration: 0.1
    }, {
        opacity: 1,
        duration: 0.1
    })
    tlf.to('body', {
        overflow: 'overlay'
    });
    tlf.to('.dandan', {
        scale: 0,
        duration: 0.3,
        delay: 0.2
    })
    tlf.to('.lamp svg', {
        scale: 1,
        duration: 0.3
    })
    tlf.to('.flash', {
        opacity: 0,
        autoAlpha: 0,
        duration: 0.3
    })
    tlf.to('.flash', {
        css: {
            display: 'none'
        }
    })
}
//END-FLASH-TRANSITION
function pageTransition() {
    var tl = gsap.timeline({});
    tl.to('body', {
        overflow: 'hidden'
    });
    tl.fromTo('.loading', {
        opacity: 1,
        duration: 0.1
    }, {
        opacity: 1,
        duration: 0.1
    });
    tl.to('body', {
        overflow: 'overlay'
    });
    if ($(window).width() > 992) {
        tl.to('.dandoon', {
            x: 220,
            duration: 0.5
        });
        tl.to('.matn img', {
            opacity: 1,
            duration: 0.1,
            delay: 0,
        });
        tl.to('.dandoon', {
            x: -185,
            duration: 0.7
        });
    } else {
        tl.to('.dandoon', {
            opacity: 1,
            duration: 0.5
        });
        tl.to('.dandoon', {
            x: 120,
            duration: 1
        });
        tl.to('.matn img', {
            opacity: 1,
            duration: 0.1,
            delay: -0.2
        });
        tl.to('.dandoon', {
            x: -120,
            duration: 0.7
        });
    }
    tl.to('.loading', {
        opacity: 0,
        duration: 0.5,
        autoAlpha: 0
    })
    tl.to('.loading', {
        css: {
            display: 'none'
        }
    })
}

function delay(n) {
    n = n || 2000;
    return new Promise(done => {
        setTimeout(() => {
            done();
        }, n);
    });
}
barba.init({
    transitions: [{
            name: 'default',
            sync: true,
            to: {
                namespace: ['about', 'portfolio', 'blog', 'contact']
            },
            async leave(data) {
                const done = this.async();
                flash();
                await delay(200);
                done();
            },
            enter() {},
        },
        {
            name: 'special',
            sync: true,
            to: {
                namespace: ['home']
            },
            async leave(data) {
                const done = this.async();
                pageTransition();
                await delay(200);
                done();
            },
            enter() {},
        },
        {
            to: {
                namespace: ['contact']
            },
            async leave(data) {
                const done = this.async();
                flash();
                await delay(200);
                done();
            },
            async enter(data) {
                const done = this.async();
                flash();
                await delay(200);
                done();
                maping();
            },
        },
        {
            from: {
                namespace: ['post', 'blog']
            },
            to: {
                namespace: ['blog', 'post']
            },
            leave(data) {
                return gsap.to(data.current.container, {
                    opacity: 0
                });
            },
            enter(data) {
                return gsap.from(data.next.container, {
                    opacity: 0
                });
            }
        }
    ]
})
var initialLoad = true;
$(document).ready(function () {
    initialLoad = false;
});
if (initialLoad) {
    pageTransition();
} else {}
//End-Transition
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//EndAjax
$('.js-scroll').click(function () {
    $("html, body").animate({
        scrollTop: $(document).height()
    }, 1000);
    $(this).fadeOut(500);
})
gsap.to('.js-scroll svg', {
    y: 6,
    duration: 0.8,
    repeat: -1
});
//EndScroll
$('.js-input-signup').on('keyup keydown', function () {
    if (
        $('.js-name').val() !== '' &&
        $('.js-lastname').val() !== '' &&
        $('.js-email').val() !== '' &&
        $('.js-phone').val() !== '' &&
        $('.js-code').val() !== '' &&
        $('.js-password').val() !== '' &&
        $('.js-password_confirmation').val() !== '' &&
        $('.js-password').val() == $('.js-password_confirmation').val()
    ) {
        $('.js-submit').prop('disabled', false);
        $('.js-help-active').css('opacity', '0');
    } else {
        $('.js-submit').prop('disabled', true);
        $('.js-help-active').css('opacity', '1');
    }
})
//signup
$('.js-btn-to-plan').click(function () {
    $('.intro').fadeOut(300);
    $('.plan').fadeIn(600);
})
$('.js-btn-back-to-intro').click(function () {
    $('.plan').fadeOut(300);
    $('.intro').fadeIn(600);
})
$('.js-btn-back-to-plan').click(function () {
    $('.info').fadeOut(300);
    $('.plan').fadeIn(600);
})
$('.js-btn-to-info').click(function () {
    var plan = 0;
    var text = [];
    text[0] = " پلن دندان پزشکان با امتیاز " + $(this).attr('data-value') + " هزارتومان";
    text[1] = "پلن دندان پزشکان بدون امتیاز " + $(this).attr('data-value') + " هزارتومان";
    text[2] = "پلن ویژه دانشجویان " + $(this).attr('data-value') + " هزارتومان";
    text[3] = "پلن عمومی " + $(this).attr('data-value') + " هزارتومان";
    var span_text;
    var user_group_text = [];
    user_group_text[0] = 'کد نظام پزشکی';
    user_group_text[1] = 'شماره دانشجویی';
    var user_group_span_text;
    $('.plan').fadeOut(300);
    $('.info').fadeIn(600);
    plan = $(this).attr('data-plan');
    switch (plan) {
        case '1':
            span_text = text[0];
            user_group_span_text = user_group_text[0];
            break;
        case '2':
            span_text = text[1];
            user_group_span_text = user_group_text[0];
            break;
        case '3':
            span_text = text[2];
            user_group_span_text = user_group_text[1];
            break;
        case '4':
            span_text = text[3];
            user_group_span_text = user_group_text[1];
            break;
    }
    $('.plan_amount').val($(this).attr('data-value'));
    $('.js-plan-name').html(span_text);
    $('.js-user-group').html(user_group_span_text);
})
//end-signup

var current_data_order = 1;
step_monitor() ;

function step_monitor() {
  
    $('.step').each(function () {
        if ($(this).attr('data-order') == current_data_order) {
            $(this).show(0)
        }else{
            $(this).hide(0)
        }
    })


    if(current_data_order == 1){
        $('.js-btn-back').hide();
    }else{
        $('.js-btn-back').show();
    }

    if(current_data_order == 3){
        $('.js-btn-submit').show();
        $('.js-btn-next').hide();
    }else{
        $('.js-btn-submit').hide();
        $('.js-btn-next').show();

    }
}



$('.js-btn-next').click(function () {
    current_data_order++;
    step_monitor() ;

})
$('.js-btn-back').click(function () {
    current_data_order--;
    step_monitor() ;

})
