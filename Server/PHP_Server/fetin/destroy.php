<?php

      //Inicia a sess�o

      session_start();

      //Elimina os dados da sess�o

      //session_unregister($_SESSION['id']);

        //Encerra a sess�o

      session_destroy();

      header("Location:login.php");
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=login.php'>";
      
?>