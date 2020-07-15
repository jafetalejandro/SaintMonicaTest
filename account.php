<?php require_once 'templates/header.php';?>
<?php
require_once 'config.php';
$db = new Cl_DBclass();
$asd=$_SESSION['user_id'];
    $query = " SELECT * FROM personas where user_id = '$asd' ";
    $result = mysqli_query($db->con, $query);
    $data = mysqli_fetch_assoc($result);
?>
<style>
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type=number] {
    -moz-appearance:textfield;
}
</style>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->cuenta( $_POST );
			$_SESSION['statu_id'] = 1; 
			header('Location: home.php');
			if($data)$success = PASSOWRD_CHANAGE_SUCCESS;
		} catch (Exception $e) { 
			$error = $e->getMessage();
		} 
	}
?>
    <link href="css/floating-labels.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

<link href="css/prueba.css" rel="stylesheet">

	<div class="content">
     	<div class="container">
     		<div class="col-md-8 col-sm-8 col-xs-12">
<?php require_once 'grilla.php';?>
     			<?php require_once 'templates/message.php';?>
     			<h1>Mi cuenta</h1><br>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-horizontal myaccount" role="form" autocomplete="off">
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span">Correo electrónico</span>
						<div class="col-sm-8">
							<p> <?php echo $_SESSION['email']; ?> </p>
						</div>
					</div>
					<hr>

          <div id="f1" class="row justify-content-left"  >
            <div id="f1c1" class="col-sm-12 col-md-5 col-xl-4 mt-1 mt-sm-2">
            	<div class="form-label-group ">
		        	<label for="casa_id" style=" font-size: 12px; padding-top: 0rem; padding-bottom: 0rem;">No. de casa</label>
		            <select class="form-control" name="casa_id" id="casa_id" placeholder="Nombres" required style="  padding-top: 1.25rem; padding-bottom: .25rem;">
		            	<option value="">Seleccione...</option>
		            	<option <?php if ($data['casa_id']==1) {echo "selected";} ?>>01</option><option <?php if ($data['casa_id']==2) {echo "selected";} ?>>02</option><option <?php if ($data['casa_id']==3) {echo "selected";} ?>>03</option><option <?php if ($data['casa_id']==4) {echo "selected";} ?>>04</option><option <?php if ($data['casa_id']==5) {echo "selected";} ?>>05</option><option <?php if ($data['casa_id']==6) {echo "selected";} ?>>06</option><option <?php if ($data['casa_id']==7) {echo "selected";} ?>>07</option><option <?php if ($data['casa_id']==8) {echo "selected";} ?>>08</option><option <?php if ($data['casa_id']==9) {echo "selected";} ?>>09</option><option <?php if ($data['casa_id']==10) {echo "selected";} ?>>10</option><option <?php if ($data['casa_id']==11) {echo "selected";} ?>>11</option><option <?php if ($data['casa_id']==12) {echo "selected";} ?>>12</option><option <?php if ($data['casa_id']==13) {echo "selected";} ?>>13</option><option <?php if ($data['casa_id']==14) {echo "selected";} ?>>14</option><option <?php if ($data['casa_id']==15) {echo "selected";} ?>>15</option><option <?php if ($data['casa_id']==16) {echo "selected";} ?>>16</option><option <?php if ($data['casa_id']==17) {echo "selected";} ?>>17</option><option <?php if ($data['casa_id']==18) {echo "selected";} ?>>18</option><option <?php if ($data['casa_id']==19) {echo "selected";} ?>>19</option><option <?php if ($data['casa_id']==20) {echo "selected";} ?>>20</option><option <?php if ($data['casa_id']==21) {echo "selected";} ?>>21</option><option <?php if ($data['casa_id']==22) {echo "selected";} ?>>22</option><option <?php if ($data['casa_id']==23) {echo "selected";} ?>>23</option><option <?php if ($data['casa_id']==24) {echo "selected";} ?>>24</option><option <?php if ($data['casa_id']==25) {echo "selected";} ?>>25</option><option <?php if ($data['casa_id']==26) {echo "selected";} ?>>26</option><option <?php if ($data['casa_id']==27) {echo "selected";} ?>>27</option><option <?php if ($data['casa_id']==28) {echo "selected";} ?>>28</option><option <?php if ($data['casa_id']==29) {echo "selected";} ?>>29</option><option <?php if ($data['casa_id']==30) {echo "selected";} ?>>30</option><option <?php if ($data['casa_id']==31) {echo "selected";} ?>>31</option><option <?php if ($data['casa_id']==32) {echo "selected";} ?>>32</option><option <?php if ($data['casa_id']==33) {echo "selected";} ?>>33</option><option <?php if ($data['casa_id']==34) {echo "selected";} ?>>34</option><option <?php if ($data['casa_id']==35) {echo "selected";} ?>>35</option><option <?php if ($data['casa_id']==36) {echo "selected";} ?>>36</option><option <?php if ($data['casa_id']==37) {echo "selected";} ?>>37</option><option <?php if ($data['casa_id']==38) {echo "selected";} ?>>38</option><option <?php if ($data['casa_id']==39) {echo "selected";} ?>>39</option><option <?php if ($data['casa_id']==40) {echo "selected";} ?>>40</option><option <?php if ($data['casa_id']==41) {echo "selected";} ?>>41</option><option <?php if ($data['casa_id']==42) {echo "selected";} ?>>42</option><option <?php if ($data['casa_id']==43) {echo "selected";} ?>>43</option><option <?php if ($data['casa_id']==44) {echo "selected";} ?>>44</option><option <?php if ($data['casa_id']==45) {echo "selected";} ?>>45</option><option <?php if ($data['casa_id']==46) {echo "selected";} ?>>46</option><option <?php if ($data['casa_id']==47) {echo "selected";} ?>>47</option><option <?php if ($data['casa_id']==48) {echo "selected";} ?>>48</option><option <?php if ($data['casa_id']==49) {echo "selected";} ?>>49</option><option <?php if ($data['casa_id']==50) {echo "selected";} ?>>50</option><option <?php if ($data['casa_id']==51) {echo "selected";} ?>>51</option><option <?php if ($data['casa_id']==52) {echo "selected";} ?>>52</option><option <?php if ($data['casa_id']==53) {echo "selected";} ?>>53</option><option <?php if ($data['casa_id']==54) {echo "selected";} ?>>54</option><option <?php if ($data['casa_id']==55) {echo "selected";} ?>>55</option><option <?php if ($data['casa_id']==56) {echo "selected";} ?>>56</option><option <?php if ($data['casa_id']==57) {echo "selected";} ?>>57</option><option <?php if ($data['casa_id']==58) {echo "selected";} ?>>58</option><option <?php if ($data['casa_id']==59) {echo "selected";} ?>>59</option><option <?php if ($data['casa_id']==60) {echo "selected";} ?>>60</option><option <?php if ($data['casa_id']==61) {echo "selected";} ?>>61</option><option <?php if ($data['casa_id']==62) {echo "selected";} ?>>62</option><option <?php if ($data['casa_id']==63) {echo "selected";} ?>>63</option><option <?php if ($data['casa_id']==64) {echo "selected";} ?>>64</option><option <?php if ($data['casa_id']==65) {echo "selected";} ?>>65</option><option <?php if ($data['casa_id']==66) {echo "selected";} ?>>66</option><option <?php if ($data['casa_id']==67) {echo "selected";} ?>>67</option><option <?php if ($data['casa_id']==68) {echo "selected";} ?>>68</option><option <?php if ($data['casa_id']==69) {echo "selected";} ?>>69</option><option <?php if ($data['casa_id']==70) {echo "selected";} ?>>70</option><option <?php if ($data['casa_id']==71) {echo "selected";} ?>>71</option><option <?php if ($data['casa_id']==72) {echo "selected";} ?>>72</option><option <?php if ($data['casa_id']==73) {echo "selected";} ?>>73</option><option <?php if ($data['casa_id']==74) {echo "selected";} ?>>74</option><option <?php if ($data['casa_id']==75) {echo "selected";} ?>>75</option><option <?php if ($data['casa_id']==76) {echo "selected";} ?>>76</option><option <?php if ($data['casa_id']==77) {echo "selected";} ?>>77</option><option <?php if ($data['casa_id']==78) {echo "selected";} ?>>78</option><option <?php if ($data['casa_id']==79) {echo "selected";} ?>>79</option><option <?php if ($data['casa_id']==80) {echo "selected";} ?>>80</option><option <?php if ($data['casa_id']==81) {echo "selected";} ?>>81</option><option <?php if ($data['casa_id']==82) {echo "selected";} ?>>82</option>
		            </select>
		 			<span class="help-block text-warning"></span>
	          	</div>
	          </div>
            <div id="f1c2" class="col-sm-12 col-md-5 col-xl-4 mt-1 mt-sm-2">
		        <div class="form-label-group ">
		        	<label for="condicion_id" style=" font-size: 12px; padding-top: 0rem; padding-bottom: 0rem;">Condición</label>
		            <select class="form-control" name="condicion_id" id="condicion_id" placeholder="Nombres" required style="  padding-top: 1.25rem; padding-bottom: .25rem;">
		            	<option value="">Seleccione...</option>
		            	<option value="01" <?php if ($data['condicion_id']==1) {echo "selected";} ?>>Propietario</option>
		            	<option value="02" <?php if ($data['condicion_id']==2) {echo "selected";} ?>>Co-propietario</option>
		            	<option value="03" <?php if ($data['condicion_id']==3) {echo "selected";} ?>>Responsable</option>
		            </select>
		 			<span class="help-block text-warning"></span>
	          	</div>
	         </div>
	      </div>
          <div id="f2" class="row justify-content-left"  >
            <div id="f2c1" class="col-sm-12 col-md-5 col-xl-4 mt-1 mt-sm-2">				
            	<div class="form-label-group">
					<input name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombres" value=<?php echo ucwords($data['nombres']); ?>> 
					<label for="nombres">Nombres</label>
					<span class="help-block text-warning"></span>
				</div>
			</div>	
            <div id="f2c2" class="col-sm-12 col-md-5 col-xl-4 mt-1 mt-sm-2">				
				<div class="form-label-group">
					<input name="apellidos" id="apellidos" type="text" class="form-control" placeholder="Nombres" value=<?php echo ucwords($data['apellidos']); ?>> 
					<label for="apellidos">Apellidos</label>
					<span class="help-block text-warning"></span>
				</div>
			</div>
		  </div>		
          <div id="f3" class="row justify-content-left"  >
            <div id="f3c1" class="col-sm-12 col-md-5 col-xl-4 mt-1 mt-sm-2">				
				<div class="form-label-group">
					<input name="telefono1" id="telefono1" class="form-control" value=<?php echo $data['telefono1']; ?>> 
					<label for="telefono1">Teléfono Principal</label>
					<span class="help-block text-warning"></span>
				</div>
			</div>
            <div id="f3c2" class="col-sm-12 col-md-5 col-xl-4 mt-1 mt-sm-2">				
				<div class="form-label-group">
					<input name="telefono2" id="telefono2" class="form-control" placeholder="Telefono2" value=<?php echo $data['telefono2']; ?>> 
					<label for="telefono2">Telefono Secundario</label>
					<span class="help-block text-warning"></span>
				</div>
			</div>
		  </div>		
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
					
					
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-default" id="submit_btn" data-loading-text="Cambiando contraseña....">Enviar</button>
						</div>
					</div>
				</form>
		</div>
     		<?php require_once 'templates/sidebar.php';?>
     		
     	</div>
    </div> <!-- /container -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/account.js"></script>
<script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script type='text/javascript' src='js/prueba1.js'></script>    
<?php require_once 'templates/footer.php';?>
	

