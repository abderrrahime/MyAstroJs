
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Compatibilité amoureuse féminine Gémeaux: êtes vous faits l'un pour l'autre?</title>
	<meta name="description" content="Signe Gémeaux :Myastro vous permet de savoir si cette personne que vous affectionnez tant est faite pour vous. Les astres vous le diront et vous pourrez ensuite prendre votre décision." />
    
	<?php include('include/header_inc.php'); ?>

    

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        										
										<li><h4 class="h4"> <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/astrologie-gratuite" >Astrologie gratuite</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-feminine" >Compatibilité amoureuse féminine</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Compatibilité amoureuse féminine Gémeaux</li></h4>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Compatibilité amoureuse féminine Gémeaux</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Gémeaux :Myastro vous permet de savoir si cette personne que vous affectionnez tant est faite pour vous. Les astres vous le diront et vous pourrez ensuite prendre votre décision.</p>
                                </div>

                            </div>
                             
<br>
                            </header>

                            <span class="clearfix"></span>

                          <!--  ************************ ici ****************************  -->
 <div class="row-fluid">
           	<!-- Right sidebar -->
							<?php include('include/bloc-droit-secondaire.php'); ?>

            <!-- main content -->
            <div class="span6 main-content">

               

                <aside class="widget w-pictures">
                    <div class="widget-title">
                        <h4>Votre Compatibilité amoureuse féminine gratuite: Gémeaux</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/gemeaux.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

  $xml1 = read_astrologie('gemeaux', 'f' ,1);
 //$xml1['description']=utf8_encode_array($xml1['description']);
  foreach ($xml1['description'] as $s_cle=>$s_value)
  {
 //echo $s_cle;
 
 
    if ($s_cle==='Femme Gémeaux - Homme Bélier')
	{
			$f1=$s_value;
  	}
	elseif ($s_cle==='Femme Gémeaux - Homme Taureau')
	{
			$f2=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Gémeaux')
	{
			$f3=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Cancer')
	{
			$f4=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Lion')
	{
			$f5=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Vierge')
	{
			$f6=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Balance')
	{
			$f7=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Scorpion')
	{
			$f8=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Sagittaire')
	{
			$f9=$s_value;
	}
	
	elseif ($s_cle==='Femme Gémeaux - Homme Capricorne')
	{
			$f10=$s_value;
	}
		
	elseif ($s_cle==='Femme Gémeaux - Homme Verseau')
	{
			$f11=$s_value;
	}
			
	elseif ($s_cle==='Femme Gémeaux - Homme Poissons')
	{
			$f12=$s_value;
			$f12=preg_replace('@<center[^>]*?>.*?</center>@si', '', $f12);
	}
	
	
	
	
	
	
		
	
  }

  ?>	

                    <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#collapse1">Femme Gémeaux - Homme Bélier

                                                        <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f1;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse2">Femme Gémeaux - Homme Taureau

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f2;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse3">Femme Gémeaux - Homme Gémeaux
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f3;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse4">Femme Gémeaux - Homme Cancer
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f4;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse5">Femme Gémeaux - Homme Lion
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f5;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse6">Femme Gémeaux - Homme Vierge
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse6" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f6;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse7">Femme Gémeaux - Homme Balance
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f7;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse8">Femme Gémeaux - Homme Scorpion
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse8" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f8;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse9">Femme Gémeaux - Homme Sagittaire
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse9" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f9;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse10">Femme Gémeaux - Homme Capricorne
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse10" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f10;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse11">Femme Gémeaux - Homme Verseau
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse11" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f11;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse12">Femme Gémeaux - Homme Poissons
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse12" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f12;
	?></p>
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

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-hommes.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Compatibilité amoureuse pour les hommes</h5>

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-pour-les-hommes" class="more" title=""></a>
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

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/votre-personnalite-astrologique" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/portrait-astrologique-feminin.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Votre profil astrologique féminin</h5>

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/portrait-astrologique-feminin" class="more" title=""></a>
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

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-quotidien" class="more" ></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/tarot-hebdomadaire.jpg"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">TAROT HEBDOMADAIRE</h5>

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-hebdomadaire" class="more" ></a>
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

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-mensuel" class="more" ></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="images_voyance/banniere/tarot-couple.jpg" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">TAROT COUPLE</h5>

                                                                        
                                                                    </div>

                                                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-de-l-amour" class="more" ></a>
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
							<?php include('include/bloc-gauche-secondaire.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_compatibilite_amoureuse_feminine.php'); ?>