<?php session_start()?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Reservación de Boleto</title>

<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<script src="semantic/jquery.min.js"> </script>
<script src="semantic/semantic.min.js"></script>
<link href="semantic/datepicker.css" rel="stylesheet" type="text/css">
<script src="semantic/datepicker.js"></script>
<script src="nav.js"></script>

<style>
body{
background-color:f1f1f1;
}
a{
cursor:pointer;	
}
</style>
</head>
<body>
    <div class="ui inverted huge borderless fixed fluid menu">
      <a class="header item">Sistema de Reservación de Boleto</a>
    </div><br>


<div class="ui fluid container center aligned" style="cursor:pointer;margin-top:40px">
<div class="ui unstackable tiny steps">
  <div class="step" onclick="booking()">
    <i class="plane icon"></i>
    <div class="content">
      <div class="title">Detalles de la Reserva</div>
      <div class="description">Información de viajes y reservas</div>
    </div>
  </div>
  <div class="step disabled" onclick="contact()" id="contactbtn">
    <i class="truck icon"></i>
    <div class="content">
      <div class="title">Detalles</div>
      <div class="description">Información de Contacto</div>
    </div>
  </div>
  <div class="disabled step" id="billingbtn" onclick="billing()">
    <i class="money icon"></i>
    <div class="content">
      <div class="title">Facturación</div>
      <div class="description">Pago y verificación</div>
    </div>
  </div>
   <div class="disabled step" onclick="confirmdetails()" id="confimationbtn">
    <i class="info icon"></i>
    <div class="content">
      <div class="title">Confirmar Detalles</div>
      <div class="description">Verificar los detalles del pedido</div>
    </div>
  </div> 
   <div class="disabled step" id="finishbtn">
    <i class="info icon"></i>
    <div class="content">
      <div class="title">Finalizar e Imprimir</div>
      <div class="description">Imprimiendo Boleto</div>
    </div>
  </div>
</div>
</div>
<br>
<div id="dynamic">

<div class="ui container text" id="booking-page">
<div class="ui attached message">
  <div class="header">Información del pedido</div>
    <div class="header">Orden de Referencia: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF']?> <a href='index.php'>Cancelar Orden</a></span> </div> 
  <p>Ingrese la información de reserva del viaje</p>
</div>

<form class="ui form attached fluid loading segment" onsubmit="return contact(this)">
   <div class="field">
    <label>Destino</label>
 <div class="field">
    <select required id="destination">
      <option value="" selected disabled>--Destino del Viaje--</option>
      <option>París</option>
      <option>Madrid</option>
	   <option>Nueva York</option>
	    <option>Ciudad de Mexico</option>
      <option>Bogota</option>
      <option>Singapur</option>
      <option>Tokyo</option>
      <option>Miami</option>
      <option>Seúl</option>
    </select>
  </div>   
  </div>
<div class="field">  
    <label>Clase de Viaje</label><span><a href="home.php">Leer más</a><i> sobre las clases de viaje.</i></span>
 <div class="field">
    <select name="gender" required id="travelclass">
      <option value="" selected disabled>--Clase de Viaje--</option>
      <option>Viajes de clase alta</option>
      <option>Viajes de clase media</option>
	   <option>Viajes de clase baja</option>
	    <option>Viajes con necesidades especiales</option>
    </select>
  </div>   
  </div>
<div class="two fields"> 
<div class="field"> 
    <label>Numero de Asientos</label>
<input placeholder="Number of Seats" type="number" id="seats" min="1" max="72"  value="1" required>
  </div> 
<div class="field"> 
    <label>Fecha de Viaje</label>
<input type="text" readonly required id="traveldate" class="datepicker-here form-control" placeholder="ex. August 03, 1998">
  </div>  
  </div>
  <div style="text-align:center">
 <div><label>Asegúrese de que todos los detalles se hayan completado correctamente</label></div>
  <button class="ui green submit button">Enviar detalles</button>
</div> 
 </form>
</div>


<div class="ui container text" id="contact-page" style="display:none">
<div class="ui attached message">
  <div class="header">¡Ingrese datos de cliente!</div>
   <div class="header">Orden de Rererencia: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF']?> <a href='index.php'> Cancelar Orden</a></span> </div>
  <p>Complete los campos requeridos</p>
</div>
<form class="ui form attached fluid loading segment" onsubmit="return billing(this)">
    <div class="field">
      <label>Nombre Completo</label>
      <input placeholder="Full name" type="text" id="fullname" required>
    </div>

  <div class="field">
    <label>Contacto/Celular o dirección de correo electrónico</label>
    <input placeholder="Mobile No/Contact or Email address" type="text" id="contact" required>
  </div>

 <div class="field">
    <label>Género</label>
 <div class="field">
    <select name="gender" required id="gender">
      <option value="" selected disabled>--Eliga el género--</option>
      <option value="MALE">Masculino</option>
      <option value="FEMALE">Femenino</option>
    </select>
  </div>   
  </div>
 
 <div style="text-align:center">
 <div><label>Asegúrese de que todos los detalles se hayan completado correctamente</label></div>
  <button class="ui green submit button">Enviar Detalles</button>
</div>
  
  </form>
</div>

<div class="ui container text" id="billing-page" style="display:none">
<div class="ui attached message">
  <div class="header">Validar la información de pago</div>
    <div class="header">Orden de Referencia: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF']?> <a href='index.php'>Cancelar Orden</a></span> </div> 
  <p>Enter Payment Details to Proceed</p>
</div>

<form class="ui form attached fluid loading segment" onsubmit="return confirmdetails(this)">
  <div class="field"> 
<label>Pago</label>  
    <select name="gender" required id="paymentmethod">
      <option value="" selected disabled>Método Pago</option>
      <option value="VISA">Visa</option>
      <option value="MASTERCARD">MasterCard</option>
	    <option value="AMERICAN_EXPRESS">American Express</option>
      <option value="DINNERS_CLUB">Dinners Club</option>
    </select>
  </div> 
<div class="field"> 
<label>ID de transacción</label> 
<div class="ui icon input">
  <input placeholder="Transaction Code" type="text" required id="codebox">
  <i class="payment icon"></i>
</div>
</div>

  <div class="field"> 
<label>Confirmar Monto(USD)</label>

<div class="ui icon input">
  <input value="52.03" type="text" id="amount" readonly>
</div></div>
 <div style="text-align:center">
  <button class="ui green submit button">Continuar</button>
</div>
 </form>
<div class="ui bottom attached warning message"><i class="icon help"></i><b id="payment-info"></b></div> 
</div>


<div class="ui text container" id ="confirmdetails-page" style="display:none">
<div class="ui positive message">
<b>Antes de continuar, vuelva a verificar los siguientes detalles que proporcionó</b><br>
<i>Es posible que el boleto no se vuelva a imprimir, por lo tanto, los detalles que proporcionó deben ser válidos</i>
<br>
<div class="ui horizontal divider">Los detalles proporcionados</div>
<div id="details"></div>
<div class="ui horizontal divider">Confirmar Detalles</div>
<div class="ui fluid container center aligned">
<a class="ui button green" onclick="senddata()">Si|Confirmar</a>
</div>
</div>
</div>

</div>
</body>
</html>