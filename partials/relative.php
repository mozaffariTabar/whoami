<section id="relative">
    <div class="container">
        <h1 class="translate">related articles</h1>
        <h2 class="translate">Tips and useful Articles about IT</h2>
        <div>
            <?php
                $tags = explode(',', $info['tags']);
                $articles = array_diff(scandir('../../articles'), ['.', '..', 'index.php']);
                $selected = [];
                            
                foreach ($articles as $key => $article) {
                    $path = $_SERVER['DOCUMENT_ROOT'] . "/articles/$article/info.xml";
                    if (file_exists($path)) {
                        $info = (array) simplexml_load_file($path);

                        if (count(array_intersect($tags, explode(',', $info['tags']))) > 0)
                            array_push($selected, $article);
                    }
                }

                shuffle($selected);
                
                $selected = array_slice($selected, 0, 3);

                foreach ($selected as $article) {
                    $path = $_SERVER['DOCUMENT_ROOT'] . "/articles/$article/info.xml";
                    $info = (array) simplexml_load_file($path);
                    echo "
                        <a class=\"card\" href=\"/articles/$article\">
                            <span class=\"text\">
                                <span class=\"title\">" . $info['title'] . "</span>
                                <span class=\"root\">" . $info['root'] . "</span>
                            </span>
                            <span class=\"cover\"></span>
                            <img src=\"/articles/$article/cover.jpg\" alt=\"\">
                        </a>
                    ";
                }
                            

            ?>
        </div>
    </div>
</section>