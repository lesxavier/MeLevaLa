<?php session_start();
/**
 * Created by PhpStorm.
 * User: LuizEduardo
 * Date: 21/01/2017
 * Time: 21:18
 */

include "connection.php";

$query = "SELECT $_POST[pagamento],pc_ingresso,$_POST[op_quarto] FROM eventos WHERE cod='$_GET[evnt]'";

$resultado = mysqli_query($connection,$query);

$resultado = mysqli_fetch_array($resultado);

$resp = $resultado["$_POST[pagamento]"]*$resultado["$_POST[op_quarto]"] + $_POST['inc_ing']*$resultado['pc_ingresso'];

$_SESSION['preco'] = number_format(round($resp,-1),2,',','');

session_write_close();

echo $_SESSION['preco'];

