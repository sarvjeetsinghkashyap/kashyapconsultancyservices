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
            <div class="col-1 left">
                <img src="assets/logo.jpg" alt="logo">&nbsp
                <span>Kashyap<br>Consultancy Services</span>
            </div>
            <div class="col-2 right">
                <ul class="menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
                <button class="btn">Login</button>&nbsp
                <button class="btn-alt">Sign Up</button>
            </div>
            {{-- <div class="col-1 right">
                <button class="btn">Login</button>&nbsp
                <button class="btn-alt">Sign Up</button>
            </div> --}}
        </div>
    </nav>
    <header>
        <video src="assets/kyn-ai-landing-hero.mp4" autoplay loop muted></video>
        <div class="header-overlay">
            <div class="row">
                <div class="col-1"><h1>Kashyap Consultancy Services</h1></div>
                <div class="col-2"></div>
            </div>
        </div>
    </header>
    <main></main>
</body>
<script src="scripts/jquery.js"></script>
<script>
    $(document).ready(function(){
        $(window).on("scroll", function() {
            var vh = $(window).height() - 60;
            if ($(window).scrollTop() > vh) {
                $("nav").css({
                    "background": "#fff"
                });
            } else {
                $("nav").css({
                    "background": "transparent"
                });
            }
        });
    });
</script>
</html>