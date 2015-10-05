<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	//Yii::app()->bootstrap->register();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/font-awesome/css/font-awesome.min.css">

        <!--jasny-bootstrap-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/jasny-bootstrap/css/jasny-bootstrap.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/flaty.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/flaty-responsive.css">

        <link rel="shortcut icon" href="<?php echo $baseUrl; ?>/img/favicon.png">
    </head>
    <body>
        <?php echo $content; ?> 

        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="<?php echo $baseUrl; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script src="<?php echo $baseUrl; ?>/assets/flot/jquery.flot.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/flot/jquery.flot.crosshair.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/sparkline/jquery.sparkline.min.js"></script>
        

        <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <!--flaty scripts-->
        <script src="<?php echo $baseUrl; ?>/js/flaty.js"></script>
        <script src="<?php echo $baseUrl; ?>/js/flaty-demo-codes.js"></script>

        <!--jasny script for clickable row table-->
        <script src="<?php echo $baseUrl; ?>/assets/jasny-bootstrap/js/jasny-bootstrap.js"></script>    
    </body>
</html>