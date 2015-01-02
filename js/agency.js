/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

/*global Sly */
jQuery(function ($) {
    'use strict';

    // Detect IE.
    // Feature detection of "transform-style: preserve-3d" doesn't work, so this
    // is the only way how to fall back to a 2D front page example in IE that
    // doesn't have a full support of 3D transforms across the board.
    document.getElementsByTagName('html')[0].className += ' ' +
    (~window.navigator.userAgent.indexOf('MSIE') ? 'ie' : 'no-ie');

    // ==========================================================================
    //   Header example
    // ==========================================================================
    var $example = $('#example');
    var $frame = $example.find('.frame'); window.frr = $frame;
    var sly = new Sly($frame, {
        horizontal: 1,
        itemNav: 'forceCentered',
        activateMiddle: true,
        smart: 1,
        activateOn: 'click',
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        //startAt: 10,
        scrollBar: $example.find('.scrollbar'),
        scrollBy: 1,
        pagesBar: $example.find('.pages'),
        activatePageOn: 'click',
        speed: 300,
        moveBy: 600,
        elasticBounds: 1,
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,

        // Buttons
        forward: $example.find('.forward'),
        backward: $example.find('.backward'),
        prev: $example.find('.prev'),
        next: $example.find('.next'),
        prevPage: $example.find('.prevPage'),
        nextPage: $example.find('.nextPage')
    }).init();

    sly.activate(5); // Activates 2nd element
    sly.reload();

    // Method calling buttons
    $example.on('click', 'button[data-action]', function () {
        var action = $(this).data('action');

        switch (action) {
            case 'add':
                sly.add('<li>' + sly.items.length + '</li>');
                break;
            case 'remove':
                sly.remove(-1);
                break;
            default:
                sly[action]();
        }
    });

    var updatePanel = 5;

    setInterval(function(){
        if(updatePanel > 11) {
            updatePanel = 0
        }
        sly.activate(updatePanel++);
    }, 5000);
});