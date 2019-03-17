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

</head>
<body>
	 <?php $page = 'dog';
include 'header.php';?>
<!-- A PEN BY Zeinab Abounassif -->
<header id="header2">
  <div id="darkBack"></div>
  <div id="popUp">
    <div id="close" class="close"><i class="fa fa-times"></i></div>
    <div id="new"><span>Записаться</span></div>
    <h2>«Фотография – это единственный язык, который может быть понятен в любой точке мира», - Бруно Барбе.</h2>
    <br>
    <a href="contact.php"  target="_blank" class="button">Записаться на фотосессию</a> </div>
  <div id="plus"><span>Жми!<br>&nbsp;&nbsp;<i class="fa fa-plus"></i></span></div>
</header>
<div class=grid>
<label for=pic-1 class=grid-item><img src="images/21.jpg" width="300px"/></label>
<label for=pic-2 class=grid-item><img src="images/25.jpg" width="300px"/></label>
<label for=pic-3 class=grid-item><img src="images/65.JPG" width="300px"/></label>
<label for=pic-4 class=grid-item><img src="images/66.JPG" width="300px"/></label>

</div>



</div> <?php 
include 'footer.html';?>
<script type="text/javascript">
  
  $(document).scroll(function() {
  var scroll = $(this).scrollTop();
  if (scroll >= 150) {
    $("#popUp").css("margin-left", "-425px");
    $("#plus").css("margin-left", "0px");
  }
});

$("#plus").click(function() {
  $("#popUp").css("margin-left", "0px");
  $("#plus").css("margin-left", "-425px");
});

$("#close").click(function() {
  $("#popUp").css("margin-left", "-425px");
  $("#plus").css("margin-left", "0px");
});

</script>
</body>
</html>