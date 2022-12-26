var suggester_1 = document.querySelector('#search #suggester span:first-child');
var suggester_2 = document.querySelector('#search #suggester span:last-child');

var tags = document.querySelector('input[name=tags]').value.split(',');

document.querySelector('#search input[type=text]').addEventListener('keyup', function () {
    var suggest = '';

    this.value ?
        document.querySelector('.icon-cross').classList.add('on') :
        document.querySelector('.icon-cross').classList.remove('on');

    if (this.value == '') {
        suggester_1.innerHTML = '';
        suggester_2.innerHTML = '';
        return;
    }

    for (var i in tags) {
        var tag = tags[i];
        if (tag.indexOf(this.value) == 0) {
            suggest = tag;
            break;
        }
    }

    suggester_1.innerHTML = this.value;
    suggester_2.innerHTML = suggest.slice(this.value.length);
});

document.querySelector("#search .icon-cross").addEventListener('click', function () {
    document.querySelector('#search input[type=text]').value = '';
    suggester_1.innerHTML = '';
    suggester_2.innerHTML = '';
    this.classList.remove('on');
    document.querySelector("#search").submit();
});

// GET IN TOUCH
setInterval(function () {
    var articles = _("#contact ol").element;
    var container = _("#contact #articles").element;
    container.append(articles[0]);
}, 5000);