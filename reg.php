<?
   $l = $_POST['login'];
   $p = $_POST['password'];
   $f = fopen("users/$l.txt", 'a');
    fwrite($f,"$p");
    fclose($f);
?>