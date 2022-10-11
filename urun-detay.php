<?php 

include'header.php'; 

$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
$urunsor->execute([
  'urun_id' => $_GET['urun_id']
]);

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

$say=$urunsor->rowCount();

if ($say==0) {
  header("Location:index.php?durum=islemiyapma");
  exit;
}
?>

<head>
	<!-- fancy Style -->
	<link rel="stylesheet" type="text/css" href="js\product\jquery.fancybox.css?v=2.1.5" media="screen">
</head>


	<div class="container">
		
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	
	<div class="container">
		<div class="row">
			
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title"><?php echo $uruncek['urun_ad']; ?></div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="dt-img">
							<div class="detpricetag"><div class="inner"><?php echo $uruncek['urun_fiyat'] ?>&nbsp;TL</div></div>
							<a class="fancybox" href="images\sample-1.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
						</div>
						<div class="thumb-img">
							<a class="fancybox" href="images\sample-4.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-4.jpg" alt="" class="img-responsive"></a>
						</div>
						<div class="thumb-img">
							<a class="fancybox" href="images\sample-5.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-5.jpg" alt="" class="img-responsive"></a>
						</div>
						<div class="thumb-img">
							<a class="fancybox" href="images\sample-1.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
						</div>
					</div>
					<div class="col-md-6 det-desc">
						<div class="productdata">
							<div class="infospan">Ürün Kodu <span><?php echo $uruncek['urun_id'];?> </span></div>
							<div class="infospan">Ürün Fiyat <span><?php echo $uruncek['urun_fiyat'];?>&nbsp;TL</span></div>
							
              
					  
						<div class="clearfix"></div>
						<hr>


						<form action="nedmin/netting/islem.php" method="POST">

						<div class="form-group">
							<label for="qty" class="col-sm-2 control-label">Adet</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="1" name="urun_adet">
							</div>
							<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

										<input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">
							<div class="col-sm-4">
								<button type="submit" name="sepetekle" class="btn btn-default btn-red btn-sm"><span class="addchart">Sepete Ekle</span></button>
							</div>
							<div class="clearfix"></div>
						</div>

						</form>
							

							<div class="sharing">
								<div class="share-bt">
									<div class="addthis_toolbox addthis_default_style ">
										<a class="addthis_counter addthis_pill_style"></a>
									</div>
									<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f0d0827271d1c3b"></script>
									<div class="clearfix"></div>
								</div>

								<div class="avatock"><span>

                <?php if ($uruncek['urun_stok']>=1){

                  echo "Stok Adeti: ".$uruncek['urun_stok'];

                } else {
                  echo "Ürün Kalmadı";
                  
                } ?>

                </span></div>
							</div>
							
						</div>
					</div>
				</div>

				<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						
						<li class="active"><a href="#desc" data-toggle="tab">Açıklama</a></li>
						<li class=""><a href="#rev" data-toggle="tab">Yorumlar (0)</a></li>
						<li class=""><a href="#video" data-toggle="tab">Ürün Video</a></li>
					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade active in" id="desc">
							<p>
									<?php echo $uruncek['urun_detay'] ?>
							</p>
						</div>
						<div class="tab-pane fade" id="rev">

              <!-- Yorumları Dökeceğiz -->
							<p class="dash">
							<span>Jhon Doe</span> (11/25/2012)<br><br>
							Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu 
							stumptown aliqua, retro synth master cleanse.
							</p>

							<!-- Yorumları Dökeceğiz -->

							<h4>Yorum Yazın</h4>

							<?php if (isset($_SESSION['userkullanici_mail'])) {?>
							

							<form role="form">
							
							<div class="form-group">
								<textarea class="form-control" placeholder="Lütfen yorumunuzu buraya yazınız..." id="text"></textarea>
							</div>
							
							<button type="submit" class="btn btn-default btn-red btn-sm">Yorum Ekle</button>
						</form>

						<?php } else {?>
									 Yorum yazabilmek için <a style="color:red" href="register.php">kayıt</a> olmalısınız üyemiz iseniz <a style="color:red" href="">giriş</a> yapmalısınız...
							<?php	} ?>
							
						</div>

						<div class="tab-pane fade " id="video">
							<p>
									<?php 

									$say=strlen($uruncek['urun_video']);

									if ($say>0) {?>
									

                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $uruncek['urun_video']; ?>" 
                  frameborder="0" allowfullscreen></iframe>
									<?php } else { 
										echo "Bu ürüne video eklenmemiştir";
									}
									?>
							</p>
							
						</div>

					</div>
				</div>
				
				<div id="title-bg">
					<div class="title">Related Product</div>
				</div>
				<div class="row prdct"><!--Products-->
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="product.htm"><img src="images\sample-4.jpg" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Lens</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
						<div class="pr-img">
							<div class="new"></div>
							<a href="product.htm"><img src="images\sample-2.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner">$199</div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Black Shoes</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag"><div class="inner">$199</div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->
		

      <?php include 'sidebar.php'; ?>
		</div>
	</div>
	
	<?php include 'footer.php'; ?>