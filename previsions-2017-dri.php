<?php
/* 
    ------------------------------------------
    --   previsions-2017-dri = AFFIL BASE   --
    ------------------------------------------

    Created on : 20 décembre 2016
    Author     : Mohamed Moughamir <moughamir@gmail.com>
*/
include('include/process-dri.php');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images_landing/prevision-2017/favicon.ico">
  <title>Prévisions année 2017 - DRI</title>
  <link href="//fonts.googleapis.com/css?family=Lobster|Open+Sans|Oswald:300,400" rel="stylesheet">
  <link rel="stylesheet" href="css/previsions-2017.min.css">
  <link rel="shortcut icon" href="images_landing/previsions-2017/favicon.ico">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="dri-c">
  <div class="PageWrapper">
    <section class="site site-v2">
      <header class="site-header grid-3-small-1">
        <div class="one-third"></div>
        <div class="one-third">
          <a href="/">
            <img src="images_landing/site-logo.png" alt="MyAstro" class="site-logo">
          </a>
        </div>
        <div class="one-third"></div>
        <h1 class="hidden">Prévisions de lʼannée 2017</h1>
      </header>
      <main class="site-content v2">
        <section class="view flex-container-v">
          <article class="dri ">
            <!-- Post Form Modal-->
            <div class="FormContainer overlay" id="form-overlay"></div>
            <article class="modal hidden">
                <div class="modal-container scaleUp">
                    <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
                    <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
                    <button class="btn modal-btn">Fermer</button>
                </div>
            </article>
            <article class="FormContainer center">
              <?php if($support_obj == 'MAILING'){ ?>
              <h1 class="form-title sign-name">Nous vous rappellons <span class="highlight">gratuitement</span>.
              <p class="message">Il vous suffit d’inscrire votre numéro de téléphone dans le formulaire ci-dessous :</p>
              <?php } elseif($support_obj == 'DRI'){ ?>
              <h1 class="form-title sign-name">Merci, vous allez recevoir la suite de vos prévisions 2017 par Email</h1>
              <p class="message">Si vous ne souhaitez pas attendre d’avantage, notre équipe est à votre disposition et peut vous rappeller <span class="highlight">gratuitement</span>. Il vous suffit d’inscrire votre numéro de téléphone dans le formulaire ci-dessous :</p>
              <?php } ?>
              <div class="img-center">
                <img src="images_landing/previsions-2017/10-free.png" alt="Les 10 premières minutes gratuites" class="10-free" />
              </div>
              <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                    <p class="DRI-Sent" style="text-align: center;font-size: 1.8rem;">
                        Merci, votre demande a bien été prise en compte.<br/>
                        <strong>Un voyant vous recontactera dans quelques instants.</strong>
                    </p>
                <?php } else { ?>
                    <form action="" method="post" class="Primary-Form">
                        <div class="FormContainer-Fields Fields-Table">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="prenom" value="<?= $prenom ?>" />
                            <div class="Fields-Table-Row">
                                <div class="FormField input-email">
                                    <input id="tel" type="tel" name="tel" class="FormField-Input"
                                           value="<?= $tel ?>" placeholder="Mon numéro de téléphone" required/>
                                </div>
                            </div>
                        </div>
                        <div class="Fields-Table-Row">
                            <label for="pays" class="FormField-Label">Mon pays</label>
                            <div class="FormField">
                                <select name="pays" id="pays" class="FormField-Input input-country" required>
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
                        </div>
                        <input type="text" name="antisp" value="" style="display: none" />
                        <button class="btn cta-call FormContainer-Submit" type="submit" name="demande_rappel">Rappel gratuit</button>
                    </form>
                <?php } ?>
                </article>
          </article>
        </section>
      </main>
    </section>
    <footer class="SiteFooter">
      <div class="FooterWrapper">
        <ul class="ReassuranceList">
          <li class="ReassuranceList-Item">
            <span class="ReassuranceList-Item-Img star"></span>
            <span class="ReassuranceList-Item-Txt">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></span>
          </li>
          <li class="ReassuranceList-Item">
            <span class="ReassuranceList-Item-Img lock"></span>
            <span class="ReassuranceList-Item-Txt">Consultations 100% <br/><strong>discrètes & anonymes</strong></span>
          </li>
          <li class="ReassuranceList-Item">
            <span class="ReassuranceList-Item-Img chat"></span>
            <span class="ReassuranceList-Item-Txt">Interprétation<br/><strong>immédiate</strong></span>
          </li>
          <li class="ReassuranceList-Item">
            <span class="ReassuranceList-Item-Img trophy"></span>
            <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
          </li>
          <li class="ReassuranceList-Item">
            <span class="ReassuranceList-Item-Img card"></span>
            <span class="ReassuranceList-Item-Txt">Paiement <br/><strong>sécurisé par CB</strong></span>
          </li>
        </ul>
      </div>
    </footer>
    <p class="SiteCopyright">
      <?php include('include/footer_copyright.php'); ?>
    </p>
  </div>
  <!-- #### REMARKETINGS #### -->
  <?php include('include/remarketing/adwords.php');
        include('include/remarketing/analytics.php');
        include('include/remarketing/facebook.php');?>
</body>
</html>