<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
	<h3 align="center">Registro de usuario</h3>
	<br>
	<div class="container">
		<div class="alert alert-danger" id="alert" style="display:none;"></div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<label for="nombre">Nombre</label>
				<input type="text" id="nombre" name="nombre" class="form-control" required />
			</div>
			<div class="col-sm-6">
				<label for="apellidos">Apellidos</label>
				<input type="text" id="apellidos" name="apellidos" class="form-control" required />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<label for="username">Usuario</label>
				<input type="text" id="username" name="username" class="form-control" required />
			</div>
			<div class="col-sm-6">
				<label for="password">Contraseña</label>
				<input type="password" id="password" name="password" class="form-control" required />
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3 pull-left">
				<button class="btn btn-success btn-sm" id="btnRegistrar"><i class="fa fa-plus"></i> Registrar</button>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.1.1.js"></script>
	<script>
		$("#btnRegistrar").click(function(){
			if($("#nombre").val() != '' && $("#apellidos").val() != '' && $("#username").val() != '' && $("#password").val() != ''){
				$.ajax({
			        url: "addUsuario.php",
			        type: "post",
			        data: {
			        	nombre:$("#nombre").val(),
			        	apellidos:$("#apellidos").val(),
			        	usuario:$("#username").val(),
			        	pass:$("#password").val()
			        },
			        success: function (response) {
			        	var res = parseInt(response);
			        	if(res == 1){
			        		//alert('Se ha registrado el usuario '+$("#username").val()+' correctamente !');
			        		window.location = 'chat.php';
			        	}else{
			        		alert('Error en registrar');
			        	}
			        },
			        error: function(jqXHR, textStatus, errorThrown) {
			           console.log(textStatus, errorThrown);
			        }

	    		});
	    		/*$("#nombre").val("");
	    		$("#apellidos").val("");
	    		$("#username").val("");
	    		$("#password").val("");*/
			}else{
				alert('Por favor llene los campos');
			}
		});
	</script>
</body>
</html>