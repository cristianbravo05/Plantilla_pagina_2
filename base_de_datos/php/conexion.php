

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="1234";
			$bd="pruebas";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
