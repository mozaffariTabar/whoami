<?php
    $article = substr($_SERVER['REQUEST_URI'], 10, -1);
    $path = $_SERVER['DOCUMENT_ROOT'] . "/articles/" . substr($_SERVER['REQUEST_URI'], 10, -1) ."/info.xml";
    $info = (array) simplexml_load_file($path);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mozaffari | Article</title>
        <link rel="icon" href="/assets/images/favicon.gif" type="image/gif" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="/assets/css/icomoon.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/article.css">
    </head>

    <body>
        <?php include '../../partials/mini_header.php' ?>

        <section id="article" class="rtl">
            <div class="container">
                <div id="info">
                    <h1>Rebase چیست؟</h1>
                    <a target="_blank" href="<?php echo $info['source']->link ?>">منبع: <?php echo $info['source']->title ?></a>/
                    <span>ترجمه: <?php echo $info['translator'] ?></span>/
                    <span class="ltr"><?php echo $info['date'] ?></span>
                    <summary>لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
                    </summary>
                </div>
                <div id="content">
                    <title class="pe">
                        نام
                    </title>
                    <p>
                    Reapply commits on top of another base tip
                    دوباره روی نوک پایه دیگر متعهد شوید
                    </p>
                    <p class="original en">
                        <em>git-rebase</em>
                    </p>
                    <title class="pe">
                        خلاصه
                    </title>
                    <div class="original en">
                        <div class="line">
                            <em>git cherry-pick</em> 
                            <span>[--edit] [-n] [-m parent-number] [-s] [-x] [--ff]</span>
                        </div>
                        <div class="line">
                            <span class="t2">[-S[&lt;keyid&gt;]] &lt;commit&gt;…&#8203;</span>
                        </div>
                        <div class="line">
                            <em>git cherry-pick</em> 
                            <span>(--continue | --skip | --abort | --quit)</span>
                        </div>
                    </div>
                    <title>
                        معرفی
                    </title>
                    <p>
                        اگر &lt;commit&gt; تعریف شده باشد، rebase به صورت اتوماتیک 
                        <code>git switch &lt;branch&gt;</code>
                        را قبل از هر چیزی آماده خواهد شد. در غیر اینصورت در شاخه فعلی باقی خواهد ماند. 
                        <code>git switch <branch></code>
                    اگر <branch> مشخص شود ، rebit git قبل از انجام هر کار دیگری ، سوئیچ گیت اتوماتیک <branch> را انجام می دهد. در غیر این صورت در شعبه فعلی باقی مانده است.

اگر <upstream> مشخص نشده باشد ، بالادست در شعبه پیکربندی شده است. <name> .remote و شاخه. <name>. از گزینه هایmerge استفاده خواهد شد (برای جزئیات به git-config [1] مراجعه کنید) و گزینه --fork-point مفروض است. اگر در حال حاضر در هیچ شاخه ای نیستید و یا اگر شعبه فعلی دارای بالادست پیکربندی نشده باشد ، تخفیف تخفیف می یابد.

کلیه تغییرات انجام شده توسط تعهدات موجود در شعبه فعلی اما در <upstream> در یک منطقه موقت ذخیره نمی شوند. این همان مجموعه ای از تعهدات است که می تواند توسط git log <upstream> نشان داده شود. HEAD؛ یا با استفاده از git log 'fork_point' .. HEAD ، در صورت فعال بودن نقطه -فروش (دیدن توضیحات در - قسمت زیر) را مشاهده کنید. اگر گزینه --root مشخص شده است یا با git log HEAD.

اگر گزینه --onto تأمین شود ، شاخه فعلی به <upstream> یا <newbase> بازنشانی می شود. این دقیقاً همان تأثیر را دارد که git reset --hard <upstream> (یا <newbase>). قبل از تنظیم مجدد ، ORIG_HEAD در نوک شاخه قرار دارد.

تعهدی که قبلاً در منطقه موقت ذخیره شده بود ، دوباره به ترتیب به شعبه فعلی ، یک به یک ، استفاده می شود. توجه داشته باشید که هرگونه تعهد در HEAD که تغییرات متنی مشابه را با عنوان تعهد در HEAD وارد می کند ، حذف خواهد شد. (یعنی ، وصله ای که قبلاً از طریق بالادست با یک پیام متعهد متفاوت پذیرفته شده باشد یا منتقل می شود).

این امکان وجود دارد که یک نقص ادغام باعث شود که این روند کاملاً اتوماتیک نباشد. شما باید هرگونه خرابی ادغام را برطرف کرده و rebit git را اجرا کنید - ادامه دهید. گزینه دیگر دور زدن تعهدی است که باعث عدم موفقیت ادغام با rebit git --skip شد. برای بررسی اصلی <branch> و حذف پرونده های کاری .git / rebase-اعمال ، از عوض دستور git rebase استفاده کنید.

فرض کنید تاریخچه زیر وجود داشته باشد و شعبه فعلی "موضوع" است:
                    </branch>
                    <title>
                        نمونه کد
                    </title>
                    <p>
                    لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
                    </p>
                    <ul lang="javascript" class="code colorize">
                        
                        <li class="definition">
                            <span class="keyword mr">var</span>
                            <span class="mr">example</span>
                            <span class="operator">=</span>
                            <span class="constant language">true</span>
                            <span>;</span>
                        </li>

                        <li class="function">
                            <span class="keyword mr">function</span>
                            <span class="name mr">foo</span>
                            <span>(arg) {</span>
                            <span class="line">
                            <span class="t1">console.</span>
                            <span class="method mr">log</span>
                            <span>(</span>
                            <span class="string">"do"</span>
                            <span class="mr">,</span>
                            <span>arg);</span>
                            <span class="line">
                            <span class="t1 mr">arg</span>
                            <span class="operator mr">=</span>
                            <span>example ? </span>
                            <span class="constant">true</span>
                            <span class="mr">:</span>
                            <span class="constant">false</span>
                            <span>;</span>
                            <span class="line">
                            <span class="operator t1 mr">return</span> arg;
                            <span class="line">
                            <span>}</span>
                        </li>

                    </ul>

                    <div class="terminal">
                        <span class="line">
                            <span>git cherry-pick</span>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <?php include '../../partials/relative.php' ?>
        <?php include '../../partials/contact.php' ?>
        <?php include '../../partials/utility.php' ?>
        <?php include '../../partials/footer.php' ?>	
    </body>

</html>