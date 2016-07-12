<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope du jour Gémeaux: comment appréhender votre journée? - Myastro</title>
	<meta name="description" content="Signe Gémeaux :Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
 
<?php include('include/header_inc.php'); ?>
<link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 
    <style>
    .widget .form-part{
        background-color:#eb2692;
    }
    .widget #form-w .btn_button{
        background-color: #1871b9;
    }
    </style>

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        
										
										
										<li>
										
                                           <h4 class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-du-jour">Horoscope du jour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du jour Gémeaux</li></h4>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Horoscope du jour Gémeaux</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <h5 itemprop="headline">Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée.</h5>
                                </div>

                            </div>
                             
<br>
                            </header>

                            <span class="clearfix"></span>

                          <!--  ************************ ici ****************************  -->
 <?php
 echo 
 '<script type="text/javascript"> var _videodesk= _videodesk || {}; _videodesk[\'firstname\'] = \'\' ; _videodesk[\'lastname\'] = \'\' ; _videodesk[\'company\'] = \'\' ; _videodesk[\'email\'] = \'\' ; _videodesk[\'phone\'] = \'\' ; _videodesk[\'customer_lang\'] = \'\' ; _videodesk[\'customer_id\'] = \'\' ; _videodesk[\'customer_url\'] = \'\' ; _videodesk[\'cart_id\'] = \'\' ; _videodesk[\'cart_url\'] = \'\' ; _videodesk[\'uid\'] = \'1f26f319feb40da4ee2861bc06672754\' ; _videodesk[\'lang\'] = \'fr\' ; (function() { var videodesk = document.createElement(\'script\'); videodesk.type = \'text/javascript\'; videodesk.async = true; videodesk.src = (\'https:\' == document.location.protocol ? \'https://\' : \'http://\') + \'module-videodesk.com/js/videodesk.js\'; var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(videodesk, s); })(); </script>';
 ?>
 
 <div class="row-fluid">
          	<!-- Right sidebar -->
							<?php include('include/bloc-droit-secondaire-2.php'); ?>	
							
            <!-- main content -->
            <div class="span6 main-content">

               

                <aside class="widget w-pictures">
                    <div class="widget-title">
                        <h4>VOTRE HOROSCOPE DU JOUR GRATUIT: Gémeaux</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/gemeaux.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_gemeaux.xml');

 
  foreach ($xml1['desc'] as $s_cle=>$s_value)
  {
  //echo $s_cle;
    if ($s_cle==='amour')
	{
			$amour=$s_value;
  	}
	elseif ($s_cle==='argent')
	{
			$argent=$s_value;
	}
	elseif ($s_cle==='santé')
	{
			$sante=$s_value;
	}
	elseif ($s_cle==='travail')
	{
			$travail=$s_value;
	}
	elseif ($s_cle==='famille')
	{
			$famille=$s_value;
	}
	elseif ($s_cle==='vie_sociale')
	{
			$vie_sociale=$s_value;
	}
	elseif ($s_cle==='citation_du_jour')
	{
			$citation_du_jour=$s_value;
	}
	elseif ($s_cle==='nombre_de_chance')
	{
			$nombre_de_chance=$s_value;
	}
		elseif ($s_cle==='clin_d\'oeil')
	{
			$clin_d_oeil=$s_value;
			$clin_d_oeil=preg_replace('@<center[^>]*?>.*?</center>@si', '', $clin_d_oeil);
	}
		
	
  }

  ?>	

                    <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#collapse1">AMOUR

                                                        <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $amour;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse2">TRAVAIL

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $travail;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse3">SANTÉ
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $sante;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

												<div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse4">ARGENT
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $argent;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>
												
												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse5">FAMILLE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $famille;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse6">VIE SOCIALE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse6" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $vie_sociale;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse7">CITATION DU JOUR

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $citation_du_jour;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse8">NOMBRE DE CHANCE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse8" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $nombre_de_chance;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse9">CLIN D'OEIL

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse9" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $clin_d_oeil;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												 



                                            </div>

                                        </div>
										
										<div class="row-fluid social-share-footer">
                                

                                <div class="share-icons">
                                   <div style="text-align:center;top:-3px;margin-left:20%;">
<?php
$url = '';

if (isset($_SERVER['HTTPS']) && filter_var($_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN))
    $url .= 'https';
else
    $url .= 'http';

$url .= '://';

if (isset($_SERVER['HTTP_HOST']))
    $url .= $_SERVER['HTTP_HOST'];
elseif (isset($_SERVER['SERVER_NAME']))
    $url .= $_SERVER['SERVER_NAME'];
else
    trigger_error ('Could not get URL from $_SERVER vars');


if ($_SERVER['SERVER_PORT'] != '80')
  $url .= ':'.$_SERVER["SERVER_PORT"];

if (isset($_SERVER['REQUEST_URI']))
    $url .= $_SERVER['REQUEST_URI'];
elseif (isset($_SERVER['PHP_SELF']))
    $url .= $_SERVER['PHP_SELF'];
elseif (isset($_SERVER['REDIRECT_URL']))
    $url .= $_SERVER['REDIRECT_URL'];
else
    trigger_error ('Could not get URL from $_SERVER vars');?>								   
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=gemeaux&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
	<a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr">Tweeter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<!-- Placez cette balise où vous souhaitez faire apparaître le gadget Bouton +1. -->
<div class="g-plusone"></div>

<!-- Placez cette ballise après la dernière balise Bouton +1. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
	</div> 
                                </div>

                            </div>
                     
<div><br><?php
	
			echo utf8_encode($asia_bottom);
	
	?></div>

					 
					</div>
                </aside>

               

                <!-- Horizontal Categories -->
                <section class="cat-widget h-cat-1">
                    <div class="cat-widget-title">
                        <h3><?= str_replace('-', ' ', $path);?></h3>
                    </div>

                    <div class="cat-widget-content">
                        

                        <div class="row-fluid cat-horiz">
                            <div class="cat-horiz-divider"></div>

                            <div class="related-posts clearfix">
                                <div class="row-fluid modern-items-list">
                                    <div id="h_cat_slider1" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <ul class="items left clearfix">
                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-femmes.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">La compatibilité amoureuse avec votre partenaire</h5>

<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Le Gémeaux s’attache très facilement et parfois à des personnes avec lesquelles aucune relation solide et durable n’est envisageable… Vos signes astrologiques sont-ils vraiment compatibles? La réponse avec la compatibilité amoureuse MyAstro.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-hommes.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Compatibilité amoureuse pour les hommes</h5>

<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Certes, l’homme Gémeaux est compliqué en amour, mais aujourd’hui vous pouvez vous assurer de votre compatibilité avec votre bien-aimée sur MyAstro : êtes-vous vraiment faits l’un pour l’autre sur le long terme? Les astres vous le diront immédiatement ! </h6>
                                                                        
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-hommes" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/votre-personnalite-astrologique.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Découvrez votre astrologie personnalité</h5>

<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Comme le montre l’astrologie personnalité MyAstro, la nature du Gémeaux est grandement influencée par son signe du zodiaque : vous saurez tout sur vos atouts, votre caractère, vos aspirations, faites confiance aux astres pour vous connaître ! </h6>
                                                                        
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/votre-personnalite-astrologique" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/portrait-astrologique-feminin.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Votre profil astrologique féminin</h5>

 <br>
<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Vous n’arrivez parfois pas à comprendre vos réactions, votre comportement, vos craintes qui vous empêchent d’avancer dans la vie? Avec le portrait astrologique Gémeaux féminin MyAstro , vous aurez toutes les explications à votre nature complexe.</h6>                                                                       
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/portrait-astrologique-feminin" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>
<li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/tarot-quotidien.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">TAROT QUOTIDIEN</h5>
<br>
<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Les cartes du Tarot quotidien MyAstro ont le pouvoir de prédire les événements qui vont rythmer votre journée en bien ou en mal : une grande nouvelle, une décision, une trahison, un accident… Le moyen idéal pour appréhender chaque jour paisiblement ! 

</h6>
                                                                        
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/tarot-quotidien" class="more" ></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/tarot-hebdomadaire.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">TAROT HEBDOMADAIRE</h5>
<br>
<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Connaître son futur proche est le rêve absolu du Gémeau, c’est possible avec le Tarot hebdomadaire MyAstro, un jeu de cartes issus des arts divinatoires fiables et précis qui  vous accompagnera chaque semaine vers les bons choix. </h6>
                                                                        
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/tarot-hebdomadaire" class="more" ></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>
<li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/tarot-mensuel.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">TAROT MENSUEL</h5>
<br>
<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Les combinaisons des cartes tirées par une personne Gémeaux ont des significations spécifiques que vous devez connaître, tirez les cartes du Tarot mensuel MyAstro et découvrez les interprétations de votre tirage, vous commencerez le mois </h6>
                                                                        
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/tarot-mensuel" class="more" ></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/tarot-couple.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">TAROT COUPLE</h5>
<br>
<h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Les arts divinatoires font leurs preuves en amour depuis des siècles, la tarologie est surtout consultée pour des problèmes sentimentaux d’où est né le tarot du couple. En couple, tirez les cartes du Tarot du couple MyAstro, la vérité sur votre relation s’y trouve.</h6>
                                                                        
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour" class="more" ></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

													 
													  </ul>
                                            </li>

                                            </ul>
                                    </div>

								
								</div>
                            </div>

                        </div>
                </section>

               
                


               
            </div>


			
            
							<!-- Left sidebar -->
							<?php 
                            $tracking = 'gemeaux';
                            include('include/bloc-gauche-secondaire-2.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_jour.php'); ?>
<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>
   

