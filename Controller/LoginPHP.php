<?php

include_once('Config.php');
$name = $_POST['user'];
$pass = $_POST['password'];
$text = "Caso esqueça a senha procure um dos administradores no local";

/*$query = mysqli_query($mysqli,"SELECT * FROM usuarios");


    while ($print = mysqli_fetch_array($mysqli,$query)) {
  echo $print['AT_Name'];

}*/


$query = mysqli_query($mysqli,"SELECT * from usuario");
          echo "<br>";
/*Login*/
          while($print = mysqli_fetch_array($query)) {
            if($print['AT_Name'] == $name){
              if($print['AT_Password'] == $pass){
$text = "Login efetuado com sucesso,Bem vindo!";
$_SESSION['login'] = true;
$_SESSION['Nome'] = $print['AT_Name'];


}else{
$text =  "Caso esqueça a senha procure um dos administradores no local";
}
}else{
$text =  "Caso esqueça a senha procure um dos administradores no local";
}
      }




      /*Isset Session*/

      if (isset($_POST['user'])){
$_POST['user'] = "";
      }

      if (isset($_POST['pass'])){
$_POST['pass'] = "";
      }

      if (isset($_POST['user'])){
$_POST['user'] = "";
      }

 ?>