<?php
    //Inicia a sess�o
    session_start();
    //Verifica se h� dados ativos na sess�o
    if(empty($_SESSION["id"])){
    //Caso n�o exista dados registrados, exige login
	//echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=login.php'>";
    header("Location:login.php");
    }
?>