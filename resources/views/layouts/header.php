<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLES & DESCRIPTION-->
    <title>Titre</title>
    <meta name="description" content="Description"/>
    <!--FAVICONES-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!--STYLESHEET-CSS-->
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <nav class="bg-dark">
        <span class="float-left p-3 text-light logo">Plant<b>Addict.com</b></span>
        <ul class="text-center p-4 float-right">
            <li class="d-inline p-2"><a href="index.php?action=home" class="text-light">Accueil</a></li>
            <li class="d-inline pl-2 pr-2"><a href="index.php?action=cart" class="text-light">Mon panier</a></li>
            <li class="d-inline pl-2 pr-2 text-light">Total: <span
                        class="text-success"><?= $cartProducts['totalCardPrice'] ?> €</span> - Qty: <span
                        class="text-warning"><?= $cartProducts['totalQuantity'] ?></span></li>
        </ul>
    </nav>
</header>
<section class="header">

</section>
