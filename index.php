<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" >    
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head> 
<body class="index">
    <h1 class="headLine">Создайте свой уникальный турнир!</h1>

<form class="indexForm"  method="POST" action="setUpPartsAndJury.php">

  <input  name="part" type="number" min="1" max="40"placeholder="Количество участников" required class="partNumSend"/>
  <input  name="jury" type="number" min="1" max="10" placeholder="Количество судей" required class="juryNumSend"/>
  <input class="send" type="submit" value="Отправить"/>
 
</form>
    
 
</body>
</html>