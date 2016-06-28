<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
	<title>Tarot gratuit amour: apprenez-en plus sur votre futur avec Myastro</title>
	<meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <?= $tracker->getCanonical() ?>
	    <link rel="stylesheet" type="text/css" href="css/voyance-tarot.css" />
	    <link rel="stylesheet" type="text/css" href="css/tarot-responsive.css" />
	    <link rel="shortcut icon" href="favicon.ico" /> 
	    <noscript>
		<link rel="stylesheet" type="text/css" href="css/noscript.css" />
	    </noscript>
	    <style>
		.infob-tel-w,.infob-email-w{
		    position:absolute; 
		    width:192px;
		    color:#fff; 
		    background:#246BAD; 
		    padding:15px; 
		    border-radius:3px; 
		    box-shadow:0 0 2px rgba(0,0,0,.5);
		    transform:scale(0) rotate(-12deg);
		    transition:all .25s;
		    opacity:0;
		    width:228px;
		    font-size: 13px;
		}

		.infob-email-w{
		    margin-top:-74px; 
		    margin-left:-284px;
		}
		.infob-tel-w{
		    margin-top:-94px; 
		    margin-left:-284px;
		}
	    </style>

	    <!--[if IE 7]>
	    <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
	    <![endif]-->

	    <!--[if lt IE 9]>
	      <script src="framework/fix-ie/html5.js"></script>
	    <![endif]-->

	    <!-- SCRIPT TRACKING FB-->
		<script>(function() {
		  var _fbq = window._fbq || (window._fbq = []);
		  if (!_fbq.loaded) {
		    var fbds = document.createElement('script');
		    fbds.async = true;
		    fbds.src = '//connect.facebook.net/en_US/fbds.js';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(fbds, s);
		    _fbq.loaded = true;
		  }
		  _fbq.push(['addPixelId', '313112278889346']);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', 'PixelInitialized', {}]);
		</script>
		<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=313112278889346&amp;ev=PixelInitialized" /></noscript>

	    <!-- END SCRIPT TRACKING FB-->
    </head>
    <body  style="background:url('images_tarot/back_tarot.png') no-repeat fixed center center rgba(0, 0, 0, 0)" class="voyance-tarot">

	<div class="container-fluid ninesixty" itemscope >
	    <!-- Main Content -->
	    <div class="row-fluid">
		<div class="article-content">
		    <!-- <header>
			 <div class="cat-widget-title">
			     <h1 itemprop="headline">Tarot gratuit</h1>
			 </div>
			 <div class="row-fluid social-share-footer">
			     <div class="share-icons">
				 <p>Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro.</p>
				 <p class="indic">Tirez d'abord vos cartes pour ensuite avoir votre réponse</p>
			     </div>
			 </div>
		     </header>-->
		    <span class="clearfix"></span>
		    <div class="widget w-sponsors">
			<div class="tarot-content">
			    <div class="tarot-left">
				<div class="widget-title vy-title first-title">
				    <h1 class="">tirez vos cartes</h1>
				</div>
				<div class="paquet">
				    <div class="relative">
					<?php
					for ($i = 1; $i <= 12; $i++)
					{
					    switch ($i)
					    {
						// On met des attributs data pour la position de départ des elements
						case 1 :
						case 12 :
						    $datapos = '0px';
						    break;
						case 2 :
						    $datapos = '2px';
						    break;
						case 3 :
						case 11 :
						    $datapos = '4px';
						    break;
						case 4 :
						case 10 :
						    $datapos = '6px';
						    break;
						case 5 :
						case 9 :
						    $datapos = '8px';
						    break;
						case 6 :
						case 8 :
						    $datapos = '10px';
						    break;
						case 7 :
						    $datapos = '12px';
						    break;
					    }
					    echo '<img src="tarot/cartes/dos.png" class="tarot-dos tarot-' . $i . '" data-pos="' . $datapos . '"/>';
					}
					?>
				    </div>
				    <!--<div class="clearfix"></div>-->
				</div>
				<div class="widget-title vy-title second-title">
                                    <h1 class="">Votre tirage</h1>
				</div>
				<div class="donne">
				    <div class="donneHandler">
					<?php
					for ($i = 1; $i <= 5; $i++)
					{
					    echo '<div class="pickHolder"></div>';
					}
					?>
				    </div>
				    <div class="clearfix"></div>
				</div>
			    </div>
			    <!-- debut form -->
			    <div class="form-group tarot-right">
				<div class="widget-title vy-title">
				    <h1 class="">posez votre question de voyance gratuite</h1>
				</div>
				<div class="widget w-adv">
				    <div id="form-w" class="widget-content clearfix">
					<div class="visible-part form-part form-part-two">
					    <div class="alert alert-danger">
						<p></p>
					    </div>
					    <form id="">
						<input type="hidden" name="source" value="myastro-tarot-fb" /> <!-- source unique pour la campagne adwords -->
						<input type="hidden" name="method" value="voyance-tarot-gratuit-2" />
						<input type="hidden" name="support" value="tarot" />
						<input type="hidden" name="affiliation" value="facebook">
						<div>
						    <div class="vt2">
							<label class="label-left">Je suis :</label>
							<select class="cnt-right" name="sexe"required>
							    <option value="femme">Une femme</option>
							    <option value="homme">Un homme</option>
							</select>
						    </div>
						    <div class="vt2 inp-txt">
							<label></label>
							<input type="text" placeholder="Mon Prénom" id="name" name="prenom"required>
						    </div>
						    <div class="vt2 dn-part">
							<label>
							    Ma date de naissance :

							</label>
							<select  class="daten jour" name="jour"required>
							    <option selected="selected" value="">Jour</option>
							    <option value="1">01</option>
							    <option value="2">02</option>
							    <option value="3">03</option>
							    <option value="4">04</option>
							    <option value="5">05</option>
							    <option value="6">06</option>
							    <option value="7">07</option>
							    <option value="8">08</option>
							    <option value="9">09</option>
							    <option value="10">10</option>
							    <option value="11">11</option>
							    <option value="12">12</option>
							    <option value="13">13</option>
							    <option value="14">14</option>
							    <option value="15">15</option>
							    <option value="16">16</option>
							    <option value="17">17</option>
							    <option value="18">18</option>
							    <option value="19">19</option>
							    <option value="20">20</option>
							    <option value="21">21</option>
							    <option value="22">22</option>
							    <option value="23">23</option>
							    <option value="24">24</option>
							    <option value="25">25</option>
							    <option value="26">26</option>
							    <option value="27">27</option>
							    <option value="28">28</option>
							    <option value="29">29</option>
							    <option value="30">30</option>
							    <option value="31">31</option>
							</select>
							<select  class="daten mois" name="mois"required>
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
							<select name="annee"  class="daten annee"required>
							    <option selected="selected" value="">Année</option>
							    <option value="1997">1997</option>
							    <option value="1996">1996</option>
							    <option value="1995">1995</option>
							    <option value="1994">1994</option>
							    <option value="1993">1993</option>
							    <option value="1992">1992</option>
							    <option value="1991">1991</option>
							    <option value="1990">1990</option>
							    <option value="1989">1989</option>
							    <option value="1988">1988</option>
							    <option value="1987">1987</option>
							    <option value="1986">1986</option>
							    <option value="1985">1985</option>
							    <option value="1984">1984</option>
							    <option value="1983">1983</option>
							    <option value="1982">1982</option>
							    <option value="1981">1981</option>
							    <option value="1980">1980</option>
							    <option value="1979">1979</option>
							    <option value="1978">1978</option>
							    <option value="1977">1977</option>
							    <option value="1976">1976</option>
							    <option value="1975">1975</option>
							    <option value="1974">1974</option>
							    <option value="1973">1973</option>
							    <option value="1972">1972</option>
							    <option value="1971">1971</option>
							    <option value="1970">1970</option>
							    <option value="1969">1969</option>
							    <option value="1968">1968</option>
							    <option value="1967">1967</option>
							    <option value="1966">1966</option>
							    <option value="1965">1965</option>
							    <option value="1964">1964</option>
							    <option value="1963">1963</option>
							    <option value="1962">1962</option>
							    <option value="1961">1961</option>
							    <option value="1960">1960</option>
							    <option value="1959">1959</option>
							    <option value="1958">1958</option>
							    <option value="1957">1957</option>
							    <option value="1956">1956</option>
							    <option value="1955">1955</option>
							    <option value="1954">1954</option>
							    <option value="1953">1953</option>
							    <option value="1952">1952</option>
							    <option value="1951">1951</option>
							    <option value="1950">1950</option>
							    <option value="1949">1949</option>
							    <option value="1948">1948</option>
							    <option value="1947">1947</option>
							    <option value="1946">1946</option>
							    <option value="1945">1945</option>
							    <option value="1944">1944</option>
							    <option value="1943">1943</option>
							    <option value="1942">1942</option>
							    <option value="1941">1941</option>
							    <option value="1940">1940</option>
							    <option value="1939">1939</option>
							    <option value="1938">1938</option>
							    <option value="1937">1937</option>
							    <option value="1936">1936</option>
							    <option value="1935">1935</option>
							    <option value="1934">1934</option>
							    <option value="1933">1933</option>
							    <option value="1932">1932</option>
							    <option value="1931">1931</option>
							    <option value="1930">1930</option>
							    <option value="1929">1929</option>
							    <option value="1928">1928</option>
							    <option value="1927">1927</option>
							    <option value="1926">1926</option>
							    <option value="1925">1925</option>
							    <option value="1924">1924</option>
							    <option value="1923">1923</option>
							    <option value="1922">1922</option>
							    <option value="1921">1921</option>
							    <option value="1920">1920</option>
							    <option value="1919">1919</option>
							    <option value="1918">1918</option>
							    <option value="1917">1917</option>
							    <option value="1916">1916</option>
							    <option value="1915">1915</option>
							    <option value="1914">1914</option>
							    <option value="1913">1913</option>
							    <option value="1912">1912</option>
							    <option value="1911">1911</option>
							    <option value="1910">1910</option>
							</select>
						    </div>
						    <div class="vt2 inp-txt">
							<label></label>
							<input type="text" placeholder="Son Prénom" name="conjoint" id="lover_name">
						    </div>
						    <div class="vt2 dn-part">
							<label>
							    Sa date de naissance :
							</label>
							<select  class="daten jour" name="jour_c">
							    <option selected="selected" value="">Jour</option>
							    <option value="1">01</option>
							    <option value="2">02</option>
							    <option value="3">03</option>
							    <option value="4">04</option>
							    <option value="5">05</option>
							    <option value="6">06</option>
							    <option value="7">07</option>
							    <option value="8">08</option>
							    <option value="9">09</option>
							    <option value="10">10</option>
							    <option value="11">11</option>
							    <option value="12">12</option>
							    <option value="13">13</option>
							    <option value="14">14</option>
							    <option value="15">15</option>
							    <option value="16">16</option>
							    <option value="17">17</option>
							    <option value="18">18</option>
							    <option value="19">19</option>
							    <option value="20">20</option>
							    <option value="21">21</option>
							    <option value="22">22</option>
							    <option value="23">23</option>
							    <option value="24">24</option>
							    <option value="25">25</option>
							    <option value="26">26</option>
							    <option value="27">27</option>
							    <option value="28">28</option>
							    <option value="29">29</option>
							    <option value="30">30</option>
							    <option value="31">31</option>
							</select>
							<select  class="daten mois" name="mois_c">
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
							<select   class="daten annee" name="annee_c">
							    <option selected="selected" value="">Année</option>
							    <option value="1997">1997</option>
							    <option value="1996">1996</option>
							    <option value="1995">1995</option>
							    <option value="1994">1994</option>
							    <option value="1993">1993</option>
							    <option value="1992">1992</option>
							    <option value="1991">1991</option>
							    <option value="1990">1990</option>
							    <option value="1989">1989</option>
							    <option value="1988">1988</option>
							    <option value="1987">1987</option>
							    <option value="1986">1986</option>
							    <option value="1985">1985</option>
							    <option value="1984">1984</option>
							    <option value="1983">1983</option>
							    <option value="1982">1982</option>
							    <option value="1981">1981</option>
							    <option value="1980">1980</option>
							    <option value="1979">1979</option>
							    <option value="1978">1978</option>
							    <option value="1977">1977</option>
							    <option value="1976">1976</option>
							    <option value="1975">1975</option>
							    <option value="1974">1974</option>
							    <option value="1973">1973</option>
							    <option value="1972">1972</option>
							    <option value="1971">1971</option>
							    <option value="1970">1970</option>
							    <option value="1969">1969</option>
							    <option value="1968">1968</option>
							    <option value="1967">1967</option>
							    <option value="1966">1966</option>
							    <option value="1965">1965</option>
							    <option value="1964">1964</option>
							    <option value="1963">1963</option>
							    <option value="1962">1962</option>
							    <option value="1961">1961</option>
							    <option value="1960">1960</option>
							    <option value="1959">1959</option>
							    <option value="1958">1958</option>
							    <option value="1957">1957</option>
							    <option value="1956">1956</option>
							    <option value="1955">1955</option>
							    <option value="1954">1954</option>
							    <option value="1953">1953</option>
							    <option value="1952">1952</option>
							    <option value="1951">1951</option>
							    <option value="1950">1950</option>
							    <option value="1949">1949</option>
							    <option value="1948">1948</option>
							    <option value="1947">1947</option>
							    <option value="1946">1946</option>
							    <option value="1945">1945</option>
							    <option value="1944">1944</option>
							    <option value="1943">1943</option>
							    <option value="1942">1942</option>
							    <option value="1941">1941</option>
							    <option value="1940">1940</option>
							    <option value="1939">1939</option>
							    <option value="1938">1938</option>
							    <option value="1937">1937</option>
							    <option value="1936">1936</option>
							    <option value="1935">1935</option>
							    <option value="1934">1934</option>
							    <option value="1933">1933</option>
							    <option value="1932">1932</option>
							    <option value="1931">1931</option>
							    <option value="1930">1930</option>
							    <option value="1929">1929</option>
							    <option value="1928">1928</option>
							    <option value="1927">1927</option>
							    <option value="1926">1926</option>
							    <option value="1925">1925</option>
							    <option value="1924">1924</option>
							    <option value="1923">1923</option>
							    <option value="1922">1922</option>
							    <option value="1921">1921</option>
							    <option value="1920">1920</option>
							    <option value="1919">1919</option>
							    <option value="1918">1918</option>
							    <option value="1917">1917</option>
							    <option value="1916">1916</option>
							    <option value="1915">1915</option>
							    <option value="1914">1914</option>
							    <option value="1913">1913</option>
							    <option value="1912">1912</option>
							    <option value="1911">1911</option>
							    <option value="1910">1910</option>
							</select>
						    </div>
						    <div class="vt2">
							<label class="label-left">Ma question :</label>
							<select class="cnt-right cnt-qt" name="theme_id"required>
							    <option value="" selected="selected">Choisissez un domaine</option>
							    <optgroup label="Amour">
								<option value="question_1">Vous en avez marre d’être seul(e)</option>
								<option value="question_2">Est-ce qu'il/elle m'aime ?</option>
								<option value="question_24">Vous en aimez un(e) autre</option>
								<option value="question_11">Il/Elle vous a quitté</option>
							    </optgroup>
							    <optgroup label="Argent">                          
								<option value="question_73">Vous attendez un investissement</option>
							    </optgroup>
							    <optgroup label="Travail">
								<option value="question_4">Vous attendez un changement professionel</option>
								<option value="question_3">Vous cherchez un emploi</option>
							    </optgroup>

							</select>
						    </div>
						    <div class="vt2">
							<label class="label-left" >Mon pays :</label>
							<select class="cnt-right" name="pays" id="pays"required>
							    <option value="" selected="selected">Votre Pays</option>
							    <option value="BE">Belgique</option>
							    <option value="CA">Canada</option>
							    <option value="LU">Luxembourg</option>
							    <option value="CH">Suisse</option>
							    <option value="FR">France Métropolitaine</option>
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

						    <div class="vt2 inp-txt">
							<label ></label>
							<input id="email" type="email" name="email" placeholder="Mon email" required>
							    <span class="infob-email-w">Une étude personnalisée vous sera envoyée à cette adresse</span>
						    </div>
						    <div class="vt2 inp-txt">
							<label ></label>
							<input  name="tel" type="tel" placeholder="Mon numéro de téléphone" required>
							    <span class="infob-tel-w">Vous serez rappelé par le voyant à ce numéro</span>
						    </div>
						    <div class="vt2 inp-txt">
							<textarea class="" rows="6" name="question" id="question" placeholder="Posez votre question en donnant le maximum d&#39;informations. Pour plus de confidentialité, ne citez aucun nom de personne."  data-msg-required="Merci de préciser votre problème"></textarea>
						    </div>
						</div>
						<div ></div>
						<div class="cguv">
                                    <label class="checkbox">
                                        <input type="checkbox" name="cguv" required checked style="height:auto;">J'ai lu et j'accepte les conditions générales.
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="partenaires"  checked style="height:auto;"> J'accepte de recevoir les offres des partenaires.
                                    </label>
                                </div> 
						<div class="vt2">
						    <input  class="btn_button btn-full-two" type="submit"  name="valider"  value="Poser votre question" disabled>
						</div>
					    </form>
					</div>
				    </div>

				</div>
				<div class="text-center">
				    <a href="http://www.myastro.fr/conditions-generale" rel="nofollow">Conditions générales</a>
				</div>
			    </div>
			    <!-- fin form -->
			    <div class="clearfix"></div>


			</div>

		    </div>   

		</div>
		<div class="clearfix"></div>

	    </div>

    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->

	    <script src="js/jquery-1.11.js"></script>
	    <script type="text/javascript" src="./voyance-gratuite-6_files/jquery.maskedinput.min.js"></script>
	    <script src="js/tarot-2.js"></script>
	    <script src="js/formValidator.js"></script>
	    <script src="framework/bootstrap/js/bootstrap.min.js"></script>
	    <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
	    <script src="framework/bootstrap/js/bootstrap-tooltip.js"></script>
	    <script src="js/infoBulle.js"></script>

 <!-- facebook Remarketing tags -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '313112278889346']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=313112278889346&amp;ev=PixelInitialized" /></noscript>
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
		    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0"/>
		  </div>
		</noscript>

		<!-- Analytics tags -->
		<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-16975536-3']);
		_gaq.push(['_trackPageview']);

		(function () {
		  var ga = document.createElement('script');
		  ga.type = 'text/javascript';
		  ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		  var s = document.getElementsByTagName('script')[0];
		  s.parentNode.insertBefore(ga, s);
		})();

		</script> 

    </body>
</html>