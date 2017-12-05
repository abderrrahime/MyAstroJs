<?php
require_once(realpath('include/tools.php'));
include(realpath('rdv_web/planning.php'));

$questions = array(
    'Amour' => array(
        ['code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Vous en avez marre d’être seul(e)'],
        [
            'code' => 'question_2',
            'subject' => 'sentimental',
            'text' => 'Est-ce qu’il/elle m’aime ?',
            'conjoint' => true
        ],
        [
            'code' => 'question_24',
            'subject' => 'sentimental',
            'text' => 'Vous en aimez un(e) autre',
            'conjoint' => true
        ],
        ['code' => 'question_11', 'subject' => 'sentimental', 'text' => 'Il/Elle vous a quitté', 'conjoint' => true],
    ),
    'Argent' => array(
        ['code' => 'question_73', 'subject' => 'financier', 'text' => 'Vous attendez un investissement'],
    ),
    'Travail' => array(
        ['code' => 'question_4', 'subject' => 'professionnel', 'text' => 'Vous attendez un changement professionnel'],
        ['code' => 'question_3', 'subject' => 'professionnel', 'text' => 'Vous cherchez un emploi'],
    )
);
$gclid = isset($_GET['gclid']) ? $_GET['gclid'] : '';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Consultation en ligne : des médiums à votre écoute | MyAstro</title>
    <meta name="robots" content="noindex,nofollow"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/rdv_web.css"/>
    <link rel="stylesheet" href="./voyance-gratuite-6_files/bootstrap.min.css">
    <?php include('include/header_inc_landing.php'); ?>

    <!--------------------assets kgestion for displaying planning ----------------------------------------->


    <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_3.datepicker_5.css" type="text/css" rel="stylesheet"/>
    <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_bootstrap-datetimepicker.min_13.css" type="text/css"
          rel="stylesheet"/>
    <link href="<?= APIKGestion::BASE_URL ?>css/main_part_1_6.additionnals_1.css" type="text/css" rel="stylesheet"/>

    <!-----------------------end assets kgestion--------------------------------------------------------------------->

</head>
<body class="consultation-en-ligne">
<div class="main-header">
<div class="header ">


    <div  class="header-content" >
        <img src="images_landing/rdv/logo-r.png" alt=""/>
        <span class="header-txt">
                    Amour &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Travail
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Sentiments  </span>
        <span class="header-txt" style="margin-top: -20px;">
              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Famille &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Argent </span>
        <ul>
            <li class="icone-recommanded"><span>Site 100% recommandé </span>
                <p>
            <li class="icone-consultation"><span>Consultation en ligne</span></li>
        </ul>
    </div>
</div>
</div>
<div class="main">

    <div class="left-part">

        <div class="content">
            <h1>Très simple et rapide où que vous soyez !</h1>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <img src="images_landing/rdv/promo.png">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <ul class="icon-liste">
                    <li class="icone-cray">
                        <span>Je remplis le <br/>formulaire</span>
                    </li>
                    <li class="icone-hand">
                        <span>je choisis mon RDV</span>
                    </li>
                    <li class="icone-screen">
                        <span>Je reserve en ligne</span>
                    </li>
                    <li class="icone-payment">
                        <span> Le paiment est sécurisé</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <div class="right-part">


        <aside id="main_container" class="widget">
            <!-- progressbar -->
            <div class="time">
                <p class="title-filled"> Je choisie mon Rendez vous quand je veux</p>
            </div>

            <form class="ajax">

                <fieldset>
                    <h2 class="fs-title"> Informations Personnelles! </h2>
                    <input type="hidden" name="site" value="MyAstro"/>
                    <input type="hidden" name="source" value="consultation-en-ligne-1"/>
                    <input type="hidden" name="method" value="client_web"/>
                    <input type="hidden" name="support" value="rdv-web"/>
                    <input type="hidden" name="affiliation" value="Adwords"/>
                    <input type="hidden" name="dri" value="consultation_web"/>
                    <input type="hidden" name="redirect_method" value="reload_form"/>
                    <input type="hidden" name="gclid" value="<?= $gclid; ?>"/>
                    <input type="hidden" name="cguv" value="1"/>
                    <input type="hidden" name="pays" value="FR"/>


                    <div class="FormField radio">
                        <div class="FormField-TableInputContainer fixed-2-col gender">
                            <div class="FormField-TableInputContainer-Cell">
                                <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span>
                                    Femme</label>
                                <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input"/>
                            </div>
                            <div class="FormField-TableInputContainer-Cell">
                                <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span>
                                    Homme</label>
                                <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input"/>
                            </div>
                        </div>
                    </div>
                    <div class="FormField">
                        <div class="FormField-TableInputContainer-Cell">

                        <label for="name" class="FormField-Label">Prénom</label>
                        <input type="text" id="name" name="prenom" class="FormField-Input" required
                               placeholder="Prénom"/>
                    </div>
                        <div class="FormField-TableInputContainer-Cell">
                        <label class="FormField-Label">Date de naissance</label>
                        <div class="FormField-TableInputContainer">
                            <div class="FormField-TableInputContainer-Cell">
                                <select class="FormField-Input" name="jour">
                                    <option value="" selected disabled>Jour</option>
                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                        <option value="<?= $i ?>"> <?= sprintf('%02d', $i) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="FormField-TableInputContainer-Cell">
                                <select class="FormField-Input" name="mois">
                                    <option value="" selected disabled>Mois</option>
                                    <option value="01">Janv.</option>
                                    <option value="02">Fev.</option>
                                    <option value="03">Mars</option>
                                    <option value="04">Avr.</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Juin</option>
                                    <option value="07">Juil.</option>
                                    <option value="08">Aout</option>
                                    <option value="09">Sept.</option>
                                    <option value="10">Oct.</option>
                                    <option value="11">Nov.</option>
                                    <option value="12">Dec.</option>
                                </select>
                            </div>
                            <div class="FormField-TableInputContainer-Cell">
                                <select class="FormField-Input" name="annee">
                                    <option selected="selected" value="">Année</option>
                                    <?php for ($i = date('Y') - 18; $i >= 1900; $i--) { ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="FormField">
                        <div class="FormField-TableInputContainer-Cell">

                        <label for="email" class="FormField-Label">E-mail</label>
                        <input id="email" type="email" name="email" class="FormField-Input" required
                               placeholder="E-mail"/>
                    </div>
                        <div class="FormField-TableInputContainer-Cell">
                        <label for="tel" class="FormField-Label">Téléphone</label>
                        <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input"
                               required/>
                    </div>
                    </div>
                    <div class="FormField">
                        <label class="FormField-Label" for="theme_id">Votre question</label>
                        <input type="hidden" name="question_code" value=""/>
                        <select class="FormField-Input" name="question_code" id="theme_id">
                            <option value="" selected disabled>Thème de la question</option>
                            <?php foreach ($questions as $optgroup => $options) { ?>
                                <optgroup label="<?= $optgroup ?>">
                                    <?php foreach ($options as $question) { ?>
                                        <option value="<?= str_replace('"', "'",
                                            json_encode($question)) ?>" <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : '' ?>><?= $question['text'] ?></option>
                                    <?php } ?>
                                </optgroup>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="FormField sonprenom" style="display: none;">
                        <label class="FormField-Label" for="son_prenom">Son prénom</label>
                        <input type="text" id="son_prenom" name="conjoint" class="FormField-Input"/>
                    </div>

                    <button name="next" class="submit action-button" value="Next" type="submit">Suivant</button>
                    <button name="next" class="next action-button" value="Next" type="button" style="display: none">
                        Suivant
                    </button>
                </fieldset>
            </form>

            <form class="ajax">
                <fieldset style="display: none" class="planning">

                    <h2 class="fs-title">Horaires Consultation</h2>
                    <input type="hidden" name="method" value="consultation_web"/>
                    <input type="hidden" name="client_id" id="client_id" value="0"/>
                    <div id="planning_selection">
                        <?= $vue ?>
                    </div>

                    <input type="button" name="previous" class="previous action-button" value="Précédent"/>
                    <input type="button" name="next" class="nextSecond action-button" value="Suivant">
                </fieldset>
                <fieldset style="display: none">

                    <h2 class="fs-title">Coordonnées bancaires</h2>
                    <h3 class="fs-subtitle"></h3>
                    <label for="name" class="FormField-Label">Nom du propriétaire de la carte</label>
                    <div class="FormField-TableInputContainer">
                        <div class="FormField-TableInputContainer-Cell">
                            <input type="text" id="carte_prenom" name="carte_prenom" class="FormField-Input" required
                                   placeholder="Prenom"/>
                        </div>
                        <div class="FormField-TableInputContainer-Cell">
                            <input type="text" id="carte_nom" name="carte_nom" class="FormField-Input" required
                                   placeholder="Nom"/>
                        </div>
                    </div>
                    <div class="FormField">
                        <label for="name" class="FormField-Label">Numéro de la carte</label>
                        <input type="text" id="carte_num" name="carte_num" class="FormField-Input js-check-luhn"
                               required placeholder="Numéro de la carte"/>
                    </div>
                    <div class="FormField">
                        <label for="name" class="FormField-Label">Expiration</label>
                        <div class="FormField-TableInputContainer-Cell">
                            <select class="FormField-Input" name="expiration_mois">
                                <option value="" selected disabled>Mois</option>
                                <option value="01">Janv.</option>
                                <option value="02">Fev.</option>
                                <option value="03">Mars</option>
                                <option value="04">Avr.</option>
                                <option value="05">Mai</option>
                                <option value="06">Juin</option>
                                <option value="07">Juil.</option>
                                <option value="08">Aout</option>
                                <option value="09">Sept.</option>
                                <option value="10">Oct.</option>
                                <option value="11">Nov.</option>
                                <option value="12">Dec.</option>
                            </select>
                        </div>
                        <div class="FormField-TableInputContainer-Cell">
                            <select class="FormField-Input" name="expiration_annee">
                                <option value="" selected disabled>Année</option>
                                <?php for ($i = 2017; $i <= 2027; $i++) { ?>
                                    <option value="<?= $i ?>"> <?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="FormField">
                        <label for="name" class="FormField-Label">Cryptogramme de sécurité </label>
                        <input type="text" id="crypto" name="crypto" class="FormField-Input" required
                               placeholder="Cryptogramme de sécurité"/>
                    </div>
                    <input type="button" name="previous" class="previousSecond action-button" value="Précédent"/>
                    <input type="submit" name="submit" class="submit action-button" value="Valider"/>
                    <div class="secureImages">
                        <img src="../images/mastercard-visa.png" alt="Mastercard &amp; Visa">
                        <img src="../images/secure-verified.png" alt="Site vérifié">
                        <img src="../images/secure-100pc.png" alt="100% sécurisé">
                        <img src="../images/hipay-secure.png" alt="Hipay">
                    </div>
                </fieldset>
            </form>
        </div>


    </div>
    </aside>

</div>
</div>


</div>


<div class="avis " style="">

    <div class="splash-content">

        <div class="splash-msg">
            <div class="info-img" >
            <img src="images_landing/rdv/info.png"   alt=""/>
            </div>
            <span class="text-rot">
                    <span class="textItem">L’horaire c’est vous qui décidez !</span>
                    <span class="textItem">Nous sommes là pour vous guider, et vous soutenir !</span>
                    <span class="textItem">Des experts à votre écoute où que vous soyez</span>
                    <span class="textItem">En toute confiance et confidentialité</span>
                </span>
        </div>
    </div>
    <img src="images_landing/rdv/bulle-1.png"   alt=""/>
    <img src="images_landing/rdv/bulle-2.png"  alt=""/>
    <img src="images_landing/rdv/bulle-3.png" alt=""/>

    <div  class="avis" >
        <p class="title-filled"> Avis Clients </p>
       <table >
        <tr >
            <td > <img src="images_landing/rdv/Ellipse.png"   alt=""/>
                Marine F. Le 03/11/2017 à 23h56</td>
            <td bgcolor="white"><img src="images_landing/rdv/stars.png" ></td>
            <td bgcolor="white">Très pratique, un site rapide et de confiance,  Merci à Paule de m'avoir écouté je me sens bien mieux et j'ai beaucoup plus de confiance en moi maintenant je recommande à toutes les personnes qui .. </td>
        </tr>
        <tr>
            <td > <img src="images_landing/rdv/Ellipse.png"   alt=""/>
                Sandra L. Le 21/10/2017 à 19h32 </td>
            <td bgcolor="white"><img src="images_landing/rdv/stars.png" ></td>
            <td bgcolor="white" >J’étais un peu perdu et on m’a recommandé ce site, c’est rapide</td>
        </tr>
    </table>
    </div>

</div>


<!--
<div class="subfooter">
    <ul>
        <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
        <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
        <li class="third">Étude personnalisée <br/><strong>par mail sous 24h</strong></li>
        <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
        <div class="clear"></div>
    </ul>
    <div class="clear"></div>
</div>
-->
<div class="footer">
    <?php include('include/footer_copyright.php'); ?>
</div>

<!-- ### Ressources CSS à charger en dernier ### -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<!-- New Remarketing tags -->

<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1024378253;
    var google_conversion_label = "ipnICMWfg2EQjYu76AM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */


</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- #### SCRIPTS #### -->
<script src="js/jquery-1.11.js"></script>
<script src="js/formValidator.js"></script>
<!-- jQuery easing plugin -->
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/rdv_web.js"></script>

<!-- js scripts kgestion for displaying planning -->
<script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_8.moment_9.js"></script>
<script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-datepicker.min_12.js"></script>
<script type="text/javascript"
        src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-datepicker.translatefr_13.js"></script>

</body>
</html>


