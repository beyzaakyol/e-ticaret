<?php 

include 'header.php';

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Silder Ekleme <small>

                   


                    </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <!-- / => bu işaret en kök dizine çıkartır     ../ bir üst dizine çıkartır -->

                    <form action="../netting/islem.php" enctype="multipart/form-data" method="POST" 
                    id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name"  name="slider_resimyol"  class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>
                     

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Ad<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="slider_ad"  required="required" placeholder="Slider adını giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="slider_link" placeholder="Slider url giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="slider_sira" required="required" placeholder="Slider sıra giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>





                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="slider_durum" id="heard" class="form-control" required>


                          <!-- Kısa if Kullanımı --> 
                      <option value="1">Aktif</option>

                      <option value="0">Pasif</option>


                          </select>
                        </div>
                      </div>
                
             



                                          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="sliderkaydet" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

    



            


            
          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>