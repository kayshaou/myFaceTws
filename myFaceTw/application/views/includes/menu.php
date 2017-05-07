<html>
<head>
</head>
</head>
<body>

<!--  -->
<div id="topHeader" >
  <div class="iconBar" id="iconBar" onclick="openNav(this)" >
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <!--<div id="clockDisplay" ></div>-->
  <!--<div class="clockDisplay"></div>-->
  <div id="userLogo" onclick="openHeartNav(this)"><i class="icon-heart"></i></div>
</div>


<!-- left button menu -->
<div id="myHeartSidenav" class="myHeartSidenav">
	<a href="#">My Account</a>
    <a href="#">My Records</a>
    <a href="#">Statistics</a>
</div>


  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav(this)" >
    </a>
    <a href="/<?php echo site_url('/')?>" >Home</a>
	 <a href="/<?php echo site_url('/profile')?>" >Profile</a>
   <a href="#" id="aCategories"  >Categories <i class="icon-caret-down" ></i>

    </a>
    <ul class="subCat" style="display :block">
      <li><a href="#">Category 1</a></li>
      <li><a href="#">Category 2.1</a></li>
      <li><a href="#">Category 2.2</a></li>
    </ul>


    <a href="#">About</a>
  </div>



</body>

</html>
