<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta charset="utf-8" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page </title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url() ?>libs/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>libs/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>libs/css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>libs/css/queries.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>libs/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>libs/css/style1.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="img-div">
<div class="container ">
    <div style="margin-top: 100px;height: 500px;border-bottom: 2px #000000">

        <div class="col-md-6">
            <p style="color: red">NB:Use Mozilla Firefox For Better performance </p>
            <p>Secure Login</p>
           <div class="alert"> <?php
               if(validation_errors()){
                   echo validation_errors();
               }
                    ?></div>
            <?php echo  form_open('login/login_validation')?>
<!--           <form role="form" method="post" action="login_validation">-->
                <div class="form-group">

                    <label for="usr" ><p>User ID:</p></label>
                    <?php
//                    $user_name= array(
//                        'id' => 'user_id',
//                        'class'=>'user_input',
//                        'name' => 'user_id',
//                        'required' => 'required'
//                    );
//                   echo  form_input($user_name);
//                    ?>
                    <input style="width: 300px" type="text" name="user_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pwd"><p>Password:</p></label>
                    <input style="width: 300px" type="password" name="password" class="form-control" required>
                </div>
                <input class="btn btn-primary" type="submit" id="login" value="LogIn"/>
<!--            </form>-->
            <?php form_close()?>
            <p></p>
            <p></p>
            <a href="#" style="text-decoration: none;font-size: 14px;font-family: arial;color:aliceblue ">Can't Access Your Account !!
                Then contact To your developer.</a>
        </div>

    </div>
</div>
<div class="modal-footer">&copy; 2016 & Developed By FKN Group</div>
</body>
</html>
