<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mozaffari | Article</title>
        <link rel="icon" href="/assets/images/favicon.gif" type="image/gif" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="/assets/css/icomoon.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/portfolio.css">
        <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
    </head>

    <body>
        <?php include '../../partials/mini_header_nosearch.php' ?>

        <section id="portfolio" class="rtl">
            <div class="container">
                <div id="info">
                    <h1>JS Menu</h1>
                    <summary>
                    پروژه ای است متن باز برای طراحی و توسعه منوهای آبشاری پیچیده
                    </summary>
                </div>
                <div id="content">
                    <title>معرفی پروژه</title>
                    <p class="rtl">
                    روزی، در یک پروژه پنل مدیریتی، نیاز به این داشتیم که کاربر سیستم بتونه منوی آبشاری بسیار پیچیده ای رو بنا به خواست مجموعه، طراحی کنه و برای هر دکمه در اون مشخصه هایی رو وارد کنه. بنا براین، من این محصول رو طراحی کردم که توسط اون میشه به صورت نا محدود و کاملا شخصی سازی شده منوی آبشاری با عنوان و لینک مختص هر دکمه طراحی کرد و نتیجه رو به صورت یک فایل <code>JSON</code> در دیتابیس نگهداری کرد. این محصول یک بخش خواندن هم داره یعنی شما می تونید محتوای ذخیره شده در دیتابیس که به صورت یک رشته هست رو تحویل این کد بدید و همون منوهایی که قبلا طراحی کردید رو تحویل بگیرید یا دوباره شروع به ویرایش و تغییرشون کنین. 
                    </p>

                    <title>مزایا</title>
                    <p>
                    خوب خیلی واضحه، به چند دلیل. یکی اینکه طراحی کردن منوهای آبشاری با فرزند و والد های زیاد برای طراح های وب هم حتی ممکنه گیج کننده باشه. ولی این مشکل برطرف میشه اگر بتونن این کار رو به صورت تصویری انجام بدن نه مستقیما با کدهای <code>HTML</code>. دومین مسئله اینه که اگر بخواید بنا به هر دلیلی یک قسمت از اون رو ویرایش یا حذف و اضافه کنید خوب بازم به صورت گرافیکی کارتون خیلی راحت تر خواهد بود. مزیت سوم اینه که برای انتقال منو از وب سایت یا پنلی به وب سایت دیگر خیلی راحت فقط با انتقال اون رشته در دیتابیس میسره.
                    </p>

                    <title>پیش نمایش</title>
                    <div id="demo">
                        <p id="help">Click [ link ] to change it</p>
                        <div id="jsMenu">
                            <ul>
                                <li link="" title="" stat="link">
                                    <i>link</i>
                                    <input type="text" placeholder="http://">
                                    <span class="controller">
                                        <i class="icon-arrow-right"></i>
                                        <i class="icon-cross"></i>
                                        <i class="icon-arrow-down"></i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <textarea placeholder="Design menu and Push [EXPORT] button. Or paste json string here and push [IMPORT] button to view menu."></textarea>
                        <span>
                            <button id="export">EXPORT</button>
                            <button id="import">IMPORT</button>
                        </span>
                    </div>

                    <title class="pe">
                        ابزارهای استفاده شده
                    </title>
                    
                    <div class="ltr">
                        <img src="/assets/images/utilities/js.svg" alt="javascript" title="javascript">
                        <img src="/assets/images/utilities/html.svg" alt="html5" title="html5">
                        <img src="/assets/images/utilities/css.svg" alt="css" title="css">
                        <img src="/assets/images/utilities/jquery.svg" alt="jquery" title="jquery">
                    </div>

                    <title>آدرس گیت هاب</title>
                    <div class="original en">
                        <a href="https://github.com/mozaffariTabar/JsMenu" target="_blank"><i class="icon-github"></i> https://github.com/mozaffariTabar/JsMenu</a>
                    </div>

                    <title>راهنمای استفاده</title>
                    <video controls poster="poster.jpg">
                        <source src="jsmenu.mp4" type="video/mp4">
                    </video>

                    <title>
                        نمونه کد
                    </title>
                    <div lang="javascript" class="code colorize">
                        
                        <div class="definition">
                            <span class="keyword mr">var</span>
                            <span class="mr">example</span>
                            <span class="operator">=</span>
                            <span class="constant language">true</span>
                            <span>;</span>
                        </div>

                        <div class="function">
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
                        </div>

                    </div>

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
                    <div lang="javascript" class="code colorize">
                        
                        <div class="definition">
                            <span class="keyword mr">var</span>
                            <span class="mr">example</span>
                            <span class="operator">=</span>
                            <span class="constant language">true</span>
                            <span>;</span>
                        </div>

                        <div class="function">
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
                        </div>

                    </div>

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

        <script src="assets/js/demo.js"></script>
    </body>

</html>