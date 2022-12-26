var products = {};
var productId = 0;

$(document).ready(function(){
    // load products
    $.post("assets/php/loadProducts.php",function(data){
        products = JSON.parse(data);
        renderProduccts();
    });
    $("#portfolio-present .fa-remove").click(function(){
        $("#portfolio-present video")[0].pause();
        $("#portfolio-present").fadeOut();
        $("html, body").css("overflow","unset");
    });
    $(".menuItem a").click(function(){
        $("html, body").css("overflow","unset");
        $("#portfolio-present").fadeOut();
    });
});


$(document).on("click",".portfolioContainer li",function(){
    $("html, body").css("overflow","hidden");
    productId = $(this).attr("index");
    $("#portfolio-present").fadeIn();
    loadProductDetails();
});

function renderProduccts() {
    for (i in products) {
        var product = '<li class="'+products[i]._tags+' col-xs-6 col-sm-4 col-md-3 col-lg-3" index="'+i+'"><div class="lightCon"><span class="hoverBox"><span class="smallIcon zoom"><i class="fa fa-search-plus fa-2x"></i></span></span><img class="translate" src="assets/images/products/'+products[i]._id+'.jpg" alt="'+products[i]._intro_desc_en+'"></div></li>';
        $(".portfolioContainer").prepend(product);
    }
}

function loadProductDetails() {
    var product = products[productId];
    var lang = $("body").hasClass("en") ? "en" : "pe";
    $("#portfolio-present #intro-title").html(product["_intro_title_"+lang]);
    $("#portfolio-present #intro-desc").html(product["_intro_desc_"+lang]);
    $("#portfolio-present #intro-text").html(product["_intro_text_"+lang]);
    $("#portfolio-present #tech-text").html(product._tech_text);
    $("#portfolio-present #link").css("display","none");
    if (product._link.length > 0) {
        $("#portfolio-present #link").css("display","inline-flex").attr("href",product._link);
    }
    $("#portfolio-present video").attr("src","assets/videos/"+productId+".mp4");
    $("#portfolio-present video").attr("poster","assets/videos/"+productId+"_poster.jpg")[0].load().play();
}