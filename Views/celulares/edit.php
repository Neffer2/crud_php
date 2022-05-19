<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3><b>Editar celular</b></h3>
			<div class="col-md-6">
				<?php foreach($data['celular'] as $elem){ ?>
				<form class="row" action="?c=celulares&a=update&id=<?php echo $elem['id']; ?>" method="POST">
			  		<div class="col-md-6">
						<label for="marca" class="form-label"><b>Marca</b></label>
			    		<input type="text" class="form-control" id="marca" name="marca" aria-describedby="marca" required placeholder="La marca de tu celular" value="<?php echo $elem['marca']; ?>">
				  	</div>
				  	<div class="col-md-6">
						<label for="modelo" class="form-label"><b>Modelo</b></label>
			    		<input type="text" class="form-control" id="modelo" name="modelo" aria-describedby="modelo" required placeholder="El modelo de tu celular" value="<?php echo $elem['modelo']; ?>">
				  	</div>
				  	<div class="col-md-6">
						<label for="ram" class="form-label"><b>Ram</b></label>
			    		<input type="number" class="form-control" id="ram" name="ram" aria-describedby="Ram" required placeholder="Cantidad de Ram" value="<?php echo $elem['ram']; ?>">
				  	</div>
				  	<div class="col-md-6">
						<label for="os" class="form-label"><b>Sistema Operativo</b></label>
			    		<input type="text" class="form-control" id="os" name="os" aria-describedby="os" required placeholder="O.S" value="<?php echo $elem['os']; ?>">
				  	</div>
				  	<div class="col-md-3 mt-3">
				  		<button type="submit" class="btn btn-primary">Guardar cambios</button>
				  	</div>
				</form>
				<?php }?>
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>