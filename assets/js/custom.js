$(window).load(function () {

  var $container = $('.portfolioContainer');
  $container.isotope({
    filter: '*',
    animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    }
  });

  $('.portfolioFilter a').click(function () {
    $('.portfolioFilter .current').removeClass('current');
    $(this).addClass('current');
    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    return false;
  });

});

// page scroll
$('a[href*=#]:not([href=#])').click(function () {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top - 60
      }, 1000);
      return false;
    }
  }
});

$(document).ready(function () {
  $(".nextSection").click(function () {
    var active = $(this).parent().find(".active");
    if (active.next().length > 0) {
      active.next().find("a").click();
      if ($(this).parent().find(".active").next().next().length == 0) {
        $(".nextSection .fa").removeClass("fa-chevron-down fadeInDown").addClass("fa-chevron-up fadeOutUp");
      }
    } else {
      $(this).parent().find("li:not(.nextSection)").first().find("a").click();
      $(".nextSection .fa").removeClass("fa-chevron-up fadeOutUp").addClass("fa-chevron-down fadeInDown");
    }
  });
  // send message
  $("form#contact .bottom_div").click(function () {
    var btn = $(this);
    $.post("assets/php/contact.php", $("form#contact").serialize(), function (data) {
      if (data == "ok") {
        btn.find(".translate").html($("body").hasClass("en") ? "Your message has been sent" : "پیغام شما ارسال شد");
        $("form#contact").find("input, textarea").val("");
        setTimeout(function () {
          btn.find(".translate").html($("body").hasClass("en") ? "send" : "ارسال");
        }, 3000);
      }
    });
  });
});