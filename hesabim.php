<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Hesap Bilgilerim</div>
							<p >Hesap bilgilerinizi aşağıdaki form aracılığı ile görüntüleyebilirsiniz.</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Hesap Bilgileri</div>
				</div>


        <?php 

				if ($_GET['durum']=="farklisifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
				</div>
					
				<?php } else if ($_GET['durum']=="eksiksifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
				</div>
					
				<?php } else if ($_GET['durum']=="mukerrerkayit") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
				</div>
					
				<?php } else if ($_GET['durum']=="basarisiz") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
				</div>
					
				<?php }
				 ?>

				
                                                     
				


				<div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="text" class="form-control"  required="" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" placeholder="Ad ve Soyadı">
					</div>
					
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" class="form-control" required="" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>" placeholder="Mail Adresiniz.">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" class="form-control" required="" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm'] ?>" placeholder="Telefon Numaranız.">
					</div>
				</div>

				<div class="form-group dob">
					<div class="col-sm-6">
						<input id="pass" type="password" class="form-control" name="kullanici_passwordone"  value=""  placeholder="Şifreniz">
					</div>

					<div class="col-sm-6">
						<input id="pass" type="password" class="form-control" name="kullanici_passwordtwo"   placeholder="Şifreniz Tekrar">
					</div>
				</div>



				<button type="submit" name="kullaniciguncelle" class="btn btn-default btn-red"></button>
			
			</div>
			


				
			</div>
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>