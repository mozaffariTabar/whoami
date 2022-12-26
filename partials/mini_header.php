<header>
    <div class="container">
        <a href="/">
            <h1>HADI MOZAFFARI</h1>
            <i class="icon-gender on"></i>
            <h2>Front-end / Back-end Web-developer</h2>
        </a>
        <form id="search" method="get">
            <button class="icon-search"></button>
            <i class="icon-cross<?php if (@strlen($_GET['key']) > 0) echo ' on' ?>"></i>
            <input type="hidden" name="p" value="1">
            <input type="text" name="key" value="<?php if (isset($_GET['key'])) echo $_GET['key'] ?>" placeholder="Search keyword ...">
            <span id="suggester">
                <span></span>
                <span></span>
            </span>
        </form>
        <?php
            $articles = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . '/articles'), ['.', '..', 'index.php']);
            $all_tags = [];
            
            foreach ($articles as $key => $article) {
                $path = $_SERVER['DOCUMENT_ROOT'] . "/articles/$article/info.xml";
                if (file_exists($path)) {
                    $info = (array) simplexml_load_file($path);
                    $tags = explode(',', $info['tags']);
                
                    if ($tags)
                        foreach($tags as $tag)
                            if (!in_array($tag, $all_tags))
                                array_push($all_tags, $tag);
                }
            }
        ?>
        <input type="hidden" name="tags" value="<?php echo implode(',', $all_tags) ?>">
    </div>
</header>

<script>
    var suggester_1 = document.querySelector('#search #suggester span:first-child');
    var suggester_2 = document.querySelector('#search #suggester span:last-child');

    var tags = document.querySelector('input[name=tags]').value.split(',');
    var input = document.querySelector('#search input[type=text]');

    input.addEventListener('focus', function () {
        document.getElementById('suggester').style.opacity = '1';
        document.getElementById('search').classList.add('focus');
    });
    
    input.addEventListener('blur', function () {
        document.getElementById('suggester').style.opacity = '0';
        document.getElementById('search').classList.remove('focus');
    });

    input.addEventListener('keyup', function () {
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
        input.value = '';
        suggester_1.innerHTML = '';
        suggester_2.innerHTML = '';
        this.classList.remove('on');
        document.querySelector("#search").submit();
    });
</script>