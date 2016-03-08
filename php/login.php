<?php

if(!isset($_SESSION)){
    session_start();
}
if($_SERVER['REQUEST_METHOD']=="POST") {
    $function = $_POST['call'];
    if(function_exists($function)) {
        call_user_func($function);
    } else {
        $data=array('error' => 'Funcion no encontrada');
        echo json_encode($data);
        
    }
}


/*---------------------------------------------------------------------------------------------------   LOGIN*/
function login()
{
    require('conexion.php');
    $nombre = $_POST['n'];
    $pass = $_POST['p'];
    $rol = $_POST['r'];

    $passMD5 = md5($pass);
    
    $nombre = sqlinyection($nombre);
    $pass = sqlinyection($pass);
    $rol = sqlinyection($rol);

    $sql="SELECT `Id`, `Nombre`, `Usuario`, `Telefono`, `Direccion`, `Contrasena`, `Rol` FROM `usuario` where `Usuario`=\"".$nombre."\" and `Contrasena`=\"".$passMD5."\" and `Rol`=\"".$rol."\" ;";
    //$sql = "SELECT * FROM EMPLEADO WHERE Usuario =\"".$nombre."\" AND Password =\"".$pass."\";";
    $result = $db->query($sql);

        if($result)
        {
            if($result->num_rows <= 0)
            {
                $data=array('error' => 'No se han encontrado resultados para '.$nombre);
                echo json_encode($data);
            }
            else
            {
                $row = $result->fetch_assoc();
                $nombre = $row['Nombre'];
                $usuario = $row['Usuario'];
                $id = $row['Id'];
                $rol = $row['Rol'];
                $_SESSION['nombre_Usuario']= $nombre;
                $_SESSION['user_Usuario']= $usuario;
                $_SESSION['id_Usuario'] = $id;
                $_SESSION['rol_Usuario'] = $rol;
                $data=array('sucess' => 'Bienvenido '.$nombre);
                echo json_encode($data);
            }
        }
        else
        {
            $data=array('error' => $result);
            echo json_encode($data);
        }

}

/*---------------------------------------------------------------------------------------------------   LLENAR ROL*/

function llenar()
{
    echo "<option value=0>Seleccione un Rol</option>";
    require('conexion.php');
  	$sql = "SELECT `Id`, `Nombre` FROM `rol`;";
    $result = $db->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
    		echo "<option value=".$row['Id'].">".$row['Nombre']."</option>";
	    }
    }    
}

function sqlinyection($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = str_ireplace("&","&ampr",$data);
   $data = str_ireplace("\"","&quot",$data);
   $data = str_ireplace("\'","&#039",$data);
   $data = str_ireplace("<",'&lt',$data);
   $data = str_ireplace(">",'&gt',$data);
   return $data;
}

?>