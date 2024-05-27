
    <script src="{NV_STATIC_URL}themes/{TEMPLATE}/assets/js/jquery-3.7.1.js"></script>
    <script src="{NV_STATIC_URL}themes/{TEMPLATE}/assets/js/bootstrap.min.js"></script>
    <script src="{NV_STATIC_URL}themes/{TEMPLATE}/assets/js/all.min.js"></script>
    <script src="{NV_STATIC_URL}themes/{TEMPLATE}/assets/js/jquery-1.11.1.js"></script>
    <script src="{NV_STATIC_URL}themes/{TEMPLATE}/assets/js/main.js"></script>
    <script src="{NV_STATIC_URL}themes/{TEMPLATE}/assets/js/jquery-3.7.1.js"></script>
    <script src="{NV_STATIC_URL}themes/{TEMPLATE}/assets/js/slick.min.js"></script>
    <script type="text/javascript">



        $("#slick").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
		
		$(document).ready(function(){
			  $('.slider-news-post').slick({
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: true,
				dots: true,
				speed: 300,
				infinite: true,
				autoplaySpeed: 5000,
				autoplay: true,
				responsive: [
			  {
				breakpoint: 991,
				settings: {
				  slidesToShow: 3,
				}
			  },
			  {
				breakpoint: 767,
				settings: {
				  slidesToShow: 1,
				}
			  }
			]
		});
    });
$(function(){
	$('.slider__news-block').slick({
	   autoplay: true,
	   autoplaySpeed: 2000,
	   infinite: true,
	   speed: 300,
	   centerPadding: '0px',
	   slidesToShow: 4,
	   slidesToScroll: 4,
	   dots: true,
	   cssEase: 'linear',
	   prevArrow:"<button type='button' class='slick-prev pull-left'></button>",
       nextArrow:"<button type='button' class='slick-next pull-right'></button>",
	   responsive: [
			{
				breakpoint: 991,
				settings: {
				  slidesToShow: 3,
				}
			},
			{
				breakpoint: 767,
				settings: {
				  slidesToShow: 1,
				}
			}
		]
	});
});
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  const input = document.getElementById("myInput");
  const filter = input.value.toUpperCase();
  const div = document.getElementById("myDropdown");
  const a = div.getElementsByTagName("a");
  for (let i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

    </script>


        
        <!-- BEGIN: lt_ie9 --><p class="chromeframe">{LANG.chromeframe}</p><!-- END: lt_ie9 -->
        <!-- BEGIN: cookie_notice --><div class="cookie-notice"><div><button onclick="cookie_notice_hide();">&times;</button>{COOKIE_NOTICE}</div></div><!-- END: cookie_notice -->
        <div id="timeoutsess" class="chromeframe">
            {LANG.timeoutsess_nouser}, <a onclick="timeoutsesscancel();" href="#">{LANG.timeoutsess_click}</a>. {LANG.timeoutsess_timeout}: <span id="secField"> 60 </span> {LANG.sec}
        </div>
        <div id="openidResult" class="nv-alert" style="display:none"></div>
        <div id="openidBt" data-result="" data-redirect=""></div>
        <!-- BEGIN: crossdomain_listener -->
        <script type="text/javascript">
        function nvgSSOReciver(event) {
            if (event.origin !== '{SSO_REGISTER_ORIGIN}') {
                return false;
            }
            if (
                event.data !== null && typeof event.data == 'object' && event.data.code == 'oauthback' &&
                typeof event.data.redirect != 'undefined' && typeof event.data.status != 'undefined' && typeof event.data.mess != 'undefined'
            ) {
                $('#openidResult').data('redirect', event.data.redirect);
                $('#openidResult').data('result', event.data.status);
                $('#openidResult').html(event.data.mess + (event.data.status == 'success' ? ' <span class="load-bar"></span>' : ''));
                $('#openidResult').addClass('nv-info ' + event.data.status);
                $('#openidBt').trigger('click');
            }
        }
        window.addEventListener('message', nvgSSOReciver, false);
        </script>
        <!-- END: crossdomain_listener -->
        <script src="{NV_STATIC_URL}themes/{TEMPLATE}/js/bootstrap.min.js"></script>
    </body>
</html>
