<?php
$url = $pageName= 'tarot-tchat-a';
$method = 'general-suscribe';
$support = 'tarot';
$site = 'myastro.fr';
$source = 'adwords';
$dri = 'tarot-tchat-dri';
$assets = 'images_landing/tarot-tchat';
$gclid = isset($_GET['gclid']) ? $_GET['gclid'] : '';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Tarot Tchat</title>
    <link rel="icon" type="image/png" href="<?= $assets;?>/favicon.png" />
    <link rel="stylesheet" href="css/tarot-tchat.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
    <![endif]-->
</head>

<body class="main">
    <div class="overlay" id="form-overlay"></div>
    <header class="SiteHeader">
        <div class="PageWrapper">
            <div class="SiteLogo"></div>
        </div>
    </header>
    <div class="title">
        <h1>Les cartes ont le pouvoir de vous révéler votre avenir ...</h1>
    </div>
    <main class="ContentBand">
        <div class="PageWrapper">
            <section class="section post-test">
                <p>Il existe un proverbe qui dit que les cartes du tarot sont bavardes et ont toujours quelque chose à dire. Qu’ont-elles à vous révéler ? Amour, travail, argent, votre destinée se trouve au cœur des arcanes du tarot. Et si nos cartomanciens les faisaient parler pour vous…
                    <br/>Avec le Tchat plus besoin d’attendre, nos experts vous divulguent tous les secrets des cartes en un clin d’œil.</p>
                <div class="WidgetTarot hidden-sm">
                    <section class="ContentBand Tarot" id="scn-tarot-draw">
                        <div class="ContentBand-Table">
                            <div id="cards-container" class="ContentBand-Column">
                                <div class="WidgetTarot-Draw">
                                    <?php for($i=1;$i<=20;$i++){ ?>
                                        <div class="WidgetTarot-Card notFlipped" data-card="<?= $i ?>">
                                            <div class="WidgetTarot-Card-Face front "></div>
                                            <div class="WidgetTarot-Card-Face back"></div>
                                        </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="ContentBand Tarot-Result" id="scn-tarot-result">
                        <div class="ContentBand-Table">
                            <div id="cards-result" class="ContentBand-Column">
                                <div class="WidgetTarot-Result">
                                    <div class="WidgetTarot-Result hidden-sm">
                                        <?php for($i=1;$i<=5;$i++){ ?>
                                            <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <article class="session-result hidden"></article>
                </div>
                <div class="form">
                    <div class="helper"></div>
                    <input type="text" name="js-name" class="FormField-Input" placeholder="Votre prénom" required />
                    <button class="btn start">Tirez les cartes</button>
                </div>
            </section>
            <section class="section content hidden">
                <h2 class="question">Sélectionnez 5 cartes</h2>
                <div class="draw"> </div>
                <section class="miniform hidden">
                    <h2 class="miniform-text">Nous allons vous envoyer la suite de cette<br> interprétation dés demain par email:</h2>
                    <article class="FormContainer">
                        <form id="form-container" class="ajax">
                            <div class="FormContainer-Fields Fields-Table">
                                <p class="alert alert-danger" style="display: none"></p>
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="<?= $pageName;?>" />
                                <input type="hidden" name="method" value="<?= $method;?>" />
                                <input type="hidden" name="support" value="<?= $support;?>" />
                                <input type="hidden" name="site" value="<?= $site;?>" />
                                <input type="hidden" name="affiliation" value="<?= $source;?>" />
                                <input type="hidden" name="dri" value="<?= $dri;?>" />
                                <!-- ########## autres champs pré-remplis ########## -->
                                <input type="hidden" name="convertir" value="1" />
                                <input type="hidden" name="tel_needed" value="0" />
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <input type="hidden" name="gclid" value="<?= $gclid;?>" />
                                <input type="hidden" name="prenom" id="js-name" />
                                <input type="hidden" name="question_code"  value="tarot-par-tchat" />
                                <input type="hidden" name="optional_birthdate" value="1" />
                                <!-- ############################################### -->
                                <div class="Fields-Table-Row">
                                    <label for="email" class="FormField-Label hidden">Votre email</label>
                                    <div class="FormField">
                                        <input id="email" type="email" name="email" class="FormField-Input" placeholder="Votre Email" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <label for="pays" class="FormField-Label">Votre pays </label>
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
                                <div class="Fields-Table-Row">
                                    <label for="tel" class="FormField-Label hidden">Votre numéro de téléphone</label>
                                    <div class="FormField">
                                        <input id="tel" type="tel" name="tel" class="FormField-Input" placeholder="Votre Téléphone" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row"> <span class="FormField-Info">Un SMS vous sera envoyé lorsque lʼinterprétation sera prête</span> </div>
                                <div class="Fields-Table-Row">
                                    <label class="FormField-Label">Votre date de naissance</label>
                                    <div class="FormField">
                                        <div class="FormField-TableInputContainer">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <select class="FormField-Input" name="jour" required>
                                                    <option value="" selected disabled>Jour</option>
                                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                        <option value="<?= $i ?>">
                                                            <?= sprintf('%02d', $i);?>
                                                        </option>
                                                        <?php } ?>
                                                </select>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <select class="FormField-Input" name="mois" required>
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
                                                <select class="FormField-Input" name="annee" required>
                                                    <option value="" selected disabled>Année</option>
                                                    <?php for ($i = date('Y') - 18; $i >= 1900; $i--) { ?>
                                                        <option value="<?= $i;?>">
                                                            <?= $i;?>
                                                        </option>
                                                        <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="FormContainer-Submit" type="submit" name="valider">Envoyer</button>
                        </form>
                    </article>
                </section>
            </section>
        </div>
    </main>
    <footer>
        <p class="SiteCopyright">
            <?php include('include/footer_copyright.php');?>
        </p>
    </footer>
    <!-- #### SCRIPTS #### -->
    <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
    <script type="text/javascript" src="js/tarot-tchat.js"></script>
    <script src="js/tarot-draw.js"></script>
    <script src="js/tarot-direct-wizard.js"></script>
    <script src="js/formValidator.js"></script>
    <!-- #### REMARKETINGS #### -->
    <?php include('include/remarketing/adwords.php');
          include('include/remarketing/analytics.php');
          include('include/remarketing/facebook.php');?>
</body>

</html>
