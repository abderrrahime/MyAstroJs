<?php
	require_once('inc/tools.php');
	require_once('inc/header.php');
	$db_link = createConnection();
	$indexation = '';
	$indexation2 = '';
	$errorMSG = '';
?>
<div class="wrapper">
            <div id="fil">
	            Vous &ecirc;tes ici
				<span>&raquo;</span>
				<a href="http://www.myastro.fr/yyadmin/">Accueil</a>
				<span>&raquo;</span>
				<a href="http://www.myastro.fr/yyadmin/utilisateurs.php">Liste des utilisateurs</a>
			</div>
            
  
	<div id="title"><h1>Utilisateurs</h1></div>
	<div class="clearfix"></div>
	<div class="alert alert-info"><p>Cette page correspond aux utilisateurs <strong>INSCRITS ( datejoin )</strong> le jour X.</p></div>
<?php if(isset($_GET['rub']) && !empty($_GET['rub'])) { 
echo '<div id="title"><h1>'.ucfirst(str_replace("-", " ", $_GET['rub'])).'</h1></div>'; } ?>

<div id="global">
<div id="global2">
<div id="globalContent">
<?php
		
		$sql = "SELECT *
FROM `ag_users` 
WHERE `questionSujet` != '' AND `ip_adress` != 'mobile'
ORDER BY `ag_users`.`internal_id`";
		
		
		
		////////// Limites
		
		$nb = mysql_num_rows(mysql_query($sql)); 			$limit = 100;
		
		
		if(isset($_GET['page']) && !empty($_GET['page'])) 
		{  $page = $_GET['page']; $nb_page = $nb / $limit;  $nb_page = ceil($nb_page); $debut = ($page * $limit) - $limit;  }
		else {  $page = 1; $nb_page = $nb / $limit; $nb_page = ceil($nb_page); $debut = ($page * $limit) - $limit;  }
		
		$result_in_debut = $debut + 1;  			$result_in_fin = $debut + $limit; 
		
		for($i=1; $i<=$nb_page; $i++)
		{
			$indexation2 .= '<a href="http://www.myastro.fr/yyadmin/utilisateurs.php?page='.$i.'">'.$i.'</a> ';
		}
		
		if($result_in_fin > $nb) { $result_in_fin = $nb; }
		if($page >= $nb_page) { $page_plus = $nb_page; } else { $page_plus = $page + 1; }
		if($page <= 1) { $page_moins = 1; } else { $page_moins = $page - 1; }
      
		if($page > 1)
		{
			$indexation .= '
			<a href="http://www.myastro.fr/yyadmin/utilisateurs.php?page=1">D&eacute;but</a>
			<a href="http://www.myastro.fr/yyadmin/utilisateurs.php?page='.$page_moins.'">Pr&eacute;c&eacute;dent</a>';
		}
			
		$indexation .= '
		'.$result_in_debut . ' - ' . $result_in_fin . ' de ' . $nb .'';
		
		if($page < $nb_page) 
		{ 
			$indexation .= '			
			<a href="http://www.myastro.fr/yyadmin/utilisateurs.php?page='.$page_plus.'">Suivant</a>
			<a href="http://www.myastro.fr/yyadmin/utilisateurs.php?page='.$nb_page.'">Fin</a>
			<a href="http://www.myastro.fr/yyadmin/excel_page.php?fp='.$page.'">Excel</a>';
		}			
		
		if($page == $nb_page) 
		{ 
			$indexation .= '			
			<a href="http://www.myastro.fr/yyadmin/utilisateurs.php?page='.$page_plus.'">Suivant</a>
			<a href="http://www.myastro.fr/yyadmin/utilisateurs.php?page='.$nb_page.'">Fin</a>
			<a href="http://www.myastro.fr/yyadmin/excel_page.php?fp='.$page.'">Excel</a>';
		}	
		
		$reqLimit = " LIMIT ".$debut.", ".$limit." ";
		

		?>
		<script>
		function deleteUser(id_user, compiledResponseName){
			if(confirm("?tes-vous s?r de vouloir supprimer le(s) profil(s) "+id_user+" ? ATTENTION, cette action est irr?versible !")){
		envoi_requete(id_user);
			}
			}
		</script>
<script type="text/javascript">
function envoi_requete(msg_str) 
{ 
	var xhr_object = null;
	
	if(window.XMLHttpRequest) // Firefox et autres
	   xhr_object = new XMLHttpRequest(); 
	else if(window.ActiveXObject)
	{ // Internet Explorer 
	   try 
		{
                	xhr_object = new ActiveXObject("Msxml2.XMLHTTP");
            	}
	   catch (e) 
		{
                xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
            	}
	}

	else 
	{ // XMLHttpRequest non support? par le navigateur
		alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
		return;
	}

	var method   = "POST";
	var filename = "http://www.myastro.fr/del_mult_users.php";
	var data     = "data_to_delete=" + msg_str;
// Fonction Synchrone -- open(xx,xx,false) -- on attend le resultat de la requete avant d'aller plus loin

	xhr_object.open(method, filename, false);
	

//	xhr_object.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");
	xhr_object.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");

	xhr_object.send(data);

self.location = "<?= $link ?>?page=<?= $_GET['page'] ?>";

alert(xhr_object.responseText); 
return(0);
}
</script>		
	
		<?
		if(isset($_GET['action']) && $_GET["action"]=="delete" && $_GET["id_user"]!=""){
			$sql = "DELETE FROM ag_users WHERE ag_users.id = '".$_GET["id_user"]."' LIMIT 1";
			$result = mysql_query($sql);
			
			if (!$result) 
			{
			   $errorMSG = "<p class='error'>Impossible de supprimer le profil : ".$_GET["id_user"]."<br>".mysql_error()."</p><br><br>";
			}
			else
			{
					$errorMSG = "<p class='error'>Le profil a bien ?t? supprimer de la table : ".$_GET["id_user"].".<br>Il n'y avait pas de fichier mail ?
					supprimer</p><br><br>";	
					
               if(isset($_GET['page']) && !empty($_GET['page']))
                  header('Location: '.$link.'/page-'.$_GET['page'].'/');
               else
                  header('Location: '.$link);
			}
		
		}
		?>
		<table>
		<?php
	$today = mktime(0, 0, 1, date('m'), date('d'), date('Y'));
	$auj = date('Y-m-d', $today);
        $hier = date('Y-m-d', $today - 86400);
        $avant_hier = date('Y-m-d', $today - (2*86400));
		//echo " Today :".$today."<br />";
		//echo " Hier :".$hier."<br />"; ////////////TIMESTAMP( CURDATE( ) )
		//echo " avant hier :".$avant_hier."<br />";

		$sqlUserJour = mysql_query("SELECT *
FROM ag_users
WHERE ag_users.`history` > TIMESTAMP( DATE_ADD(CURDATE( ), INTERVAL -2 DAY) ) AND ag_users.`history` < TIMESTAMP( DATE_ADD(CURDATE( ), INTERVAL -1 DAY) ) AND ag_users.`questionSujet` != '' AND `ip_adress`!= 'mobile'") or die ( mysql_error());
		echo '<tr><td>Vous avez <strong>'.mysql_num_rows($sqlUserJour).' nouveaux utilisateurs</strong> qui se sont inscrits avant-hier + les mises à jours.<br><br></td></tr>';
		$sqlUserJour = mysql_query("SELECT *
FROM ag_users
WHERE ag_users.`history` > TIMESTAMP( DATE_ADD(CURDATE( ), INTERVAL -1 DAY) ) AND ag_users.`history` < TIMESTAMP( CURDATE( ) ) AND ag_users.`questionSujet` != '' AND `ip_adress`!= 'mobile'") or die ( mysql_error());
		echo '<tr><td>Vous avez <strong>'.mysql_num_rows($sqlUserJour).' nouveaux utilisateurs</strong> qui se sont inscrits hier + les mises à jours.<br><br></td></tr>';
		$sqlUserJour = mysql_query("SELECT *
FROM ag_users
WHERE ag_users.`history` > TIMESTAMP( CURDATE( ) )
AND ag_users.`questionSujet` != '' AND `ip_adress`!= 'mobile'") or die ( mysql_error());
		echo '<tr><td>Vous avez <strong>'.mysql_num_rows($sqlUserJour).' nouveaux utilisateurs</strong> qui se sont inscrits aujourd\'hui + les mises à jours.</td></tr>';
		
		$sqlUserJourcorail = mysql_query("SELECT *
FROM `chat`
WHERE `date_envoie` > '".date('Y-m-d')."' ") or die ( mysql_error());
		$sqlUserJourtarot = mysql_query("SELECT *
FROM `tarot`
WHERE `date_envoie` = CURDATE( )") or die ( mysql_error());


		$sqlUserJour = mysql_query("SELECT *
FROM ag_users
WHERE ag_users.`questionDate` = TIMESTAMP( CURDATE( ) )") or die ( mysql_error());


$total=	mysql_num_rows($sqlUserJour) + mysql_num_rows($sqlUserJourcorail) + mysql_num_rows($sqlUserJourtarot);


		echo '<tr><td><font style="color:#FF0000;"><strong>'.$total.'</strong></font> qui correspond aux nouveaux inscriptions sur EmailVision</td></tr>';
		
		?>

		<?php
		function MoisEnToutesLettres($mois)
		{
			switch($mois)
			{
				case 1:
					$mois='Janvier';
					break;
				case 2:
					$mois='Février';
					break;
				case 3:
					$mois='Mars';
					break;
				case 4:
					$mois='Avril';
					break;
				case 5:
					$mois='Mai';
					break;
				case 6:
					$mois='Juin';
					break;
				case 7:
					$mois='Juillet';
					break;
				case 8:
					$mois='Aout';
					break;
				case 9:
					$mois='Septembre';
					break;
				case 10:
					$mois='Octobre';
					break;
				case 11:
					$mois='Novembre';
					break;
				case 12:
					$mois='Décembre';
					break;
			}
			return $mois;
		}
			$annee = date('Y', $today);
			$moisencours = date('m', $today);
			$datedebutmois=$annee.'-'.$moisencours.'-01';
			$sqlUserJour = mysql_query("SELECT * FROM ag_users WHERE `questionSujet` != '' AND `ip_adress` != 'mobile' AND  ag_users.questionDate >= '".$datedebutmois."'") or die ( mysql_error());
			$echo1= '<tr><td>Vous avez <strong>'.mysql_num_rows($sqlUserJour).' nouveaux utilisateurs</strong> qui se sont inscrits ce mois-ci.<br><br></td></tr>';
			if($moisencours==1)
			{
				$moisencours=12;
				$annee--;
			}
			else
				$moisencours--;
			$datefinmois=$datedebutmois;
			$datedebutmois=$annee.'-'.$moisencours.'-01';
			$sqlUserJour = mysql_query("SELECT * FROM ag_users WHERE `questionSujet` != '' AND `ip_adress` != 'mobile' AND  ag_users.questionDate >= '".$datedebutmois."' AND   ag_users.questionDate < '".$datefinmois."'") or die ( mysql_error());
			$echo2= '<tr><td>Vous avez <strong>'.mysql_num_rows($sqlUserJour).' nouveaux utilisateurs</strong> qui se sont inscrits en '.MoisEnToutesLettres($moisencours).'.<br><br></td></tr>';
			if($moisencours==1)
			{
				$moisencours=12;
				$annee--;
			}
			else
				$moisencours--;
			$datefinmois=$datedebutmois;
			$datedebutmois=$annee.'-'.$moisencours.'-01';
			$sqlUserJour = mysql_query("SELECT * FROM ag_users WHERE `questionSujet` != '' AND `ip_adress` != 'mobile' AND  ag_users.questionDate >= '".$datedebutmois."' AND   ag_users.questionDate < '".$datefinmois."'") or die ( mysql_error());
			$echo3= '<tr><td>Vous avez <strong>'.mysql_num_rows($sqlUserJour).' nouveaux utilisateurs</strong> qui se sont inscrits en '.MoisEnToutesLettres($moisencours).'.<br><br></td></tr>';
			echo $echo3.$echo2.$echo1;
		?>
		</table>
		<div class="indexation" style="float: left; margin-top: 25px;">
			<?php echo $indexation; ?>
		</div>
        
       <div class="indexation" style="text-align:justify; margin: 25px 0;line-height:30px">
			<?php echo $indexation2; ?>
</div>

        		<?= $errorMSG ?>
		<table  width="1000" cellspacing="0" cellpadding="5" border="0">
		<thead>
			<tr align="center">
				<th width="30">Id</th>
				<th width="60">Date<br />question</th>
				<th width="60">Sujet<br />question</th>
				<th width="50">Question</th>
				<th width="60">Prenom</th>
				<th width="60">Nom</th>
				<th width="40">Signe<br />Astro</th>
				<th width="110">Email</th>
				<th width="55">Tel</th>
				
				<th width="60">conjoint</th>
				<th width="60">Signe 2</th>
				
				<th width="30">Pays</th>
				<th width="30">Actions</th>
			</tr>
        </thead>
		<?php
						
		$sql = $sql . $reqLimit;
		mysql_query("SET NAMES 'utf8'");
		$result = mysql_query($sql);
		
		if (!$result) {
		   echo "<tr><td colspan=24>Impossible d'ex?cuter la requ?te ($sql) dans la base : " . mysql_error() ."</td></tr>";
		   exit;
		}
		
		if (mysql_num_rows($result) == 0) {
			echo "<tr><td colspan=24>Aucune entr?e en base</td></tr>";
			exit;
		}
		$i = 0;
		while ($row = mysql_fetch_assoc($result)) {
		$i += 1;
?>
			<?php if ($row["questionDate"] == $auj) {echo '<tr style="background-color: #CFDBEC">';} else {echo '<tr>';}?>
			
			
				<td style=" color: #999999;"><?= $row["internal_id"]; ?></td>
				<td><?= $row["questionDate"]; ?></td>
				<td><?= $row["questionSujet"]; ?></td>
				<td><?= $row["questionContent"]; ?></td>
				<td><?= ucfirst(utf8_decode($row["prenom"])); ?></td>
				<td><?= ucfirst(utf8_decode($row["nom"])); ?></td>
				<td><?= ucfirst(utf8_decode($row["signeAstrologique"])); ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= utf8_decode($row["tel"]); ?></td>
				
				<td><?= utf8_decode($row["conjoint"]); ?></td>
				<td><?= utf8_decode($row["signe2"]); ?></td>
				
				<td><?= utf8_decode($row["pays"]); ?></td>
				<td style="text-align: center;">
                                
                <a href="javascript:void(0)" onclick="javascript:document.getElementById('div-<?= $row["internal_id"]; ?>').style.display='block';">+</a>
            	&nbsp; 
                <a href="javascript:deleteUser('<?= $row["internal_id"]; ?>', '<?= $row["reponseContent"]; ?>')" title="Supprimer le profil de l'utilisateur 
                (<?= utf8_decode($row["nom"]); ?> <?= utf8_decode($row["prenom"]); ?>)">x</a>
            
                <div id="div-<?= $row["internal_id"]; ?>" class="more" style="display: none;">
                
                    <a href="javascript:void(0)" onclick="javascript:document.getElementById('div-<?= $row["internal_id"]; ?>').style.display='none';" 
                    style=" float: right;">Fermer</a>       
                    
                    <b>Informations complementaires :</b>
                    <br /><br />
                    <strong>Date de naissance :</strong>			<?= ret_date($row["dateNaissance"]); ?><br />
                    <strong>Sexe :</strong> &nbsp;					<?= ucfirst($row["sexe"]); ?><br />
                    <strong>Ville :</strong> &nbsp; 				<?= $row["ville"]; ?><br />
                    <strong>IP:</strong> &nbsp; 				<?= $row["ip_adress"]; ?><br />
                    
                </div>

                </td>
			</tr>
            
		<?php
		}
?>
<?php
		mysql_free_result($result);
		destroyConnection($db_link);
?>
		</table>

		
		<div class="indexation">
			<?php echo $indexation; ?>
		</div>
        
	<div class="indexation" style="text-align:justify; margin-top: 25px;line-height:30px">
			<?php echo $indexation2; ?>
		</div>
		
		</div>
</div>
</div>

<div id="footer">
	
    Espace administration <?php echo $companySite; ?>
    
</div>
</div>


</body>
</html>