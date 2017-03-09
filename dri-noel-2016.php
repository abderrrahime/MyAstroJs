<?php

$cards_dir = 'tarot/cartes/original-grand/';
$ext = '.png';

// Form Vars
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tirage et interprétation de tarot gratuit spécial Noël 2016 sur MyAstro.fr">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/dri-noel-2016.css">
    <link rel="shortcut icon" type="image/x-icon" href="images_landing/dri-noel-2016/favicon.png">
    <title>Tarot Noel 2016 - DRI | MyAstro</title>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<!-- Post Form Modal-->
<div class="FormContainer overlay" id="form-overlay"></div>
<article class="modal hidden">
    <div class="modal-container">
        <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
        <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
        <button class="btn modal-btn">Fermer</button>
    </div>
</article>
<!-- End Of Modal-->
<section class="container" role="main">
    <header class="Site-Header" role="banner">
        <div class="site-logo">
            <svg class="logo-svg" viewBox="0 0 206 203.253">
                <path stroke="#000" stroke-width="1.5" stroke-miterlimit="10"
                      d="M20.463 63.277L78.83 22.968l23.177 14.438.536.334.531-.34 22.876-14.631 58.657 40.508h1.76l-60.396-41.709-23.435 14.989-23.734-14.784-60.098 41.504zm40.016 54.327h-1.846c-.219 0-.397-.059-.538-.176-.14-.116-.249-.269-.327-.455l-3.88-9.606H37.644l-3.881 9.606c-.063.172-.171.319-.327.444-.155.124-.343.187-.561.187h-1.823l13.533-33.073h2.36l13.534 33.073zm-7.316-12.014l-6.731-16.712c-.233-.546-.46-1.2-.678-1.964-.094.374-.195.729-.304 1.063-.109.335-.226.643-.351.924l-6.731 16.688h14.795zm28.865-17.039c-.14.265-.343.396-.608.396-.202 0-.464-.144-.783-.432-.319-.288-.752-.608-1.297-.959-.546-.351-1.228-.674-2.045-.97-.818-.296-1.827-.444-3.027-.444s-2.255.172-3.167.515c-.911.343-1.675.811-2.29 1.402-.616.593-1.084 1.277-1.402 2.057-.32.779-.479 1.598-.479 2.454 0 1.122.237 2.05.713 2.781.475.733 1.103 1.356 1.882 1.87.778.515 1.663.947 2.652 1.298.989.351 2.006.697 3.051 1.04 1.043.343 2.061.721 3.05 1.133.989.413 1.873.932 2.653 1.555.778.623 1.405 1.391 1.881 2.303.476.911.713 2.045.713 3.4 0 1.387-.237 2.692-.713 3.915-.476 1.224-1.165 2.287-2.068 3.19-.904.904-2.01 1.617-3.319 2.139-1.309.522-2.805.783-4.487.783-2.182 0-4.06-.386-5.633-1.157-1.574-.771-2.953-1.826-4.138-3.167l.655-1.028c.186-.233.404-.351.654-.351.14 0 .319.094.537.28.218.188.483.417.795.689.311.273.685.569 1.122.889.436.319.942.615 1.52.888.576.273 1.238.503 1.986.69.748.188 1.597.281 2.548.281 1.309 0 2.478-.199 3.506-.597 1.028-.397 1.896-.938 2.606-1.624.709-.685 1.25-1.5 1.624-2.442.374-.943.562-1.952.562-3.027 0-1.169-.238-2.131-.713-2.887-.476-.756-1.102-1.387-1.882-1.893-.779-.507-1.664-.932-2.653-1.274-.989-.343-2.006-.678-3.05-1.005-1.044-.327-2.061-.693-3.051-1.099-.989-.405-1.873-.923-2.652-1.555-.779-.631-1.406-1.417-1.882-2.36-.476-.942-.713-2.123-.713-3.541 0-1.106.211-2.174.631-3.202.421-1.028 1.036-1.937 1.847-2.723.811-.787 1.812-1.418 3.004-1.894 1.191-.476 2.551-.713 4.078-.713 1.714 0 3.253.272 4.616.818 1.363.545 2.606 1.379 3.728 2.501l-.562 1.077zm30.456-1.987h-11.616v31.04H98.46v-31.04H86.773v-2.033h25.711v2.033zm28.375 31.04h-2.057c-.265 0-.487-.043-.666-.129-.18-.085-.347-.245-.503-.479l-10.611-13.417c-.125-.171-.253-.318-.386-.443s-.28-.223-.444-.293c-.163-.069-.358-.12-.584-.151-.226-.031-.503-.047-.83-.047h-4.323v14.959h-2.408V84.531h8.462c3.802 0 6.649.736 8.543 2.209 1.893 1.472 2.84 3.634 2.84 6.485 0 1.263-.219 2.416-.655 3.46-.436 1.044-1.064 1.959-1.881 2.746-.818.787-1.808 1.43-2.969 1.929-1.161.498-2.466.833-3.915 1.005.374.233.709.545 1.005.935l11.382 14.304zm-14.678-16.735c1.465 0 2.778-.176 3.938-.526 1.161-.351 2.143-.853 2.945-1.507.803-.654 1.414-1.441 1.835-2.361.421-.919.631-1.955.631-3.108 0-2.353-.768-4.098-2.302-5.235-1.535-1.138-3.775-1.706-6.72-1.706h-6.054v14.444h5.727zm49.459.186c0 2.557-.382 4.874-1.146 6.954-.764 2.08-1.839 3.856-3.226 5.329-1.387 1.473-3.05 2.61-4.99 3.412-1.939.803-4.078 1.204-6.416 1.204-2.337 0-4.473-.401-6.404-1.204-1.933-.802-3.592-1.939-4.979-3.412-1.387-1.473-2.462-3.249-3.226-5.329-.764-2.08-1.146-4.397-1.146-6.954 0-2.539.382-4.85 1.146-6.93.764-2.08 1.839-3.856 3.226-5.329 1.387-1.473 3.046-2.614 4.979-3.425 1.932-.81 4.067-1.215 6.404-1.215 2.338 0 4.477.401 6.416 1.203 1.94.803 3.604 1.944 4.99 3.425 1.387 1.48 2.462 3.261 3.226 5.341.764 2.081 1.146 4.391 1.146 6.93zm-2.478 0c0-2.306-.319-4.378-.959-6.217-.639-1.839-1.542-3.396-2.711-4.675-1.169-1.277-2.571-2.256-4.207-2.934-1.637-.678-3.444-1.017-5.423-1.017-1.963 0-3.763.339-5.399 1.017-1.636.678-3.042 1.656-4.219 2.934-1.177 1.278-2.088 2.836-2.734 4.675-.647 1.839-.97 3.911-.97 6.217 0 2.322.322 4.398.97 6.229.646 1.831 1.558 3.386 2.734 4.663 1.177 1.277 2.583 2.252 4.219 2.922 1.637.67 3.437 1.005 5.399 1.005 1.979 0 3.786-.335 5.423-1.005 1.636-.67 3.038-1.645 4.207-2.922 1.169-1.277 2.072-2.832 2.711-4.663.64-1.83.959-3.907.959-6.229z"/>
                <path stroke="#000" stroke-miterlimit="10"
                      d="M102.307 60.491V75.19h-.924V62.662c0-.18.01-.37.031-.571l-5.785 10.275c-.098.18-.236.27-.416.27h-.166c-.182 0-.318-.09-.416-.27L88.688 62.07c.021.208.031.405.031.592V75.19h-.936V60.491h.738c.097 0 .173.011.229.031.055.021.11.076.166.166L94.85 70.91c.104.194.193.402.27.624.041-.111.086-.22.135-.327.049-.107.1-.21.156-.307l5.766-10.212c.055-.09.111-.146.172-.166.059-.021.135-.031.232-.031h.726zm8.882 8.642v6.057h-1.06v-6.057l-5.443-8.643h.935c.097 0 .177.022.239.067.063.045.114.109.155.192l4.208 6.752c.09.159.173.313.249.463.076.148.142.296.197.441.056-.146.117-.293.187-.441.069-.149.149-.304.239-.463l4.207-6.752c.035-.076.085-.139.151-.188.065-.048.146-.072.244-.072h.934l-5.442 8.644z"/>
                <path stroke="#000" stroke-width="1.5" stroke-miterlimit="10"
                      d="M11.886 108.136l-4.84-7.267 4.84-7.27 4.84 7.27zm182.228 0l-4.839-7.267 4.839-7.27 4.84 7.27zM11.886 67.461h67.307v1H11.886zm114.393 0h67.378v1h-67.378zM11.886 133.254h182.12v1H11.886z"/>
                <path d="M82.793 18.402L102.53 4.897l19.293 13.505"/>
                <path d="M102.525 5.809l16.918 11.843H85.218l17.307-11.843m.01-1.824L80.369 19.152h43.833L102.535 3.985z"/>
                <path stroke="#000" stroke-width="1.5" stroke-miterlimit="10"
                      d="M184.607 139.693l-58.367 40.308-23.177-14.437-.536-.334-.531.34-22.876 14.631-58.656-40.508h-1.761L79.1 181.402l23.435-14.989 23.734 14.784 60.098-41.504z"/>
                <path d="M83.249 184.852h39.028l-19.737 13.504"/>
                <path d="M119.854 185.601l-17.309 11.843-16.917-11.843h34.226m4.848-1.5H80.869l21.666 15.167 22.167-15.167z"/>
            </svg>
        </div>
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
                    <p class="explication-text" role="contentinfo" itemprop="description">
                        <span class="txt-block"><span class="txt-0">Noel… </span>La fête, des cadeaux, la convivialité…</span><br/><br/>
                        Noel, c’est surtout le mois de Décembre, le dernier mois de 2016, le mois qui clôture votre
                        année !<br/><br/>
                        Plus que quelques jours, quelques heures, une ultime occasion qui s’offre à vous pour donner à
                        2016 la saveur que vous souhaitez. <br/><br/>
                        Que vont vous réserver les derniers instants de 2016 ? Que va-t- il se passer pour vous en cette
                        fin d’année ?
                        Comment bien débuter 2017 ? Que faire pour que cette nouvelle année soit meilleure que la
                        précédente?<br/><br/>
                        Profitez du <span class="Cap">Tarot de Noël</span> pour avoir toutes vos
                        réponses, tirez les cartes ci-dessous :</p>
                    <button class="btn cta-draw">Je tire les cartes</button>
                </article>
            </section>
            <section class="drawCards hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                    <h2 class="section-title">Mélangez les cartes</h2>
                </header>
                <article class="Cards-Container">
                    <ul class="cards">
                        <?php
                        $deck = range(1, 20);
                        shuffle($deck);
                        foreach ($deck as $card) {
                            echo('<li class="card card-idle" data-card=' . $card . '>');
                            echo('<div class="card-back front"></div>');
                            echo('<div class="card-face back"><img src="' . $cards_dir . $card . $ext . '" alt=""></div>');
                            echo('</li>');
                        }
                        ?>

                    </ul>
                    <article class="Cards-Container">
                        <ul class="cards result-cards">
                            <!-- Picked Card gonna be here-->
                        </ul>
                    </article>
                </article>
                <button class="btn cta-spread">Mélanger</button>
            </section>
            <section class="result hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                </header>
                <article class="Cards-Container">
                    <ul class="cards result-cards">
                        <!-- Picked Card gonna be here-->
                    </ul>
                </article>
                <button class="btn cta-read">Voir mon interprétation</button>
            </section>
            <section class="signUp hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                </header>
                <ul class="result-cards-mini">

                </ul>
                <article class="FormContainer">
                    <form action="inc/process.php" method="post" class="Primary-Form ajax" id="form-container">

                        <div class="FormContainer-Fields Fields-Table">

                            <p class="alert alert-danger" style="display: none"></p>
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="tarot-dri-noel-2016"/>
                            <input type="hidden" name="method" value="general-suscribe"/>
                            <input type="hidden" name="support" value="tarot"/>
                            <input type="hidden" name="site" value="myastro.fr"/>
                            <input type="hidden" name="affiliation" value="adwords"/>
                            <input type="hidden" name="dri" value="dri-noel-2016-merci"/>
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="tel_needed" value="1"/>
                            <input type="hidden" name="gclid"
                                   value="<?php isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                            <input type="hidden" name="cguv" value="1"/>
                            <input type="hidden" name="partenaires" value="1"/>
                            <!-- ############################################### -->
                            <div class="hidden cardsPicked"></div>
                            <div class="Fields-Table-Row">
                                <label for="name" class="FormField-Label">Votre prénom</label>
                                <div class="FormField input-name">
                                    <input type="text" id="name" name="prenom" class="FormField-Input"
                                           value="<?php $prenom ?>" placeholder="Mon prénom" required/>
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <label for="email" class="FormField-Label">Votre email</label>
                                <div class="FormField input-email">
                                    <input id="email" type="email" name="email" class="FormField-Input"
                                           value="<?php $email ?>" placeholder="Mon email" required/>
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <span class="FormField-Info">Vous recevrez votre interprétation à cette adresse</span>
                            </div>

                        </div>
                        <button class="btn FormContainer-Submit" type="submit" name="valider">Recevoir mon
                            intérprétation
                        </button>
                    </form>
                </article>
            </section>
        </div>
    </article>
    <footer class="Site-Footer">
        <div class="subfooter">
            <ul class="footer-menu">
                <li class="first"><img src="images_landing/dri-noel-2016/star.png" alt=""><strong>Voyants sérieux
                        reconnus<br/> pour leur savoir faire</strong></li>
                <li class="second"><img src="images_landing/dri-noel-2016/luck.png" alt=""><strong>Consultations 100%
                        <br/>discrètes & anonymes</strong></li>
                <li class="third"><img src="images_landing/dri-noel-2016/chat.png" alt=""><strong>Interprétation<br/>immédiate</strong>
                </li>
                <li class="fourth"><img src="images_landing/dri-noel-2016/award.png" alt=""><strong>My Astro leader
                        <br/>depuis 2007</strong></li>
                <li class="fifth"><img src="images_landing/dri-noel-2016/card.png" alt=""><strong>Paiement <br/>sécurisé
                        par CB</strong></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="footer">
            <?php include('include/footer_copyright.php'); ?>
        </div>
    </footer>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ajaxify/6.5.6/ajaxify.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script src="js/snow-ball.js"></script>
<script src="js/dri-noel-2016.js"></script>
<!--<script src="js/formValidator.js"></script>-->
<!--
TODO: For Google analytics, add : ga('send', 'pageview');
-->
</body>
</html>