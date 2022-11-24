<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
    <?php require_once("../Main/head.php");?>
    <title>HelpDesk::Consultar Ticket</title>
</head>
<body class="with-side-menu">
    <?php require_once("../Header/header.php");?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../Nav/nav.php");?>

	<div class="page-content">
		<div class="container-fluid">

            <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Listar Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Listar Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 15%;">Nro.Ticket</th>
							<th style="width: 15%;">Tipo</th>
							<th class="d-none d-sm-table-cell" style="width: 15%;">Proceso</th>
							<th class="d-none d-sm-table-cell" style="width: 20%;">Orden</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha de creacion</th>
							<th class="text-center" style="width: 5%;"></th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>

			</div>
		</div>
	</div>

    <?php require_once("../MainJs/js.php")?>

    <script type="text/javascript" src="Consultar.js"></script>

</body>
</html>
<?php
    }else{
        header("Location:".Conectar::ruta()."index.php");
    }
?>