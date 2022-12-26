<?php
    $page = isset($_GET['p']) ? (int) $_GET['p'] : 1;
    if ($page < 1) $page = 1;
    if (!isset($_GET['key'])) $_GET['key'] = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="/assets/images/favicon.gif" type="image/gif" sizes="16x16">
    <title>Articles</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/articles.css">
</head>

<body>

    <?php include '../partials/mini_header.php' ?>

    <section id="articles">
        <?php
            $articles = array_diff(scandir('../articles'), ['.', '..', 'index.php']);
                        
            foreach ($articles as $key => $article) {
                $path = $_SERVER['DOCUMENT_ROOT'] . "/articles/$article/info.xml";
                if (file_exists($path)) {
                    $info = (array) simplexml_load_file($path);

                    if (strlen($_GET['key']) > 0)
                        if (strpos($info['tags'], strtolower($_GET['key'])) === false)
                            unset($articles[$key]);
                }
            }

            rsort($articles);

            $articles = array_slice($articles, ($page - 1) * 9, 9); 
        ?>

        <div class="container<?php if (count($articles) == 0) echo ' empty' ?>"><?php            
            foreach ($articles as $key => $article) {
                $path = $_SERVER['DOCUMENT_ROOT'] . "/articles/$article/info.xml";
                if (file_exists($path)) {
                    $info = (array) simplexml_load_file($path);                      
                    echo "
                        <a class=\"card\" href=\"$article\">
                            <span class=\"text\">
                                <span class=\"title\">" . $info['title'] . "</span>
                                <span class=\"root\">" . $info['root'] . "</span>
                            </span>
                            <span class=\"cover\"></span>
                            <img src=\"/articles/$article/cover.jpg\" alt=\"\">
                        </a>
                    ";
                }
            }
        ?><span id="empty">There is NO article about "<?php echo $_GET['key'] ?>"</span></div>
        <input type="hidden" name="tags" value="<?php echo implode(',', $all_tags) ?>">
    </section>
    
    <nav>
        <div class="container"><?php
                $list = [$page - 1, $page, $page + 1];

                if ($list[0] < 1) {
                    $list = array_map(function($item){
                        return $item + 1;
                    }, $list);
                }
                
                $len = count(array_diff(scandir('../articles'), ['.', '..', 'index.php']));
                $list = array_slice($list, 0, ceil($len / 9));
                $key = strlen($_GET['key']) == 0 ? false : $_GET['key']; 

                foreach($list as $item) {
                    if ($item == $page) {
                        echo '<a class="active">
                            <span>' . $item . '</span>
                        </a>';
                    } else {
                        echo '<a href="?p=' . $item . ($key ? '&key=' . $_GET['key'] : '') . '">
                            <span>' . $item . '</span>
                        </a>';
                    }
                }
            ?></div>
    </nav>

    <?php
        include '../partials/contact.php';
        include '../partials/utility.php';
        include '../partials/footer.php';
    ?>  

</body>

</html>