<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	//Yii::app()->bootstrap->register();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
         <link rel="icon" href="<?php echo $baseUrl; ?>/img/favicon.png">

        <title>Signin Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/bootstrap/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/signin.css" >
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <?php echo $content; ?> 
    </body>
</html>