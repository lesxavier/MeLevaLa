<?php session_start();

require_once("mercadopago.php");


$mp = new MP("TEST-6995373671556823-012104-c583f80fe678dfc76a2899403f83d3e1__LB_LD__-162074323");

$payment_data = array(
    "transaction_amount"=>$_SESSION['preco'],
    "token"=>$_POST['token'],
    "description"=>"Caravana Me Leva Lá",
    "installments"=>1,
    "payment_method_id"=>$_POST['paymentMethodId'],
    "payer"=>array(
        "nome" => $_POST['email']
    )
);

$payment = $mp->post("v1/payments",$payment_data);

chop("Algo aconteceu");



