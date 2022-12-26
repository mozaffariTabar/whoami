function _(selector) {
    var new_element = new element;
    return new_element.get(selector);
}

function element() {
    this.element;

    this.get = function (selector) {
        if (typeof selector == 'string') {
            this.element = document.querySelectorAll(selector);
            if (this.element.length == 1)
                this.element = this.element[0];

        }
        if (typeof selector == 'object')
            this.element = selector;
        return this;
    };

    this.addClass = function (className) {
        if (this.element == undefined)
            return this;

        this.element.length > 1 ?
            this.element.forEach(function (elem) {
                elem.classList.add(className);
            }) :
            this.element.classList.add(className);

        return this;
    };

    this.removeClass = function (className) {
        this.element.length > 1 ?
            this.element.forEach(function (elem) {
                elem.classList.remove(className);
            }) :
            this.element.classList.remove(className);

        return this;
    };

    this.attr = function (prop, val = null) {
        if (val) {
            this.element.setAttribute(prop, val);
            return this;
        } else {
            return this.element.getAttribute(prop);
        }
    };

    this.html = function (val = null) {
        if (val != null) {
            this.element.innerHTML = val;
            return this;
        } else {
            return this.element.innerHTML;
        }
    };

    this.hide = function () {
        this.element.style.display = 'none';
        return this;
    };

    this.show = function () {
        this.element.style.display = 'inline';
        return this;
    };
}