<?php
/* Smarty version 3.1.39, created on 2021-10-09 23:36:07
  from '/opt/lampp/htdocs/TPE1/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61620b47b67f86_88729274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '507a8baca44482fa6634b8943d4f34aae2ef04af' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/header.tpl',
      1 => 1633734210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61620b47b67f86_88729274 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <!-- <nav class="navbar navbar-dark bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="">PRODUCTOS INFORMATICOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                            <a class="nav-link active" aria-current="page" href="">ABM Categorías</a>
                            <a class="nav-link active" aria-current="page" href="">ABM Productos</a>
                            <a class="nav-link active" aria-current="page" href="">Listado Categorías</a> 
                            <a class="nav-link active" aria-current="page" href="">Listado Productos</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PRODUCTOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>

                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Altas
                        </a>
                        <ul class="dropdown-menu navbar-dark bg-light" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="addCategory">Alta Categorías</a></li>
                            <li><a class="dropdown-item" href="addProduct">Alta Productos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Listados
                        </a>
                        <ul class="dropdown-menu navbar-dark bg-light" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item navbar-dark" href="listCategories">Listado Categorías</a></li>
                            <li><a class="dropdown-item navbar-dark" href="listProducts">Listado Productos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-auto">
                            <?php if ((isset($_SESSION['USER_ID']))) {?> <!-- $_SESSION['USER_ID'] -->
                                <a class="nav-link" href="logout"><?php echo $_SESSION['USER_EMAIL'];?>
 Logout</a>
                            <?php } else { ?>
                                <a class="nav-link" href="login">Ingresar</a>
                            <?php }?>
                        </li>

                </ul>
                </div>
            </div>
        </nav>

    </header>
    
    <!-- inicia el contenido principal -->
    <div class="container"><?php }
}
