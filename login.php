<?
$l=$_POST['login'];
    if($_POST['password'] == file_get_contents("users/$l.txt")){
    echo "Welcome";
   }
    if(!($_POST['password'] == file_get_contents("users/$l.txt"))){
    echo "Wrong data";
   }
?>