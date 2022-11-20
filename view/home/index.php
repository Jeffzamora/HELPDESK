<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
    <?php require_once("../Main/head.php");?>
    <title>HelpDesk::Home</title>
</head>
<body class="with-side-menu">
    <?php require_once("../Header/header.php");?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../Nav/nav.php");?>

	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div>
	</div>

    <?php require_once("../MainJs/js.php")?>

    <script type="text/javascript" src="home.js"></script>

</body>
</html>
<?php
    }else{
        header("Location:".Conectar::ruta()."index.php");
    }
?>