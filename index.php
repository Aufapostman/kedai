<!DOCTYPE html>
<html lang="en">

<head>
<title>Selamat Datang Di TOKO HARIAN SRC</title>
    <meta charset="UTF-8">
    <meta name="description" contents="TOKO HARIAN SRC">
    <link rel="stylesheet" type="text/css" href="style.css" >
    <style>
    ul.heading-gradient
    {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
    font-family: sans-serif;
    }
    h1.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
    }
    h3.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
    }
    body
    {
    color: #000000;
    background-image: url("kedai.jpeg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
</style>
</head>

<body>
<header>
    <center><h1 class="heading-gradient">TOKO HARIAN SRC</h1></center>
    <nav id="navigation">
    <ul class="heading-gradient">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=about">About</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
    </ul>
    </nav>
</header>
<div id="contents">
    <?php
    if (isset($_GET['page'])) 
    {
    $page = $_GET['page'];

        switch ($page) 
            {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;
            }
    } else 
        {
        include "home.php";
        }
        ?>
</div>
</body>
</html>