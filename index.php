
<!DOCTYPE html><html lang='en' class=''>
<head>
          <title>LitvinencoPhoto</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link href="/examples/vendors/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<link rel='stylesheet' href='https://cdn.rawgit.com/filipelinhares/ress/master/dist/ress.min.css'>
<link rel = "stylesheet" type = "text/css" href = "style.css">

<style type="text/css">
  
header{ 
  background-size: cover;
  background-position: center;
 
  width: 100%;
  overflow: hidden;
 height: 70vh;
  padding-bottom: 55%;
  @media (min-width: 600px){
    padding-bottom: 50%;
  }
  @media (min-width: 700px){
    padding-bottom: 45%;
  }
}
header img{
  width: 100%;
  max-width: none;
  position: fixed;
  top: 0%;
  left: 50%;
  transform: translateX(-50%);
}
/* --- General Pen Styles --- */
body{
  font-family: Georgia, serif;
  color: #333;
  font-size: 18px;
  line-height: 24px;
}
h1{
  font-size: 50px;
  line-height: 1.125;
}
.contained{
  margin: 0 auto;
  width: 90%;
  @media (min-width: 500px){
    width: 80%;
  }
  @media (min-width: 600px){
    width: 60%;
  }
}
main{
  padding: 1em 0;
  position: relative;
  background: #f5f5f5;
  box-shadow: 0px -10px 60px rgba(0,0,0,0.25);
}


@import url(https://fonts.googleapis.com/css?family=Poiret+One|PT+Sans+Narrow:400,700);

/* HEADLINE STRUCTURE */
.headline {
  display: block;
  width: 60%;
  margin: 0 auto;
  padding: 0;
  position: relative;
  text-align: center;
}
.lines {
  display: inline-block;
  position: absolute;
  top: 40%;
}
.lines svg {
  width: 200px;
  height: 32px;
}
@media screen and (max-width: 650px) {
  .lines svg {
    width: 90px;
    height: 15px;
  }
}
.text {
  display: inline-block;
  max-width: 60%;
  padding: 1em 10px;
  text-align: center;
  font-family: 'Poiret One', sans-serif;
  text-transform: uppercase;
  font-size: 35px;
  letter-spacing: 10px;
  line-height: 1.5em;
  color: #ba8748;
}
@media screen and (max-width: 750px) {
  .text {
    font-size: 20px;
    letter-spacing: 2px;
  }
}
.left {
  float: right;
  margin-left: -250px;
}
.right {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
  float: left;
  margin-left: 40px;
}
/* ANIMATION */
#headline {
  -webkit-transform: translate(115px, 0px) scalex(1);
  -moz-transform: translate(115px, 0px) scalex(1);
  -ms-transform: translate(115px, 0px) scalex(1);
  -o-transform: translate(115px, 0px) scalex(1);
  transform: translate(115px, 0px) scalex(1);
  /* @include transform-origin(right); */
}
.pulse #headline {
  -webkit-animation: grow 2s infinite;
  -moz-animation: grow 2s infinite;
  animation: grow 2s infinite;
}
@keyframes grow {
  0% {
    -webkit-transform: translate(115px, 0px) scalex(1);
    -moz-transform: translate(115px, 0px) scalex(1);
    -ms-transform: translate(115px, 0px) scalex(1);
    -o-transform: translate(115px, 0px) scalex(1);
    transform: translate(115px, 0px) scalex(1);
    -webkit-transform-origin: right;
    -moz-transform-origin: right;
    -ms-transform-origin: right;
    -o-transform-origin: right;
    transform-origin: right;
  }
  40% {
    -webkit-transform: translate(115px, 0px) scalex(2);
    -moz-transform: translate(8px, 0px) scalex(2);
    -o-transform: translate(0px, 0px) scalex(2);
    -webkit-transform-origin: right;
    -moz-transform-origin: right;
    -ms-transform-origin: right;
    -o-transform-origin: right;
    transform-origin: right;
  }
}
@-webkit-keyframes grow {
  0% {
    -webkit-transform: translate(115px, 0px) scalex(1);
    -moz-transform: translate(115px, 0px) scalex(1);
    -ms-transform: translate(115px, 0px) scalex(1);
    -o-transform: translate(115px, 0px) scalex(1);
    transform: translate(115px, 0px) scalex(1);
    -webkit-transform-origin: right;
    -moz-transform-origin: right;
    -ms-transform-origin: right;
    -o-transform-origin: right;
    transform-origin: right;
  }
  30% {
    -webkit-transform: translate(115px, 0px) scalex(2);
    -moz-transform: translate(0px, 0px) scalex(2);
    -o-transform: translate(0px, 0px) scalex(2);
    -webkit-transform-origin: right;
    -moz-transform-origin: right;
    -ms-transform-origin: right;
    -o-transform-origin: right;
    transform-origin: right;
  }
}/* картинка на странице */
/* картинка на странице */
.minimized {
  width: 300px;
  cursor: pointer;
  border: 1px solid #FFF;
}
 

 
/* увеличенная картинка */
#magnify {
  display: none;
 
  /* position: absolute; upd: 24.10.2016 */
  position: fixed;
  max-width: 600px;
  height: auto;
  z-index: 9999;
}
 
#magnify img {
  width: 100%;
}
 

</style>
</head>
<body>
<?php
$page = 'index';
include 'header.php';?>

<header class="zoom-me" > 
  <!-- A PEN BY CAPTAIN ANONYMOUS -->
<img src="images/13.jpg"><!-- Photo by Irina Iriser on Unsplash -->
<div  class="container" style="padding: 5%; margin-top: 10%">

  <a href="#second" style="color:black" lang="ru"> <button type="button" class="button2 ">Портфолио</button>
</a> 

 <a href="#first" style="color:black" lang="ru"> <button type="button" class="button2 "   >Обо мне</button>
</a> 
   

</div>
 </header>

 <main role="main"> 
  <div>
<!--  Animated Headlines
A PEN BY CAPTAIN ANONYMOUS  -->
 <svg xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" height="0" id="first">
    <!-- Created with SVG-edit - https://svg-edit.googlecode.com/ -->
    <defs>
      <g id="line">
        <line id="svg_1" y2="15.666668" x2="99.666662" y1="15.666668" x1="0.999995" stroke-width="2" stroke="#BA8748" fill="none" />
        <line stroke="#BA8748" id="svg_4" y2="1" x2="8.989895" y1="1" x1="99.666661" stroke-width="2" fill="none" />
        <line id="svg_5" stroke="#BA8748" y2="31.166662" x2="7.832443" y1="31.166662" x1="100.109209" stroke-width="2" fill="none" />
      </g>
    </defs>
  </svg>

  <h2 class="headline pulse">

  <div class="lines">

    <svg class="left" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" viewBox="0 0 205 33">
      <g id="headline">
        <use xlink:href="#line" />
      </g>
    </svg>

  </div>

  <span class="text">LitvinenkoPhoto</span>

  <div class="lines">

    <svg class="right" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" viewBox="30 0 205 33">
      <g id="headline">
        <use xlink:href="#line" />
      </g>
    </svg>

  </div>

</h2>
 </div>

    <div class="container"  class="row" style="padding: 0 0px 0 0px">
  
    
      <div class="col-sm-12 col-md-8 col-lg-6" style="float:left;  font-size: 1.8rem; padding-top: 5%"><p>Привет, меня зовут Евгения. Добро пожаловать на мой сайт!<br> Я занимаюсь фотографией уже несколько лет и с удовольствием помогу организовать необходимый Вам вид съемки. Готова экспериментировать вместе с Вами и воплотить в жизнь Ваши фантазии! Комфортная обстановка фотостудий и ваша любимая музыка помогут создать незабываемый образ. Для обсуждения деталей Вы можете связаться со мной удобным для Вас способом: позвонить, написать или встретиться. Буду рада знакомству!</p></div>
     <div style="float: right; margin-right: -5%" class="col-sm-12 col-md-8 col-lg-6"><img src="images/48.jpg" width="90%"></div>
  
</div>

<div  id="second">
<figure class="snip1091 red"><img src="love.jpg" style="width:400px" alt="sq-sample6"/>
  <figcaption>
    <h2>Love <span>story</span></h2>
  </figcaption><a href="love.php"></a>
</figure>
<figure class="snip1091 green "><img src="images/69.jpg" height="310px" alt="sq-sample14"/>
  <figcaption>
    <h2> Семейные <span>  </span></h2>
  </figcaption><a href="family.php"></a>
</figure>
<figure class="snip1091 navy"><img src="port.jpg" alt="sq-sample10"/>
  <figcaption>
    <h2>Портрет  <span></span></h2>
  </figcaption><a href="portrait.php"></a>
</figure>
<figure class="snip1091 red"><img src="city.jpg" alt="sq-sample10"/>
  <figcaption>
    <h2>City  <span>Style</span></h2>
  </figcaption><a href="city.php"></a>
</figure>
</div>



<div class="grid" class="image__wrapper">






<label for=pic-1 class=grid-item ><img src="images/1.jpg" class="minimized" width="300px"/></label>
<label for=pic-2 class=grid-item><img src="images/12.jpg" class="minimized" width="300px"/></label>
<label for=pic-3 class=grid-item><img src="images/3.jpg"  class="minimized" width="300px"/></label>

<label for=pic-4 class=grid-item><img src="images/4.jpg" class="minimized" width="300px"/></label>
<label for=pic-5 class=grid-item><img src="images/28.jpg"class="minimized" width="300px"/></label>
<label for=pic-6 class=grid-item><img src="images/6.jpg" class="minimized"width="300px"/></label>
<label for=pic-7 class=grid-item><img src="images/7.jpg" class="minimized"width="300px"/></label>
<label for=pic-8 class=grid-item><img src="images/8.jpg" class="minimized"width="300px"/></label>
<label for=pic-9 class=grid-item><img src="images/17.jpg"class="minimized" width="300px"/></label>
<label for=pic-10 class=grid-item><img src="man.jpg"class="minimized" width="300px"/></label>
<label for=pic-11 class=grid-item><img src="images/72.jpg"class="minimized" width="300px"/></label>
<label for=pic-12 class=grid-item><img src="images/22.jpg"class="minimized"width="300px"/></label>
<label for=pic-10 class=grid-item><img src="images/29.jpg"class="minimized" width="300px"/></label>
<label for=pic-12 class=grid-item><img src="images/43.jpg"class="minimized" width="300px"/></label>
<label for=pic-11 class=grid-item><img src="images/57.JPG"class="minimized" width="300px"/></label>
</div>



 <?php 
include 'footer.html';?>
</main>
</script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js'></script>
<script type="text/javascript">
  
  $(function(){
  $('.minimized').click(function(event) {
    var i_path = $(this).attr('src');
    $('body').append('<div id="magnify"><img src="'+i_path+'" id="new"><div id="close-popup"><i></i></div></div><div id="overlay"></div>');
    $('#magnify').css({
      left: ($(document).width() - $('#magnify').outerWidth())/2,
      // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
            top: ($(window).height() - $('#magnify').outerHeight())/2
    });
    $('#overlay, #magnify').fadeIn('fast');
  });
  
  $('body').on('click', '#close-popup, #overlay, #new', function(event) {
    event.preventDefault();
 
    $('#overlay, #magnify').fadeOut('fast', function() {
      $('#close-popup, #magnify, #overlay').remove();
    });
  });
});


</script>
<script type="text/javascript">
  



 $(function(){
  $('a[href^="#"]').on('click', function(event) {
    // отменяем стандартное действие
    event.preventDefault();
    
    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
    /*
    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
    * dn - определяем положение блока на странице
    */
    
    $('html, body').animate({scrollTop: dn}, 1000);
    
    /*
    * 1000 скорость перехода в миллисекундах
    */
  });
});


</script>
<script type="text/javascript"> 
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $(".zoom-me img").css({
    width: (100 + scroll/5)  + "%",
    top: -(scroll/10)  + "%",
    //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
    "-webkit-filter": "blur(" + (scroll/200) + "px)",
    filter: "blur(" + (scroll/200) + "px)"
  });
});
   </script>
<script type="text/javascript">//# sourceURL=pen.js

    /* Demo purposes only */
  $("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );</script>

</body></html>