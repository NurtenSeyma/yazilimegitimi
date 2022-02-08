<?php
include 'baglanti.php';
// ISSET -> URUNKAYDET BUTONU İLE DEĞER GELİP GELMEDİĞİNE BAKAR
if (isset($_POST['urunkaydet'])) {
	
	$baslik=$_POST["ad"];
	$aciklama=$_POST["aciklama"];
	$sira=$_POST["sira"];
	$fiyat=$_POST["fiyat"];
	$kaydet = $baglanti->query("INSERT INTO urun(baslik,aciklama,sira,fiyat) VALUES('".$baslik."','".$aciklama."','".$sira."','".$fiyat."')");
	if ( $kaydet->rowCount() ){
                    
   	  echo "true";
                    
    }

	


}
else{
	echo "bağlantı başarısız";
}

?>