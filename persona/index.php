<!DOCTYPE html>
<html>
<head>
    <title></title>
     <!-- Bootstrap CSS-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>



<div class="col-lg-6 " style="margin-left: 25%">
                                <div class="card">
                                    <div class="card-header">Contacto</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Contacto</h3>
                                        </div>
                                        <hr>
                                        <form action="Backend/insert.php" method="post" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                                <input  name="nombre" id="nombre" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                             



                                           <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Apellidos</label>
                                                <input  name="apellido" id="apellido" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>



                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Numero</label>
                                                <input name="numero"  id="numero" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>


                                            <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Tipo</label>
                                            <select class="form-control" name="tipo" id="tipo">
  <option value="Telefono">Telefono</option>
  <option value="Celular">Celular</option>
</select></div>
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Empresa</label>
                                                <input  name="empresa" id="empresa" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>



                                            <div class="row">
                                                
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Codigo</label>
                                                    <div class="input-group">
                                                        <input  name="codigo" id="codigo" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <br>
                                                <button type="submit" id="insertar" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Insertar</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>