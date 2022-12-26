<section id="contact">
    <div class="container">
        <h1 class="translate">get in touch</h1>
        <h2 class="translate">Please feel free if you would like to have a chat!</h2>
        <ul>
            <li>
                <span>contacts</span>
                <a href="tel:00989123422599">
                    <i class="icon-phone"></i>
                    0098<mark>-</mark>912<mark>-</mark>342<mark>-</mark>2599
                </a>
                <a href="mailto:mozaffaritabar.h@gmail.com">
                    <i class="icon-at-sign"></i>
                    mozaffariTabar.h <mark>[at]</mark> gmail <mark>[dot]</mark> com
                </a>
                <a href="mailto:hi@hadimozaffari.ir">
                    <i class="icon-at-sign"></i>
                    hi <mark>[at]</mark> hadiMozaffari <mark>[dot]</mark> ir
                </a>
            </li>
            <li>
                <span>links</span>
                <a href="https://www.linkedin.com/in/mozaffaritabar/" target="_blank">
                    <i class="icon-linkedin"></i>
                    linkedin
                </a>
                <a href="https://github.com/mozaffariTabar" target="_blank">
                    <i class="icon-github"></i>
                    github
                </a>
                <a href="https://stackoverflow.com/users/10028399/hadi-mozaffari-tabar" target="_blank">
                    <i class="icon-stackoverflow"></i>
                    stackoverflow
                </a>
                <a href="https://join.skype.com/invite/e8DX00JR4T2p" target="_blank">
                    <i class="icon-skype"></i>
                    skype
                </a>
                <a href="https://www.instagram.com/mozaffaritabar.h/" target="_blank">
                    <i class="icon-instagram"></i>
                    instagram
                </a>
            </li>
            <li>
                <span>articles</span>
                <div>
                    <ul id="articles">
                        <?php
                            $articles = array_diff(scandir($_SERVER['DOCUMENT_ROOT'] . '/articles'), ['.', '..', 'index.php']);
                            rsort($articles);
                            foreach ($articles as $article) {
                                $info = (array) simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . "/articles/$article/info.xml");
                                echo "
                                    <ol>
                                        <a href=\"articles/$article\">
                                            <i class=\"icon-circle\"></i>
                                            " . $info['title_full'] . "
                                        </a>
                                    </ol>
                                ";
                            }
                        ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</section>

<script>
if (document.querySelectorAll("#contact ol").length > 5)
    setInterval(function () {
        var articles = document.querySelectorAll("#contact ol");
        var container = document.querySelector("#contact #articles");
        container.append(articles[0]);
    }, 5000);
</script>