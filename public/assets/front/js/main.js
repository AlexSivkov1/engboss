function showCart(cart) {
    $('#cart-modal .modal-body').html(cart);
    $('#cart-modal').modal() && $('.header_area').css('display', 'none');
     let cartQty =$('#modal-cart-qty').text() ? $('#modal-cart-qty').text() : 0;
     $('.mini-cart-qty').text(cartQty);


    if (cartQty) {
        $('#cart-modal .modal-footer .btn-cart').removeClass('d-none');
    } else {
        $('#cart-modal .modal-footer .btn-cart').addClass('d-none');
    }
}

function clearCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            let now_location = document.location.pathname;
            if (now_location == '/cart/checkout'){
                location = '/cart/checkout';

            }else {

                showCart(result);
            }

        },
        error: function () {
            alert('Error');
        }
    });
}

/*АФФИГЕТь КАК ДОДГО ЭТИХ СТРОЧЕК ИСКАЛ*/
$(document).ready(function(){

    $("#cart-modal").on('hide.bs.modal', function () {
        $('.header_area').css('display', 'block');
    });

});

/*$('#cart-modal', 'modal-body').data('show', 'false', function () {

 $('.header_area').css('display', 'block');
 });*/

/*$('#myModal').on('hidden.bs.modal', function (e) {
    // do something...
});*/



$(function() {
    // Cart
    $('.addtocart').on('submit', function () {
        // console.log($(this).serialize());
        // console.log($(this).attr('action'));
        let form = $(this);
        $.ajax({
            url: form.attr('action'),
            data: form.serialize(),// данные кот. отпр. от user(qty и id товара,цена?)
            type: 'post',
            success: function (result) {
                // console.log(result);
                showCart(result);


            },
            error: function (msg) {
                alert('Error!');
                console.log(msg.responseJSON);
                form[0].reset();
            }
        });
        return false;
    });

    $('#cart-modal .modal-body, .cart-table').on('click', '.del-item', function () {
        $.ajax({
            url: $(this).data('action'),
            type: 'get',
            success: function (result) {

                // так классно она реализовал удаление товара 4 строки вниз
                let now_location = document.location.pathname;
                if (now_location == '/cart/checkout'){
                    location = '/cart/checkout';

                }else {

                    showCart(result);
                }
            },
            error: function (msg) {
                alert('Error!');
            }
        });
    });


});

function clearCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            showCart(result);
        },
        error: function () {
            alert('Error');
        }
    });
    
}

function getCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            showCart(result);
        },
        error: function () {
            alert('Error');
        }
    });
}








  //------- Parallax -------//
  skrollr.init({
    forceHeight: false
  });

  //------- Active Nice Select --------//
  $('select').niceSelect();

  //------- hero carousel -------//
  $(".hero-carousel").owlCarousel({
    items:3,
    margin: 10,
    autoplay:false,
    autoplayTimeout: 5000,
    loop:true,
    nav:false,
    dots:false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items: 2
      },
      810:{
        items:3
      }
    }
  });

  //------- Best Seller Carousel -------//
  if($('.owl-carousel').length > 0){
    $('#bestSellerCarousel').owlCarousel({
      loop:true,
      margin:30,
      nav:true,
      navText: ["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],
      dots: false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items: 2
        },
        900:{
          items:3
        },
        1130:{
          items:4
        }
      }
    })
  }

  //------- single product area carousel -------//
  $(".s_Product_carousel").owlCarousel({
    items:1,
    autoplay:false,
    autoplayTimeout: 5000,
    loop:true,
    nav:false,
    dots:false
  });

  //------- mailchimp --------//  
	function mailChimp() {
		$('#mc_embed_signup').find('form').ajaxChimp();
	}
  mailChimp();



//------- fixed navbar --------//
$(window).scroll(function(){
    var sticky = $('.header_area'),
     scroll = $(window).scrollTop();

    if (scroll >= 100) {
        sticky.addClass('fixed');
    }
    else sticky.removeClass('fixed');
});





calc.onclick = function(){
    var myform = this.form;

    return myform.result.value = +myform.flexRadioDefault.value + +myform.flexRadioDefault1.value + +myform.flexRadioDefault2.value + +myform.flexRadioDefault3.value + +myform.flexRadioDefault4.value;


};













