//cookie, credit:http://plugins.jquery.com/files/jquery.cookie.js.txt
jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') {
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString();
        }

        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else {
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);

                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};

// text trucate
jQuery.fn.jTruncate = function(options) {
    var defaults = {
        length : 300,
        minTrail : 20,
        moreText : "more",
        lessText : "less",
        ellipsisText : "...",
        moreAni : "",
        lessAni : ""
    };
    options = $.extend(defaults, options);
    return this.each( function() {
        obj = $(this);
        var body = obj.html();
        if (body.length > options.length + options.minTrail) {
            var splitLocation = body.indexOf(' ', options.length);
            if (splitLocation != -1) {
                var splitLocation = body.indexOf(' ', options.length);
                var str1 = body.substring(0, splitLocation);
                var str2 = body.substring(splitLocation, body.length - 1);
                obj.html(str1 + '<span class="truncate_ellipsis">'
                    + options.ellipsisText + '</span>'
                    + '<span class="truncate_more">' + str2 + '</span>');
                obj.find('.truncate_more').css("display", "none");
                obj.append('<div class="clearboth">'
                    + ' <a href="#" class="truncate_more_link">'
                    + options.moreText + '</a>' + '</div>');
                var moreLink = $('.truncate_more_link', obj);
                var moreContent = $('.truncate_more', obj);
                var ellipsis = $('.truncate_ellipsis', obj);
                moreLink.click( function() {
                    if (moreLink.text() == options.moreText) {
                        moreContent.show(options.moreAni);
                        moreLink.text(options.lessText);
                        ellipsis.css("display", "none");

                    } else {
                        moreContent.hide(options.lessAni);
                        moreLink.text(options.moreText);
                        ellipsis.css("display", "inline");
                    }
                    return false;
                });
            }
        }
    });
};

// smart forcus
jQuery.fn.smartFocus = function(text) {
    if ($(this).val() == '') {
        $(this).val(text);
    }
    $(this).focus( function() {
        if ($(this).val() == text) {
            $(this).val('');
        }
    }).blur( function() {
        if ($(this).val() === '') {
            $(this).val(text);
        }
    });
};


$(function(){

    $('.bubbleInfo').each( function() {
        var distance = 10;
        var time = 250;
        var hideDelay = 500;
        var hideDelayTimer = null;
        var beingShown = false;
        var shown = false;
        var trigger = $('.trigger', this);
        var popup = $('.popup', this).css('opacity', 0).css('display', 'none');
        var showFunction = function() {
            if (hideDelayTimer)
                clearTimeout(hideDelayTimer);
            if (beingShown || shown  ) {
                return;
            } else {
                beingShown = true;
                popup.css( {
                    top : 30,
                    left : 50,
                    display : 'block'
                }).animate( {
                    top : '-=' + distance + 'px',
                    opacity : 1
                }, time, 'swing', function() {
                    beingShown = false;
                    shown = true;
                });
            };
        }
        var hideFunction = function() {
            if (hideDelayTimer)
                clearTimeout(hideDelayTimer);
            hideDelayTimer = setTimeout( function() {
                hideDelayTimer = null;
                popup.animate( {
                    top : '-=' + distance + 'px',
                    opacity : 0
                }, time, 'swing', function() {
                    shown = false;
                    popup.css('display', 'none');
                });
            }, hideDelay);
        }
	
        $( trigger.get(0)).click(function(){
            return false;
        });
        $( [ trigger.get(0), popup.get(0) ]).mouseout(hideFunction );
        $( [ trigger.get(0), popup.get(0) ]).mouseover( showFunction);
        $( trigger.get(1)).click(function(){
            return false;
        });
        $( [ trigger.get(1), popup.get(0) ]).mouseout(hideFunction );
        $( [ trigger.get(1), popup.get(0) ]).mouseover( showFunction);
    });

    $('#searchInput').smartFocus('Enter Keyword...');


    $('.truncate').jTruncate( {
        length : 200,
        moreText : ' (more) ',
        lessText : ' (less) '
    });

    // comment
    $('.comment').each(
        function() {
            var trigger = $('.trigger', this);
            var form = $('.comment-form', this);
            var commentTxt = $('.comment-text', this);
            var counterTag = $('.comment-counter', this);
            var triggerTxt = trigger.html();
            var cancelBtn = $('.cancel-button', this);
            cancelBtn.click(function() {
                commentTxt.val('');
                form.css('display', 'none');
                counterTag.html('');
                counterTag.css('color', '#999');
                return false;
            });
		 
            trigger.click( function() {
                if (form.css('display') == 'block') {
                    trigger.css('fontWeight', 'normal');
                    form.css('display', 'none');
                    trigger.css('color', '#999999');
                } else {
                    trigger.css('fontWeight', 'bold');
                    form.css('display', 'block');
                    trigger.css('color', '#ff9966');
                }
                return false;
            });

        });

    // comment counter

    $('.comment-form')
    .each(
        function() {
            var textTag = $('.comment-text', this);
            var counterTag = $('.comment-counter', this);
            var limit = 500;
            textTag
            .keyup( function() {
                var text = textTag.val();
                var textlength = text.length;
                if (textlength > limit) {
                    counterTag
                    .html('You cannot write more than ' + limit + ' characters!');
                    textTag.val(text.substr(0, limit));
                    counterTag.css('color', '#f00');
                    return false;
                } else {
                    counterTag
                    .html('You have ' + (limit - textlength) + ' characters left.');
                    counterTag.css('color', '#999');

                    return true;

                }
            });

        });




    //tree like structure
    $('.tree-list li:last-child').addClass('last');
    //list
    $('.item-list li:last-child').addClass('last');
    $('.item-list tr:last-child').addClass('last');



    //box close button
    $('.close-btn').each(function(){$(this).click(function(){$(this).parents('.rbox').hide();})});



    if($('#footer').length ==1 && $(window).height() - 60 > $('#page').height()){
        $('#page').css('min-height', $(window).height() - 61 + 'px');
    }



})