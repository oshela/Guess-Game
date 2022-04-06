<?php
 $peace =rand(1, 2);
if(isset($_POST["btnsubmit"])){
   $number= $_POST["text"];
  $trials = 0;
     while($trials<5){
         if($number==$peace){
             $trials ++;
         echo "correct guess after"." ".$trials." "."trail(s)";
         $trials = $trials;
         break;
         }else{
             $trials ++;
             echo "wrong guess after"." ".$trials." "."trial(s)";
             $trials = $trials;
             break;
         } 
     }

 }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>guessing game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1><u><i>candy guess</i></u></h1>
<form action="" method="POST">
 <input type= "text" name ="text" placeholder="guess a number form 1-30"><br>
 <input type ="submit" name ="btnsubmit" value="guess"><br>
 </form>
</body>
</html>