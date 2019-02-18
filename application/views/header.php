<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link href="<?php echo base_url('assets/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <nav class="indigo" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?= site_url('welcome/index'); ?>" class="brand-logo">
      logo
      </a>
      <ul class="right hide-on-med-and-down">

      <?php

      if(isset($this->session->userdata))
      {
        if($this->session->userdata('perfil'))
        {
  
        ?>
  
        <li><a href="<?= site_url('motos_controller/index'); ?>">Motos</a></li>        
        <li><a href="<?= site_url('login/logout_ci'); ?>">Logout</a></li>        
  
        <?php
  
        }

      }
      else 
      {

      ?>

        <li><a href="<?= site_url('login/index'); ?>">Login</a></li>        

      <?php

      }

      ?>
   
      </ul>

      <ul id="nav-mobile" class="sidenav">

        <li><a href="<?= site_url('login/index'); ?>">Login</a></li>

      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>