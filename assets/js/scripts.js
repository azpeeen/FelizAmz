window.addEventListener("load", () => {
    $(".loader-page-container").slideUp();
    window.setTimeout((function () {
        $(".loader-page-container").remove();
    }), 800);
})

// Resize automatico do fake header
$(document).ready(function () {
    var menuHeight = document.getElementById('menuResponsible').clientHeight;
    $("#fakeHeader").css("height", menuHeight);

    if ($(window).width() > 991) {
        $(".close-drop").click(function () {
            $(".dropDownBody").slideUp();
            $(this).fadeOut();
        });
    } else {
        $(".close-drop").click(function () {
            $(".dropDownBody").slideUp();
            $(".menu-mobile").removeClass("open");
            $(".linksMobile").slideUp();
            $(this).fadeOut();
        });
    }

    // init controller
    var controller2 = new ScrollMagic.Controller();

    // build scenes
    var revealElements = document.getElementsByClassName("disabled");
    for (var i = 0; i < revealElements.length; i++) { // create a scene for each element
        new ScrollMagic.Scene({
            triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
            offset: 50,												 // start a little later
            triggerHook: 0.9,
        })
            .setClassToggle(revealElements[i], "visible") // add class toggle
            .addTo(controller2);
    }

    // init controller
    var controller3 = new ScrollMagic.Controller();

    // build scenes
    var imgAnimation = document.getElementsByClassName("triggerImg");
    for (var i = 0; i < imgAnimation.length; i++) { // create a scene for each element
        new ScrollMagic.Scene({
            triggerElement: imgAnimation[i], // y value not modified, so we can use element as trigger as well
            offset: 250,												 // start a little later
            triggerHook: 0.9,
        })
            .setClassToggle(imgAnimation[i], "active") // add class toggle
            .addTo(controller3);
    }

    const swiftUpElements = document.querySelectorAll('.swift-up-text2');

    swiftUpElements.forEach(elem => {

        const words = elem.textContent.split(' ');
        elem.innerHTML = '';

        words.forEach((el, index) => {
            words[index] = `<span class="teste text-white extrabold"><i class="extrabold">${words[index]}</i></span>`;
        });

        elem.innerHTML = words.join(' ');

        const children = document.querySelectorAll('span > i');
        children.forEach((node, index) => {
            node.style.animationDelay = `${index * .1}s`;
        });

    });

    var maxLength = 230;
    $(".show-read-more").each(function () {
        var myStr = $(this).text();
        if ($.trim(myStr).length > maxLength) {
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).maxLength);
            $(this).empty().html(newStr);
            $(this).append('<a href="javascript:void(0);" class="read-more alt-text">...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function () {
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
$(window).resize(function () {
    if (this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function () {
        $(this).trigger('resizeEnd');
    }, 400);
    $(window).bind('resizeEnd', function () {
        var menuHeight = document.getElementById('menuResponsible').clientHeight;
        $("#fakeHeader").css("height", menuHeight);
    });
});

  
  document.addEventListener('DOMContentLoaded', function() {
    setupCarousel('carouselAniversarios');
    setupCarousel('carouselLembrancas');
    
    document.querySelectorAll('.thumbnail-container').forEach(container => {
      container.addEventListener('wheel', function(e) {
        if (this.offsetHeight + this.scrollTop >= this.scrollHeight && e.deltaY > 0) {
          return;
        }
        if (this.scrollTop === 0 && e.deltaY < 0) {
          return;
        }
        e.preventDefault();
        this.scrollTop += e.deltaY;
      });
    });
  });

