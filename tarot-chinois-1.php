<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
    <title>Tarot chinois : 5 lames pour révéler votre avenir | MyAstro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <meta name="robots" content="noindex,nofollow" />
         <?= $tracker->getCanonical() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/voyance-tarot-nat.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-gratuit.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-responsive-nat.css" />
        <link rel="stylesheet" href="css/infobulle.css" />
       <script src="js/jquery-1.11.js"></script>
        <link rel="shortcut icon" href="favicon.ico" /> 
        <noscript>
        <link rel="stylesheet" type="text/css" href="css/noscript.css" />
        </noscript>
        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />   
        <?php include('include/header_inc_landing.php'); ?>
        <script src="js/myscript.js"></script>

    </head>
<body class="tarot-chinois-1">
<div class="subbody">
    <div class="top-nav">
        <div class="nav-content">
            <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
        </div>
    </div>
    <div class="main">
        <div class="left-part">
            <div class="logo">
                <img src="images_landing/logo-myastro.png" alt="" width="220" height="89" />
            </div>
            <div class="content">
                <h1>Tarot <strong>chinois</strong></h1>
                <div class="txt-content">
                    <p>Le tarot chinois de MyAstro vous permet de tirer 5 lames en toute simplicité : en quelques clics, les représentations apparaissent et vous obtenez l'interprétation de votre tirage par l'un de nos spécialistes.</p>
                    <p>MyAstro vous garantit des réponses apportées par un tarologue expert dans cet art divinatoire particulièrement apprécié qu'est le tarot chinois.</p>
                </div>
            </div>
        </div>


        <div class="right-top-part">
            <div  class="voyance-tarot">
                <!-- Main Content -->
                <div class="row-fluid">
                    <div class="span6 main-content">
                    <div class="widget-t w-sponsors">
                        <div class="tarot-content">
                        <div class="tarot-left" style="width:100%;">

                        <div class="paquet">

                            <div class="title">Tirez <strong>5</strong> lames</div>
                                <div class="relative">
                                <?php
                                for ($i = 1; $i <= 21; $i++)
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
                                    echo '<img src="images_landing/carte-chinois.png" class="tarot-dos tarot-' . $i . '" data-pos="' . $datapos . '"/>';
                                }
                                ?>
                                </div>
                            <!--<div class="clearfix"></div>-->
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
                        </div>
                        </div>
            
                        <!-- fin form -->
                        <div class="clearfix"></div>


                    </div>

                </div><br/> 
            </div>
        <div class="clearfix"></div>
        </div>
    </div>
      

        
    <div class="main bottom-part" id="secondpart">

        <div class="left-bottom-part">
             <div class="comment-ca-marche">
                <h2>Comment ça marche ? </h2>
                <ul>
                    <li class="li1"><strong>1</strong> <span>Je tire mes cinq lames de tarot</span></li>
                    <li class="li2"><strong>2</strong> <span>Je remplis le formulaire</span></li>
                    <li class="li3"><strong>3</strong> <span>Je reçois un appel pour découvrir mon interprétation</span></li>
                    <li class="li4"><strong>4</strong> <span>Je reçois mon interprétation par mail sous 24h</span></li>
                </ul>

                <img src="images_landing/tarot-chinois.jpg" width="577" height="111" alt="Tarot Chinois"/>
            </div>
        </div>


           <div class="right-part">

            
            
            <div>
                <aside class="widget w-adv">
                    <div class="widget-title" style="text-align:center;">
                        <span class="h4">Mes informations</span>
                    </div>
                    <div id="form-w" class="widget-content clearfix">
                        <div class="visible-part form-part form-part-one">
                            <div class="alert alert-danger">
                              <p></p>
                            </div>
                            <form id="">
                                <input type="hidden" name="source" value="myastro-tarot-a6" />
                                <input type="hidden" name="method" value="tarot-landing" />
                                <input type="hidden" name="support" value="tarot"/>
                                <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                                <input type="hidden" name="affiliation" value="adwords">
                                <div class="form-w-one li-form">
                                    <label>Prénom</label>
                                    <input type="text" id="name" name="prenom" required>
                                </div>
                                <div class="form-w-two li-form">
                                    <div>
                                        <label><img src="images_landing/ico-femme.png" alt="" width="12" height="20"/> Femme</label><input type="radio" name="sexe" value="femme">
                                        <label><img src="images_landing/ico-homme.png" alt="" width="20" height="20"/> Homme</label><input type="radio" name="sexe" value="homme"> 
                                    </div>
                                </div>
                               <div class="form-w-three li-form">
                                    <div>
                                    <label>
                                        Ma date de naissance :
                                        <br>
                                    </label>
                                    <select  class="daten jour" name="jour" required>
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
                                    <select  class="daten mois" name="mois" required>
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
                                    <select name="annee"  class="daten annee" required>
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
                                    <div class="clearfix"></div>
                                    <div class="form-mess li-form">
                                        <select class="cnt" name="theme_id" id="theme_id" required>
                                              <option value="" selected="selected">Thème de la question</option>
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
                                </div>

                                 
                               <div class="form-w-one li-form sonprenom">
                                    <label>Son prénom</label>
                                    <input type="text" id="son_prenom" name="conjoint">
                                </div> 
                    
                                <?php /*
                                <div class="li-form">
                                    <textarea name="question" rows="10" cols="50" placeholder="Ma question : posez ici votre question avec le plus de détails possible. Pour plus de confidentialité, ne citez aucun nom ici."></textarea>
                                </div>*/ ?>


                                 <div class="form-w-one li-form">
                                    <label>E-mail</label>
                                    <input id="email" type="email" name="email" required>
                                    <span class="infob-email-w" style="color:#000;">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                </div>
                                 <div class="form-w-one li-form">
                                    <label> Téléphone</label>
                                    <input id="tel" name="tel" type="tel" required>
                                    <span class="infob-tel-w" style="color:#000;">Vous serez rappelé par le voyant à ce numéro</span>
                                </div>



                                <div class="form-w-one li-form selectpays">
                                    <label>Votre pays </label>
                                    <select class="cnt-right" name="pays" id="pays" required="">
                                          <option value="" selected="selected">Votre Pays</option>
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
                                 <div class="cguv">
                                    <label class="checkbox">
                                        <input type="checkbox" name="cguv" required checked>J'ai lu et j'accepte les conditions générales.
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="partenaires"  checked> J'accepte de recevoir les offres des partenaires.
                                    </label>
                                </div>       
                                <div>   
                                    <?php
                                    $button = "Découvrir mon \ninterprétation";
                                    ?>
                                    <input class="btn_button btn-full-one" type="submit" name="valider" value="<?php echo $button;?>" >
                                </div>
                            </form>
                        </div>
                        <div>
                    </div>
                </aside>
                               
                </div>
                 <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>



        </div>

  

       <script src="js/jquery-1.11.js"></script>
        <script src="js/chinois.js"></script>
        <script src="framework/bootstrap/js/bootstrap.min.js"></script>
        <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script src="js/infoBulle.js"></script>

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

    <div class="footer">
        <?php include('include/footer_copyright.php'); ?>
    </div>


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

</div>
</body>
</html>

