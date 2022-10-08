<?php
try {
  $db=new PDO("mysql: host=localhost; dbname=eticaret; charset=utf8",'root','78945612');
  //echo "veritabanı bağlantısı başarılı";
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>