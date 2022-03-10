
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">MARKETING</a>
  <a href="#contact">DESIGN</a>
  <!-- <a img class="header-image" alt="logo" ></a> -->
  <a href="index.php">
      <img src="assets/images/logo.svg" href="index.php" height="90px" class="navbar-brand js-scroll-trigger"></a>
  <!-- src="assets/images/Logo-hunter.png" -->
  <a href="#about">OVER ONS </a>
  <a href="#about">CONTACT</a>
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