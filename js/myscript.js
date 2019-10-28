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


  $('.alert').alert();

  //ajax call to add cart
  $(".add-cart a").on("click", function (event) {
    event.preventDefault();

    var href = $(this).attr("href");

    $.ajax({
      url: href,
      type: 'post',
      dataType: 'json',
      success: function (json) {
        $(".cart-count").html(json.count);

        if (json.msg == '') {
          message = "Product added to cart successfully !";
        } else {
          message = json.msg;
        }

        $(".notification-msg").html(message);
        $("body").addClass("show-notification");

        setTimeout(function () {
          $("body").removeClass("show-notification");
        }, 2000);
      },
      error: function (error) {
        alert('no');
      }
    });
  });

  $("#rating-submit").on('click', function () {
    var productId = $("#pro-id").val();
    var email = $("#review-email").val();
    var text = $("#review-text").val();
    var rateStars = $("input[name='rating']:checked").val();

    if (email != "" && text != "" && typeof rateStars !== "undefined" && productId != "") {
      $.ajax({
        url: "http://localhost/BabyLand/Product/productreview/" + productId,
        type: 'post',
        data: {
          "text-review": text,
          "rating": rateStars,
          "userEmail": email
        },
        dataType: 'json',
        success: function (json) {

          if (json) {
            msg = "Thanks for your review !";
            $("#review-email").val("");
            $("#review-text").val("");
            $("input[name='rating']:checked").prop("checked", false);
          } else {
            msg = "Please fill correct fields !";
          }

          $(".notification-msg").html(msg);
          $("body").addClass("show-notification");

          setTimeout(function () {
            $("body").removeClass("show-notification");
          }, 3000);

        },
        error: function (error) {
          alert("error");
        }
      });
    } else {
      $(".notification-msg").html("Please fill all required fields !");
      $("body").addClass("show-notification");

      setTimeout(function () {
        $("body").removeClass("show-notification");
      }, 3000);
    }

  });

  $("div[id^='unregistered']").on('click', function () {
    $(".notification-msg").html("Please get logged in first to use wishlist !");
    $("body").addClass("show-notification");

    setTimeout(function () {
      $("body").removeClass("show-notification");
    }, 3000);
  });


  $("div[id^='add-whishlist']").on('click', function () {
    suffix = $(this).attr("id").match(/\d+/);
    $.ajax({
      url: "http://localhost/BabyLand/Wishlist/addProductToWishlist/",
      type: 'post',
      data: {
        "productid": suffix
      },
      dataType: 'json',
      success: function (json) {

        if (json) {
          msg = "Product Added to wishlist";
        } else {
          msg = "Product already added to whishlist!";
        }

        $(".notification-msg").html(msg);
        $("body").addClass("show-notification");

        setTimeout(function () {
          $("body").removeClass("show-notification");
        }, 3000);

      },
      error: function (error) {
        alert("error" + error.responseText);
      }
    });
  });

  $("div[id^='short-view']").on('click', function () {
    suffix = $(this).attr("id").match(/\d+/);
    alert(suffix);
    $.ajax({
      url: "http://localhost/BabyLand/Product/ProductQuickView/" + suffix,
      type: 'get',
      dataType: 'json',
      success: function (json) {
        $('.title-quick-view').html(json[0].Name);
        var pics=$.parseJSON(json[0].Picture);
        $(".product-model-img img").attr('src','http://localhost/BabyLand/upload/'+ pics[0]);
        $(".brand-quick-view").html(json[0].brandName);
        $(".code-quick-view").html(json[0].Code);
        if(json[0].stock > 0){
          $(".stock-quick-view").html("Instock");
        }else{
          $(".stock-quick-view").html("Out of Stock");
        }

        $(".oldprice-quick-view").html(json[0].OldPrice);
        $(".price-quick-view").html(json[0].Price);
        
      },
      error: function (error) {
        alert("error" + error.responseText);
      }
    });
  });

  $("div[id^='rating-trigger']").on('click', function () {
    suffix = $(this).attr("id").match(/\d+/);
    $.ajax({
      url: "http://localhost/BabyLand/Product/addCompare/" + suffix,
      type: 'get',
      dataType: 'json',
      success: function (json) {
        if (json) {
          msg = "Product Added to Compare list";
        } else {
          msg = "Product already added to Compare list!";
        }

        $(".notification-msg").html(msg);
        $("body").addClass("show-notification");

        setTimeout(function () {
          $("body").removeClass("show-notification");
        }, 3000);
        
      },
      error: function (error) {
        alert("error" + error.responseText);
      }
    });
  });
  
  $('.easyzoom').easyZoom();



  /*$("div[id^='rating-trigger']").on("click", function (event) {
    var clickId = $(this).attr("id");
    suffix = $(this).attr("id").match(/\d+/);
    var pro_name = $("#pro-name" + suffix).html();
    var pro_id=$("#"+clickId+" input").val();
    $("#pro-id").val(pro_id);

    $("#exampleModalLabel").html(pro_name);
  });*/


});