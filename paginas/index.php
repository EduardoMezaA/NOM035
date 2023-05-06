<?php
    include('includes/encabezado.php');

    if(isset($_SESSION['usuario']) && isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] == 'admin'){
            header("Location: admin-index.php");
            exit;
        } else {
            header("Location: empleado-index.php");
            exit;
        }
    } else {
        header("Location: login.php");
        exit;
    }
?>

<?php
    include('includes/pie.php');
?>