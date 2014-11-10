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
    $('#overview-tabs').responsiveTabs({
        startCollapsed: false,
        collapse: false,
        animation: 'none'
    }).find('.nav-tab').appendTo( $('#overview-tabs .top .right') );

    $('input.kenteken').blur( function() {
        $(this).val( keuze.formatKenteken( $(this).val() ) );
    })

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

        function formatKenteken( Licenseplate ) {
            Licenseplate = Licenseplate.replace( /\-/g, '' ).toUpperCase();
            var Sidecode = getSideCodekenten(Licenseplate);

            if( Sidecode <= 6 )
                return Licenseplate.substr(0, 2) + '-' + Licenseplate.substr(2, 2) + '-' + Licenseplate.substr(4, 2);
            if( Sidecode == 7 || Sidecode == 9 )
                return Licenseplate.substr(0, 2) + '-' + Licenseplate.substr(2, 3) + '-' + Licenseplate.substr(5, 1);
            if( Sidecode == 8 || Sidecode == 10 )
                return Licenseplate.substr(0, 1) + '-' + Licenseplate.substr(1, 3) + '-' + Licenseplate.substr(4, 2);

            return Licenseplate;
        }

        function getSideCodekenten( Licenseplate ) {
            var arrSC = new Array;
            var scUitz = '';

            Licenseplate = Licenseplate.replace('-', '').toUpperCase();

            arrSC[0] = /^[a-zA-Z]{2}[\d]{2}[\d]{2}$/;           //  1   XX-99-99
            arrSC[1] = /^[\d]{2}[\d]{2}[a-zA-Z]{2}$/;           //  2   99-99-XX
            arrSC[2] = /^[\d]{2}[a-zA-Z]{2}[\d]{2}$/;           //  3   99-XX-99
            arrSC[3] = /^[a-zA-Z]{2}[\d]{2}[a-zA-Z]{2}$/;       //  4   XX-99-XX
            arrSC[4] = /^[a-zA-Z]{2}[a-zA-Z]{2}[\d]{2}$/;       //  5   XX-XX-99
            arrSC[5] = /^[\d]{2}[a-zA-Z]{2}[a-zA-Z]{2}$/;       //  6   99-XX-XX
            arrSC[6] = /^[\d]{2}[a-zA-Z]{3}[\d]{1}$/;           //  7   99-XXX-9
            arrSC[7] = /^[\d]{1}[a-zA-Z]{3}[\d]{2}$/;           //  8   9-XXX-99
            arrSC[8] = /^[a-zA-Z]{2}[\d]{3}[a-zA-Z]{1}$/;       //  9   XX-999-X
            arrSC[9] = /^[a-zA-Z]{1}[\d]{3}[a-zA-Z]{2}$/;       //  10  X-999-XX

            //except licenseplates for diplomats
            scUitz = '^CD[ABFJNST][0-9]{1,3}$'; // for example: CDB1 of CDJ45

            for( i=0; i<arrSC.length; i++ ) {
                if (Licenseplate.match(arrSC[i]))
                    return i+1;
            }
            if (Licenseplate.match(scUitz))
                return 'CD';

            return false;
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
            formatKenteken : formatKenteken,
            getSideCodekenten : getSideCodekenten,
            checkForTouch : checkForTouch,
            handleBodyClasses  : handleBodyClasses,
        }

    }();
})(window);