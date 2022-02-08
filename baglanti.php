<?php


 
try {
    $baglanti = new PDO("mysql:host=$mysqlsunucu;dbname=deneme;charset=utf8", 'root', '12345678');
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "bağlanti başarılı";
    }
catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>













