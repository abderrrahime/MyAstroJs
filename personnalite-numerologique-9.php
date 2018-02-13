<?php

    ini_set('max_execution_time', 0);
    include('lib.php');

    $xml1 = read_numerologie('9', 2 ,'f');

    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-feminine', 
                 'votre-personnalite-astrologique', 'portrait-astrologique-feminin',
                 'tarot-quotidien', 'tarot-hebdomadaire',
                 'tarot-mensuel', 'tarot-de-couple'];
    unset($ipg_pubs); // Désactive l'affichage de la grille d'images
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Votre personnalité numérologique Chiffre 9 | Myastro</title>
	<meta name="description" content="Chiffre 9 : Myastro vous permet de dresser, en fonction de chiffres et de lettres qui vous sont propres, votre profil numérologique. Ceci vous permet de mieux vous connaitre pour appréhender les situations de la vie." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Personnalité numérologique Chiffre 9</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Chiffre 9 : Myastro vous permet de dresser, en fonction de chiffres et de lettres qui vous sont propres, votre profil numérologique. Ceci vous permet de mieux vous connaitre pour appréhender les situations de la vie.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>Votre Personnalité numérologique gratuite : Chiffre 9</h4>
                                </div>
                                <img src="images_voyance/chiffres/9.jpg" class="signe" alt="Chiffre 9" />
                                <!-- Résultat Personnalité numérologique -->
                                <div class="text-justify">
                                    <?php foreach($xml1['desc'] as $texte){ ?>
                                    <p><?= $texte;?></p><br>
                                    <?php } ?>
                                </div>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                                <!-- Horizontal Categories -->
                                <section class="cat-widget h-cat-1">
                                    <?php include('include/content-internal-pub-grid_v2.php');?>
                                </section>
                            </aside>
                        </div>
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_personnalite_numerologique.php');?>