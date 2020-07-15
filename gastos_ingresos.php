<script type="text/javascript" src="funciones.js"></script>
<link href="../../../LOGIN/static/css/prueba.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

<?php require_once 'templates/header.php';?>
   	  <main role="main" class="container-fluid">
      <!-- <?php require_once 'grilla.php';?> -->
<div >
        <div id="f" class="container col-md-10" style="background-color:rgb(20,20,20); opacity:0.8; padding: 0 20px;
    box-shadow: 0px 0px 5px #848484;">
          <div id="f1" class="row justify-content-around"  >
            <div id="f1c1" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-sm-2">
              <div id="bf1c1" name="2" class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_ibs" style="background-image:url(img/ibs.png);" >
                <div class="mt-md-1 ml-1">
                  <p class="text-left text-white font-weight-bold">INGRESOS MENSUALES DETALLADOS EN BOLIVARES</p>
                </div>
              </div>            
            </div>
            <div id="f1c2" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-sm-2">
              <div id="bf2c2" name="1" class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_idl" style="background-image:url(img/idl.png);">
                <div class="mt-md-1 ml-1">
                  <p class="text-left text-white font-weight-bold">INGRESOS MENSUALES DETALLADOS EN DOLARES</p>
                </div>
              </div>            
            </div>
          </div>
          <div id="f2" class="row justify-content-around" >
            <div id="f2c1" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-sm-3">
              <div class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_ebs" style="background-image:url(img/ebs.png);">
                <div class="mt-md-1 ml-1">
                  <p class="text-left text-white font-weight-bold">EGRESOS MENSUALES DETALLADOS EN BOLIVARES</p>
                </div>
              </div>            
            </div>
            <div id="f2c2" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-sm-3">
              <div class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_edl" style="background-image:url(img/edl.png);">
                <div class="mt-md-1 ml-1">
                  <p class="text-left text-white font-weight-bold">EGRESOS MENSUALES DETALLADOS EN DOLARES</p>
                </div>
              </div>            
            </div>
          </div>
          <div id="f3" class="row justify-content-around" >
            <div id="f3c1" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-sm-3">
              <div class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_rbs" style="background-image:url(img/rbs.png);">
                <div class="mt-md-1 ml-1">
                  <p class="text-left text-white font-weight-bold">RELACION INGRESOS - EGRESOS EN BOLIVARES</p>
                </div>
                <div class="mt-5">
                  <p class="text-right text-black">fgfdg</p>
                </div>
              </div>            
            </div>
            <div id="f3c2" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-sm-3">
              <div class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_rdl" style="background-image:url(img/rdl.png);">
              	<div class="mt-md-1 ml-1">
              		<p class="text-left text-white font-weight-bold">RELACION INGRESOS - EGRESOS EN DOLARES</p>
              	</div>
              	<div class="mt-5">
              		<p class="text-right text-black">fgfdg</p>
              	</div>
              </div>
              <!--<a class="btn btn-primary w-100 alto-lg-130 alto-sm-70">RELACION INGRESOS - EGRESOS EN DOLARES</a>-->
            </div>
          </div>
           <div id="f4" class="row justify-content-around" >
            <div id="f4c1" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-md-3 mb-1 mb-sm-2">
              <div class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_pcc" style="background-image:url(img/pcc.png);">
                <div class="mt-md-1 ml-1">
                  <p class="text-left text-white font-weight-bold">PAGOS DETALLADOS CUOTA DE CONDOMINIO</p>
                </div>
              </div>            
            </div>
            <div id="f4c2" class="col-sm-12 col-md-5 col-xl-4 zoom mt-1 mt-sm-3 mb-1 mb-sm-2">
              <div class="w-100 btn btn-dark alto-lg-130 alto-sm-70 imagen-boton" data-toggle="modal" data-target="#modal_rcc" style="background-image:url(img/rcc.png);">
                <div class="mt-md-1 ml-1">
                  <p class="text-left text-white font-weight-bold">RELACION CUOTAS DE CONDOMINIO</p>
                </div>
              </div>            
            </div>
          </div>
       	</div>
</div> 

<div class="modal" id="modal_ibs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Ingresos Mensuales Detallados en Bolívares</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      <div class="modal-body">
        <?php require_once 'xibs.php';?>
      </div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>    
      </div>
  </div>
</div>
<div class="modal" id="modal_idl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Ingresos Mensuales Detallados en Dólares</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      <div class="modal-body">
        <?php require_once 'xidl.php';?>
      </div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>    
      </div>
  </div>
</div>
<div class="modal" id="modal_ebs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Egresos Mensuales Detallados en Bolívares</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      <div class="modal-body">
        <?php require_once 'xebs.php';?>
      </div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>    
      </div>
  </div>
</div>
<div class="modal" id="modal_edl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Egresos Mensuales Detallados en Dólares</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      <div class="modal-body">
        <?php require_once 'xedl.php';?>
      </div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>    
      </div>
  </div>
</div>
<div class="modal" id="modal_rbs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Relación de Ingresos y Egresos en Bolívares</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      <div class="modal-body">
        <?php require_once 'xrbs.php';?>
      </div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>    
      </div>
  </div>
</div>     
<div class="modal" id="modal_rdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Relación de Ingresos y Egresos en Dólares</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      <div class="modal-body">
        <?php require_once 'xrdl.php';?>
      </div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>    
      </div>
  </div>
</div>
<div class="modal" id="modal_pcc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Pagos Detallados Cuotas de Condominio</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      <div class="modal-body">
        <?php require_once 'xpcc.php';?>
      </div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>    
      </div>
  </div>
</div>
<div class="modal" id="modal_rcc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl " role="document">
		<div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Relación Cuotas de Condominio</h4>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
			<div class="modal-body">
				<?php require_once 'xrcc.php';?>
			</div>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
          </div>		
      </div>
	</div>
</div>


