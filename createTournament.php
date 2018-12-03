<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="main.css">
</head>
<body class="tournTable">
<?php  require('connect.php');
clear_bd();
if (empty($_POST)){
     header("HTTP/1.1 301 Moved Permanently");
     header("Location:index.php");
     exit();
 }

$jury  = $_POST['jury'];

$parts  = $_POST['parts'];

foreach($jury as $oneJury)
{

    $conn->query("INSERT INTO people (name,type) VALUES ('".$oneJury."','jury');");
}

foreach($parts as $part)
{
 $conn->query("INSERT INTO people (name,type) VALUES ('".$part."','part');");
}

 
$result = $conn->query("SELECT * FROM people WHERE type='jury';");
 
$jury = [];

while($row = $result->fetch_assoc()) {
     array_push($jury,$row);
}
$arr=[];
for($i=0;$i<count($jury);$i++){
     array_push($arr,$jury[$i]["name"]);
}
sort($arr);
for($i=0;$i<count($jury);$i++){
     $jury[$i]["name"]=$arr["$i"];
}
$result = $conn->query("SELECT * FROM people WHERE type='part';");
 
$part = [];
$jury_len = count($jury);

while($row = $result->fetch_assoc()) {
     array_push($part,$row);
}
$arr=[];
for($i=0;$i<count($part);$i++){
     array_push($arr,$part[$i]["name"]);
}
sort($arr);
for($i=0;$i<count($part);$i++){
     $part[$i]["name"]=$arr["$i"];
}
echo "<div class='row'> <div class='col'></div>";
foreach ($jury as $onejury){
     ?> 
<div class='col bg-warning border'><?=$onejury["name"]?></div>


<?php };
echo "</div>";


 foreach ($part as $onepart){
     ?> 
     <div class='row border '>;
    <div class='col bg-success'><?=$onepart["name"]?></div>
    <?php
    for($i = 0; $i<$jury_len; $i++){
         echo("<div class='col border'>
               <select class='votes'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
               </select>
         </div>");
     };
     ?>
     </div>
     


<?php };

echo "</div>";
 ?>
 </body>
</html>

