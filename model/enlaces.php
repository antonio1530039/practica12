<?php
//Clase de enlaces de pagina
class Enlaces{
	//metodo publico que dado un nombre de enlace, retorna el modulo que sera incluido o mostrado 
	public function enlacesPaginasModel($enlace){
		
		if($enlace == "dashboard" || $enlace == "productos" || $enlace == "categorias" || $enlace == "usuarios" || $enlace == "movimiento_inventario"){
			$module = "view/$enlace/$enlace.php";
		}else if($enlace == "logout"){
			$module = "model/logout.php";
		}else if($enlace == "borrar"){
			$module = "model/borrar.php";
	    }else if($enlace == "editar_producto" || $enlace == "registro_producto"){
	    	$module = "view/productos/$enlace.php";
	    }else if($enlace == "editar_categoria" || $enlace == "registro_categoria"){
	    	$module = "view/categorias/$enlace.php";
	    }else if($enlace == "editar_usuario" || $enlace == "registro_usuario"){
	    	$module = "view/usuarios/$enlace.php";
	    }
	    else if($enlace == "login"){
	      $module = "view/login.php";
	    }
		else{
			$module = "view/dashboard/dashboard.php";
		}
		return $module;
	}
}



?>