$(document).ready(function() {

      $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
      });

      $('.videoslider').bxSlider({
      video: true,
      useCSS: true,
      minSlides: 4,
      maxSlides: 4,
      auto:true
      });

      $('.staticbxslider').bxSlider({
      minSlides: 4,
      maxSlides: 4,
      slideWidth: 360,
      slideMargin: 10,
      auto:true
      });

      $('.vertical').bxSlider({
      mode: 'vertical',
      auto:true,
      maxSlides: 4,
      slideMargin: 5
      });

      /***************** Smooth Scrolling ******************/

      $(function() {

        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 2000);
              return false;
            }
          }
        });

      });

});

autoPlayYouTubeModal();

//FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function () {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-theVideo"),
            videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
        $('.modal').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
    });
}


var error = document.getElementById('errors');

function validateForm() {
  var fname=document.forms["form"]["firstName"].value;
  var lname=document.forms["form"]["lastName"].value;

  if ((fname==null || fname=="") || (lname==null || lname=="")) {
  error.innerHTML = 'Моля, попълнете имената.';
  return false;
  } else {
  return true;
  }
}


function chooseMovie() {
  var cat_select = document.getElementById("choose");
  var type_select = document.getElementById("typeMovie");
  
  var cat_id = cat_select.options[cat_select.selectedIndex].value;

  var url = 'subcategories.php?category_id=' + cat_id;

  var xhr = new XMLHttpRequest();
  xhr.open('GET', url, true);
  xhr.onreadystatechange = function () {
    if(xhr.readyState == 4 && xhr.status == 200) {
      type_select.style.display = "inline-block";
      type_select.innerHTML = xhr.responseText;
    }
  }
  xhr.send();
}

var cat_select = document.getElementById ("choose");
cat_select.addEventListener("change", chooseMovie);

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.8&appId=1785345631754126";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));