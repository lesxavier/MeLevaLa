<?php session_start();
    header("Content-Type: text/html;  charset=ISO-8859-1",true);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta lang="pt_BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Caravanas | Me Leva Lá</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/meleva_favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/meleva_icon_144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/meleva_icon_114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/meleva_icon_72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/meleva_icon_56.png">
</head>

<body>

<!--Header-->
<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="index.html"></a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="about-us.html">Sobre Nós</a></li>
                    <li class="active"><a href="caravanas.html">Caravanas</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact-us.html">Contato</a></li>
                    <li class="login">
                        <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- /header -->


<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Caravanas</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                    <li class="active">Caravanas</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->


<section class="services">
    <div class="container">
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8" style="text-align: center">

            <?php

            include "lib/connection.php";

            $query = "SELECT * FROM eventos WHERE cod='$_GET[evnt]'";
            $resultado = mysqli_query($connection,$query) or die(mysqli_error($connection));
            $resultado = mysqli_fetch_array($resultado);
            ?>
            <h1><?php echo $resultado['titulo']; ?></h1>
            </div>

        </div>
        <div class="row-fluid" style="text-align: center">

            <div class="span2"></div>
            <div class="span4">
                <form style="font-size: 18pt" class="modal-form" method="post" id="dados" name="dados" action="dados_pagamento.php">
                    <div class="form-group">
                        <p>Nome <span>*</span></p>
                        <span class="icon-case"><i class="icon-user"></i> </span><input type="text" name="nome" id="nome" required placeholder="Nome">
                    </div>
                    <div class="form-froup">
                        <P>Nº Identidade <span>*</span></P>
                        <span><i class="icon-user"></i> </span><input id="rg" name="rg" type="text" placeholder="00.000.000-0" required/>
                    </div>
                    <div>
                        <p>Data de Emissão *</p>
                        <span><i class="icon-calendar"></i></span><input type="date">
                    </div>
                    <div>
                        <p>CPF *</p>
                        <span><i class="icon-ticket"></i></span><input type="text" id="cpf" name="cpf" required placeholder="000.000.000-00">
                    </div>
                    <div>
                        <p>Celular *</p>
                        <span><i class="icon-mobile-phone"></i></span> <input type="text" maxlength="14" id="cel" name="cel" placeholder="(00)00000-0000">
                    </div>
                    <div>
                        <p>Opção de Pacote *</p>
                        <span><i class="icon-building"></i></span>
                        <select name="op_quarto" id="op_quarto" form="dados">
                            <?php
                                if ($resultado['vagas_triplo'] > 0){
                                    ?>
                                    <option value="pcb_triplo">Triplo</option>
                                    <?php
                                }
                                if($resultado['vagas_duplo'] >0){
                                    ?>
                                    <option value="pcb_duplo">Duplo</option>
                                    <?php
                                }
                                if($resultado['vagas_casal'] > 0){
                                    ?>
                                    <option value="pcb_casal">Casal</option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <p>Acompanhante?</p>
                        <span><i class="icon-user"></i> </span><input type="text" id="acompanhante" name="acompanhante" placeholder="Indique um acompanhante" title="Pode ser um amigo para ficar no mesmo quarto que o seu!">
                    </div>
            </div>

            <div class="span4" style="font-size: 18pt">
                <div class="form-group">
                    <p>Data de Nascimento <span>*</span></p>
                    <span class="icon-case"><i class="icon-calendar"></i> </span><input type="date" name="nasc" id="nasc" required>
                </div>
                <div>
                    <p>Órgão Emissor *</p>
                    <span class="icon-case"><i class="icon-building"></i> </span><input type="text" name="org" id="org" placeholder="Ex.: DETRAN" required>
                </div>
                <div>
                    <p>UF de Emissão *</p>
                    <span><i class="icon-map-marker"></i></span><input type="text" required id="ufrg" name="ufrg" maxlength="2" placeholder="Ex.: RJ">
                </div>
                <div>
                    <p>E-Mail *</p>
                    <span><i class="icon-envelope"></i></span><input type="email" maxlength="50" name="email" id="email" placeholder="email@paracontato.com">
                </div>
                <div>
                    <p>Tel. Residencial</p>
                    <span><i class="icon-phone"></i></span><input type="text" max="13" name="tel" id="tel" placeholder="(00)0000-0000"></input>
                </div>
                <div>
                    <p>Incluir Ingressos?</p>
                    <span><i class="icon-ticket"></i></span><select form="dados" id="inc_ing" name="inc_ing">
                        <option value="1">Sim</option>
                        <option value="0" selected>Não</option>
                    </select>
                </div>
                <div>
                    <p>Forma de Pagamento</p>
                    <span><i class="icon-dollar"></i>  </span><select id="pagamento" form="dados" name="pagamento">
                        <option value="tx_dp">Depósito</option>
                        <option value="tx_bl">Boleto</option>
                        <option value="tx_db">Débito</option>
                        <option value="tx_pc">C. de Crédito</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row-fluid" style="text-align: center">
            <h1>Total:</h1>
            <div id="preco" style="font-size: 20pt"></div>
        </div>
        <hr>
        <div class="row-fluid" style="text-align: center">
            <h4><input type="checkbox" id="concorda" name="concorda" >Li e concordo com o <a href="documents/%5BCONTRATO%5D%20ME%20LEVA%20LÁ%20NA%20BGS%202017.pdf">Termo de Prestação de Serviços</a>.</h4>
            <div id="preco" style="font-size: 20pt"></div>
            <?php
            require_once("lib/mercadopago.php");

            $mp = new MP('6995373671556823', 'wWHMZepqcNT4FVj1MrPPfVRcdD1DFEmq');

            $preference_data = array(
                "items"=>array(
                    array(
                        "title"=>"Caravana Me Leva Lá BGS 2017",
                        "quantity"=>1,
                        "currency_id"=>"BRL",
                        "unit_price"=>$_SESSION['preco']

                    )
                )
            );

            $preference = $mp->create_preference($preference_data);
            ?>
            <a href="<? echo $preference['response'"
            </form>
        </div>

    </div>
</section>

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>Contato</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-envelope"></i>melevalaturismo@gmail.com
                    </li>
                    <li>
                        <i class="icon-facebook-sign"></i>facebook.com/melevalaoficial/
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>A Me Leva Lá</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Quer ser um colaborador?</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <!--Important Links-->
            <div class="span5">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#" wid><i class="icon-angle-up"></i></a>
            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
                <button type="submit" class="btn btn-primary">
                    Enviar
                </button>
            </a>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
    $('select').change(function(){
        var dados = new FormData(document.getElementById('dados'));
        $.ajax({
            url: "lib/atualiza_preco.php?evnt=<?php echo $_GET['evnt'] ?>",
            data: dados,
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result){
                document.getElementById('preco').innerHTML = "R$"+result;
            }
        });
    });
</script>
<script>
    $("#concorda").mousedown(function(){
        if(!$(this).is(":checked")){
            $("#submit").prop("disabled",false);
        }
        else {
            $("#submit").prop("disabled",true);
        }
    });
</script>
<script>
    $(document).ready(function(){
        var dados = new FormData(document.getElementById('dados'));
        $.ajax({
            url: "lib/atualiza_preco.php?evnt=<?php echo $_GET['evnt'] ?>",
            data: dados,
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result){
                document.getElementById('preco').innerHTML = "R$"+result;
            }
        });
    });
</script>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script>
    MercadoPago
</script>
</body>
</html>
