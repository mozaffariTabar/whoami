<section id="utilities">
    <div class="container">
        <h1 class="translate">my utilities</h1>
        <h2 class="translate">What I use</h2>
        <div>
            <a href="https://www.w3.org/html/" target="_blank">
                <img src="/assets/images/utilities/html.svg" alt="html5">
                <span>HTML5</span>
            </a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
                <img src="/assets/images/utilities/js.svg" alt="javascript">
                <span>JavaScript</span>
            </a>
            <a href="https://www.w3.org/Style/CSS/Overview.en.html" target="_blank">
                <img src="/assets/images/utilities/css.svg" alt="css">
                <span>CSS</span>
            </a>
            <a href="https://sass-lang.com/" target="_blank">
                <img src="/assets/images/utilities/sass.svg" alt="sass">
                <span>SASS</span>
            </a>
            <a href="https://getbootstrap.com/" target="_blank">
                <img src="/assets/images/utilities/bootstrap.svg" alt="bootstrap">
                <span>Bootstrap</span>
            </a>
            <a href="https://reactjs.org/" target="_blank">
                <img src="/assets/images/utilities/reactjs.svg" alt="reactjs">
                <span>ReactJs</span>
            </a>
            <a href="https://jquery.com/" target="_blank">
                <img src="/assets/images/utilities/jquery.svg" alt="jquery">
                <span>JQuery</span>
            </a>
            <a href="https://redux.js.org/" target="_blank">
                <img src="/assets/images/utilities/redux.svg" alt="redux">
                <span>Redux</span>
            </a>
            <a href="https://jestjs.io/" target="_blank">
                <img src="/assets/images/utilities/jest.svg" alt="jest">
                <span>Jest</span>
            </a>
            <a href="https://webpack.js.org/" target="_blank">
                <img src="/assets/images/utilities/webpack.svg" alt="webpack">
                <span>Webpack</span>
            </a>
            <a href="https://babeljs.io/" target="_blank">
                <img src="/assets/images/utilities/babel.svg" alt="babel">
                <span>Babel</span>
            </a>
            <a href="https://www.mysql.com/" target="_blank">
                <img src="/assets/images/utilities/mysql.svg" alt="mysql">
                <span>MySql</span>
            </a>
            <a href="https://www.mongodb.com/" target="_blank">
                <img src="/assets/images/utilities/mongodb.svg" alt="mongodb">
                <span>MongoDB</span>
            </a>
            <a href="https://redis.io/" target="_blank">
                <img src="/assets/images/utilities/redis.svg" alt="redis">
                <span>Redis</span>
            </a>
            <a href="https://graphql.org/" target="_blank">
                <img src="/assets/images/utilities/graphql.svg" alt="graphql">
                <span>GraphQL</span>
            </a>
            <a href="https://expressjs.com/" target="_blank">
                <img src="/assets/images/utilities/expressjs.svg" alt="expressjs">
                <span>Express</span>
            </a>
            <a href="https://aws.amazon.com/" target="_blank">
                <img src="/assets/images/utilities/aws.svg" alt="aws">
                <span>AWS</span>
            </a>
            <a href="https://www.docker.com/" target="_blank">
                <img src="/assets/images/utilities/docker.svg" alt="docker">
                <span>Docker</span>
            </a>
            <a href="https://nodejs.org/" target="_blank">
                <img src="/assets/images/utilities/nodejs.svg" alt="nodejs">
                <span>NodeJs</span>
            </a>
            <a href="https://www.php.net/" target="_blank">
                <img src="/assets/images/utilities/php.svg" alt="php">
                <span>PHP</span>
            </a>
            <a href="https://laravel.com/" target="_blank">
                <img src="/assets/images/utilities/laravel.svg" alt="laravel">
                <span>Laravel</span>
            </a>
            <a href="https://www.python.org/" target="_blank">
                <img src="/assets/images/utilities/python.svg" alt="python">
                <span>Python</span>
            </a>
            <a href="https://www.gnu.org/software/gnu-c-manual/gnu-c-manual.html" target="_blank">
                <img src="/assets/images/utilities/c.svg" alt="c">
                <span>C (GNU)</span>
            </a>
            <a href="https://git-scm.com/" target="_blank">
                <img src="/assets/images/utilities/git.svg" alt="git">
                <span>GIT</span>
            </a>
            <a href="https://github.com/" target="_blank">
                <img src="/assets/images/utilities/github.svg" alt="github">
                <span>GitHub</span>
            </a>
            <a href="https://ubuntu.com/" target="_blank">
                <img src="/assets/images/utilities/ubuntu.svg" alt="ubuntu">
                <span>Ubuntu</span>
            </a>
            <a href="https://www.microsoft.com/en-us/windows/" target="_blank">
                <img src="/assets/images/utilities/windows.svg" alt="windows">
                <span>Windows</span>
            </a>
            <a href="https://www.adobe.com/products/photoshop.html" target="_blank">
                <img src="/assets/images/utilities/photoshop.svg" alt="photoshop">
                <span>Photoshop</span>
            </a>
            <a href="https://www.adobe.com/products/xd.html" target="_blank">
                <img src="/assets/images/utilities/xd.svg" alt="adobe xd">
                <span>Adobe XD</span>
            </a>
            <a href="https://slack.com/" target="_blank">
                <img src="/assets/images/utilities/slack.svg" alt="slack">
                <span>Slack</span>
            </a>
            <a href="https://www.blender.org/" target="_blank">
                <img src="/assets/images/utilities/blender3d.svg" alt="blender3d">
                <span>Blender3D</span>
            </a>
            <a href="https://unity.com/" target="_blank">
                <img src="/assets/images/utilities/unity3d.svg" alt="unity3d">
                <span>Unity3D</span>
            </a>
            <a href="https://ml5js.org/" target="_blank">
                <img src="/assets/images/utilities/ml5.svg" alt="ml5">
                <span>Ml5</span>
            </a>
        </div>
    </div>
</section>

<script>
setInterval(function () {
    var utilities = document.querySelectorAll('#utilities a');
    var container = document.querySelector('#utilities .container > div');
    var last_util = utilities[utilities.length - 1];

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
</script>