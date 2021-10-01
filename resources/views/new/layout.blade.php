<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css">


    <title>Hello, world!</title>
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');

        body{
            background-color: #ffffff;
            font-family: Circular, sans-serif;
            margin-top: 40px;
        }
                
        @font-face {
  font-family: 'Circular';
  src: url('https://assets.website-files.com/606477f876b285d1aaa0ea55/6064805857784409c85da006_CircularStd-Medium.woff2') format('woff2'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058a6a393a22925414f_CircularStd-Medium.eot') format('embedded-opentype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058a5870e9ad62b6dc0_CircularStd-Medium.woff') format('woff'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058c1435b2b27429844_CircularStd-Medium.ttf') format('truetype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480e6481fbc6e8cbb23f9_CircularStd-Medium.otf') format('opentype');
  font-weight: 500;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: 'Circular';
  src: url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480582459c864fae538b8_CircularStd-Book.woff2') format('woff2'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/6064805824478818d5612896_CircularStd-Book.eot') format('embedded-opentype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480582b27e283b0fd1e04_CircularStd-Book.woff') format('woff'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058268dd518ccb1c743_CircularStd-Book.ttf') format('truetype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480e643ee59e56e92629a_CircularStd-Book.otf') format('opentype');
  font-weight: 400;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: 'Circular';
  src: url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058e2f2f46a08b85d47_CircularStd-Black.woff2') format('woff2'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058c28d216316200f34_CircularStd-Black.eot') format('embedded-opentype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058a1481eb41e187b00_CircularStd-Black.woff') format('woff'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058b75a2a515092972c_CircularStd-Black.ttf') format('truetype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480e66392172401afafc5_CircularStd-Black.otf') format('opentype');
  font-weight: 900;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: 'Circular';
  src: url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480582b27e27b92fd1e03_CircularStd-Bold.woff2') format('woff2'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058440f12e7e6b4004c_CircularStd-Bold.eot') format('embedded-opentype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480585b57e27b66475d66_CircularStd-Bold.woff') format('woff'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/60648058a6a393ed2025414e_CircularStd-Bold.ttf') format('truetype'), url('https://assets.website-files.com/606477f876b285d1aaa0ea55/606480e69f78707173745fec_CircularStd-Bold.otf') format('opentype');
  font-weight: 700;
  font-style: normal;
  font-display: swap;
}

        #background-gradient{
            position: absolute;
            left: 0%;
            top: 0%;
            right: 0%;
            bottom: auto;
            z-index: -100;
            height: 480px;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #edf0f2), to(#fff));
            background-image: linear-gradient(
        180deg, #edf0f2 20%, #fff);
        }

        nav{
            background: rgba(237, 240, 242, 0.9);
            }

            nav .nav-item {
    color: #28373e;
    font-size: 16px;
    font-weight: 500;
    margin-right: 8px;
    padding-right: 8px;
    padding-left: 8px;
}


        .custom-main-btn{
            margin-bottom: 20px;
    padding: 16px 32px;
    border-radius: 48px;
    background-image: -webkit-gradient(linear, left top, right top, from(#269bd6), to(#4e73d1));
    background-image: linear-gradient(
90deg, #269bd6, #4e73d1);
    color: #fff;
    font-weight: 500;
    text-align: center;
    border: 0;
    line-height: inherit;
    text-decoration: none;
    cursor: pointer;
    background-color: #3898EC;
    display: inline-block;
        }

        .custom-main-btn.medium {
    margin-bottom: 0px;
    padding: 8px 16px;
    font-size: 16px;
}

.custom-main-btn:hover{
    text-decoration: none;
    color: #ffffff
}

h1 {
    margin-top: 0em;
    margin-bottom: 0.4em;
    font-size: 72px;
    line-height: 1em;
    font-weight: 900;
    letter-spacing: -0.06em;
}

h2 {
    margin-top: 0px;
    margin-bottom: 0.4em;
    font-size: 64px;
    line-height: 1.1em;
    font-weight: 900;
    letter-spacing: -0.04em;
}

h3{
margin-top: 0px;
    margin-bottom: 0.4em;
    font-size: 48px;
    line-height: 1.1em;
    font-weight: 900;
    letter-spacing: -0.04em;
}
section#hero{
    padding-top: 80px;
    padding-bottom: 120px;
}

section#hero p{
    padding-right: 40px;
}

section#hero .action-area{
    display: block;
    margin-bottom: -10px;
    padding-top: 16px;
    padding-right: 2px;
    padding-left: 2px;
}

section#process{
    padding: 0px 5% 40px;
    border-bottom: 1px solid #edf0f2;
}

section#process h2{
    display: block;
    font-size: 48px;
    text-align: center
}

section#process h2 span{
    color: #269bd6
}

section#process .threeCols{
    margin-top: 56px;
}

section#process .threeCols .wrapper{
    display: flex;
    padding-right: 16px;
    padding-bottom: 40px;
    padding-left: 16px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    /* align-items: center; */
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
}

section#process .threeCols .wrapper .icon{
    border-radius: 16px;
    background-image: linear-gradient(225deg, #269bd6, #4e73d1);
    width: 56px;
    height: 56px;
    margin-bottom: 16px;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}


section#process .threeCols .wrapper h3{
margin-top: 0.5em;
    font-size: 24px;
    font-weight: 700;
    display: block;
    text-align: center;
}

section#process .threeCols .wrapper p{
    text-align: center;
    margin-bottom: 0em;
    font-size: 16px;
    line-height: 1.3em;
    color: #74838b;
}

section#review{
    padding-top: 120px;
    padding-bottom: 120px;
}


section#review blockquote{
    max-width: 24ch;
    margin: 40px auto;
    padding: 0px;
    border-left: 0px solid #000;
    font-size: 48px;
    line-height: 1.1em;
    font-weight: 900;
    text-align: center;
    letter-spacing: -0.04em;
}


section#review .thumbnail.item{
    padding: 10px;
}

section#review h2{
    display: block;
    font-size: 48px;
    text-align: center
}

section#review h2 span{
    color: #269bd6
}

section#review p {
    max-width: 48ch;
    margin: 0 auto;
}

section#review .owl-carousel .avatar{
    width: 270px;
  height: 320px;
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 100px;
    content: "";
    height: 73px;
    left: 50%;
    overflow: hidden;
    position: absolute;
    top: -40px;
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    transform: translate(-50%);
    width: 73px;
}

section#review .owl-carousel .rating{
    /* margin-top: 45px; */
}

section#review .owl-carousel .rating .star-rating--sm .star-rating__stars {
    height: 20px;
    line-height: 20px;
    margin-right: 5px;
    position: relative;
    display: inline-block;
}

section#review .owl-carousel .rating .star-rating--sm .star-rating__stars.star-rating__stars--50::after{
    width: 50%;
}


section#review .owl-carousel .star-rating__stars::after, section#review .owl-carousel .star-rating__stars::before {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font: 14px/1 modicons-fill;
    text-rendering: auto;
    content: '\f005\f005\f005\f005\f005';
    font-family: "Font Awesome 5 Free";
    display: inline-block;
    font-size: 24px;
    height: 24px;
    line-height: 24px;
    overflow: hidden;
    white-space: nowrap;
}

.star-rating__stars::before {
    color: #f6f5f1;
    position: relative;
    z-index: 1;
}


.star-rating__stars::after {
    color: #fec14b;
    left: 0;
    position: absolute;
    top: 0;
    z-index: 2;
    width: 0;
}

section#review .owl-carousel .comment{

}

section#review .owl-carousel .comment p{
    font-style: italic;
    margin: 15px 0;
    text-align: left;
    font-size: 17px;
    color: #545253;
    font-family: sans-serif;
}

.owl-carousel .owl-stage-outer{
    
}


section#review  .thumbnail.item{
    background: #fff;
    border: 1px solid #dcdcdc;
    border-radius: 6px;
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 10%);
    min-height: 290px;
    padding: 50px 25px 30px;
    position: relative;
    text-align: center;
}

section#review .name{

}

section#review .name h6{
    font-size: 17px;
    margin: 0
}

section#review .name p{
    font-size: 17px;
    font-family: sans-serifw
}
    

.vivid {
    display: inline-block;
    padding-right: 0.05em;
    padding-bottom: 0.04em;
    padding-left: 0.02em;
    background-image: -webkit-gradient(linear, right top, left top, from(#4e73d1), to(#269bd6));
    background-image: linear-gradient(
270deg, #4e73d1, #269bd6);
    color: #269bd6;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.press-link{
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 16px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-filter: saturate(0%);
    filter: saturate(0%);
    -webkit-transition: -webkit-filter 300ms ease;
    transition: -webkit-filter 300ms ease;
    transition: filter 300ms ease;
    transition: filter 300ms ease, -webkit-filter 300ms ease;
}

section#services{
    padding: 80px 5% 40px;
}

section#services h2{
    font-size: 48px
}

section#services h2 span{
    color: #269bd6
}
section#services p{
    max-width: 48ch;
    margin: 0 auto
}

section#services .threeCols{
    margin-top: 56px;
}

section#services .threeCols .wrapper{
    display: flex;
    padding-right: 16px;
    padding-bottom: 40px;
    padding-left: 16px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    /* align-items: center; */
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
}

section#services .threeCols .wrapper .icon{
    border-radius: 16px;
    background-image: linear-gradient(225deg, #269bd6, #4e73d1);
    width: 56px;
    height: 56px;
    margin-bottom: 16px;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}


section#services .threeCols .wrapper h3{
margin-top: 0.5em;
    font-size: 24px;
    font-weight: 700;
    display: block;
    text-align: center;
}

section#services .threeCols .wrapper p{
    text-align: center;
    margin-bottom: 0em;
    font-size: 16px;
    line-height: 1.3em;
    color: #74838b;
}


section#estimate{
    padding-top: 120px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#edf0f2), to(#fff));
    background-image: linear-gradient(180deg, #edf0f2, #fff);
}

section#estimate h2{
}

section#estimate .wrapper{
    padding: 0 210px;
}

section#estimate .roof-image{
    width: 100%;
    max-width: none;
    margin-top: 120px;
}


footer{
    padding: 34px 5% 34px;
    background-color: #0b0f12;
    text-align: center
}


footer *{
    color:#ffffff;
    margin: 0;
    text-align: center
}

/* Equal Heights for OwlCarousel 2 */
.owl-carousel .owl-item{
    padding: 10px;
    padding-top: 45px;
}
.owl-carousel {
    margin-top: -10px;
	.owl-stage {
		display: flex;
	}
	.owl-item {
		display: flex;
		flex: 1 0 auto;
	}
	.thumbnail {
		display: flex;
		flex-direction: column;
		margin: 0 15px;
		.caption {
			display: flex;
			flex: 1 0 auto;
			flex-direction: column;
			.flex-text {
				flex-grow: 1;
			}
		}
	}
}


}


    </style>
  </head>
  <body>
    @include('new.header')
    <div id="background-gradient"></div>
        @yield('content')
    @include('new.footer')


    <div class="modal bd-example-modal-lg leads" id="exampleModal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            <div class="title text-center">
                <h1>Enter Details</h1>
                <p>The class is a container to enhance an input by adding an icon, text or a button. </p>
            </div>
                <div class="status">
                  <div class="row">
                  <div id="step1" class="col-md-4 col-4 text-center progress-step {{ Request::is('fullName') ? 'green' : '' }} {{ Request::is('emailAddress') ? 'green' : '' }} {{ Request::is('mobileNumber') ? 'green' : '' }}">
                    <i class="far fa-dot-circle"></i>
                  </div>
                  <div id="step2" class="col-md-4 col-4 text-center progress-step {{ Request::is('emailAddress') ? 'green' : '' }} {{ Request::is('mobileNumber') ? 'green' : '' }}">
                    <i class="far fa-dot-circle"></i>
                  </div>
                  <div id="step3" class="col-md-4 col-4 text-center progress-step {{ Request::is('mobileNumber') ? 'green' : '' }}">
                    <i class="far fa-dot-circle"></i>
                  </div>
                </div>
                <img src="https://smartdemowp.com/shelder/wp-content/uploads/2020/06/shape-1.png" id="status-image">
              </div>
              <div class="data">
                  <div class="row row-eq-height">
                      <div class="col-md-6">
                          <div class="image">
                              <img src={{ asset('images/about-2.jpg') }}>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <form>
                            @csrf
                            @yield('content')
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>

jQuery(document).ready(function ($) {
	var owl = $("#owl-demo-2");
	owl.owlCarousel({
		autoplay: true,
		autoplayTimeout: 1000,
		autoplayHoverPause: true,
		items: 3,
		loop: true,
		center: false,
		rewind: false,
		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,
		margin: 0,
		stagePadding: 0,
		merge: false,
		mergeFit: true,
		autoWidth: false,
		startPosition: 0,
		rtl: false,
		smartSpeed: 250,
		fluidSpeed: false,
		dragEndSpeed: false,
        dots:false,
		responsive: {
			0: {
				items: 1
				// nav: true
			},
			480: {
				items: 2,
				nav: false
			},
			768: {
				items: 3,
				// nav: true,
				loop: false
			},
			992: {
				items: 4,
				// nav: true,
				loop: false
			}
		},
		responsiveRefreshRate: 200,
		responsiveBaseElement: window,
		fallbackEasing: "swing",
		info: false,
		nestedItemSelector: false,
		itemElement: "div",
		stageElement: "div",
		refreshClass: "owl-refresh",
		loadedClass: "owl-loaded",
		loadingClass: "owl-loading",
		rtlClass: "owl-rtl",
		responsiveClass: "owl-responsive",
		dragClass: "owl-drag",
		itemClass: "owl-item",
		stageClass: "owl-stage",
		stageOuterClass: "owl-stage-outer",
		grabClass: "owl-grab",
		autoHeight: false,
		lazyLoad: false
	});

	$(".next").click(function () {
		owl.trigger("owl.next");
	});
	$(".prev").click(function () {
		owl.trigger("owl.prev");
	});
});


</script>
    
    <script>
        //store the element
var $cache = $('nav');

//store the initial position of the element
var vTop = $cache.offset().top - parseFloat($cache.css('marginTop').replace(/auto/, 0));
  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();

    // whether that's below the form
    if (y >= vTop) {
      // if so, ad the fixed class
      $cache.addClass('fixed-top');
    } else {
      // otherwise remove it
      $cache.removeClass('fixed-top');
    }
  });
        </script>


  </body>
</html>