<?php 
 
	$server =$_SERVER["HTTP_HOST"];
	$contexto = "http://" . $server ."/sisxtc";
	//$idProducto=trim($_GET['idProducto']);
	header('Content-Type: application/json; charset=ISO-8859-1');
	include("../../../util/MysqlDAO.php");

	$db = new MySQL (); 

	$txtnombre=trim($_POST['txtnombre']);
 	$txtmo= trim($_POST['txtmo']);
 	$idproducto=trim($_POST['idproducto']);

	
	$db = new MySQL ();   
	
	$sql="SELECT  count(t1.idproducto) as existe FROM t02producto t1  WHERE  
			t1.txtnombre='{$txtnombre}' and  t1.txtmo='{$txtmo}' and t1.idproducto = {$idproducto}";
	$con=$db->getConexion();
	
	$result = $con->query($sql);
			               	
	 if ($result->num_rows > 0) {
			               		// output data of each row
			               		while($row = $result->fetch_assoc()) {

			               			if($row ['existe'] == 1){	
			               					echo 0;
			               				break;
			               				
			               			}else{
			               				echo 1;
			               			}
			               		}
		}else{
			echo 0;
		}

	$db->closeSession();

?>

    

 
