<?php
include 'baglanti.php';




          $urunsor=$baglanti->prepare("SELECT * from urun where id=:id ");
          $urunsor->execute(
           array(
          'id'=>$_GET['id']
           ));
 $uruncek= $urunsor->fetch(PDO::FETCH_ASSOC);




?>


<!DOCTYPE html>
<html>
<head>
	<title>Yazılım yolcusu ürün düzenleme</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<div class="container">

	<form action="islem.php" method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Ürün başlık</label>
    <input name="ad" value="<?php echo $uruncek['baslik'] ?>"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ürün başlık">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ürün açıklama</label>
    <input name="aciklama"  value="<?php echo $uruncek['aciklama'] ?>"  type="test" class="form-control" id="exampleInputPassword1" placeholder="ürün açıklama">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Ürün sıra</label>
    <input name="sira" value="<?php echo $uruncek['sira'] ?>"  type="test" class="form-control" id="exampleInputPassword1" placeholder="ürün sıra">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Ürün fiyat</label>
    <input  name="fiyat"  value="<?php echo $uruncek['fiyat'] ?>" type="test" class="form-control" id="exampleInputPassword1" placeholder="ürün fiyat">
  </div>
 <input type="hidden" name="id" value="<?php echo $uruncek['id'] ?>">

  <button name="urunduzenle" type="submit" class="btn btn-primary">Ürün Düzenle</button>
</form>


</div>











	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>