<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Marketing Hunters</title>
  <link rel="icon" type="image/x-icon" href="assets/images/Joel.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Wij van Higher Marketing zijn on- en offline bergbeklimmers die jouw marketing en design naar de top van de berg brengen. Door creatieve marketing en design ..." />
  <meta name="keywords" content="Design,design, Marketing, marketing, SEO, seo, Web design" />
  <meta name="author" content="Marketing Hunters & Danny van Schijndel" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/headerIndex.css">
     <link href="css/styles.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.cdnfonts.com/css/akaposse" rel="stylesheet">
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
  
     <link href='' rel='stylesheet'>
     <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


  <link rel="stylesheet" href="dist/style.css">
   
<style>
@import url(https://fonts.googleapis.com/css?family=Lobster+Two:400,400italic);

#background-image {
  width: 110%;
  height: 110%;
  left: 0;
  top: 0;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  /* pointer-events: none; */
  z-index: 1;
  position:absolute ;
  background: url('assets/images/Achtergrond.jpg') no-repeat left center / cover;

  pointer-events: auto;

}
@media (min-width: 10px)  and (max-width: 500px) {
#background-image {
     z-index: -1;

    }
  }
#background-image2 {
  width: 50%;
  height:50%;
  left: 0;
  top: 0;
  z-index: 1;
  position:absolute ;
  /* background: url('assets/images/Achtergrond.jpg') no-repeat left center / cover; */
}

h1 {
  margin: 0;
  padding: 0;
  pointer-events: none;
  white-space: nowrap;
  font-family: 'Lobster Two', cursive;
  font-style: italic;
  z-index: 1;
  font-size: 100px;
  color: white;
  position: absolute;
  top: 40%;
  left: 46%;
  transform: translate3d(-50%,-50%,0);
}
@media (min-width: 2250px)  and (max-width: 3000px) {
  h1 {
 width: 320px; 
}
  }
@media (min-width: 1200px)  and (max-width: 1600px) {
  h1 {
  left: 48%;
}
  }
  @media (min-width: 1000px)  and (max-width: 1200px) {
  h1 {
  left: 50%;
}
  }
  @media (min-width: 559px)  and (max-width: 1000px) {
  h1 {
  top:45%;
  left: 50%;
}
  }
  @media (min-width: 300px)  and (max-width: 559px) {
  h1  {
    left: 50%;
   top: 25%;   }
}

#marketing{
width: 43%;
height: 100%;
float: left;
position: relative;
z-index: 3;
pointer-events: auto;
transform-style:preserve-3d;
filter:  blur(0.9px) grayscale(40%);
}
#design{

width: 57%;
height: 100%;
float: left;
position: relative;
z-index: 3;
transform-style:preserve-3d;
pointer-events: auto;

filter:  blur(0.9px) grayscale(40%);

}


</style>

<style>
  #design-button{
    display: none;
    /* border: 1px solid black; */
    position: absolute;
    justify-content: center;
    /* display: flex; */
    /* top: -220px; */
    z-index: 10;
    width: 165px;
    bottom: 20vh;
    height: 75px;
    margin-left: 30%;
    background-color: #673334;
    padding: 49px 29px 21px;
    /* border-radius: 10px; */
    right: 15%;
    background: url(assets/images/design-knop.svg) no-repeat  center / cover;

}
   
#design:hover ~ #design-button{
  display: flex;
} 
#design-button:hover{
  display: flex;
} 
#design:hover{
  filter:  blur(0.0px) grayscale(0%);
}
a#design-button h2 {
    font-size: 0px;
}
  #marketing-button{
  display: none;
    /* border: 1px solid black; */
    position: absolute;
    justify-content: center;
    /* display: flex; */
    /* top: -220px; */
    z-index: 10;
    width: 220px;
    bottom: 20vh;
    height: 75px;
    /* margin-left: 30%; */
    background-color: #673334;
    padding: 49px 29px 21px;
    /* border-radius: 10px; */
  left: 15%;
  background: url(assets/images/marketing-knop.svg) no-repeat center / cover;

}
   
#marketing:hover ~ #marketing-button{
  display: flex;
} 
#marketing:hover{
  filter:  blur(0.0px) grayscale(0%);
} 


#marketing-button:hover{
  display: flex;
} 
#marketing-button:hover ~ #marketing{
  display: flex;
  filter:  blur(0.0px) grayscale(0%);
} 
a#marketing-button h2 {
    font-size: 0px;
}
</style>
<script> 
window.onload = function() {

  var pageTitle = document.title;
  var attentionMessage = '  Kom je terug naar de saloon? 🤠';

  document.addEventListener('visibilitychange', function(e) {
    var isPageActive = !document.hidden;

    if(!isPageActive){
      document.title = attentionMessage;
    }else {
      document.title = pageTitle;
    }
  });
};
</script>
</head>
<body>

<style>
    body{
      padding: 0;
      box-sizing: border-box;
      font-family: Nunito;
    }
    .container {
      max-width: 700px;
      margin: 0 auto;
      display:none;
      height:100%;
    }

    @media (min-width: 500px)  and (max-width: 9999px) {
  
    button {
	width: 150px;
	height: 50px;
	cursor: pointer;
	border: 0px solid #5b3f69;
	background: #34283b;
	transition: 200ms;
}

button span {
	position: absolute;
	transform: translateX(-50%) translateY(-50%);
	font-family: 'Berkshire Swash', cursive;
	font-size: 30px;
	color: #f0ecfc;
	transition: 500ms;
}

button::before, button::after {
	content: '';
	position: absolute;
	margin-left: -75px;
	margin-top: -25px;
	width: 140px;
	height: 40px;
	z-index: -1;
}

button::before {
	/* border: 5px solid #7e5791; */
	transition: 200ms;
}

button::after {
	/* border: 5px solid #b37ccf; */
	transition: 500ms;
}

button:hover {
	border: 5px solid #5b3f69;
}

button:hover span {
	letter-spacing: 4px;
	font-size: 20px;
}

button:hover::before {
	width: 150px;
	height: 50px;
	margin-left: -80px;
	margin-top: -30px;
}

button:hover::after {
	width: 160px;
	height: 60px;
	margin-left: -85px;
	margin-top: -35px;
}

button:focus {
	outline: none;
}
    }
    @media (min-width: 10px)  and (max-width: 500px) {
    .container {
      max-width: 700px;
      margin: 0 auto;
      display: block;
    }
    
}
    .carousel {
      max-width: 600px;
      margin: 0 auto;
    }

    img {
      /* max-width: 100%; */
      display: block;
      /* padding: .5em; */
    }
    .example-box {
      margin-bottom: 50px;
      /* box-shadow: 0 2px 5px rgba(0,0,0,.4); */
      /* padding: 1em; */
      border-radius: 12px;
      /* border: 1px solid #DFDFDF; */
      height:100%
    }
    .example-box h2 {
      margin: 0 0 20px !important;
    }
    .box {
      font-family: Arial, Helvetica, sans-serif;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      /* background-image: linear-gradient(to bottom right, #2193b0, #6dd5ed); */
      /* border: 1px solid black; */
      border-radius: 8px;
      color: #FFF;
      font-size: 26px;
      margin-top: 80vw;
    }
    .text-center {
      text-align: center;
    }
    .img-cris {
      max-width:auto;
      height: 100%;
      width: 180%;
        }
    .img-marc {
      max-width:auto;
      /* height: 400px; */
      width: 238%;
      /* margin-right: 40px; */
      height:100%;
    }
    .img-joel {
      max-width:auto;
      height: 100%;
      width: 133%;
      /* margin-left: 30px; */
    }
    .img-renzo {
      max-width: auto;
      height: 100%;
      width: 147%;
    }
    #button-marc, #button-cris,#button-joel,#button-renzo{
     margin-left:7vw;
     width: 143px;
     height: 51px;
     background-color: darkred;
     position: absolute;
     margin-top: -24vw;
     border-radius: 0px;
     border: 0px;
    }
    #button-cris{
      background: url(assets/images/marketing-knop.svg) no-repeat center / cover;
    }
    
    #button-marc{
      background: url(assets/images/design-knop.svg) no-repeat center / cover;

    }
    
    #button-joel{
/* width: 200px; */ 
    }
    
    #button-renzo{
/* width: 200px; */ 
    }
    .items {
    width: 90%;
    margin: 0px auto;
    margin-top: 100px
}

.slick-slide {
    margin: 10px
}

.slick-slide img {
    width: 100%;
    border: 0px solid #fff
}
 .slick-dots{
   display:none !important;
 }
 .container {
    /* background-color: rgb(232, 242, 245); */
    padding: 50px 40px 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    overflow: hidden;
    /* box-shadow: 5px 5px 25px #a7a7a7 */
}

.tag {
    text-align: center;
    font-size: 1.1rem
}

.fa-heart {
    color: rgba(255, 230, 0, 0.959);
    font-size: 30px
}

.card {
    height: 320px;
    /* padding: 10px 20px; */
    border: none;
    /* box-shadow: -1px 3px 5px #a7a7a7; */
    width: 150px;

}
.owl-item.active {
    width: 120px !important;
}
.testimonial {
    font-size: 0.9rem;
    line-height: 1.4rem;
    font-weight: 500
}

.active-star {
    color: #FBC02D;
    margin-bottom: 8px
}

.active-star:hover {
    color: #F9A825;
    cursor: pointer
}

.profile {
    padding-top: 10px
}

.name {
    font-weight: 700
}

.designation {
    font-size: 0.84rem;
    font-weight: 600
}

.owl-carousel {
    margin-bottom: 15px
}

.owl-carousel .owl-stage-outer {
    padding: 40px 10px;
    height: 380px
}

.owl-carousel .owl-item img {
    /* width: 45px !important;
    height: 45px; */
    /* border-radius: 50%; */
    object-fit: cover
}

.owl-theme .owl-nav [class*='owl-'] {
    border-radius: 50% !important;
    background: inherit !important;
    border: 3px solid #bbb;
    color: #bbb !important
}

.owl-theme .owl-nav [class*='owl-']:hover {
    border: 3px solid #1010ca;
    color: #1010ca !important
}

@media(max-width: 575.5px) {
    .container {
        margin: 0px;
        padding: 20px
    }
}
    </style>

<?php 
include "header/headerMain.php"; 
?>

<div class="container">

<!-- MULTIPLE ITEMS -->

                                </head>
                                
</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<div class="container rounded">
    <div class="d-flex justify-content-center fas fa-heart"></div>

    <div class="owl-carousel owl-theme">
        <div class="owl-item">
            <div class="card d-flex flex-column">
               <img class="img-cris" src="assets/images/Cris.png" alt="Cris" >
                    
                <!-- </div> -->
            </div>
        </div>
        <div class="owl-item">
            <div class="card d-flex flex-column">
               <img class="img-marc" src="assets/images/Marc.png" alt="Marc" >
                    
                <!-- </div> -->
            </div>
        </div>
        <div class="owl-item">
            <div class="card d-flex flex-column">
               <img class="img-joel" src="assets/images/Joël.png" alt="Joël" >
                    
                <!-- </div> -->
            </div>
        </div>
        <div class="owl-item">
            <div class="card d-flex flex-column">
               <img class="img-renzo" src="assets/images/renzo.png" alt="Renzo" >
                    
                <!-- </div> -->
            </div>
        </div>
        
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'>$(document).ready(function () {
var silder = $(".owl-carousel");
silder.owlCarousel({
autoPlay: false,
items: 1,
center: false,
nav: true,
margin: 40,
dots: false,
loop: true,
navText: ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
responsive: {
0: {
items: 1,
},
575: { items: 1 },
768: { items: 2 },
991: { items: 2 },
1200: { items: 2 }
}
});
});</script>
</div>

<script src="dist/index.min.js"></script>
<script>
new ElderCarousel('.carousel-single-item', { items: 1, infinite: false })

new ElderCarousel('.carousel-multiple-items', { items: 2 })

</script>
<div id="background-image"></div>

<div id="marketing">
  <div id="border-name">
    <img class="perspective-cris" src="assets/images/Cris.png" alt="Cris" >
    </div>
  <!-- <div id="name-plate-chris">Cris</div> -->
  <div id="border-name">
  
  <img class="perspective-renzo" src="assets/images/renzo.png" alt="Renzo" >
  <!-- <div id="name-plate-renzo">Renzo</div> -->
  </div>
  
  
  </div>
  
<div id="design">
<div id="border-name">
<img class="perspective-marc" src="assets/images/Marc.png" alt="Marc" >
<!-- <div id="name-plate-marc">Marc</div> -->
</div>
<div id="border-name">
<img class="perspective-joel" src="assets/images/Joël.png" alt="Joel">
  </div>
<!-- <div id="name-plate-joel">Joel</div> -->
</div>

</div>
</div>

<a href="design.php" div id="design-button"><h2> Design</h2> </div> </a>
<a href="" div id="marketing-button"> <h2>Marketing</h2> </div> </a>

<!-- divs voor button buiten divs van design en marketing? -->
<h1><img class="perspective" src="assets/images/logo.svg" alt="background" ></h1>

<!-- <div id="background-image2"></div> -->

  <script  src="./script.js"></script>
  <script  src="./test.js"></script>
  </body>
</html>

