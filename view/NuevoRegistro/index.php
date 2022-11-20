<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
    <?php require_once("../Main/head.php");?>
    <title>HelpDesk::Nuevo Ticket</title>
</head>
<body class="with-side-menu">
    <?php require_once("../Header/header.php");?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../Nav/nav.php");?>

        <!--CONTENIDO-->
        <div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">

				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row">
					<form method="post" id="ticket_form">

						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

                            <div class="col-md-5 col-sm-4">
						        <fieldset class="form-group">
							        <label class="form-label" for="usu_id">Usuario</label>
                                    <input type="email" class="form-control" id="usu_id" value="<?php echo $_SESSION["usu_name"] ?> <?php echo $_SESSION["usu_apell"] ?>" disabled="">
						        </fieldset>
					        </div>

                            <div class="col-md-4 col-sm-4">
						        <fieldset class="form-group">
							        <label class="form-label" for="tick_fecha">Fecha</label>
							        <input type="date" readonly="" class="form-control" id="tick_fecha" >
						        </fieldset>
					        </div>

						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_orden">Numero de Orden</label>
								<input type="text" class="form-control" id="tick_orden" name="tick_orden" placeholder="Ingrese Numero de Orden">
							</fieldset>
						</div>

                        <div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_acta">Numero de Acta</label>
								<input type="text" class="form-control" id="tick_acta" name="tick_acta" placeholder="Ingrese Numero de Acta">
							</fieldset>
                        </div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tipo_id">Tipo</label>
								<select id="tipo_id" class="select2 select2-hidden-accessible" name="tipo_name" multiple="" tabindex="-1" aria-hidden="true">
								</select>
							</fieldset>
						</div>

                        <div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="proceso_id">Proceso</label>
								<select id="proceso_id" class="select2 select2-hidden-accessible" name="proces_name" multiple="" tabindex="-1" aria-hidden="true">
								</select>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Documentos Adicionales</label>
								<input type="file" name="fileElem" id="fileElem" class="form-control" multiple>
							</fieldset>
						</div>

                        <div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="tick_descrip" name="tick_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
						</div>
                        <div class="col-lg-12">
                            <a href="../Consultar/index.php" class="btn btn-rounded btn-inline btn-danger">Cancelar</a>
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-success">Guardar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
        <!--END CONTENIDO-->
    <?php require_once("../MainJs/js.php")?>

    <script type="text/javascript" src="nuevo.js"></script>

</body>
</html>
<?php
    }else{
        header("Location:".Conectar::ruta()."index.php");
    }
?>