<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/prueba.css" rel="stylesheet">

<?php require_once 'grilla.php';?>

<?php
require_once 'config.php';
$db = new Cl_DBclass();
?>
<?php
    $query = " SELECT * FROM personas where user_id = '1' ";
    $result = mysqli_query($db->con, $query);
    $data = mysqli_fetch_assoc($result);
    
?>


<?php echo $data['condicion_id'];
$n = 1; // número a formatear
$f = sprintf('%02d', $n); // cambiar 2 por otro valor, añadirá más ceros
echo $f; // mostrar resultado ?>



<div class="prueba">algo</div>

<p class="font-weight-bold">font-weight-bold</p>
<p class="font-weight-normal">font-weight-normal</p>
<p class="font-weight-light">font-weight-light</p>	
<p class="font-italic">font-italic</p>
<p class="lead">lead</p>
<p class="small">small</p>
<p class="text-left">text-left</p>
<p class="text-center">text-center</p>
<p class="text-right">text-right</p>
<p class="text-justify">text-justify</p>	
<p class="text-lowercase">text-lowercase</p>
<p class="text-uppercase">text-uppercase</p>
<p class="text-capitalize">text-capitalize</p>
<p class="text-justify">text-justify</p>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>