<?php
/* 
    -------------------------------------------------
    --   DRI POST-MAIL = automne-16 = AFFIL BASE   --
    -------------------------------------------------

    Created on : 21 septembre 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
include('include/process-dri.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>C’est l’automne | Myastro</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/automne-16.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="DRI">
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"></span>
                <span class="PageLogo"></span>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column Column-Tarot">
                    <div class="DescText">
                        <p class="DescText-Title-Legend">
                            ALINE,<br />
                            Tarologue confirmée<br />
                            répondra à toutes vos questions
                        </p>
                        <div class="DescText-Content">
                            <p>Tirer la carte de la Roue de la Fortune n’a rien d’un hasard et sa présence dans votre tirage ne doit pas être prise à la légère. D’autant plus que l’automne est une période propice au changement et à la réflexion. De grandes choses pourraient évoluer et votre vie pourrait bientôt ne plus être la même…</p>
                        </div>
                    </div>
                    <div class="How">
                        <h2 class="How-Header">Comment ça marche ?</h2>
                        <ul class="How-Wizard">
                            <li class="How-WizardItem">
                                <span class="How-WizardItem-Img form"></span>
                                <span class="How-WizardItem-Txt">Je remplis le <br/>formulaire</span>
                            </li>
                            <li class="How-WizardItem">
                                <span class="How-WizardItem-Img phone"></span>
                                <span class="How-WizardItem-Txt">Je suis rappelé(e) <br/>immédiatement</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ContentBand-Column Column-Form">
                    <article class="FormContainer">
                        <div class="DRI-Intro">
                            <h1 class="DRI-Intro-Title">Faites-vous rappeler immédiatement</h1>
                            <h2 class="DRI-Intro-Text">Nos voyants répondent à vos questions</h2>
                        </div>
                        <h1 class="DRI-Slogan">Vos 10 premières minutes gratuites !</h1>
                        <div class="DRI-Form FormContainer-Fields">
                            <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                                <p class="DRI-Sent">
                                    Merci, votre demande a bien été prise en compte.<br/>
                                    <strong>Un voyant vous recontactera dans quelques instants.</strong>
                                </p>
                            <?php } else { ?>
                            <form method="post">
                                <div class="FormField">
                                    <input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="FormField-Input" value="<?= $prenom ?>" required />
                                </div>
                                <div class="FormField">
                                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>"required />
                                </div>
                                <div class="FormField">
                                    <select name="pays" id="pays" class="FormField-Input" required>
                                        <option value="" selected>Votre Pays</option>
                                        <option value="BE">Belgique</option>
                                        <option value="CA">Canada</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="CH">Suisse</option>
                                        <option value="FR" selected>France Métropolitaine</option>
                                        <optgroup label="DOM-TOM">
                                            <option value="MQ">Martinique</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GF">Guyane</option>
                                            <option value="RE">La Réunion</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="PM">St Pierre et Miquelon</option>
                                            <option value="BL">St Barthélémy</option>
                                            <option value="SM">St Martin</option>
                                            <option value="WF">Wallis et Futunua</option>
                                            <option value="PF">Polynésie Française</option>
                                            <option value="NC">Nouvelle Calédonie</option>
                                        </optgroup>
                                        <option value="ZZ">Autre</option>
                                    </select>
                                </div>
                                <!-- SUBMIT -->
                                <input type="text" name="antisp" value="" style="display: none" />
                                <button class="FormContainer-Submit" type="submit" name="demande_rappel" >Rappel Gratuit</button>
                            </form>
                            <?php } ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        
        <?php include('include/footer_reassurance.php');?>
        
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700|Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />