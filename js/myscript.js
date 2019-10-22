$(document).ready(function () {
  $(".js-example-basic-single").select2();

  $(".shipping-country-box").select2();

  $(".dropdown-menu li a").click(function () {
    $(this).parents(".dropdown").find('.country-menue-btn').html($(this).text() + ' <span class="caret"></span>');
    $(this).parents(".dropdown").find('.country-menue-btn').html($(this).html());
  });

  $('.variable').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false
  });

  if ($(window).width() <= 1200) {
    $("#demo").removeClass("show");
    $("#search").addClass("mobile-search");
  }

  if ($(window).width() <= 992 && $(window).width() >= 768) {
    $("#ban-bot-img-sec").addClass("no-gutters");
    $(".ban-bot-img1").attr("src", "./images/myImages/robot (1).png");
    $(".ban-bot-img1").css("top", "15%");
    $(".ban-bot-img1").css("left", "55%");
    $(".ban-bot-img2").attr("src", "./images/myImages/gun (1).png");
    $(".ban-bot-img3").attr("src", "./images/myImages/car (1).png");
  }

  if ($(window).width() <= 768) {
    $("#logo").addClass("d-flex justify-content-center");
    $("#logo").css('margin-bottom', '15px');
  }


  $(".trigger-mobile-drop-btn").on('click', function () {
    $('.mobile-top-nav-sec').toggle();
  });

  $(".icon").click(function () {
    $("#mobile").css("width", "250px");
  });

  $(".closebtn").click(function () {
    $("#mobile").css("width", "0px");
  });

  //slick for brands

  $(".brands-slide").slick({
    dots: false,
    infinite: true,
    variableWidth: true
  });

  $('.responsive-brands-carousel').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  //ends slick for brands

  //related products slide on detail page
  $('.related-products-slide').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  //related products slide on detail page ends

  $('.sli-for-pro-detail').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    accessibility: false,
    asNavFor: '.sli-pro-detail',
    autoplay: true
  });

  $('.sli-pro-detail').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.sli-for-pro-detail',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    accessibility: false,
    infinite: true,
    centerPadding: '0px'
  });

  //accordion collapse screen scroll

  $('#accordionExample .collapse').on('show.bs.collapse', function (e) {
    var $card = $(this).closest('.card');
    var $open = $($(this).data('parent')).find('.collapse.show');

    var additionalOffset = 0;
    if ($card.prevAll().filter($open.closest('.card')).length !== 0) {
      additionalOffset = $open.height();
    }
    $('html,body').animate({
      scrollTop: $card.offset().top - additionalOffset
    }, 500);
  });

  //ends

  $("#card-pay").on('click', function () {
    $(".payment-method").css('display', 'block');
  });

  $("#cash-pay,#paypal").on('click', function () {
    $(".payment-method").css('display', 'none');
  });



  $('input:radio[name="shipp-address"]').change(

    function () {
      if ($(this).val() == "shipp-exist-address") {
        $(".existing-add-input").css('display', 'block');
        $('.ship-det-feilds').css('display', 'none');
      } else {
        $(".existing-add-input").css('display', 'none');
        $('.ship-det-feilds').css('display', 'block');
      }
    });

});