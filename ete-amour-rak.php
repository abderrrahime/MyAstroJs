<?php
/**
 * ete-amour-rak == BASE EXTERNE
 * -----------------------------
 * Created on : 20 juin 2017 By Laurène Dourdin <2aurene@gmail.com>
 */

$url = 'ete-amour-rak';
$source = 'base_externe';
$method = 'general-suscribe';
$support = 'voyance';
$site = 'myastro.fr';
$dri = 'ete-amour-tel';

$questions = array(
    'celibataire' => [ 'code'=>'ete16_question_2', 'subject'=>'sentimental', 'text'=>'Vos amours pour l’été : je suis célibataire' ],
    'encouple' => [ 'code'=>'ete16_question_24', 'subject'=>'sentimental', 'text'=>'Vos amours pour l’été : je suis en couple', 'conjoint' => true ],
);

$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Vos amours pour l’été | MyAstro</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="/images_landing/ete-amour/favicon.png" />

        <meta property="og:title" content="Que réserve cet été à vos amours ? Lancez le quiz pour le découvrir !" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= PROTOCOL.'://'.ROOT_URL.'/'.$url;?>" />
        <meta property="og:image" content="<?= PROTOCOL.'://'.ROOT_URL;?>/images_landing/ete-amour/fb-ete.jpg" />
        <meta property="og:description" content="En couple ou célibataire, l’été est la saison de l’amour. Qu’en sera-t-il pour vous ?" />
        <meta property="og:locale" content="fr_FR" />

        <link rel="stylesheet" type="text/css" href="css/ete-16.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper headerContainer">
                <span class="SiteLogo"></span>
                <h1 class="DescText-Title">
                    <span class="titre1">Vos amours</span><br/><span class="titre2">pour l’été</span>
                </h1>
                <?php include('include/bloc-socials.php');?>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <article class="FormContainer">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <div class="FormContainer-Fields">
                        <p class="alert alert-danger" style="display: none"></p>
                        <form id="form-container" class="ajax">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="<?= $url;?>" />
                            <input type="hidden" name="method" value="<?= $method;?>" />
                            <input type="hidden" name="site" value="<?= $site;?>" />
                            <input type="hidden" name="affiliation" value="<?= $source;?>" />
                            <input type="hidden" name="dri" value="<?= $dri;?>" />
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="cguv" value="1" />
                            <input type="hidden" name="partenaires" value="1" />
                            <!-- ############################################### -->
                            <ul id="monSlider" class="bxslider">
                                <li class="FormField txtcenter da-slide">
                                    <div class="wrapper-input intro">
                                        <p class="label">Soleil radieux ou mer agitée, <br class="tiny-hidden small-hidden"/>plongez dans cet été de toutes les surprises</p>
                                        <span class="clearfix"></span>
                                        <a id="slider-start" class="btn mtl">Lancer le quizz</a>
                                        <div id="illustr-bouee" class="illustr"></div>
                                    </div>
                                </li>
                                <!-- PRENOM -->
                                <li class="FormField da-slide" style="padding-top: 3rem;">
                                    <div class="wrapper-input">
                                        <label for="name" class="FormField-Label hidden">Prénom</label>
                                        <input type="text" id="name" name="prenom" class="FormField-Input" placeholder="Prénom" required />
                                    </div>
                                    <div id="illustr-hipo" class="illustr"></div>
                                </li>
                                <!-- GENRE -->
                                <li class="FormField radio da-slide">
                                    <div class="wrapper-input">
                                        <div class="wrapper-input-child">
                                            <p class="label pbl">Vous êtes…</p>
                                            <div class="FormField-TableInputContainer ">
                                                <div class="FormField-TableInputContainer-Cell genre">
                                                    <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" required/>
                                                    <label for="sexe-f" class="FormField-Label ">une femme</label>
                                                </div>
                                                <div class="FormField-TableInputContainer-Cell genre">
                                                    <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                                                    <label for="sexe-h" class="FormField-Label">un homme</label>
                                                </div>
                                            </div><!-- fin de .FormField-TableInputContainer -->
                                            <div id="illustr-fish" class="illustr"></div>
                                        </div><!-- fin de .wrapper-input-child -->
                                    </div><!-- fin de .wrapper-input -->
                                </li>
                                <!-- BIRTHDAY -->
                                <li class="FormField da-slide">
                                    <div class="wrapper-input birthday">
                                        <div class="wrapper-input-child">
                                            <label class="FormField-Label label">Votre date de naissance</label>
                                            <div class="FormField-TableInputContainer">
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <select  class="FormField-Input" name="jour" required>
                                                        <option selected="selected" value="">Jour</option>
                                                        <?php for($i=1;$i<=31;$i++){ ?>
                                                        <option value="<?= $i;?>"><?= sprintf('%02d', $i);?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <select class="FormField-Input" name="mois" required>
                                                        <option value="" selected="selected">Mois</option>
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
                                                    <select class="FormField-Input" name="annee" required>
                                                        <option selected="selected" value="">Année</option>
                                                        <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                                        <option value="<?= $i;?>"><?= $i;?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div><!-- fin de FormField-TableInputContainer -->
                                            <div id="illustr-lunettes" class="illustr"></div>
                                        </div><!-- fin de .wrapper-input-child -->
                                    </div><!-- fin de .wrapper-input -->
                                </li>
                                <!-- EMAIL -->
                                <li class="FormField da-slide" style="padding-top: 3rem;">
                                    <div class="wrapper-input">
                                        <label for="email" class="FormField-Label hidden">E-mail</label>
                                        <input id="email" type="email" name="email" class="FormField-Input" placeholder="email" required/> 
                                        <div id="illustr-shell" class="illustr"></div>
                                    </div>    
                                </li>
                                <!-- SITUATION -->
                                <li class="FormField da-slide">
                                    <div class="wrapper-input">
                                        <div class="wrapper-input-child relationship-status">
                                            <label class="FormField-Label label">Votre situation</label>
                                            <div class="FormField-TableInputContainer">
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <div>
                                                        <input type="radio" name="question_code" id="sit-celib" value="<?= str_replace('"', "'", json_encode($questions['celibataire']));?>" class="FormField-Input theme_id" />
                                                        <label for="sit-celib" class="FormField-Label"></label>
                                                        <p class="label">Célibataire</p>
                                                    </div>
                                                    <span>&nbsp;</span>
                                                </div>
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <div>
                                                        <input type="radio" name="question_code" id="sit-couple" value="<?= str_replace('"', "'", json_encode($questions['encouple']));?>" class="FormField-Input theme_id" required data-need-spouse="1" />
                                                        <label for="sit-couple" class="FormField-Label"></label>
                                                        <p class="label">En couple</p>
                                                    </div>
                                                    <span class="txtcenter" class="sonprenom">
                                                        <input type="text" placeholder="Son prénom" id="son_prenom" class="FormField-Input" name="conjoint">
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="illustr-cocktail" class="illustr"></div>
                                        </div> <!-- fin de .wrapper-input-child -->    
                                    </div><!-- fin de .wrapper-input -->  
                                </li>
                                <!-- OU PARTEZ VOUS -->
                                <li class="FormField da-slide">
                                    <div class="wrapper-input destination">
                                        <p for="destination" class="FormField-Label label">Où partez-vous cet été ?</p>
                                        <ul class="list-radio radio-custom">
                                            <li class="grid-2">
                                                <p class="label">À la mer</p>
                                                <div>
                                                    <input type="radio" id="dest-1" name="destination" value="mer" required />
                                                    <label for="dest-1" id="img-radio-1"></label>
                                                </div>
                                            </li>
                                            <li class="grid-2">    
                                                <p class="label">À la montagne</p>
                                                <div>
                                                    <input type="radio" id="dest-2" name="destination" value="montagne" />
                                                    <label for="dest-2"  id="img-radio-2"></label>
                                                </div>
                                            </li>
                                            <li class="grid-2">
                                                <p class="label">À la campagne</p>
                                                <div>
                                                    <input type="radio" id="dest-3" name="destination"  value="campagne" />
                                                    <label for="dest-3" id="img-radio-3"></label>
                                                </div>
                                            </li>
                                            <li class="grid-2">
                                                <p class="label">Je reste chez moi</p>
                                                <div>
                                                    <input type="radio" id="dest-4" name="destination"  value="maison" />
                                                    <label for="dest-4" id="img-radio-4"></label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div id="illustr-parasol" class="illustr"></div>
                                        <button class="FormContainer-Submit hidden" type="submit" name="valider">Envoyer</button>
                                    </div>
                                </li>
                                <!-- MOIS -->
                                <li class="FormField da-slide">
                                    <div class="wrapper-input">
                                        <div class="wrapper-input-child">
                                            <label class="FormField-Label label txtcenter">Quel mois prenez-vous vos vacances :</label>
                                            <div class="FormField-TableInputContainer mois">
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <input type="radio" name="dep-mois" id="dep-mois-juill" value="Juillet" class="FormField-Input" />
                                                    <label for="dep-mois-juill" class="FormField-Label">Juilletiste</label>
                                                </div>
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <div class="vertical-align"><span class="label">ou</span></div>
                                                </div>
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <input type="radio" name="dep-mois" id="dep-mois-aout" value="Aout" class="FormField-Input" required />
                                                    <label for="dep-mois-aout" class="FormField-Label">Aoûtien</label>
                                                </div>
                                            </div><!-- fin de .mois-->
                                            <div id="illustr-chaise" class="illustr"></div>
                                        </div>    
                                    </div><!-- fin de .wrapper-input -->  
                                </li>
                            </ul>
                        </form>
                    </div>
                </article>
            </div><!-- fin de .PageWrapper-->
        </section>
        
        <div class="outside txtcenter">
            <span id="slider-prev"></span>
            <span id="slider-next"></span>
        </div> 
        
        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>

        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/ete-16.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Pacifico|Lobster|Lato" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" />