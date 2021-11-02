<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Redireccionado...</title>

<link rel="stylesheet" type="text/css" href="static/dist/semantic-ui/semantic.min.css">
<script src="static/dist/jquery/jquery.min.js"> </script>
<script src="static/dist/semantic-ui/semantic.min.js"></script>

<style>
body{
background-color:f1f1f1;
}
</style>
</head>
<body>
    <div class="ui inverted huge borderless fixed fluid menu">
      <a class="header item">Sistema de Reservación de Ticket</a>
    </div><br>
<div class="ui text container" style="margin-top:130px">
<div id="err001" class="ui success icon message">
<i class="notched circle loading icon"></i>
<div class="content">
<div class="header">Estamos redireccionandote....</div>
<p>Si la pagina falla reiniciala, puedes reiniciarla <a href="login.html">Manual</a>.</p>
</div>
</div>
</div>


<script>
setTimeout(function(){location.href="login.php"},4000);
</script>
</body>
</html>