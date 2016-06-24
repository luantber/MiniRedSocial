<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>material/main.css">

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>material/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="<?php echo base_url(); ?>material/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>material/js/materialize.min.js"></script>
	<title>Tornado</title>

</head>
<body>

    <!--Import jQuery before materialize.js-->
   <script type="text/javascript">
    $( document ).ready(function(){

    $(".button-collapse").sideNav();
    })
    </script> 
  
  <nav class="teal darken-3">
    <div class="nav-wrapper container ">
      <a href="<?php echo base_url() ?>" class="brand-logo lobster">Tornado</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
         <?php if (!$this->session->logueado) { ?> 
       
          <li><a href="<?php echo base_url() ?>login">Iniciar Sesion</a></li> 
          <li><a href="<?php echo base_url() ?>usuarios/registrar">Registrase</a></li> 
      <?php  
          } 
          else{ 
       ?> 
         <li><a href="<?php echo base_url() ?>usuarios/perfil">Perfil</a></li>
          <li><a href="<?php echo base_url() ?>muro">Muro</a></li>
          <li class="active"><a href="#"><b><?php echo "@".$this->session->username; ?></b></a></li> 
          <li><a href="<?php echo base_url() ?>logout">Logout</a></li> 
      <?php  
        } 
       ?> 
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php if (!$this->session->logueado) { ?> 
       
          <li><a href="<?php echo base_url() ?>login">Iniciar Sesion</a></li> 
          <li><a href="<?php echo base_url() ?>usuarios/registrar">Registrase</a></li> 
      <?php  
          } 
          else{ 
       ?> 
         <li><a href="<?php echo base_url() ?>usuarios/perfil">Perfil</a></li>
          <li><a href="<?php echo base_url() ?>muro">Muro</a></li>
          <li class="active"><a href="#"><b><?php echo "@".$this->session->username; ?></b></a></li> 
          <li><a href="<?php echo base_url() ?>logout">Logout</a></li> 
      <?php  
        } 
       ?> </ul>
      </nav>

