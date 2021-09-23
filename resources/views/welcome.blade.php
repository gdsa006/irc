<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Laravel1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
            }

            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800;900&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');

html,body{
    padding: 0;
    margin: 0;
    font-family: 'Inter', sans-serif;
}


div#top-bar{
    background-color: #1e1e2a;
    padding: 8.5px 0px;
}

div#top-bar ul li a{
    color: #ffffff;
    padding: 0 15px;
    font-size: 14px;
}

div#top-bar ul li a:hover{
  color: #ee4055;
    text-decoration: none;
    transition: 500ms all;
}

div#top-bar #contact ul{
    float: left;
}

div#top-bar #social ul{
    float: right;
}

header#header{
    padding: 13px 0;
    background-color: #ffffff;
    -webkit-box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
  -moz-box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
  box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
  z-index: 9999;
  position: relative;
}

header#header a.btn-custom-main{
      /* background-color: #ffc625; */
    /* border: solid 1px #ee4055; */
    padding: 10px 12px!important;
    color: #ffffff;
    /* font-weight: 600; */
    border-radius: 50px;
    font-size: 16px;
    background-image: linear-gradient(135deg,#fc600c,#ee4055);
}

header#header a.btn-custom-main:hover{
    background-color: #ee4055;
    color: #ffffff;
}

header#header ul li.info{
}

header#header ul li.info a{
    color: black;
    text-align: left;
}

header#header ul li.info a:hover{
    text-decoration: none;
}

header#header ul li.info .image{
}

header#header ul li.info .text{
    line-height: 30px;
    padding-left: 30px;
    font-size: 14px;
}

header#header .icons{
    font-size: 16px;
    font-weight: 600;
    position: relative;
    top: 2px;
}


/* Hamburger */
.hamburger1 {
    /* height: 45px; */
    /* margin: 10px; */
    /* grid-template-rows: repeat(3, 1fr); */
    /* justify-items: center; */
    /* z-index: 120; */
    display: revert;
    float: right;
  }
  
  .hamburger1 div {
    background-color: #1e1e2a;
    position: relative;
    width: 40px;
    height: 2px;
    margin-top: 11px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
  
  #toggle1 {
    display: none;
  }
  
  #toggle1:checked + .hamburger1 .top {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    margin-top: 22.5px;
  }
  
  #toggle1:checked + .hamburger1 .meat {
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    margin-top: -5px;
  }
  
  #toggle1:checked + .hamburger1 .bottom {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  
  #toggle1:checked ~ .menu1 {
    height: 340px;
  }
  
  
  /* Menu */
  .menu1 {
    position: relative;
    width: 100%;
    background-color: transparent;
    /* margin: 0; */
    display: -ms-grid;
    /* display: grid; */
    /* grid-template-rows: 1fr repeat(4, 0.5fr); */
    /* grid-row-gap: 25px; */
    padding: 0;
    list-style: none;
    /* clear: both; */
    width: 100%;
    text-align: center;
    height: 0;
    overflow: hidden;
    transition: height .4s ease;
    z-index: 120;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    position: absolute;
    right: 0;
    width: 220px;
    top: 65px;
    z-index: 9999999;
  }
  
  /* .menu1 a:first-child {
    margin-top: 40px;
  }
  
  .menu1 a:last-child {
    margin-bottom: 40px;
  } */
  
  .link1 {
    width: 100%;
    display: block;
    margin: 0;
    padding: 10px 0;
    font: 18px;
    text-align: left;
    color: #000;
    padding: 17px 20px;
    background: #ffffff
  }
  
  .link1:hover {
    background-color: #fff;
    color: rgb(61, 61, 61);
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }


main#hero{
        /* overflow: hidden; */
    position: relative;
    background-color: #f7f7f7;
}

main#hero .image-wrapper{
    height: calc(100vh - 113px);   
}

main#hero .image{
    position: absolute;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    left: 50%;
    width: 100%;
    height: 100%;

}

main#hero .image.image1{

}

main#hero .image.image2{
    transform: translateX(-18%) translateY(-24%);
    display: none;
}

main#hero .image.image3 #roof{    
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font-size: 40px;
    color: transparent;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: red;
    color: red;
    font-weight: bolder;
}

main#hero .image.image3{
    left: 0;
    top: 100%;
    margin-top: -80px;
    /* margin-bottom: 46px; */
    margin-left: 80px;
    transform: translateX(-50%) translateY(-50%);
    width: auto;
    height: auto;

}

.rotateme{
animation-name: rotateme;
animation-duration: 24s;
animation-iteration-count: infinite;
animation-timing-function: linear;
-webkit-animation-name: rotateme;
-webkit-animation-duration: 24s;
-webkit-animation-iteration-count: infinite;
-webkit-animation-timing-function: linear;
-moz-animation-name: rotateme;
-moz-animation-duration: 24s;
-moz-animation-iteration-count: infinite;
-moz-animation-timing-function: linear;
-ms-animation-name: rotateme;
-ms-animation-duration: 24s;
-ms-animation-iteration-count: infinite;
-ms-animation-timing-function: linear;
-o-animation-name: rotateme;
-o-animation-duration: 24s;
-o-animation-iteration-count: infinite;
-o-animation-timing-function: linear;
}
@keyframes rotateme {
    from {
        transform: rotate(0deg);
    }
    to { 
        transform: rotate(360deg);
    }
}
@-webkit-keyframes rotateme {
    from {
        -webkit-transform: rotate(0deg);
    }
    to { 
        -webkit-transform: rotate(360deg);
    }
}
@-moz-keyframes rotateme {
    from {
        -moz-transform: rotate(0deg);
    }
    to { 
        -moz-transform: rotate(360deg);
    }
}
@-o-keyframes rotateme {
    from {
        -o-transform: rotate(0deg);
    }
    to { 
        -o-transform: rotate(360deg);
    }
}

@keyframes slide{
    from { background-position: 0 1920px; }
      to { background-position: 0 0; }
  }
  
  @-webkit-keyframes slide{
    from { background-position: 0 1920px; }
      to { background-position: 0 0; }
  }
  

.pattern-layer {
    position: absolute;
    top: 0px;
    right: 0px;
    width: 35px;
    height: 100%;
    background-repeat: repeat-y;
    animation: slide 60s linear infinite;
    -webkit-animation: slide 60s linear infinite;
    background: #f7f7f7;
    z-index: 99;
}

main#hero .image.image1 img{
    width: 100%;
    height: 100%;
    -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}

main#hero .image img{
    position: relative;
    object-fit: cover;
}

main#hero .content{
    padding: 40px;
    height: 100%;
    z-index: 0;
    position: relative;
}

main#hero .content h1{
    font-weight: 800;
    background: -webkit-linear-gradient(#fc600c, #ee4055);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 60px;
}

main#hero .content h3{
    font-weight: 300;
    color: #1e1e2a;
    font-size: 44px;
}

main#hero .content p{
    color: #696969;
    margin: 20px 0;
    margin-bottom: 40px;
    font-size: 15px;
    line-height: 35px;
    padding-right: 103px;
}


main#hero .content input[type="text"] {
    height: 57px;
    padding-right: 50px;
    border-radius: 50px 0 0 50px;
    border-right: 0;
    padding-left: 48px;
    font-size: 15px;
    border: 0;
}


main#hero .content span{
    position: absolute;
    margin-left: 20px;
    /* height: 25px; */
    left: 0;
    /* display: flex; */
    align-items: center;
    top: 50%;
    transform: translateY(-50%);
    z-index: 99;
}

main#hero .content span i{
    color: #f34b3d91;
    font-size: 24px;
}

main#hero .content input[type="text"]:focus {
    height: 57px;
    padding-right: 50px;
    border-radius: 50px 0 0 50px;
    border-right: 0;
    padding-left: 48px;
    font-size: 15px;
    border: 0;
}

main#hero .content input[type="text"]:focus{
    outline: none !important;
}

main#hero .input-group{
    box-shadow: 0 3px 5px rgb(57 63 72 / 30%);
    border-radius: 30px;
    transition: 500ms all;
}

main#hero .input-group.scaleUp{
    transform: scale(1.1);
    transition: 500ms all;
}




main#hero .content .addressInputBtn {
    margin: 5px -90px 5px;
    height: 40px;
    width: 80px;
    z-index: 100;
}

main#hero .content .btn-custom-submit{
    background-image: linear-gradient(135deg,#fc600c,#ee4055);
    color: #ffffff;
    border-radius: 0 50px 50px 0;
    border: 0;
    padding: 0 20px;
    font-size: 13px;
    letter-spacing: 0.05rem;
}

main#hero .content .btn-custom-submit:hover{
    background-image: linear-gradient(135deg,#fc600c,#ee4055);
}


main#hero .content .btn-custom-submit i{
    font-size: 25px;
}

main#hero .floating-menu{

}

main#hero .floating-menu .nav a{
    color: #1e1e2a;
}

section#process{
    padding: 113px 0px 83px 0px;
    /* background-image: url(../images/shape-3.png); */
    position: relative;
    background-color: #ffffff;
}
section#process h1{
    text-align: center;
    margin-bottom: 60px;
    font-weight: bold;
    font-size: 48px;
}

section#process p{
    font-size: 13px;
    color: #bbb;
}

section#process .block{
    padding: 10px;
}

section#process .circle{

}

section#process .circle img{
    box-shadow: 0 10px 20px rgb(0 0 0 / 30%);
    padding: 13px;
    background-color: #ffffff;
}

section#process .content{
    padding: 20px 0;
    margin-top: 10px;
}

section#process #trail-bg{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
}

footer{
    background-color: #1e1e2a;
}

footer *{
    color: #ffffff;
}

footer p{
    padding: 20px 0;
    margin: 0;
    font-size: 14px;
}

footer img{
    padding: 5px;
    margin-top: 8px;
}

footer #copyright{
    text-align: left;
}

footer #logo{
    text-align: right;
}
.modal-backdrop.show{
    opacity: 0.3;
    z-index: 99999;
}

.modal.leads{
    z-index: 999999;
}

.modal.leads .close{
    position: absolute;
    right: 0;
    padding: 10px;
    top: 0;
    padding-top: 5px;
}

.modal.leads .close span{
    font-size: 30px;
}

.modal.leads .modal-content{
    padding: 20px;
}

.modal.leads .title{
    padding: 0 0 5px;
}

.modal.leads .title h1{
    font-weight: bold;
}

.modal.leads .status{
    position: relative;
}

.modal.leads .status #status-image{
    position: absolute;
    left: 50%;
    transform: rotate(-90deg) scaleX(-1) translateX(-50%) translateY(-50%);
    top: 100%;
    transform-origin: left top;
    margin-top: 7px;

}

.modal.leads .status::after{
    content: '\f0d9';
    font-family: "Font Awesome 5 Free";
    position: absolute;
    left: 0;
    top: 0;
    margin-left: 43px;
    font-weight: 900;
    font-size: 20px;
    /* transform: translateY(50%); */
    margin-top: -3px;
    color: #fc600c;
}

.modal.leads .status::before{
    content: '\f0da';
    font-family: "Font Awesome 5 Free";
    position: absolute;
    right: 0;
    top: 0;
    margin-right: 43px;
    font-weight: 900;
    font-size: 20px;
    /* transform: translateY(50%); */
    margin-top: -3px;
}



.modal.leads .progress-step::before{
    content: '';
    top: 50%;
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #1e1e2a;
    transform: translateY(50%);
    margin-top: -2px;
}

.modal.leads .progress-step::after{
    content: '';
    top: 50%;
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #1e1e2a;
    transform: translateY(50%);
    margin-top: -2px;
}
.modal.leads .progress-step#step1::before{
    left: 50%;
    background-color: #e8e8e8;
    width: 50%;
    margin-left: 6px;
}


.modal.leads .progress-step.green#step1::after{
    background-color:#fc600c;
 }

 .modal.leads .progress-step.green#step1::before{
    background-color: #fc600c;
 }

 .modal.leads .progress-step.green#step1 i{
    color: #fc600c;
 }


.modal.leads .progress-step#step1::after{
    left:25%;
    background-color: #e8e8e8;
    width: calc(25% - 6px);
}


.modal.leads .progress-step#step2::before{
    left: 50%;
    background-color: #e8e8e8;
    width: 50%;
}

.modal.leads .progress-step.green#step2::before{
    background-color: #fc600c;
}

.modal.leads .progress-step#step2::after{
    left:0;
    background-color: #e8e8e8;
    width: calc(50% - 6px);
}

.modal.leads .progress-step.green#step2::after{
    background-color: #fc600c;
}

.modal.leads .progress-step.green#step2 i{
    color: #fc600c;
}


.modal.leads .progress-step#step3::before{
    left:50%;
    background-color: #e8e8e8;
    width: 25%;
}

.modal.leads .progress-step#step3::after{
    left:0;
    background-color: #e8e8e8;
    width: 50%;
}

.modal.leads .progress-step.green#step3::before{
    left:50%;
    background-color: #fc600c;
    width: 25%;
}

.modal.leads .progress-step.green#step3::after{
    left:0;
    background-color: #fc600c;
    width: 50%;
}

.modal.leads .progress-step.green#step3 i{
    color: #fc600c;
}

.modal.leads .progress-step i{
    background-color: #ffffff;
    position: relative;
    border-radius: 100%;
    z-index: 9;
    color: #e8e8e8;
}

.modal.leads .data{
    padding: 60px 40px 40px;
}

.modal.leads .data .image{
    height: 295px;
    background-color: aqua;
    position: relative;
}

.modal.leads .data .image img{
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.modal.leads .data form{
    padding: 20px 0;
}

.modal.leads .data .custom-btn{
    padding: 5px 25px!important;
    color: #ffffff;
    /* font-weight: 600; */
    border-radius: 50px;
    font-size: 16px;
    background-image: linear-gradient(135deg,#fc600c,#ee4055);
}





input[type="text"], textarea {
    outline: none;
    box-shadow:none !important;
    border:1px solid #ccc !important;
}







@media(max-width: 1242px) and (min-width: 991px){
    main#hero .content h1{
        font-size: 46px;
    }

    main#hero .content h3{
        font-size: 30px;
    }

    main#hero .content p{
        padding-right: 35px;
    }
}

@media(max-width: 991px) and (min-width: 768px){
    main#hero .image-wrapper{
        height: 450px !important;
    }

    main#hero .content h1{
        font-size: 40px;
    }

    main#hero .content h3{
        font-size: 24px;
    }

    
    section#process{
        padding: 83px 0px 53px 0px !important;
    }

    section#process h1{
        font-size: 40px !important;
    }


}

@media(max-width: 768px){
    div#top-bar ul li a{
        font-size: 10px !important;
    }

    div#top-bar .col-xs-12{
        text-align: center !important;
    }

    div#top-bar #contact ul{
        float:none !important;
        padding: 10px 0 !important;
    }
    
    div#top-bar #social ul{
        float:none !important;
    }
    
    main#hero .content h1{
        font-size: 36px;
    }

    main#hero .content h3{
        font-size: 22px;
    }
    main#hero .content p{
        padding-right: 0;
        font-size: 13px;
    }

    section#process{
        padding: 53px 0px 23px 0px !important;
    }

    section#process h1{
        font-size: 36px !important;
    }
    
    header#header .nav li{
        display: none !important;
    }

    .pattern-layer{
        display: none !important;
    }

    main#hero .image-wrapper{
        height: 250px !important;
    }

    section#process #trail-bg{
        transform: translateY(-50%) rotate(90deg) !important;
    }

    header#header .logo img{
        width: 92px !important;
    }

    main#hero .image.image3{
        margin-left: 60px !important;
        margin-top: -60px !important;
    }

    main#hero .image.image3 img{
        width: 120px !important;
    }

    main#hero .content{
        padding: 20px;
    }

    footer #copyright{
        text-align: center !important;
        font-size: 10px !important;
    }

    footer #copyright p{
        padding: 10px 0 0!important;
    }

    footer #logo{
        text-align: center !important;
        padding: 5px 0 10px !important;
    }

    footer #logo img{
        width: 90px !important;
    }
}

#search-results{
    position: absolute; top: 55px; left: 0; background: transparent; border: solid 1px transparent; margin: 0; width: 100%; transform: translateX(0); z-index: 999999999999999999999; list-style: none; padding: 0;
}

#search-results ul{
    list-style: none;
    padding: 0;
    margin: 0;
    margin-right: 61px;
    box-shadow: 0 3px 5px rgb(57 63 72 / 30%);
    margin-left: 27px;
}

#search-results li{
    background: #ffffff;
    padding: 9px 10px;
    color: #555;
    font-size: 13px;
    border-bottom: solid 1px #dfdfdf;
}

#search-results li:hover{
    cursor: pointer;
    color: #000
}
.text-muted{
    display: none
}
        </style>
    </head>
    <body>













    <div id="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12" id="contact">
                    <ul class="list-inline float-left mb-0">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="far fa-calendar-check"></i>&nbsp; Mon-Sat: 09am to 07.30pm
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fas fa-envelope"></i>&nbsp; needhelp@shelder.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12" id="social">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 ml-auto d-flex align-items-center">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" width="150">
                    </div>
                </div>
                <div class="col-md-10">
                    <ul class="nav col-md-12 d-table">
                        <!-- <li class="nav-item col-md-4 mr-0 text-center info"><a href="#" class="row"><span class="col-md-2 image"><img src="images/clock.png" width="48"></span><span class="col-md-10 text">Timings<br><b>Mon-Sat: 09am to 07.30pm</b></span></a></li>
                        <li class="nav-item col-md-4 mr-0 text-center info"><a href="#" class="row"><span class="col-md-2 image"><img src="images/mail.png" width="48"></span><span class="col-md-10 text">Contact<br><b>needhelp@shelder.com</b></span></a></li> -->
                        <li class="nav-item offset-md-9 col-md-10 mr-0 text-right d-table-cell align-middle"><a href="#" class="btn btn-custom-main" id="startHere">Start
                                Here <i class="icon-arrow-right-circle icons"></i></a></li>
                        <li class="nav-item col-md-1 mr-0 text-right d-table-cell align-middle">

                            <nav id="navbar" class="navigation" role="navigation">
                                <input id="toggle1" type="checkbox" />
                                <label class="hamburger1 mb-0" for="toggle1">
                                  <div class="top"></div>
                                  <div class="meat"></div>
                                  <div class="bottom"></div>
                                </label>
                              
                                <nav class="menu1">
                                  <a class="link1" href="">About</a>
                                  <a class="link1" href="">Terms & Conditions</a>
                                </nav>
                            </nav>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main id="hero" style="position: relative;">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <div class="col-md-6 col-sm-12 col-xs-12 px-0">
                    <div class="image-wrapper">
                        <div class="pattern-layer" style="background-image: url(https://smartdemowp.com/shelder/wp-content/uploads/2020/06/shape-1.png);"></div>
                    <div class="image image1">
                        <img src={{ asset('images/ho4_slide01.jpg') }} id="back1">
                    </div>
                    <div class="image image2">
                        <img src={{ asset('images/about-2.jpg') }} id="back2">
                    </div>
                    <div class="image image3">
                        <img src={{ asset('images/badge.png') }} id="back3" class="rotateme">
                        <span id="roof">IRC</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 co-xs-12 px-0 align-self-center">
                    <div class="content">
                        <h1>Roof Replacement</h1>
                        <h3>Cost Calculator</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <form action="{{ route('stepOne') }}" method="post" class="row col-md-9">
                            <div class="input-group" style="position: relative">
                            <span>
                            <i class="fas fa-map-marker-alt"></i>
                            </span>
                                <input type="text" class="form-control shadow-none" id="address" placeholder="Enter address...">
                                <button class="btn btn-outline-secondary btn-custom-submit" id="stepOne" type="button"><i class="fas fa-calculator"></i></button>
                                <div id="search-results">
                                      <ul>
                                      </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="floating-menu" style="display: none; position: absolute; top: 0; background-color: #fffffff0; left: 50%; width: 70%; transform: translate(-50%, 0%); padding: 10px 0; border-radius: 0 0 3px 3px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <ul class="nav nav-justified" style="width: 100%;">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
            </div>
            </div>
            <!-- <img src={{ asset('images/services1 (1).png') }} style="position: absolute; top: 0; right: -200px; transform: scaleX(-1); opacity: 0.5;"> -->
    </main>

    <section id="process">
        <div class="container" style="position: relative; z-index: 999999">
            <h1>Our Working Process</h1>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div class="circle" id="one">
                            <img src={{ asset('images/4882187.jpg') }} width="222" class="rounded-circle">
                        </div>
                        <div class="content">
                            <h5>Enter address</h5>
                            <p>The class is a container to enhance an input by adding an icon, text or a button. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div class="circle" id="one">
                            <img src={{ asset('images/2661175.jpg') }} width="222" class="rounded-circle">
                        </div>
                        <div class="content">
                            <h5>Fill Contact details</h5>
                            <p>The class is a container to enhance an input by adding an icon, text or a button. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div class="circle" id="one">
                            <img src={{ asset('images/5545622.jpg') }} width="222" class="rounded-circle">
                        </div>
                        <div class="content">
                            <h5>Get Detailed Report</h5>
                            <p>The class is a container to enhance an input by adding an icon, text or a button. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src={{ asset('images/trail-bg.png') }} id="trail-bg">
    </section>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12" id="copyright">
                    <p>&#169; website.com. All rights reserved.</p>
                </div>
                <div class="col-md-6" id="logo">
                    <img src={{ asset('images/footer-logo.png') }} width="130">
                </div>
            </div>
        </div>
    </footer>

    <!-- modal -->
    <div class="modal fade bd-example-modal-lg leads" id="exampleModal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                  <div id="step1" class="col-md-4 col-4 text-center progress-step {{ Request::is('stepOne') ? 'green' : '' }} {{ Request::is('stepTwo') ? 'green' : '' }} {{ Request::is('stepThree') ? 'green' : '' }}">
                    <i class="far fa-dot-circle"></i>
                  </div>
                  <div id="step2" class="col-md-4 col-4 text-center progress-step {{ Request::is('stepTwo') ? 'green' : '' }} {{ Request::is('stepThree') ? 'green' : '' }}">
                    <i class="far fa-dot-circle"></i>
                  </div>
                  <div id="step3" class="col-md-4 col-4 text-center progress-step {{ Request::is('stepThree') ? 'green' : '' }}">
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





      <div class="modal fade" id="formular">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h4>Error !</h4>
                    <p>Email already exist !</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="emailsent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="success success-danger">
                    <h4>Thankyou!</h4>
                    <p>Your query has been received</p>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- <form action="{{ route('stepOne') }}" method="get">
    Address <input type="text" id="address" class="form-control">
            <input type="button" value="submit" id="stepOne"> -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->
        <!-- </form> -->


    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post">
     {{ Session::get('leadData') }}
     <hr>
        @yield('content')
      </form>
      </div>
    </div>
  </div>
</div>



        

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

    <script>
            $('#startHere').click(function(){
                $('#address').focus();
                $('main#hero .input-group').addClass('scaleUp');
            });
            $("#address").focusout(function(){
                // $('#search-results ul').empty();
                $('main#hero .input-group').removeClass('scaleUp');
            });
        </script>
    @stack('script')


    <script type="text/javascript">
    $('#address').on('keyup',function(){
        $value = $(this).val();
        $("#search-results > ul").empty();  
        if($value.length > 1){
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $("#search-results > ul").empty();  
                console.log(data.search);
                var ul = $('<ul>').appendTo('#search-results');
                $(data.search).each(function(index, Address) {
 
                    var searchWord= Address.Address;
                    var exists=$('#search-results ul li:contains('+searchWord+')').length;


                    if( !exists){
                            ul.append(
                                $(document.createElement('li')).text(Address.Address)
                            );
                    }
                    else{
                    }
                });

                
            }
        });
        }
    })
    </script>



    <script>
    $('.input-group').on('click', '#search-results ul li',function(){
        $getAddress = $(this).text();
        $('#address').val($getAddress);
        $("#search-results > ul").empty();
    });
    </script>


<script type="text/javascript">
    $('#stepOne').on('click',function(){
        $value=$("#address").val();
        console.log($value);
        $('#hidden-address').val('000');
        $.ajax({
            type : 'post',
            url : '{{ route('steps') }}',
            data:{'address':$value},
            success:function(data){
                console.log(data);
                if(data.status != "not found"){
                    window.location.href = "{{URL::to('stepOne')}}";
                }else{
                    $('#formular').modal('show');
                    $('#formular').css('z-index', '9999999');
                    $('#formular p').text('please enter the address');
                }
            }
        });
    })
</script>


<script>
    $("#exampleModal button.close").on('click', function(){
        var destroySession = "{{ Session::forget('leadData') }}";
        window.location.href = "{{URL::to('stepOne')}}";
    });
    $("#exampleModal #exit").on('click', function(){
        var destroySession = "{{ Session::forget('leadData') }}";
        window.location.href = "{{URL::to('stepOne')}}";
    });


    
    </script>

</body>
    </body>
</html>
