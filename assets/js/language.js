var en = [
	"about me",
	"portfolio",
	"contact me",
	"A small introduction about my self",
	"Hadi Mozaffari Tabar",
	"graphic artist and programmer",
	"Hello.",
	"I’m Hadi Mozaffari Tabar, I was born in 1362 in ZANJAN-IRAN. I completed my college degree in mechanics engineering in 2012. I met computer in 1994, and since I was a child in love with color and light, I quickly became absorbed into that amazing world. At first, I began to learn Qbasic and FoxPro programming languages and graphical software like Photoshop and 3dMax. Over time, my interest in learning new programming languages has increased. Therefore, I participated in several training courses such as problem solving and flowchart design, programming in PHP, C, JavaScript and designing databases in the language of MySQL and SQL-Server, which was organized by Iran's technical and vocational organization (TVTO). I was admitted to the university in 2004. Despite my interest in computer, I studied mechanics. But this position never prevented me from studying computer science. Since then, I have always tried to increase my knowledge by studying self-studying and participating in computer science companies. In this way, I've been so professional that I've done some complex projects in computer programming and corporate online dashboards. This trend has continued to this day. And it will continue to be.",
	"printable resume",
	"showcase of my latest works",
	"programming",
	"2d design",
	"3d design",
	"video games",
	"all",
	"get in touch",
	"Please feel free if you would like to have a chat!",
	"shoot a message!",
	"Your email ...",
	"Your name ...",
	"Your message ...",
	"send",
	"IRAN - Tehran - [ 35.727258, 51.304036 ]",
	"+98 912 342 2599",
	"technologies",
	"team",
	"contact details",
	"A free management web-app",
	"A free educational web-app",
	"An online historical 3d game",
	"An online 3d game",
	"A few 3D models for a online 3d game",
	"A 3d model for a short film",
	"A 3d promotional animation",
	"A musical motion graphic",
	"A hardware and a poultry management web-app",
	"An industrial computing software",
	"A restaurant management software",
	"A musical mobile game",
	"Designed logos",
	"visit website"
];

var pe = [
	"درباره من",
	"نمونه کارها",
	"تماس با من",
	"مختصری درباره زندگی کاری من",
	"هادی مظفری تبار",
	"گرافیست و برنامه نویس",
	"سلام.",
	"هادی مظفری تبار، متولد سال 1362 شهر زنجان هستم. تحصیلات دانشگاهی رو در سال 1391 در مقطع کارشناسی رشته مهندسی مکانیک جامدات به اتمام رسوندم. در سال 1373 با رایانه آشنا شدم و چون از کودکی عاشق رنگ و نور بودم، پس به سرعت جذب دنیای شگفت انگیز اون شدم. در ابتدا شروع به یادگیری زبان برنامه نویسی کیوبیسیک و فاکس پرو کردم و همچنین اندکی در زمینه طراحی گرافیک با نرم افزار هایی همچون فتوشاپ و تری دی مکس کار کردم. با مرور زمان علاقه ام به یادگیری مطالب جدید، بیشتر شد. از این رو در چند دوره آموزشی همچون اصول حل مسئله و طراحی فلوچارت، برنامه نویسی به زبان های  PHP, C, JavaScript و طراحی بانک های اطلاعاتی رابطه ای به زبان MySQL که سازمان فنی و حرفه ای برگزار میکرد، شرکت کردم. در سال 1383 در دانشگاه پذیرفته شدم و با وجود علاقه ام به کامپیوتر، در رشته مکانیک تحصیل کردم. اما این موضع هیچگاه برای من مانعی برای مطالعه علوم رایانه ای نبود. از آن زمان به بعد همواره تلاش کردم که به صورت خودخوان و با حضور در شرکت های مطرح کامپیوتری بر دانش خود در زمینه علوم رایانه ای بی افزایم. در این راه به حدی حرفه ای شده بودم که گاها پروژه های فریلنسری خوبی را نیز در زمینه برنامه نویسی بازی های کامپیوتری و داشبورهای آنلاین شرکتی انجام دادم. این روند تا به امروز ادامه داشته و همچنان خواهد داشت.",
	"رزومه قابل پرینت",
	"برخی از آثار من",
	"برنامه نویسی",
	"طراحی دو بعدی",
	"طراحی سه بعدی",
	"بازی ویدئویی",
	"همه",
	"در تماس باشید",
	"حتی اگر دوست دارید که با هم گپی بزنیم!",
	"ارسال نامه الکترونیکی",
	"آدرس ایمیل شما ...",
	"نام و نام خانوادگی شما ...",
	"پیغامی که می خواهید برایم ارسال کنید ...",
	"ارسال شود",
	"ایران - تهران - [35.727258 , 51.304036]",
	"2599 342 912 98+",
	"تکنولوژی ها",
	"تیم طراحی",
	"اطلاعات تماس",
	"نرم افزار مدیریت پروژه تحت وب",
	"نرم افزار تقویت حافظه تحت وب",
	"بازی تاریخی تحت وب",
	"بازی صنعتی،آموزشی تحت وب",
	"چند مدل سه بعدی صنعتی",
	"مدل سه بعدی یک فیلم کوتاه",
	"انیمیشن تبلیغاتی",
	"موشن گرافیک موزیکال",
	"سخت افزار و پنل مدیریتی مرغداری",
	"نرم افزار محاسباتی صنعتی",
	"نرم افزار مدیریت رستوران",
	"بازی موبایلی موزیکال",
	"لوگوهای طراحی شده",
	"مشاهده وب سایت"
];

$(document).on("click","#lang-select img:not(.active)",function(){
	var from;
	var to;
	$(".translate").each(function() {
		var type = $(this).prop('nodeName');
		switch (type) {
			case "IMG":
				var text = $(this).attr("alt");
				break;
			case "INPUT":
				var text = $(this).attr("placeholder");
				break;
			case "TEXTAREA":
				var text = $(this).attr("placeholder");
				break;
			default :
				var text = $(this).html();
		}
		from = $("body").hasClass("en") ? "en" : "pe";
		to = from == "en" ? "pe" : "en";
	  var index = window[from].lastIndexOf(text);
	  var newText = index > -1 ? window[to][index] : text;
		switch (type) {
			case "IMG":
				$(this).attr("alt",newText);
				break;
			case "INPUT":
				$(this).attr("placeholder",newText);
				break;
			case "TEXTAREA":
				$(this).attr("placeholder",newText);
				break;
			default :
				$(this).html(newText);
		}
	});
	if (to == "en") {
		$(".container").css({"direction":"ltr","text-align":"left"});
	} else
	if (to == "pe") {
		$(".container").css({"direction":"rtl","text-align":"right"});
	}
	$("#header-title").attr("src","assets/images/header-title-"+to+".png");
	$(this).addClass("active").siblings().removeClass("active");
	$("body").removeClass().addClass($(this).attr("dir")).addClass($(this).attr("lang"));
	loadProductDetails();
});
