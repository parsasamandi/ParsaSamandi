<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Parsa Samandi - Parsa Samandi's Personal Portfolio Website Template" />
        <meta name="keywords" content="business card, creative, 
            creative portfolio, cv theme, online resume, personal, portfolio, 
            professional cv, responsive portfolio, resume, resume theme, vcard" />
    <meta name="author" content="Parsa Samandi" />
    <title>Parsa Samandi</title>
    <!--favicon-img-->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!--main css file should not be removed -->
    <link rel="stylesheet" href="css/index.css"
</head>

<body>
    <!--contains all the div-->
    <div id="all">
        <!--mouse  follower-->
        <div class="cursor"></div>

        <!--loader-->
        <div id="loader">
            <span>Parsa</span>Samandi
        </div>

        <!--link-screen-->
        <div id="breaker"></div>
        <div id="breaker-two"></div>

        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="/" data-text="HOME" id="home-link">HOME</a>
                <a href="#about-me" data-text="ABOUT" id="about-link">ABOUT</a>
                <a href="#portfolio" data-text="PORTFOLIO" id="portfolio-link">PORTFOLIO</a>
                <a href="#contact" data-text="CONTACT" id="contact-link">CONTACT</a>
            </div>
        </div>

        <!--Menubar-->
        <div id="navigation-bar">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>

        <!------------- Header ------------>
        @include('header')
        <!------------- Header (End) ------------>

        <!------------- About Me ------------>
        @include('aboutMe')
        <!------------- About Me (End) ------------>

        <!------------- Portfolio ------------>
        @include('portfolio')
        <!------------- Portfolio (End) ------------>

        <!------------- Contact ------------>
        @include('contact')
        <!------------- Contact (End) ------------>


        <!--main css file-->
        <script src="js/jsap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/particles.js"></script>
        <script src="js/particles.min.js"></script>
        <script src="js/index.js"></script>
        <script>
            particlesJS("particles", {"particles":{"number":{"value":120,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":true,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":true,"speed":0,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.24463576890600452,"width":1.2626362266116362},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
        </script>
</body>

</html>