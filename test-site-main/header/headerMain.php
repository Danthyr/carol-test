<style>


.topnav a {


  width: 20%;
}

</style>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">Marketing</a>
  <a href="#contact">Design</a>
  <a href="#about">Over ons </a>
  <a href="#about">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>