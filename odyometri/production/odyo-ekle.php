<?php include'header.php'; 
include'../netting/baglan.php';


?>



</div>
</div>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>


    </nav>
  </div>
</div>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">

      </div>


    </div>

    <div class="clearfix"></div>

    <div class="row">





      <H2>ODYOMETRİ DÜZENLEME</H2>
      <br>
      <!-- Bitiyor -->
      <form method="POST" action="../netting/islem.php">
        <input type="hidden" name="odyometri_id" value="<?php echo $_GET['odyometri_id'] ?>">

        <table>
          <tr>
            <td><div align="left"><p>SOL KULAK</p></div></td>
            <td><div style="margin-left: 440px;"><p>SAĞ KULAK</p></div></td>
          </tr>


        </table>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
        <p>sol 250 hz</p>
          <input type="text" value="" name="sol250hz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol250hz">
          
        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag250hz</p>
          <input type="text" value="" name="sag250hz" class="form-control" id="inputSuccess3" placeholder="sag250hz">
          
        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sol500hz</p>
          <input type="text" value="" name="sol500hz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol500hz">
          
        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag500hz</p>
          <input type="text" value="" name="sag500hz" class="form-control" id="inputSuccess3" placeholder="sag500hz">

        </div>


        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sol1khz</p>
          <input type="text" value="" name="sol1khz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol1khz">
          
        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag1khz</p>
          <input type="text" value="" name="sag1khz" class="form-control" id="inputSuccess3" placeholder="sag1khz">

        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sol2khz</p>
          <input type="text" value="" name="sol2khz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol2khz">

        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag2khz</p>
          <input type="text" value="" name="sag2khz" class="form-control" id="inputSuccess3" placeholder="sag2khz">

        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sol3khz</p>
          <input type="text" value="" name="sol3khz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol3khz">

        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag3khz</p>
          <input type="text" value="" name="sag3khz" class="form-control" id="inputSuccess3" placeholder="sag3khz">

        </div>


        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sol4khz</p>
          <input type="text" value="" name="sol4khz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol4khz">
          
        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag4khz</p>
          <input type="text" value="" name="sag4khz" class="form-control" id="inputSuccess3" placeholder="sag4khz">
          
        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sol6khz</p>
          <input type="text" value="" name="sol6khz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol6khz">

        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag6khz</p>
          <input type="text" value="" name="sag6khz" class="form-control" id="inputSuccess3" placeholder="sag6khz">

        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sol8khz</p>
          <input type="text" value="" name="sol8khz" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sol8khz">

        </div>

        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
          <p>sag8khz</p>
          <input type="text" value="" name="sag8khz" class="form-control" id="inputSuccess3" placeholder="sag8khz">
          
        </div>



        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
          <p>ODYOMETRİ AD</p>
          <input type="text" name="odyometri_ad" class="form-control" id="inputSuccess3" value="<?php echo $odyocek['odyometri_ad']; ?>" placeholder="ODYOMETRİ AD" >

        </div>

        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
          <p>ODYOMETRİ KANAAT</p>
          <input type="text" name="odyometri_kanaat" class="form-control" id="inputSuccess3" placeholder="ODYOMETRİ KANAAT"  value="">
          
        </div>




        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
          <button name="EKLE" class="btn btn-success">KAYDET</button>
          
        </div>




      </div>
    </div>
  </div>




</form>


<!-- /page content -->

<!-- footer content -->
<?php include'footer.php'; ?>
<!-- /footer content -->



