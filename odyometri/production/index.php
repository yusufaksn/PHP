<?php include'header.php'; 
include'../netting/baglan.php';
$odyo=$db->prepare("SELECT * FROM  odyometri order by odyometri_id DESC");
$odyo->execute();




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






      <!-- Bitiyor -->

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>ODYOMETRİ</small></h2>
            <div align="right">
            <a href="odyo-ekle.php?odyometri_id=<?php echo $odyocek['odyometri_id']; ?>">
              <button class="btn btn-success">YENİ EKLE</button>
            </a> 
            </div>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th><input type="checkbox" id="check-all" class="flat"></th>
                  <th>ODYOMETRİ</th>
                  <th>TARİH</th>
                  
                  <th></th>
                  <th></th>

                </tr>
              </thead>


              <tbody>
                <?php while($odyocek=$odyo->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                    <td><input type="checkbox" class="flat" name="table_records"></td>
                    <td><?php echo $odyocek['odyometri_ad']; ?></td>
                    <td><?php echo $odyocek['odyometri_tarih']; ?></td>                    
                    <td width="100"><CENTER>
                      <a href="odyo-detay.php?odyometri_id=<?php echo $odyocek['odyometri_id']; ?>">
                        <button class="btn btn-success">DETAY</button>
                      </a> 
                    </CENTER>
                  </td>
                  <td width="100">
                   <CENTER>
                     <a href="../netting/islem.php?odyometri_id=<?php echo $odyocek['odyometri_id']; ?>"> 
                      <button class="btn btn-danger" name="odyosil">SİL</button>
                    </a>
                  </CENTER>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>











  </div>
</div>
</div>







<!-- /page content -->

<!-- footer content -->
<?php include'footer.php'; ?>
<!-- /footer content -->



