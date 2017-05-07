<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" rel='stylesheet' type='text/css' href="/<?php echo base_url(); ?>styles/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<script type="text/javascript">
function openNav(obj) {
  obj.classList.toggle("change");
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("mySidenav").style.height = "100%";
  document.getElementById("main").style.marginLeft = "200px";
  $('#iconBar').attr('onclick','closeNav(this)');
}
function closeNav(obj) {
    obj.classList.toggle("change");
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    $('#iconBar').attr('onclick','openNav(this)');
}
function openHeartNav(obj){
    obj.classList.toggle("change");
    document.getElementById("myHeartSidenav").style.width = "200px";
    document.getElementById("mySidenav").style.height = "100%";
  //  document.getElementById("myHeartSidenav").style.marginRight = "200px";
    $('#userLogo').attr('onclick','closeHeartNav(this)');
}
function closeHeartNav(obj){
    obj.classList.toggle("change");
    document.getElementById("myHeartSidenav").style.width = "0";
    document.getElementById("myHeartSidenav").style.marginRight = "0";
    $('#userLogo').attr('onclick','openHeartNav(this)');
}
function aCategories(obj){
  obj.classList.toggle("togMenu");
}
/*function showClock(){
  var d = new Date();
  var hours = d.getHours();
  var minutes = d.getMinutes();
  var secons = d.getSeconds();
  $('#clockDisplay').html(padZero(hours)+':'+padZero(minutes)+':'+padZero(secons));
  setTimeout(showClock, 1000);
}
function padZero(num){
    var output = '';
    if(num!=undefined && num!=''){
      if(parseInt(num)<10){
        output = '0'+num;
      } else {
        output = num.toString();
      }

    }
    return output;
}
*/
</script>

<!--HelveticaNeue--->
<!--<script>
function openNav() {
    document.getElementById("myNav").style.width = "70%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>-->
