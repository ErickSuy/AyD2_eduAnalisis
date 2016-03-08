<?php

if($_SERVER['REQUEST_METHOD']=="POST") {
    $function = $_POST['call'];
    if(function_exists($function)) {
        call_user_func($function);
    } else {
        $data=array('error' => 'Funcion no encontrada');
        echo json_encode($data);
    }
}

function buscar()
{
    require('../php/connect.php');
    $buscar = sqlinyection($_POST['b']);

    if(!empty($buscar) && is_numeric($buscar))
    {
        $sql = "SELECT * FROM MAESTRO WHERE id_maestro =".$buscar." and `Estado`=1;";
        $result = $db->query($sql);
        $contar = $result->num_rows;

        if($result)
        {
            if($contar == 0)
            {
                $data=array('error' => 'No se han encontrado resultados para '.$buscar);
                echo json_encode($data);
            }
            else
            {
                $row = $result->fetch_assoc();
                $n1 = $row['Nombre1'];
                $n2 = $row['Nombre2'];
                $n3 = $row['Nombre3'];
                $a1 = $row['Apellido1'];
                $a2 = $row['Apellido2'];
                $c = $row['Ciudad'];
                $d = $row['Direccion'];
                $t1 = $row['Telefono1'];
                $t2 = $row['Telefono2'];
                $s = $row['Salario'];
                $dpi = $row['DPI'];
                $e = $row['Estado'];

                $array=array('n1' => $n1,'n2' => $n2,'n3' => $n3 ,'a1' => $a1, 'a2' => $a2, 'c' => $c , 'd' => $d,'t1' => $t1,'t2' => $t2,'s' => $s,'dpi' => $dpi,'e' => $e);
                echo json_encode($array);
            }
        }
        else
        {
            $data=array('error' => 'Error en consulta');
            echo json_encode($data);
        }
    }
    else
    {
        $data=array('error' => 'Error al buscar');
        echo json_encode($data);
    }
}

function insertar()
{

    $n = sqlinyection($_POST['n']);
    $n2 = sqlinyection($_POST['n2']);
    $n3 = sqlinyection($_POST['n3']);
    $a1 = sqlinyection($_POST['a1']);
    $a2 = sqlinyection($_POST['a2']);
    $d = sqlinyection($_POST['d']);
    $c = sqlinyection($_POST['c']);
    $t1 = sqlinyection($_POST['t1']);
    $t2 = sqlinyection($_POST['t2']);
    $s = sqlinyection($_POST['s']);
    $dpi = sqlinyection($_POST['dpi']);

    require('../php/connect.php');
    $sql= "INSERT INTO  `MAESTRO` (`Nombre1` ,  `Nombre2` ,  `Nombre3` ,  `Apellido1` ,  `Apellido2` ,  `Ciudad` ,  `Direccion` ,  `Telefono1` ,  `Telefono2` , `Salario` ,  `DPI` ,  `Estado` ) VALUES ('$n', '$n2', '$n3', '$a1', '$a2','$c','$d', '$t1','$t2', '$s', $dpi, 1);";

    $result = $db->query($sql);
    if($result)
    {
        $data=array('sucess' => 'Insertado correctamente');
        echo json_encode($data);
    }
    else
    {
        $data=array('error' => 'Error en consulta '.$sql.$result);
        echo json_encode($data);
    }
}

function modificar()
{
    $id=sqlinyection($_POST['id']);
    $n = sqlinyection($_POST['n']);
    $n2 = sqlinyection($_POST['n2']);
    $n3 = sqlinyection($_POST['n3']);
    $a1 = sqlinyection($_POST['a1']);
    $a2 = sqlinyection($_POST['a2']);
    $d = sqlinyection($_POST['d']);
    $c = sqlinyection($_POST['c']);
    $t1 = sqlinyection($_POST['t1']);
    $t2 = sqlinyection($_POST['t2']);
    $s = sqlinyection($_POST['s']);
    $dpi = sqlinyection($_POST['dpi']);

    require('../php/connect.php');
    $sql ="UPDATE `MAESTRO` SET `Nombre1`='$n',`Nombre2`='$n2',`Nombre3`='$n3',`Apellido1`='$a1',`Apellido2`='$a2',`Ciudad`='$c',`Direccion`='$d',`Telefono1`='$t1',`Telefono2`='$t2',`Salario`=$s,`DPI`=$dpi WHERE id_maestro=$id and `Estado`=1;";
    $result = $db->query($sql);
    if($result)
    {
        $data=array('sucess' => 'Modificado correctamente');
        echo json_encode($data);
    }
    else
    {
        $data=array('error' => 'Error en consulta '.$result);
        echo json_encode($data);
    }
}

function eliminar()
{
    require('../php/connect.php');
    $id = sqlinyection($_POST['id']);
    $sql = "UPDATE `MAESTRO` SET `Estado`=0 WHERE `id_maestro`=$id;";
    $result = $db->query($sql);
    if($result)
    {
        $data=array('sucess' => 'Eliminado correctamente');
        echo json_encode($data);
    }
    else
    {
        $data=array('error' => 'Error en consulta '.$result);
        echo json_encode($data);
    }
}

function llenar()
{
    require('../php/connect.php');
	$sql = "SELECT `id_maestro`, `Nombre1` FROM `MAESTRO` WHERE `Estado`=1;";
    $result = $db->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
    		echo "<option value=".$row['id_maestro'].">".$row['id_maestro']." - ".$row['Nombre1']."  </option>";
	    }
    }
    echo "<option value=0>(Nuevo)</option>";
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