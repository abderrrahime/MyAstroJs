<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tirage et interprétation de tarot gratuit spécial Noël 2016 sur MyAstro.fr">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dri-noel-2016.css">
    <title>Tarot Noel 2016 - DRI | MyAstro</title>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<section class="container" role="main">
    <header class="Site-Header" role="banner">
        <div class="site-logo"><img src="images_landing/dri-noel-2016/logo.png" alt="MyAstro"></div>
        <div class="page-banner"><img src="images_landing/dri-noel-2016/xmass.png" alt="Joyeux Noël"></div>
    </header>
    <article class="Site-MainContent">
        <div class="da-container">
            <section class="snow-ball">
                <button class="btn cta shake">Je Commence</button>

                <canvas id="snow" class="snow"></canvas>
            </section>
            <section class="explication hidden">
                <aside class="left">
                    <img src="images_landing/dri-noel-2016/aside.png" alt="Tarot de noel">
                </aside>
                <article class="right">
                    <p class="explication-text" role="contentinfo" itemprop="description">Noel… La fête, des cadeaux, la
                        convivialité…<br/> Noel, c’est surtout le mois de Décembre, le dernier mois
                        de 2016, le mois qui clôture votre année !<br/> Plus que quelques jours, quelques heures, une ultime
                        occasion qui s’offre à vous pour donner à 2016 la saveur que vous souhaitez. <br/> Que vont vous
                        réserver les derniers instants de 2016 ? Que va-t- il se passer pour vous en cette fin d’année ?
                        Comment bien débuter 2017 ? Que faire pour que cette nouvelle année soit meilleure que la
                        précédente?<br/> Profitez du TAROT DE NOël pour avoir toutes vos réponses, tirez les cartes
                        ci-dessous</p>
                    <button class="btn cta-draw">Je tire les cartes</button>
                </article>
            </section>
            <section class="drawCards hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                    <h2>Mélangez les cartes</h2>
                </header>
                <article class="Cards-Container">
                    <ul class="cards">
                        <li class="card"><span class="card-placeholder"></span></li>
                        <li class="card"><span class="card-placeholder"></span></li>
                        <li class="card"><span class="card-placeholder"></span></li>
                        <li class="card"><span class="card-placeholder"></span></li>
                        <li class="card"><span class="card-placeholder"></span></li>
                        <li class="card"><span class="card-placeholder"></span></li>
                        <li class="card"><span class="card-placeholder"></span></li>
                    </ul>
                </article>
                <button class="btn cta-spread">Mélanger</button>
            </section>
        </div>
    </article>
    <footer class="Site-Footer">
        <div class="subfooter">
            <ul class="footer-menu">
                <li class="first"><strong>Voyants sérieux reconnus<br/> pour leur savoir faire</strong></li>
                <li class="second"><strong>Consultations 100% <br/>discrètes & anonymes</strong></li>
                <li class="third"><strong>Interprétation<br/>immédiate</strong></li>
                <li class="fourth"><strong>My Astro leader <br/>depuis 2007</strong></li>
                <li class="fifth"><strong>Paiement <br/>sécurisé par CB</strong></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="footer">
            <?php include('include/footer_copyright.php'); ?>
        </div>
    </footer>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/snow-ball.js"></script>
<script src="js/dri-noel-2016.js"></script>
</body>
</html>