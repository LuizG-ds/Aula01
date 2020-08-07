<?php
if(isset($_POST["10"])){
  echo $_POST["10"];
  echo "<br>";

  $num = $_POST["10"];

  if($num % 2 == 0){
    echo "O numero informado é par";
  } else{
    echo "O numero informado é impar";
  }
}
?>