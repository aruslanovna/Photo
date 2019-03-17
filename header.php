<!DOCTYPE html>
<html lang="ru">
<head>
 <title>LitvinencoPhoto</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel = "stylesheet" type = "text/css" href = "style.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>
(function($) {
$(function() {

  $('#up').click(function() {
    $('body,html').animate({scrollTop:0},1000);
    return false;
  })

})
})(jQuery)
</script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
    $('a[data-toggle="pill"]').on('hidden.bs.tab', function (e) {
      console.log(e.target); // вкладка, которая стала активной
      console.log(e.relatedTarget); // предыдущая активная вкладка
    })
    </script>
</head>
<body>
	
<nav class="navbar navbar-default" role="navigation" class="top_vid"  >
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Навигация</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">LitvinencoPhoto</a>
      </div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <ul  class="nav navbar-nav">
    <li <?php echo ($page == 'index') ? "class='active'" : ""; ?> ><a  href="index.php" >Главная <span class="glyphicon glyphicon-home"></span></a></li>
   <li <?php echo ($page == 'all') ? "class='active'" : ""; ?> ><a    href="all.php">Галерея</a></li>
    <li <?php echo ($page == 'port') ? "class='active'" : ""; ?> ><a   href="portrait.php" > Портрет</a></li>
    <li <?php echo ($page == 'fam') ? "class='active'" : ""; ?> ><a  href="family.php">Семейные</a></li>
    <li <?php echo ($page == 'love') ? "class='active'" : ""; ?> ><a  href="love.php"> Love-story </a></li>
 <li <?php echo ($page == 'city') ? "class='active'" : ""; ?> ><a  href="city.php">City</a></li>
   <li <?php echo ($page == 'dog') ? "class='active'" : ""; ?> ><a  href="friends.php"> Братья наши меньшие </a></li>
     <li <?php echo ($page == 'contact') ? "class='active'" : ""; ?> > <a  href="contact.php"> Контакты </a></li>
     <a href="https://www.instagram.com/litv_e_/"><img src="https://img.icons8.com/material-outlined/50/000000/instagram-new.png" height="30px" style="margin: 10px 180px 0 0; padding-left: 30px"></a>
  </ul>

         
</div>
</nav>

</body>
</html>