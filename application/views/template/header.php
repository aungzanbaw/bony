<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-us" i18n-values="dir:textdirection" dir="ltr"> <!--<![endif]-->
    <head>
        <!--[if lt IE 9]>
            <script src="dist/html5shiv.js"></script>
        <![endif]-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
        <!--meta description-->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="aungzanbaw@gmail.com">
        <meta name="copyright" content="Copyright &copy; <?php echo date('Y');?> másuri.com">
        <meta name="distribution" content="global">
        <meta name="rating" content="general">
        <meta name="revisit-after" content="7 Days">
        <meta name="robots" content="all">

        <title><?php if(isset($current_title)) echo $current_title;?> | <?php if(isset($site_title)) echo $site_title;?></title>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>img/favicon.ico">

        <!--base css and modernizr at the top of document-->
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">

        <script src="<?php echo base_url();?>js/vendor/modernizr.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header -->
                