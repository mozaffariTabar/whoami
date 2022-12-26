var sections = _('section').element;
var menu_items = _('#menu li').element;
var current_section = 0;

window.addEventListener('scroll', function () {
    current_section = 0;
    sections.forEach(function (elem, i) {
        if (window.scrollY + 80 > elem.offsetTop)
            current_section = i + 1;
    });

    if (window.scrollY + 80 > window.innerHeight) {
        _('#menu').addClass('fix');
    } else {
        _('#menu').removeClass('fix');
        current_section = 0;
    }

    menu_items.forEach(function (element) {
        _(element).removeClass('active')
    });

    if (current_section) {
        _(menu_items[current_section]).addClass('active');
    } else {
        _(menu_items[0]).addClass('active');
    }

    current_section == 4 ?
        menu_items[0].classList.add('reverse') :
        menu_items[0].classList.remove('reverse');

});

// HEADER
typewrite_header();
var typewrite_timeout;
var timeout_1;
var timeout_2;

function typewrite(element, html, index = 0) {
    element.html(html.slice(0, index));

    if (index < html.length) {
        clearTimeout(typewrite_timeout);
        typewrite_timeout = setTimeout(function () {
            typewrite(element, html, ++index)
        }, 100);
    }
}

function typewrite_header() {
    var h1 = _('header h1');
    var h2 = _('header h2');
    var gender = _('header i');

    h1.html('');
    h2.html('');
    gender.removeClass('on');

    typewrite(h1, h1.attr('name'));
    clearTimeout(timeout_1);
    clearTimeout(timeout_2);

    timeout_1 = setTimeout(function () {
        typewrite(h2, h2.attr('name'));
    }, 1500);

    timeout_2 = setTimeout(function () {
        gender.addClass('on');
    }, 5000);
}

_('header #sign > div').element.addEventListener('click', function () {
    typewrite_header()
});

_('#menu li').element[0].addEventListener('click', function () {
    current_section++;
    if (current_section > 4)
        current_section = 1;

    _('section').element[current_section - 1].scrollIntoView();
    _('#menu').removeClass('open');

});

_('#menu li').element.forEach(function (btn) {
    btn.addEventListener('click', function () {
        _('#menu').removeClass('open');
        _('#menu #close').element.classList.remove('on');
    });
});

_('#menu #close').element.addEventListener('click', function () {
    if (this.classList.contains('on')) {
        this.classList.remove('on');
        setTimeout(function () {
            _('#menu').removeClass('open');
        }, 500);
    } else {
        this.classList.add('on');
        setTimeout(function () {
            _('#menu').addClass('open');
        }, 500);
    }
});


// PORTFOLIO
var portfolio_items = _('#portfolio a').element;
_('#portfolio li').element.forEach(function (btn) {
    btn.addEventListener('click', function () {
        _('#portfolio li').element.forEach(function (elem) {
            elem.classList.remove('active');
        });
        btn.classList.add('active');
        var btn_tag = this.getAttribute('tag');
        portfolio_items.forEach(function (item) {
            item.classList.remove('on');
            var item_tag = item.getAttribute('tag');
            if (item_tag.lastIndexOf(btn_tag) > -1 || btn_tag == 'all')
                item.classList.add('on');
        });
    });
});

// GET IN TOUCH
setInterval(function () {
    var articles = _("#contact ol").element;
    var container = _("#contact #articles").element;
    console.log();

    container.append(articles[0]);
}, 5000);

// UTILITIES
setInterval(function () {
    var utilities = _("#utilities a").element;
    var last_util = utilities[utilities.length - 1];
    var container = _("#utilities .container > div").element;

    container.classList.remove('anim');
    container.style['margin-left'] = -(last_util.offsetWidth + 30) + 'px';
    container.prepend(last_util);

    setTimeout(function () {
        container.classList.add('anim');
        container.style['margin-left'] = '0';
    }, 100);

}, 2000);


function animate(elem, props, delay, ease = 'linear') {
    var transitions = [];
    for (var i in props)
        transitions.push(i + ' ' + delay + 'ms ' + ease);

    for (var i in props) {
        elem.style.transition = transitions.join(',');
        elem.style[i] = props[i];
    }
}