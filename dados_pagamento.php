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

    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    <script>
        MercadoPago.setPublishableKey("TEST-cec1328e-ff9d-4656-818e-c09ce63f2fe4");
        MercadoPago.getIdentificationTypes();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
        <div class="row-fluid" style="text-align: center">

            <div class="span4"></div>

            <div class="span4" style="font-size: 18pt">
                <?php
                    $_POST['pagamento'] = 'tx_pc';
                    if ($_POST['pagamento'] == 'tx_pc'){
                        ?>
                        <form id="pay" name="pay" method="post">
                            <div>
                                <p>Número do Cartão de Crédito</p>
                                <input type="text" id="cardNumber" data-checkout="cardNumber" value="5031433215406351">
                            </div>
                            <div>
                                <p>Código de Segurança</p>
                                <input type="text" id="securityCode" data-chekout="securityCode" value="123">
                            </div>
                            <div>
                                <p>Expiração</p>
                                <input type="text" id="cardExpirationMonth" name="cardExpirationMonth" data-checkout="cardEsxpirationMonth" value="12"><input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" value="2016">
                            </div>
                            <div>
                                <p>Nome Impresso no Cartão</p>
                                <input type="text" id="cardholderName" name="cardholderName" data-checkout="cardholderName" value="APRO">
                            </div>
                            <div>
                                <p>CPF do Dono</p>
                                <input type="text" id="docNumber" name="docNumber" data-checkout="docNumber" value="12345678">
                            </div>
                            <div>
                                <input type="submit"/>
                            </div>
                            <div>
                                <select hidden id="docType" name="docType" data-checkout="docType" value="CPF">

                            </div>
                        </form>
                        <?php
                    }
                ?>
            </div>
            <div class="span4"></div>

        </div>
    </div>
</section>

<hr>

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
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function(){
        doSubmit = false;
        function addEvent(el, eventName, handler){
            if (el.addEventListener) {
                el.addEventListener(eventName, handler);
            } else {
                el.attachEvent('on' + eventName, function(){
                    handler.call(el);
                });
            }
        };
        function getBin() {
            var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
            return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
        };
        function setPaymentMethodInfo(status, response) {
            if (status == 200) {
                // do somethings ex: show logo of the payment method
                var form = document.querySelector('#pay');

                if (document.querySelector("input[name=paymentMethodId]") == null) {
                    var paymentMethod = document.createElement('input');
                    paymentMethod.setAttribute('name', "paymentMethodId");
                    paymentMethod.setAttribute('type', "hidden");
                    paymentMethod.setAttribute('value', response[0].id);

                    form.appendChild(paymentMethod);
                } else {
                    document.querySelector("input[name=paymentMethodId]").value = response[0].id;
                }
            }
        };
        function guessingPaymentMethod(event) {
            var bin = getBin();

            if (event.type == "keyup") {
                if (bin.length >= 6) {
                    Mercadopago.getPaymentMethod({
                        "bin": bin
                    }, setPaymentMethodInfo);
                }
            } else {
                setTimeout(function() {
                    if (bin.length >= 6) {
                        Mercadopago.getPaymentMethod({
                            "bin": bin
                        }, setPaymentMethodInfo);
                    }
                }, 100);
            }
        };
        function sdkResponseHandler(status,response){
            if (status != 200 && status != 201) {
                switch (status){
                    case 'E301':
                        alert('Número de cartão inválido!');
                        break;
                    case 'E302':
                        alert('Código de Segurança Inválido');
                        break;
                    case 316:
                        alert('Nome inválido!');
                        break;
                    default:
                        alert('O pagamento não pode ser efetuado por conta de um erro. Tente novamente mais tarde.'+JSON.stringify(response));
                        break;
                }

            }else{

                var form = document.querySelector('#pay');

                var card = document.createElement('input');
                card.setAttribute('name',"token");
                card.setAttribute('type',"hidden");
                card.setAttribute('value',response.id);
                form.appendChild(card);
                doSubmit=true;
                form.submit();
                alert("Acho que foi");
            }
        }
        $("#pay").submit(function (e) {
            e.preventDefault();
            if(!doSubmit){
                var form = {
                    cardNumber:$('#cardNumber').val(),
                    cardExpirationMonth:$('#cardExpirationMonth').val(),
                    cardExpirationYear:$('#cardExpirationYear').val(),
                    securityCode:$('#securityCode').val()};
                alert(JSON.stringify(form));
                Mercadopago.createToken(form, sdkResponseHandler);
                return false;
            }
        });
        addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
        addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);
    });
</script>
<script>
</script>


</body>
</html>
