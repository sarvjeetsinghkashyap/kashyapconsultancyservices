<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "Kashyap Consultancy Services")</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/web.css">
</head>
<body>
    <nav>
        <div class="row">
            <div class="col nav-header">
                <img src="../assets/emb.png" alt="logo">
            </div>
            <ul class="col-2 nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <span class="toggle-menu menu-show">☰</span>
        </div>
    </nav>
@yield("content")
</body>
<script src="scripts/jquery.js"></script>
<script src="scripts/script.js"></script>
</htmlscript>
</html>