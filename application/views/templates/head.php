<?php $base_url = $this->config->item('base_url'); ?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php echo $title; ?></title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/webicons/fc-webicons.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/frameworks/foundation/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/frameworks/foundation/stylesheets/app.css">

  <script src="<?php echo $base_url; ?>assets/frameworks/foundation/javascripts/modernizr.foundation.js"></script>
  
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
  
  <link href='http://fonts.googleapis.com/css?family=Arvo:400,700|BenchNine|Rokkitt' rel='stylesheet' type='text/css'>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>