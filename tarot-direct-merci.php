<?php
/*
    -------------------------------------------
    --   tarot-direct-merci = POST-LANDING   --
    -------------------------------------------

    Created on : 08 novembre 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
require_once('inc/config.php');
require_once('inc/bdd.php');
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
// Paramètres design
include('include/tarot-direct-design.php');
// Paramètre formulaire
session_start();
$email = isset($_SESSION['email'])? $_SESSION['email'] : '';
$voyant = isset($_SESSION['voyant']) ? $_SESSION['voyant'] : false;
$draw = isset($_SESSION['cards'])? $_SESSION['cards'] : false;

if(isset($_SESSION['user_id'])){
    $bdd->update($bdd->users, ['dri_page' => 'tarot-direct-merci'], ['internal_id' => $_SESSION['user_id']]);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Tarot Direct - Interprétation en live !</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="<?= $pict_path ?>favicon.png" />

        <link rel="stylesheet" type="text/css" href="<?= $css ?>" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="ContentBand ThreeCols SiteHeader">
            <div class="PageWrapper ContentBand-Table">
                <div class="ContentBand-Column SiteHeader-Slogan1">
                    Tirage de tarot gratuit<br>
                    avec interprétation en live !
                </div>
                <div class="ContentBand-Column"><div class="SiteHeader-Logo"></div></div>
                <div class="ContentBand-Column SiteHeader-Slogan2">
                    Votre tirage <strong>en direct</strong><br>
                    en 2 minutes chrono !
                </div>
            </div>
        </header>
<!-- ------------------------------ FORMULAIRE ----------------------------- -->
        <section class="ContentBand Form Principal" id="scn-form">
            <header class="ContentBand-ColumnHeader Title">- Pour poursuivre <strong>cliquez sur le bouton</strong> ci-dessous -</header>
            <div class="PageWrapper ContentBand-Table">
                <div class="ContentBand-Column">
                    <article class="FormContainer Merci-Form">
                        <?php if($voyant){ ?>
                        <div class="Pop Pop-Voyant getFormValue  <?= $voyant ?>" data-ref-form="voyant" data-method="class"><span class="Pop-Voyant-Photo"></span></div>
                        <?php } ?>
                        <img src="<?= $pict_path ?>offre-tchat.png" alt="5 minutes gratuites" />
                        <h2 class="Merci-Title">Toutes vos réponses en <strong>un simple clic</strong> !</h2>
                        <p class="Merci-Text">Cliquez ici pour profiter immédiatement des 5 minutes de Tchat GRATUITES</p>
                        <a href="https://voyance-en-direct.tv/tarot-en-direct/offre-gratuite?email=<?= $email ?>" class="FormContainer-Submit">Je lance le TCHAT</a>
                    </article>
                </div>
            </div>
        </section>
        <?php if($draw){ ?>
<!-- --------------------------- TIRAGE DU TAROT --------------------------- -->
        <section class="ContentBand Tarot Arrowed">
            <div class="PageWrapper ContentBand-Table">
                <div class="ContentBand-Column">
                    <article class="WidgetTarot">
                        <div class="WidgetTarot-ResultMsg">Votre tirage transmis à <?= $voyant;?></div>
                        <div class="WidgetTarot-Result">
                            <?php for($i=0;$i<5;$i++){ ?>
                            <div class="WidgetTarot-Card place" data-number="<?= $i ?>" style="background-image: url('<?= $cards_dir.$draw[$i];?>')"></div>
                            <?php } ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <?php } ?>

        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>

        <!-- #### CONVERSION #### -->
        <?php include('include/conversion/adwords.php');
              include('include/conversion/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />