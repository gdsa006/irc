<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/Favicon-01.png') }}"><!-- Major Browsers -->
    <link rel=“stylesheet” href=“https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css”>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');

        @import url('https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css');

        body{
            background-color: #ffffff;
            font-family: Circular, sans-serif;
            margin-top: 40px;
            color: #28373e !important;
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

@media (min-width: 1200px) {
    .container{
        max-width: 1440px;
    }
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

        nav.navbar{
            background: rgba(237, 240, 242, 0.9);
            padding-left: 35px;
            padding-right: 35px;
            }

            nav .nav-item {
    color: #28373e;
    font-size: 16px;
    font-weight: 500;
    margin-right: 8px;
    padding-right: 8px;
    padding-left: 8px;
}

nav.navbar .navbar-brand img{
    display: block;
    height: 48px;
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

section#hero .hero-left{
    padding-right: 5%;
    padding-left: 5%;
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

section#logos{
    padding: 0px 4% 80px;
}

section#review{
    padding-top: 120px;
    padding-bottom: 120px;
}


section#review blockquote{
    max-width: 46ch;
    margin: 40px auto;
    padding: 0px;
    border-left: 0px solid #000;
    font-size: 34px;
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

#owl-demo-2{
    padding: 0 110px
}
.owl-theme .owl-nav [class*=owl-]{
    background-color: transparent;
    border: 0;
    color: black
}

.owl-theme .owl-nav [class*=owl-]:hover{
    background-color: transparent;
    color: #4e73d1;
    border: 0
}

.owl-theme .owl-nav [class*=owl-]:focus{
    border: 0;
    outline: none
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


.press-link:hover{
    -webkit-filter: saturate(100%);
    filter: saturate(100%);
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

footer p{
    margin-right: auto;
}


footer ul{
    list-style: none;
    padding: 0;
margin-left: auto;
    display: block
}

footer ul li{
    display: inline
}

footer ul li a{
    padding: 0 12px;
    position: relative
}


footer ul li a:hover{
    color: #ffffff;
}


footer ul li a::before{
    content: '|';
    position: absolute;
    top: 0;
    right: 0;
    color: #fff; transform: translateY(0%);
    font-size: 14px;
    font-weight: 600;
}

footer ul li:last-child a::before{
    display: none
}

.modal.leads .wrapper{
    padding: 40px
}

.modal.leads .progress_title{
    color: #259ad7;
    min-width: 90px;
    font-size: 1.2em;
    line-height: 1.6em;
    font-weight: 700;
}

.modal.leads .progress{
    height: 1.4rem;
}

.modal.leads .progress-bar{
    background-color: #259ad7
}

.modal.leads h4{
    display: block;
    text-align: center;
    width: 100%;
    padding-bottom: 30px;
    padding-top: 30px;
}

.modal.leads h5{
    display: block;
    text-align: center;
    width: 100%;
    padding-bottom: 30px;
    padding-top: 30px;
}

.modal.leads .new-custom-btn{
    background-color: #259ad7;
    border-color: #259ad7;
    transition: all .3s;
    line-height: 1.25rem;
    margin-bottom: 0;
    height: 4rem!important;
    color: #ffffff;
    font-weight: 400;
    font-size: 1rem;
    border-radius: .3rem;
    font-family: sans-serif;
}

.modal.leads .new-custom-btn:hover{
    background-color: #6ac7f8;
    border-color: #6ac7f8;
    transition: all .3s;
}

.modal.leads .new-custom-input{
    line-height: 1.25rem;
    padding: 1.5rem 2rem;
    margin-bottom: 0;
    height: 4rem!important;
    border: 1px solid #eee!important;
    background-color: #fff;
    font-size: 1rem;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.modal.leads #frm-one .new-custom-input{
    margin-right: 10px
}

.modal.leads #frm-two .new-custom-input{
    margin-right: 10px
}

.modal.leads #search-results{
    position: absolute; top: 55px; left: 0; background: transparent; border: solid 1px transparent; margin: 0; width: 100%; transform: translateX(0); z-index: 999999999999999999999; list-style: none; padding: 0;
}

.modal.leads .back{
    position: absolute;
    top: 0;
    background: #0000;
    color: #000;
    /* font-weight: bolder; */
    width: 80px;
    padding: 12px;
    height: 30px;
    font-size: 15px;
    line-height: 1px;
}

.modal.leads .modal-content{
    border: 0
}

.modal.leads button.close{
    position: absolute;
    right: 0;
    top: 5px;
}

.modal.leads #frm-ten h4{
    padding-bottom: 0;
    margin-bottom: 0;
}

.modal.leads #frm-ten h5{
    padding-top: 20px;
    margin-bottom: 0;
    font-weight: 100;
    color: #7e7e7e;
    font-size: 17px;
}

.modal.leads #frm-ten .fullname{
    margin-right: 10px
}

.radio {
    display: inline-block;
    cursor: pointer;
    border: solid 2px #eee;
    padding: 18px;
    border-radius: .25rem;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.radio:hover{
    box-shadow: 0 0 0 3px #269bd6;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.radio span{
    border: solid 2px #eee;
    padding: 3px 6px;
    display: block;
    margin-top: 8px;
}



input[type=radio] {
    display: none;
}


input[type=radio]:checked + .radio {
    border: solid #269bd6 2px;
}


#search-results ul{
    display: none;
}

#search-results ul:last-child{
    list-style: none;
    padding: 0;
    margin: 0;
    box-shadow: 0 3px 5px rgb(57 63 72 / 30%);
    max-height: 300px;
    overflow-y: scroll;
    display: block;
}


#search-results ul::-webkit-scrollbar {
  width: 0.3em; 
}
 
#search-results ul::-webkit-scrollbar-track {
  display: none;
}

#search-results:hover ul::-webkit-scrollbar-track{
    display: block;
} 


#search-results:hover ul::-webkit-scrollbar-thumb{
    display: block;
} 
 
#search-results ul::-webkit-scrollbar-thumb {
  background-color: #fc600c;
  display: none;
}

#search-results li{
    background: #ffffff;
    padding: 9px 10px;
    color: #555;
    font-size: 13px;
    border-bottom: solid 1px #dfdfdf;
}

#search-results li .singleResult{
    position: relative;
}

#search-results li:hover{
    cursor: pointer;
    color: #000
}




.modal-backdrop.show{
    background-color: #ffffff;
    opacity: 1;
}





.modal#error-modal {

	background: #fff;
	border-radius: 3px;
	box-shadow: 4px 8px 12px 0 rgba(0,0,0,0.4);
	text-align: center;
	overflow: hidden;
	animation: show-modal .7s ease-in-out;
	
	&.hide {
		animation: hide-modal .6s ease-in-out both;
	}
}

@keyframes show-modal {
	0% {
		transform: scale(0);
	}
	60% {
		transform: scale(1.1);
	}
	80% {
		transform: scale(.95);
	}
	100% {
		transform: scale(1);
	}
}

@keyframes hide-modal {
	0% {
		transform: scale(1);
	}
	20% {
		transform: scale(1.1);
	}
	100% {
		transform: scale(0);
	}
}

#error-modal .title {
		display: block;
		font-size: 18px;
		line-height: 24px;
		font-weight: 400;
		margin: 14px 0 5px 0;
	}
	

    #error-modal p {
		font-size: 14px;
		font-weight: 300;
		line-height: 19px;
		margin: 0;
		padding: 0 30px;
	}

    #error-modal .button {
		height: 40px;
		bottom: 0;
		left: 0;
		right: 0;
		background: #F65656;
		color: #fff;
		line-height: 40px;
		font-size: 14px;
		font-weight: 400;
		cursor: pointer;
		transition: background .3s ease-in-out;
		
		&:hover {
			background: #EC3434;
		}
		
	}

@media screen and (max-width: 767px){
    .modal.leads .wrapper{
        padding: 24px;
    }

    .modal.leads #frm-one .new-custom-input{
        width: 100%;
        margin-right: 0;
        margin-bottom: 10px
    }

    .modal.leads #frm-two .new-custom-input{
        margin-right: 0;
        margin-bottom: 10px
    }

    .modal.leads #frm-two .input-group-prepend{
        margin-right: 0;
        margin-bottom: 10px
    }

    .modal.leads .radio{
        width: 100%
    }

    .modal.leads .buttons{
        width: 100%
    }

    .modal.leads .new-custom-btn{
        width: 100%
    }

    footer{
    padding:20px 5% 20px !important
}

footer p{
 margin: 0 auto;
 font-size: 13px;
}

footer ul{
 margin: 0 auto
}

footer ul li a{
    font-size: 13px
}
footer ul li a{
    padding: 0 9px;
}
    #owl-demo-2{
        padding: 0
    }
    .container{
        max-width: none;
    }
    section#hero .hero-left h1{
        font-size: 48px !important;
        text-align: center;
    }

    section#hero p {
    padding-right: 0;
    text-align: center;
}

section#hero .action-area{
    text-align: center
}

section#hero .hero-right{
    margin-top: 50px
}


section#hero .hero-left{
    margin-top: 5px
}

    section#estimate{

    }

    section#estimate h2{
        font-size: 36px;
    }

    nav.navbar .navbar-toggler{
        display: none
    }

    section#estimate .wrapper{
        padding: 0;
        padding-left: 4%;
        padding-right: 4%;
    }

    section#process h2 {
    font-size: 32px;
}

section#hero {
    padding-top: 80px;
    padding-bottom: 80px;
}

section#review h2 {
    font-size: 32px;

}

section#services{
    padding: 60px 5% 40px;
}


section#services h2 {
    font-size: 32px;

}
section#process{
    padding: 0
}

section#review {
    padding-top: 40px;
    padding-bottom: 60px;
}

section#logos{
    padding: 0px 4% 0px;
}

section#review blockquote{
    font-size: 20px
}

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
            <button type="button" class="close">
                <span aria-hidden="true">&times;</span>
              </button>
          





<div class="wrapper">
<div class="row">
              
    <div class="col-md-11 px-0">
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <div class="col-md-1">
      <p class="progress_title"><span>1</span>/10</p>
    </div>
</div>




<div class="dynamic">
    @include('new.steps')
</div>





</div>




</div>
        </div>
      </div>



     <!-- The Modal -->
<div class="modal"  data-backdrop="false" id="error-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
      <img src="https://100dayscss.com/codepen/alert.png" width="44" height="38" />
		<span class="title">Oh snap!</span>
        <p></p>
      </div>

      <div class="button" data-dismiss="modal" aria-label="Close">Dismiss</div>


    </div>
  </div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

    <script>

jQuery(document).ready(function ($) {
	var owl = $("#owl-demo-2");
	owl.owlCarousel({
		autoplay: false,
		autoplayTimeout: 1000,
		autoplayHoverPause: false,
		items: 3,
		loop: true,
		center: false,
		rewind: false,
		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,
		margin: 25,
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
				items: 1,
				nav: true
			},
			480: {
				items: 1,
				nav: true
			},
			768: {
				items: 3,
				// nav: true,
				loop: true
			},
			992: {
				items: 3,
				// nav: true,
				loop: true
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
		lazyLoad: false,
        nav    : true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
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
      $('body').attr('style','padding-top: 74px');
    } else {
      // otherwise remove it
      $cache.removeClass('fixed-top');
      $('body').removeAttr('style');
    }
  });
        </script>





<script>
    $('form').hide();
</script>



<script type="text/javascript">
    $( ".userForm" ).click(function() {
            $.ajax({
                type : 'get',
                url : '{{URL::to('process')}}',
                data:{},
                success:function(data){
                    console.log(data);
                    $('#exampleModal').modal('show');
                    $('form').hide();
                    $('#frm-one').show();
                }      
    });
});
    </script>



<script type="text/javascript">
    $( "#frm-one" ).submit(function(e) {
        e.preventDefault();
        $address = $('#address').val();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveOne')}}',
                data:$('#frm-one').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-two').show();
                    }
                if(data.address){
                    $('#error-modal').modal('show');
                    $("#error-modal").modal({backdrop: false});
                    $('#error-modal p').text(data.address);
                }
            }      
    });
});
    </script>




<script type="text/javascript">
    $( "#frm-two" ).submit(function(e) {
        e.preventDefault();
        $sqft = $('#sqft').val();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveTwo')}}',
                data:$('#frm-two').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-three').show();
                    }
                    if(data.sqft){
                    $('#error-modal').modal('show');
                    $("#error-modal").modal({backdrop: false});
                    $('#error-modal p').text(data.sqft);
                }
                }      
    });
});
    </script>




<script type="text/javascript">
    $( "#frm-three" ).submit(function(e) {
        e.preventDefault();
        $steep = 'metal';
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveThree')}}',
                data:$('#frm-three').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-four').show();
                    }
                    if(data.steep){
                    $('#error-modal').modal('show');
                    $("#error-modal").modal({backdrop: false});
                    $('#error-modal p').text(data.steep);
                }
                }      
    });
});
    </script>











<script type="text/javascript">
    $( "#frm-four" ).submit(function(e) {
        e.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveFour')}}',
                data:$('#frm-four').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-five').show();
                    }
                    if(data.existing_material){
                    $('#error-modal').modal('show');
                    $("#error-modal").modal({backdrop: false});
                    $('#error-modal p').text(data.existing_material);
                }
                }      
    });
});
    </script>





<script type="text/javascript">
    $( "#frm-five" ).submit(function(e) {
        e.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveFive')}}',
                data:$('#frm-five').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-six').show();
                    }
                    if(data.is_commercial){
                    $('#error-modal').modal('show');
                    $("#error-modal").modal({backdrop: false});
                    $('#error-modal p').text(data.is_commercial);
                }
                }      
    });
});
    </script>







<script type="text/javascript">
    $( "#frm-six" ).submit(function(e) {
        e.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveSix')}}',
                data:$('#frm-six').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-seven').show();
                    }
                    if(data.urgency){
                    $('#error-modal').modal('show');
                    $("#error-modal").modal({backdrop: false});
                    $('#error-modal p').text(data.urgency);
                }
                }      
    });
});
    </script>




<script type="text/javascript">
    $( "#frm-seven" ).submit(function(e) {
        e.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveSeven')}}',
                data:$('#frm-seven').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-eight').show();
                    }
                    if(data.true){
                    $('#error-modal').modal('show');
                    $("#error-modal").modal({backdrop: false});
                    $('#error-modal p').text(data.true);
                }
                }      
    });
});
    </script>



<script type="text/javascript">
    $( "#frm-eight" ).submit(function(e) {
        e.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveEight')}}',
                data:$('#frm-eight').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-nine').show();
                    }
                    if(data.material){
                        $('#error-modal').modal('show');
                        $("#error-modal").modal({backdrop: false});
                        $('#error-modal p').text(data.material);
                    }
                }      
    });
});
    </script>







<script type="text/javascript">
    $( "#frm-nine" ).submit(function(e) {
        e.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveNine')}}',
                data:$('#frm-nine').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) + 10) + '%');
                        $stepCount = $('.progress_title span').text();
                        $('.progress_title span').text(Number($stepCount) + 1);
                        $('form').hide();
                        $('#frm-ten').show();
                    }
                    if(data.is_interested_in_financing){
                        $('#error-modal').modal('show');
                        $("#error-modal").modal({backdrop: false});
                        $('#error-modal p').text(data.is_interested_in_financing);
                    }
                }      
    });
});
    </script>












<script type="text/javascript">
    $( "#frm-ten" ).submit(function(e) {
        e.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to('saveTen')}}',
                data:$('#frm-ten').serialize(),
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $('form').hide();
                        window.location.href = "{{URL::to('estimate')}}"
                    }
                    if(data.email || data.fname || data.mobile){
                        $('#error-modal').modal('show');
                        $("#error-modal").modal({backdrop: false});
                        if(data.email){
                            $('#error-modal p').text(data.email);
                        }
                        if(data.fname){
                            $('#error-modal p').text(data.fname);
                        }
                        if(data.mobile){
                            $('#error-modal p').text(data.mobile);
                        }
                    }
                }      
    });
});
    </script>







<script>
  AOS.init();
</script>
<script type="text/javascript">
$( "#address" ).keyup(function() {
        $value = $(this).val();
        $("#search-results > ul").empty(); 
            console.log($value.length); 
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $("#search-results > ul").empty();  
                console.log(data.keyword);
                if(data.keyword == null){
                    console.log('null');
                    $("#search-results > ul").remove();  
                }
                else{
                    $width = $("#address").outerWidth();
                    $("#search-results").css('width', $width);  
                var ul = $('<ul>').appendTo('#search-results');
                $(data.search).each(function(index, Address) {

                    var searchWord= Address.Address;
                    var exists=$('#search-results ul li:contains('+searchWord+')').length;
                    if( !exists){
                            ul.append(
                                $(document.createElement('li')).html('<span class="singleResult">' + Address.Address + '</span>')
                            );
                    }
                    else{
                    }
                });     
                }           
            }
        });
    })
    </script>


<script>
    function goBack(hash){
        if (hash) {
            $('form').hide();
            $(hash).show();
            $stepCount = $('.progress_title span').text();
            $('.progress_title span').text(Number($stepCount) - 1);

            $progressLevel = $('.progress .progress-bar').attr("style");
                        $percentage = $progressLevel.replace('%', '');
                        $semicolon = $percentage.replace(';', '');
                        $convert_to_number = $semicolon.replace('width:', '');
                        $('.progress .progress-bar').css('width', (Number($convert_to_number) - 10) + '%');


        }
    }
</script>


<script>
    $('.input-group').on('click', '#search-results ul li',function(){
        $getAddress = $(this).text();
        $('#address').val($getAddress);
        $("#search-results > ul").empty();
    });
    </script>





<script>
    $(document).ready(function(){
  /***phone number format***/
  $(".phone-format").keypress(function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
    var curchr = this.value.length;
    var curval = $(this).val();
    if (curchr == 3 && curval.indexOf("(") <= -1) {
      $(this).val("(" + curval + ")" + "-");
    } else if (curchr == 4 && curval.indexOf("(") > -1) {
      $(this).val(curval + ")-");
    } else if (curchr == 5 && curval.indexOf(")") > -1) {
      $(this).val(curval + "-");
    } else if (curchr == 9) {
      $(this).val(curval + "-");
      $(this).attr('maxlength', '14');
    }
  });
});
</script>


<script>

$('#exampleModal button').on('click', function(){
    alert('clk');
    $.ajax({
                type : 'post',
                url : '{{URL::to('destroy')}}',
                data: {},
                success:function(data){
                    console.log(data);
                    if(data.status){
                        $('#exampleModal').modal('hide');
                    }
                }      
    });
});
</script>


<!-- <script>
$checkSession = "{{ session()->get('leadID') }}";
if($checkSession){
    $.ajax({
                type : 'get',
                url : '{{URL::to('process')}}',
                data:{},
                success:function(data){
                    console.log(data);
                    $('#exampleModal').modal('show');
                    $('form').hide();
                    $('#frm-one').show();
                }      
    });
}

    </script> -->

  </body>
</html>