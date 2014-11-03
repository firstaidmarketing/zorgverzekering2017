var _window = $(window);
var _body = $('body');
var _header = $('#header');
var _mobileNavHolder = $('.mobile-nav-holder');
var _searchForm = $('.searchform');

jQuery(document).ready(function($) {

    keuze.checkForTouch();

    // Clone menu for mobile navigation
    $('.nav-main .sf-menu').clone().appendTo('.mobile-nav-holder').find('li.mobile').remove();

    _window.resize( function() {
        keuze.windowWidth = _window.width();

        keuze.handleBodyClasses();

        keuze.handleResponiveActions();
    }).resize();

    $('.nav-main .menu-btn').click( function(e) {
        e.preventDefault();

        _searchForm.slideUp();
        _mobileNavHolder.slideToggle();
    });

    $('.nav-main .search-btn').click( function(e) {
        e.preventDefault();

        _mobileNavHolder.slideUp();
        _searchForm.slideToggle( function() {
            if( $(this).is(':visible')) {
                $('.searchtext', this).focus();
            }
        });
    });

    $('.nav-main > ul').superfish({
        delay: 500, 
        speed: 'fast', 
        animation: {opacity:'show', height:'show'}
    });

    $('#form-tabs').responsiveTabs({
        startCollapsed: false,
        animation: _window.width() < keuze.settings.tabletWidth ? 'slide' : 'none'
    });

});

/*  keuze library*/
(function(parent,undefined){
                
    parent.keuze = function(){

        var windowWidth = _window.width();
        var settings = { 
            'largeWidth' : 1154,
            'tabletWidth' : 960,
            'mobileWidth' : 580,
            'is_touch_device': false,
            'navMainOffset': $('.header-nav').offset().top
        };

        function handleResponiveActions() {

            if( keuze.windowWidth < keuze.settings.tabletWidth ) {
                _searchForm.hide().appendTo( $('.header-nav') );
            }
            else {
                _searchForm.show().insertBefore( $('.header-top .contact') );
            }
        }

        function checkForTouch() {
            if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || 
                navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || 
                navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || 
                navigator.userAgent.match(/Windows Phone/i) ){ 
                keuze.settings.is_touch_device = true; 
            }
            else{ 
                keuze.settings.is_touch_device = false; 
            }
        }

        function handleBodyClasses() {
            if( keuze.windowWidth <= keuze.settings.mobileWidth ) {
                _body.addClass('mobile').removeClass('large desktop tablet');
            }
            else if( keuze.windowWidth > keuze.settings.mobileWidth && keuze.windowWidth <= keuze.settings.tabletWidth ) {
                _body.addClass('tablet').removeClass('large desktop mobile');
            }
            else if( keuze.windowWidth > keuze.settings.tabletWidth && keuze.windowWidth <= keuze.settings.largeWidth ) {
                _body.addClass('desktop').removeClass('large tablet mobile');
            }
            else {
                _body.addClass('large').removeClass('desktop tablet mobile');
            }
        }

        return {
            settings : settings,
            handleResponiveActions : handleResponiveActions,
            checkForTouch : checkForTouch,
            handleBodyClasses  : handleBodyClasses,
        }

    }();
})(window);