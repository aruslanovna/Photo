
<!DOCTYPE html>
<html lang="en">
<head>
	  <meta content="charset=utf-8">
   <title>Искусство икебаны</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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

    .a {
  color: white;
  text-decoration: none;
  font-size: 30px
}
</style>
</head>
<body>
	 <nav class="navbar navbar-default" role="navigation" style=" " >
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Навигация</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Искусство икебаны</a>
      </div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul  class="nav navbar-nav">
    <li ><a href="index.html" >Главная <span class="glyphicon glyphicon-home"></span></a></li>
     <li ><a href="galary.html">Галерея</a></li>
    <li ><a href="advice.html">Виды икебан</a></li>
    <li ><a  href="test.html"> Лаборатория</a></li>
 <li><a href="rules.html">Как создать икебану</a></li>
       <li class="active"><a href="help.html"> Помощь <span class="glyphicon glyphicon-question-sign"></a></li>
  </ul>

<div style="margin-right: -1000px; margin-top: 10px">
<form action=""  id="search-block-form" >
      <div class="form-item">
        <input type="text" name="" value="" size="13" maxlength="128" placeholder="Найти...">
      </div>
      <div class="form-actions">
        <input type="submit" id="edit-submit" name="op" value="Поиск" class="form-submit">
      </div>
</form>
   </div>        
</div>
</nav>

<div class="container" style="font-size:50px; text-align:center;padding: 5px; color: antiquewhite "><p> Помощь </p></div>
<div class="container" style="margin-top:20px">
<a href="#" class="a" onclick="openbox('box'); return false">1) Создание собственной икебаны в онлайн-режиме</a>
<div id="box" style="display: none;">У Вас есть возможность воспользоваться функцией онлайн-лаборатории на нашем сайте. В главном меню выберите пункт "Лаборатория" и на вкладке перейдите к самой работе,нажав на кнопку "Создать икебану". Перед вами появятся различные элементы икебаны: вазы и цветы. Сочитайте их, как пожелаете путем нажатия на элемент, зажатием кнопкой мыши и перетаскиванием элемента.</div>
<a href="#" class="a" onclick="openbox('box2'); return false">
<br>2) Сброс сконструированной икебаны</a>
<div id="box2" style="display: none;">Чтобы сбросить в "Лаборатории" сделанную икебану, воспользуйте кнопкой "Сбросить все"</div>
</div>
<div class="container" style="margin-top: 20px">
	<a href="#" style="color: antiquewhite ; font-size: 20px" >
Если у вас остались вопросы по использованию нашей системы или вы заметили ошибку в работе, пожалуйста, свяжитесь с нами </a><br><br>

<form name="MyForm" action="send.php" method="post">
<p> Ваше имя*      <input class="input2" name="name" type="text" style="width:15% ; margin-left: 90px" /></p>
 
<p> Электронная почта*   <input class="input2" name="email" type="text" style="width:15%" /></p>
 
<p> Тема сообщения        <input class="input2" name="sub" type="text" style="width:15%;margin-left: 35px" /></p>
 
<p>Текст сообщения:<br /><textarea name="sub2" class="input2" cols="1" rows="5" style="width:30%" /></textarea></p>
<button ttype="submit" name="submit" value="Submit"  class="btn  b " style="margin-bottom: 30px; margin-left: 40%; margin-right: 50%; margin-top: 20px;background-color: limegreen">

    Отправить   </span>
           
</button>

<input type="submit" name="submit" value="Submit">
</form>
</div>
<script type="text/javascript">

function openbox(id){
    display = document.getElementById(id).style.display;

    if(display=='none'){
       document.getElementById(id).style.display='block';
    }else{
       document.getElementById(id).style.display='none';
    }
}
</script>
</body>
</html>