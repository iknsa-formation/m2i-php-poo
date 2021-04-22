<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 12:07
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="">

<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Home</a>
                    <?php if (!isset($_SESSION['security'])): ?>
                        <a class="nav-item nav-link" href="/login">Login</a>
                        <a class="nav-item nav-link" href="/register">Sign up</a>
                    <?php endif ?>


                    <?php if (isset($_SESSION['security'])): ?>
                        <a class="nav-item nav-link disabled" href="#">
                            Hello <?= $_SESSION['security']['user']->getFirstName(); ?></a>
                        <a class="nav-item nav-link" href="/profile">Mon profile</a>
                        <a class="nav-item nav-link" href="/logout">Deconnexion</a>
                    <?php endif ?>
                </div>
            </div>
        </nav>
