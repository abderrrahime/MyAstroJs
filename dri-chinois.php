<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Nouvel An Chinois, faites vous rappeler</title>
        
        <meta charset="UTF-8" />
	<meta name="robots" content="noindex,nofollow" />
	<meta name="viewport" content="width=device-width" />
    
	<link rel="stylesheet" href="/css/bootstrap3.min.css">
	<link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />
        <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="sstyle_landing.css" />
	<link rel="stylesheet" href="css/dri.css">

        <script src="js/jquery-1.11.js"></script>
        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script><!-- +++ -->
	<?php include('include/header_inc_landing.php'); ?>
	<script src="js/myscript.js"></script>
    </head>
    <body class="voyance-telephone-1 dri-3 dri-chinois">
    <?php
        include('include/tracking-mailing.php'); 
    ?>
	<div class="top-nav">
            <div class="nav-content"><div class="links">
                <a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | 
                <a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | 
                <a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
            </div></div>
	</div>
	<div class="main">
            <div class="right-part right-part-merci">
		<div class="container-fluid text-center top-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="img-responsive" src="images_landing/logo-myastro-blanc.png" alt="MyAstro" />
                        </div>
                    </div>
                </div>
                <div class="container-fluid header-container">
                    <div class="row">
                        <p>
                            <span class="header-title">Nouvel An Chinois</span><br/>
                            <span class="header-txt-4">
                                <img class="img-responsive" src="images_landing/accroche-chinois.png" alt="Faites-vous rappeler" />
                            </span>
                            <span class="header-txt-1">1€ LES 10 PREMIÈRES MINUTES</span>
                        </p>
                    </div>
                </div>
                <div class="container-fluid content-container">
                    <div class="row">
                        <aside class="widget" id="form-merci-voyance">
                            <div class="comment-ca-marche col-lg-6 hidden-xs hidden-sm">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>si vous souhaitez consulter un voyant immédiatement par téléphone, faites vous rappeler immédiatement en remplissant votre nom et numéro de téléphone</p>
                                    </div>
                                    <div class="col-lg-12">
					<h2 class="merci-voyance-h2">Comment ça marche ?</h2>
                                        <div class="faq">
                                            <div class="cols-3 first">
                                                Je remplis mon prénom et<br/> 
                                                mon numéro de téléphone
                                            </div>
                                            <div class="cols-3 last">
                                                Je suis rappelé(e) <br/>immédiatement
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="" class="widget-content col-xs-12 col-sm-12 col-lg-6">
                                <img class="img-promo" src="images_landing/promo-chinois.png" alt="1€ les 10premières minutes" />
                                <div class="visible-part form-part form-part-one">
                                <?php
                                $support_obj = "SINGE16";
                                $campagne    = "SINGE16";
                                include("include/send-mailing.php");
                                if(!isset($_POST['demande_rappel']) && !isset($_SESSION['demanderappel'])){
                                ?>
                                <form id=""  action="" method="post">
                                    <input type="hidden" name="source" value="<?php echo $source; ?>" />
                                    <input type="hidden" name="gclid" value="<?php echo $gclid; ?>" />
                                    <input type="text" name="antisp" value="" style="display:none" />
                                    <div class="form-w-one li-form">
                                        <input type="text" id="name" name="prenom" placeholder="Mon prénom" value="<?php echo $prenom; ?>" required />
                                    </div>
                                    <div class="form-w-one li-form">
                                        <input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" value="<?php echo $tel; ?>" required />
                                    </div>
                                    <div class="form-w-one li-form selectpays">
                                        <label>Votre pays </label>
                                        <select class="cnt-right" name="pays" id="pays" required="">
                                            <option value="Belgique +32">Belgique</option>
                                            <option value="Canada +1">Canada</option>
                                            <option value="Luxembourg +352">Luxembourg</option>
                                            <option value="Suisse +41">Suisse</option>
                                            <option value="France Métropolitaine +33" selected>France Métropolitaine</option>
                                            <optgroup label="DOM-TOM">
                                                <option value="Martinique +596">Martinique</option>
                                                <option value="Guadeloupe +590">Guadeloupe</option>
                                                <option value="Guyane +594">Guyane</option>
                                                <option value="La Réunion +262">La Réunion</option>
                                                <option value="Mayotte +262">Mayotte</option>
                                                <option value="St Pierre et Miquelon +508">St Pierre et Miquelon</option>
                                                <option value="St Barthélémy +590">St Barthélémy</option>
                                                <option value="St Martin +590">St Martin</option>
                                                <option value="Wallis et Futunua +681">Wallis et Futunua</option>
                                                <option value="Polynésie Française +689">Polynésie Française</option>
                                                <option value="Nouvelle Calédonie +687">Nouvelle Calédonie</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="hidden" name="demande_rappel" value="rappel" />
                                        <input class="" type="submit" name="valider" value="" onclick="" />
                                    </div>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="row row-voyant">
                    <div class="voyant-membre voyant-merci-voyance">
                        <div class="cols4 mg-right">
                            <img src="images_landing/voyants/marc.png" alt="" width="178" height="128" />M<span>arc</span><br/>
                        </div>
                        <div class="cols4 mg-right">
                            <img src="images_landing/voyants/aline.png" alt="" width="178" height="128" />A<span>line</span><br/>
                        </div>
                        <div class="cols4 mg-right">
                            <img src="images_landing/voyants/francis.png" alt="" width="178" height="128" />F<span>rancis</span><br/>
                        </div>
                        <div class="cols4">
                            <img src="images_landing/voyants/benedicte.png" alt="" width="178" height="128" />B<span>énédicte</span><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="subfooter">
        <ul>
            <li class="first"><strong>Voyants sérieux reconnus<br/> pour leur savoir faire</strong></li>
            <li class="second"><strong>Consultations 100% <br/>discrètes & anonymes</strong></li>
            <li class="third"><strong>1&euro; les 10 premières<br/>minutes</strong></li>
            <li class="third fourth"><strong>My Astro leader <br/>depuis 2007</strong></li>
            <li class="fifth"><strong>Paiement <br/>sécurisé</strong></li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="footer">
        <?php include('include/footer_copyright.php'); ?>
    </div>

    <script src="js/required.js"></script>
    
    <?php include("include/dri-mailing-tags.php");?>
    
</body>
</html>