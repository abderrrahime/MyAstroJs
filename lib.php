<?php

$A_SIGNE=array
(
  'belier', 'taureau', 'gemeaux', 'cancer', 'lion', 'vierge', 'balance', 'scorpion',
  'sagittaire', 'capricorne', 'verseau', 'poissons'
);
  
  function curl($s_url, $i_timeout=5)
  {
    $a_header=array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
                    "Cache-Control: max-age=0",
                    "Connection: keep-alive",
                    "Keep-Alive: 300",
                    "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
                    "Accept-Language: fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3");
    $a_userAgent=array(
                   'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:9.0a2) Gecko/20111101 Firefox/9.0a2',
                   'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:9.0) Gecko/20100101 Firefox/9.0',
                   'Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
                   'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:6.0a2) Gecko/20110613 Firefox/6.0a2',
                   'Mozilla/5.0 (X11; Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0',
                   'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0',
                   'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:5.0a2) Gecko/20110524 Firefox/5.0a2',
                   'Mozilla/5.0 (Windows NT 6.1; U; ru; rv:5.0.1.6) Gecko/20110501 Firefox/5.0.1 Firefox/5.0.1',
                   'Mozilla/5.0 (X11; U; Linux i586; de; rv:5.0) Gecko/20100101 Firefox/5.0',
                   'Mozilla/5.0 (X11; FreeBSD amd64; rv:5.0) Gecko/20100101 Firefox/5.0',
                   'Mozilla/5.0 (X11; Arch Linux i686; rv:2.0) Gecko/20110321 Firefox/4.0',
                   'Mozilla/5.0 (Windows NT 6.1; rv:2.0) Gecko/20110319 Firefox/4.0',
                   'Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10'
                 );
    $i_nbUser=mt_rand(0, count($a_userAgent)-1);
    $r_curl=curl_init($s_url);
    curl_setopt_array($r_curl, array(
                                 CURLOPT_USERAGENT=>$a_userAgent[$i_nbUser],
                                 CURLOPT_HTTPHEADER=>$a_header,
                                 CURLOPT_CONNECTTIMEOUT=>5,
                                 CURLOPT_FOLLOWLOCATION=>false,
                                 CURLOPT_HEADER=>false,
                                 CURLOPT_RETURNTRANSFER=>true
                                 ));
    $s_contenu=curl_exec($r_curl);
    $i_codeRetour=curl_getinfo($r_curl, CURLINFO_HTTP_CODE);
    if ($i_codeRetour!==200 or $s_contenu===false)
      erreur('Execution curl '.$s_url.' �chou�e, code retour '.$i_codeRetour.' ('.__FILE__.' - '.__LINE__.')');
    if ( strpos($s_contenu,'Moved Permanently')!==false )
      erreur('Contenu non attendu : '.$s_contenu.' ('.__FILE__.' - '.__LINE__.')');
	curl_close($r_curl);
    //echo'<pre>';var_dump($s_contenu);echo'</pre>';
    return $s_contenu;
  }

function erreur($s_erreur)
{
  exit($s_erreur);
  //mail(S_MAIL_TO, 'Erreur cron', $s_erreur, 'From: cron ellevoyance <cron@ellevoyance.com>');
}



global $asia_bottom;
$asia_bottom='<center> <a href="http://www.asiaflash.com/horoscope-2013/" target="_blank"><font size="1">Horoscope 2013</font></a> | <a href="http://www.asiaflash.com/tarot/" target="_blank"><font size="1">Tarot gratuit</font></a> | <a href="http://www.asiaflash.com/ascendant/" target="_blank"><font size="1">Ascendant</font></a> <a href="http://www.asiaflash.com/voyance/" target="_blank"><font size="1">Voyance</font></a> | <a href="http://www.asiaflash.com/" target="_blank"><font size="1">Horoscope</font></a> | <a href="http://www.asiaflash.com/ajout/partenariat.shtml" target="_blank"><font size="1">� AsiaFlash.com</font></a> </center>';


$months = array ('Janvier','F�vrier','Mars','Avril','Mai','Juin','Juillet','Ao�t','Septembre','Octobre','Novembre','D�cembre');
function html2txt($html){
	$flag=false;
	// $html='aaaaaaaaaa';
	$search = '`<([^>]+)>`';
	$replace = '';
	$text = preg_replace($search, $replace, $html);
	return $text;
}
function utf8_encode_array($array){
	foreach($array as $k=>$v)
	{
		if(is_string($v))
			$res[utf8_encode($k)]=utf8_encode($v);
		else if(is_array($v))
			$res[utf8_encode($k)]=utf8_encode_array($v);
		else
			$res[utf8_encode($k)]=$v;
	}
	return $res;
}
function GetMoisFR($mois='')
{
	if($mois=='')
		$mois=date('n');
	global $months;
	return $months[$mois-1];
}

function GetDateFR()
{
	$date=date('d n Y');
	$exp=explode(' ',$date);
	$date=$exp[0].' '.GetMoisFR($exp[1]).' '.$exp[2];
	return $date;
}

function GetSemaineFR()
{
	$date=date('N');
	$time1= time() - ((((int)$date)-1) * 24 * 60 * 60);
	$time2= time() + ((7-((int)$date)) * 24 * 60 * 60);
	$jour1=date('j',$time1);
	$mois1=date('n',$time1);
	$annee1=date('Y',$time1);

	$jour2=date('j',$time2);
	$mois2=date('n',$time2);
	$annee2=date('Y',$time2);
	$date=$jour1;
	if($mois1<>$mois2)
	$date.=' '.GetMoisFR($mois1);
	if($annee1<>$annee2)
		$date.=' '.$annee1;
	$date.=' au '.$jour2.' '.GetMoisFR($mois2).' '.$annee2;
	return $date;
}

function calcul_destiny($date='01031986')
{
	$len=strlen($date);
	while($len>1)
	{
		$n=0;
		for($i=0;$i<$len;$i++)
		{
			$n=$n+$date[$i];
		}
		$date=''.$n;
		$len=strlen($date);
	}
	return $n;
}

function read_numerologie($num,$type=0 /*0=>Ann�e, 1=>amour, 2=>personnalit�*/, $sexe='f'){

	$sexes=array('h'=>'homme', 'f'=>'femme');
	$text=array(0=>'numerologie_2013_num', 1=>'test_amoureux_numerologie_sexe', 2=>'personnalite_num',3=>'etapes_vie_numero');


	$fichier='http://www.asiaflash.com/horoscope/rss_'.str_replace('sexe',$sexes[$sexe],$text[$type]).'_'.$num.'.xml';

	$rss=lit_rss($fichier,array("title","description"));
	$result=$rss;
	$desc=$result["description"];
	$desc=explode(htmlspecialchars('</center>'),$desc);
	$desc=explode(htmlspecialchars('<center>'),$desc[1]);
	$desc=$desc[0];
	if($type<2)
	{
		$desc=explode(htmlspecialchars('<b>'),$desc);
		unset($desc[0]);
		foreach($desc as $k=>$v)
		{
			$arr=explode(htmlspecialchars('</b>'),str_replace(htmlspecialchars('<br>'),'',$v));
			$desc2[($arr[0])]=$arr[1];
		}
		$desc=$desc2;
	}
	else
	{
		$desc=explode(htmlspecialchars('<li>'),$desc);
		$desc=str_replace(htmlspecialchars('<br>'),'',$desc);
		$desc=str_replace(htmlspecialchars('<br />'),'',$desc);
		unset($desc[0]);
	}

	$result["description"]=$desc;
	global $asia_bottom;
	$result['asiabottom']=$asia_bottom;
	return $result;
}

function read_astrologie($signe,$sexe,$amour=0){

	$sexes=array(0=>array('h'=>'_masculin', 'f'=>'_feminin'),1=>array('h'=>'_homme', 'f'=>'_femme'),2=>array('h'=>'','f'=>''));
	$text=array(0=>'portrait_signe', 1=>'compat_amoureuses',2=>'personnalite_signe');
	$sexe=$sexes[$amour][strtolower($sexe)]; //ou 'masculin'
	$fichier='http://www.asiaflash.com/horoscope/rss_'.$text[$amour].$sexe.'_'.$signe.'.xml';

	$rss=lit_rss($fichier,array("title","description"));
	$result=$rss;

	$desc=$result["description"];
	if($amour==1)
	{
		$desc=explode(htmlspecialchars('</center>'),$desc);
		$desc=explode(htmlspecialchars('<center>'),$desc[1]);
		$desc=explode(htmlspecialchars('<b>'),$desc[0]);
		unset($desc[0]);
		foreach($desc as $k=>$v)
		{
			$arr=explode(htmlspecialchars('</b>'),str_replace(htmlspecialchars('<br>'),'',$v));
			$desc2[($arr[0])]=$arr[1];
		}
		$desc=$desc2;
	}
	else
	{
		$desc=str_replace(htmlspecialchars('<br>'),'',$desc);
		$desc=str_replace(htmlspecialchars('<br/>'),'',$desc);
		$desc=str_replace(htmlspecialchars('<br />'),'',$desc);
		$desc=explode(htmlspecialchars('<center>'),$desc);
		$desc=explode(htmlspecialchars('<li>'),$desc[1]);
		unset($desc[0]);
	}
	$result["description"]=$desc;
	global $asia_bottom;
	$result['asiabottom']=$asia_bottom;
	return $result;
}


function read_horoscope_rss($fichier,$mode=0){
	if($mode==2)
		return read_horoscope_rss2($fichier);
	if($mode==4)
		return read_horoscope_rss3($fichier);
	$rss=lit_rss($fichier,array("title","link","description","pubDate"));

	$desc=utf8_encode($rss['description']);
	$arr=explode(htmlspecialchars('<b>'),$desc);
	unset($arr[0]);
	$arr=implode('<b>',$arr);

	$arr=explode(htmlspecialchars('<a href'),$arr);



	$arr=explode('<b>',$arr[0]);
	foreach($arr as $k=>$v)
	{
		$arr1[$k]=explode(htmlspecialchars('</b><br>'),$v);
	}
	foreach($arr1 as $k=>$v)
	{
		$val=implode('_',explode(' ',str_replace('�','e',mb_strtolower($v[0],'utf8'))));
		if($mode==0)
		{
			$val=explode('_-_',$val);
			$val=$val[1];
		}
		$arr2[$val]=str_replace('<em>','<br/><br/><em>',str_replace('<br>','',htmlspecialchars_decode($v[1])));
	}

	$result['desc']=$arr2;
	$result['pubDate']=$rss['pubDate'];
	$result['title']=$rss['title'];


	global $asia_bottom;
	$result['asiabottom']=$asia_bottom;
	return $result;
}

function read_horoscope_rss3($fichier){

	$fichier=$fichier;

	$rss=lit_rss($fichier,array("title","description"));
	$result=$rss;
	$desc=$result["description"];
	$desc=utf8_encode($result["description"]);
	$desc=str_replace('&lt;','<',$desc);
	$desc=str_replace('&gt;','>',$desc);

	$desc=explode('</center>',$desc);
	$desc=explode('<center>',$desc[1]);
	$desc=explode('<li>',$desc[0]);
	// print_r($desc);
	$result["desc"]=$desc;
	global $asia_bottom;
	$result['asiabottom']=$asia_bottom;
	return $result;
}
function read_horoscope_rss2($fichier){
	$rss=lit_rss($fichier,array("title","link","description","pubDate"));

	$desc=utf8_encode($rss['description']);
	$arr=explode(htmlspecialchars('<b>'),$desc);
	unset($arr[0]);
	foreach($arr as $k=>$v)
	{
		$arr1=explode(htmlspecialchars('</b>'),$v);
		$arr2[implode('_',explode(' ',str_replace('�','e',mb_strtolower($arr1[0],'utf8'))))]=str_replace(htmlspecialchars('<em>'),'<br/><br/><em>',str_replace(htmlspecialchars('<br>'),'',htmlspecialchars_decode($arr1[1])));
	}
	$result['desc']=$arr2;

	$result['pubDate']=$rss['pubDate'];
	$result['title']=$rss['title'];


	global $asia_bottom;
	$result['asiabottom']=$asia_bottom;
	return $result;
}

function lit_rss($fichier,$objets) {

	// on lit tout le fichier
	if($chaine = curl($fichier)) {

		// on d�coupe la chaine obtenue en items
		$tmp = preg_split("/<\/?"."item".">/",$chaine);

		// pour chaque item
		for($i=1;$i<sizeof($tmp)-1;$i+=2)

			// on lit chaque objet de l'item
			foreach($objets as $k=>$objet) {

				// on d�coupe la chaine pour obtenir le contenu de l'objet
				$tmp2 = preg_split("/<\/?".$objet.">/",$tmp[$i]);

				// on ajoute le contenu de l'objet au tableau resultat
				$resultat[$i-1][$objet] = @$tmp2[1];

			}
		// on retourne le tableau resultat
		return $resultat[0];
	}
}

function extraction($s_url)
{
	$xml = curl($s_url);
	$rss = simplexml_load_string($xml);
	$lines = explode("\n", $rss->channel->item->description);
	$display_next = false;
	$a_res;

	foreach ($lines as $line)
	{
		if (strlen($line) > 0)
		{
			if ($display_next)
			{
				if (isset($title))
				{
					$a_res[$title]=$line;
				}
				$display_next = false;
			}

			if (strstr($line, 'Amour'))
			{
				$title = 'amour';
				$display_next = true;
			}
			else if (strstr($line, 'Argent'))
			{
				$title = 'argent';
				$display_next = true;
			}
			else if (strstr($line, 'Citation du jour'))
			{
				$title = 'citation_du_jour';
				$display_next = true;
			}
			else if (strstr($line, 'Clin d\'oeil'))
			{
				$title = 'clin_d_oeil';
				$display_next = true;
			}
			else if (strstr($line, 'Famille'))
			{
				$title = 'famille';
				$display_next = true;
			}
			else if (strstr($line, 'Nombre de chance'))
			{
				$title = 'nombre_de_chance';
				$display_next = true;
			}
			else if (strstr($line, 'Sant�'))
			{
				$title = 'sante';
				$display_next = true;
			}
			else if (strstr($line, 'Travail'))
			{
				$title = 'travail';
				$display_next = true;
			}
			else if (strstr($line, 'Vie sociale'))
			{
				$title = 'vie_sociale';
				$display_next = true;
			}
			else if (strstr($line, 'Mes conseils pour l\'ann�e'))
			{
				$title = 'conseils';
				$display_next = true;
			}
		}
	}
	return $a_res;
}
