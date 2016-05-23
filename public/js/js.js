var effectsSpeed = 200;
var menuScrollYLimit = 0;

$(document).ready(function(){
    $('body').fadeIn(effectsSpeed);

    adjustIndexFirstSectionHeight();

    initMenu();

    initGallery(1);

    initPopLabels();

    smoothScroll();

    $(window).on('resize', function(){
        adjustIndexFirstSectionHeight();

        initGallery(0);
    });

    $(window).on('scroll', function(){
        fixMenu();

        fixTimeline();

        toggleScrollHint();
    });


});

function adjustIndexFirstSectionHeight()
{
    var section = $('.index-page .section1');
    var windowHeight = $(window).innerHeight();

    if(section.length){
        section.height(windowHeight);
    }
}

function initMenu()
{
    var section = $('.index-page .section1');

    if(section.length){
        var menu = $('.menu-container .menu');

        menuScrollYLimit = (section.innerHeight() / 2) - (menu.outerHeight() / 2) + (186 / 2);
    }
}

function fixMenu()
{
    var section = $('.index-page .section1');

    if(section.length){
        var menuContainer = section.find('.menu-container');
        var menu = menuContainer.find('.menu');
        var scrollY = 0;

        if(menu.length){

            scrollY = $(window).scrollTop();

            if(scrollY >= menuScrollYLimit) menuContainer.addClass('fixed'); else menuContainer.removeClass('fixed');
        }
    }
}

function fixTimeline()
{
    var section = $('.timetable-page .section1');

    if(section.length){
        var navContainer = section.find('.timeline-container');
        var nav = navContainer.find('.timeline');

        if(nav.length){

            var menu = $('.menu-container .menu');
            var scrollY = $(window).scrollTop();
            var yLimit = section.innerHeight() - menu.innerHeight() - nav.innerHeight();

            if(scrollY >= yLimit){
                nav.addClass('fixed');
                nav.css('top', menu.innerHeight());
                navContainer.css('height', nav.innerHeight())
            } else{
                nav.removeClass('fixed');
                nav.css('top', 0);
            }
        }
    }
}

function toggleScrollHint()
{
    var hint = $('.index-page .section1 .scroll-hint');
    var scrollY = 0;

    if(hint.length){

        scrollY = $(window).scrollTop();

        if(scrollY < 10){
            hint.fadeIn(effectsSpeed);
        }else{
            hint.fadeOut(effectsSpeed);
        }
    }
}

function initGallery(preloadColoredAlternatives)
{
    var container = $('.section.gallery');
    var img, url, double, height;

    if(container.length){
        double = container.find('.double');
        height = double.first().width() / 2;
        double.each(function(){
            $(this).height(height);
            $(this).find('img').show();
        });

        // Preload all colored alternatives
        if(preloadColoredAlternatives){
            img = container.find('.has-alternative img');
            img.each(function(){
                url = $(this).attr('src');
                preloadImg(getColoredAlternativeUrl(url));
            });

            img.mouseover(function(){
                // Show colored alternative on mouseover
                url = $(this).attr('src');
                $(this).attr('src', getColoredAlternativeUrl(url));
            });
            img.mouseout(function(){
                // Show normal image on mouseout
                url = $(this).attr('src');
                $(this).attr('src', getBWUrl(url));
            });
        }
    }
}

function initPopLabels()
{
    var labels = $('.pop-label');

    if(labels.length){
        labels.on('mouseover', function(){
            if( $(this).css('right') == '-260px') {
                movePopLabel(this, 1);
            }
        });
    }
}

function movePopLabel(el, show)
{
    var label = $(el);
    var offset;

    if(label.length){
        offset = show ? 0 : -260;
        label.css('right', offset);
    }
}

function modifyCart(index, add)
{
    var container = $('.cart-grid');
    var item, quantity, cost, summary;

    if(container.length){
        // item
        item = $('#i'+index);
        quantity = Math.round(item.find('.quantity span').text());

        quantity = add ? quantity+1 : quantity-1;

        if(quantity > 0){
            item.find('.quantity span').text(quantity);

            cost = unformatPrice(item.find('.cost').text());
            summary = cost * quantity;
            item.find('.summary').text(formatPrice(summary));
        }else{
            item.remove();
        }

        calculateCart();
    }

    return false;
}

function calculateCart()
{
    var container = $('.cart-grid');
    var deliveryContainer = $('.calculation #delivery');
    var summary = 0;
    var total = 0;

    container.find('.items').each(function(){
        summary += unformatPrice($(this).find('.summary').text());
    });

    total = summary;

    total += deliveryContainer.length ? unformatPrice(deliveryContainer.text()) : 0;

    $('.calculation #summary').text(formatPrice(summary));
    $('.calculation #total').text(formatPrice(total));
}

function showHiddenSection(el, index)
{
    var container = $(el);
    var controls = $(el + '-controls span');

    container.find(' > div').hide();
    container.find('#s'+ index).show();

    controls.removeClass('active');
    controls.eq(index).addClass('active');

}

function modifyShopItemQuantity(add)
{
    var container = $('.shop-page .quantity span');
    var quantity = 0;

    if(container.length){
        quantity = Math.round(container.text());

        quantity = add ? (quantity + 1) : (quantity - 1);

        if(quantity < 1) quantity = 1;

        container.text(quantity);
    }else{
        console.log('No quantity container');
    }

    return false;
}

function unformatPrice(formatted)
{
    var integer;

    integer = Math.round(formatted.replace(/\s/, ''));

    return integer;
}

function formatPrice(integer)
{
    var intermediate, formatted;

    intermediate = integer.toString();

    formatted = intermediate.replace(/./g, function(c, i, a) {
        return i && c !== "." && ((a.length - i) % 3 === 0) ? ' ' + c : c;
    });

    return formatted;
}

function getColoredAlternativeUrl(url)
{
    url = url.split('/');
    url.splice(2, 0, 'colored');
    url = url.join('/');

    return url;
}
function getBWUrl(url)
{
    url = url.split('/');
    url.splice(2, 1);
    url = url.join('/');

    return url;
}

function smoothScroll(){
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 71
                }, 480);
                return false;
            }
        }
    });
}

function preloadImg(url)
{
    var img = new Image();
    img.src = url;
}