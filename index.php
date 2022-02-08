<?php include 'baglanti.php';


?>


<!DOCTYPE html>
<html>
<head>
	<title>Yazılım yolcusu mysql dersleri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
	<div class="container">
        <?php 

if (@$_GET['durum']=="okey") { ?>
	   <div class="alert bg-success">
            	
            <b style="color:white">İşleminiz başarılı bir şekilde gerçekleşmiştir.</b>


            </div>
<?php } elseif(@$_GET['durum']=="no"){ ?>
   <div class="alert bg-danger">
            	
            <b style="color:white">İşleminiz gerçekleştirilirken  bir hata oluşmuştur.</b>


            </div>
<?php }
        ?>


		<table class="table">
			<a href="urun-ekle.php"><button style="float: right" type="submit" class="btn btn-info">Ürün ekle</button></a>
			<thead>
				<tr>
					<th>Ürün başlık</th>
					<th>Açıklama</th>
					<th>Ürün sıra</th>
					<th>Ürün fiyat</th>
					<th></th>
					<th></th>
				</tr>

				<tbody>

					<!-- while döngüsü -->

					<?php 
					$urunsor=$baglanti->prepare("SELECT * from urun ");
					$urunsor->execute();
					while ($uruncek= $urunsor->fetch(PDO::FETCH_ASSOC)) {




						?>
						<tr>


							<td><?PHP		echo $uruncek['baslik']  ?></td>
							<td><?PHP		echo $uruncek['aciklama']  ?> </td>
							<td><?PHP		echo $uruncek['sira']  ?></td>
							<td><?PHP		echo $uruncek['fiyat']  ?>₺</td>
							<td><a href="urun-duzenle.php?id=<?php echo $uruncek['id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></a></td>
							<td><a href="islem.php?urunsil&id=<?php echo $uruncek['id'] ?>"><button type="submit" class="btn btn-danger">Sil</button></td>

						</tr>

					<?php  } ?>




				</tbody>

			</thead>








		</table>


	</div>











	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>