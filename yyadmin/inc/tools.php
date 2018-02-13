<?php
/* INCLUDES REQUIRED FILES */
define('ROOT_PATH',dirname(dirname(dirname(__FILE__))));
define('ADMIN_PATH',ROOT_PATH.'/yyadmin/');
define('ADMIN_URL','http://www.myastro.fr/yyadmin/');
define('ADMIN_IMG', ADMIN_URL.'images/');
define('ADMIN_JS', ADMIN_URL.'js/');
define('ADMIN_CSS', ADMIN_URL.'css/');

  require_once(ROOT_PATH.'/inc/config.php');
  require_once(ROOT_PATH.'/inc/bdd.php');      // New mysql Class From Wordpress : Wpdb
  require_once(ROOT_PATH.'/lib/Tracker/Tracker.class.php'); 

/**
 * Authentification
 * @param type $base
 */  
function isAdmin($base){
    if($_SESSION['adminStatus'] != 'isConnected'){
        header('Location: '.$base.'login.php');
        exit();
    }
}

/**
 * 
 * @param string $date
 * @return string
 */
function ret_date($date){
    $annee = substr($date, 0, 4);
    $mois = substr($date, 5, 2);
    $jour = substr($date, 8, 2);
    $date = $jour.'.'.$mois.'.'.$annee;
    return $date;
}
        
/*
* function removeHTML
* Manipule la chaîne pour la renvoyer sans HTML.
* 
* param string : texttovalid
*
* return string
*/
function removeHTML($texttovalid){
		$texttovalid = trim($texttovalid);
		if(strlen($texttovalid)>0){
			$texttovalid = htmlspecialchars(stripslashes($texttovalid));
		}
		return $texttovalid;
}
/*
* function decoder
* Décode en le chaine en utf8 et remplace les retours chariots
* 
* param string : texte
*
* return string
*/
function decoder($texte){
  $texte = utf8_decode($texte);
  $texte = str_replace("\r", "\n", $texte);
  $texte = str_replace("'", "\'", $texte);
  return $texte;
}

/*
* function uuid
* Génère un identifiant unique. Utilité ?
* 
* return string
*/
function uuid() {
  
   // The field names refer to RFC 4122 section 4.1.2
   return sprintf('%04x%04x-%04x-%03x4-%04x-%04x%04x%04x',
       mt_rand(0, 65535), mt_rand(0, 65535), // 32 bits for "time_low"
       mt_rand(0, 65535), // 16 bits for "time_mid"
       mt_rand(0, 4095),  // 12 bits before the 0100 of (version) 4 for "time_hi_and_version"
       bindec(substr_replace(sprintf('%016b', mt_rand(0, 65535)), '01', 6, 2)),
           // 8 bits, the last two of which (positions 6 and 7) are 01, for "clk_seq_hi_res"
           // (hence, the 2nd hex digit after the 3rd hyphen can only be 1, 5, 9 or d)
           // 8 bits for "clk_seq_low"
       mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535) // 48 bits for "node" 
   ); 
}

/*
* function get_signe_astro
* Renvoie le signe astro en fonction du jour + mois de naissance 
*
* @param string : day
* @param string : month 
* 
* return string
*/
function get_signe_astro( $day ,$month ){

  if( (!$day || !$month) OR ($day == '00' || $month == '00' ))
    return null;
	if((($month==3) 		   && ($day>=21) 	|| (($month==4) 	&& $day<=20)))	{$signe = "belier";}
	else if((($month==4) 	 && ($day>20)) 	|| (($month==5) 	&& ($day<=21)))	{$signe = "taureau";}
	else if((($month==5) 	 && ($day>21)) 	|| (($month==6) 	&& ($day<=21)))	{$signe = "gemeaux";}
	else if((($month==6) 	 && ($day>21)) 	|| (($month==7) 	&& ($day<=22)))	{$signe = "cancer";}
	else if((($month==7) 	 && ($day>=23)) || (($month==8) 	&& ($day<=23)))	{$signe = "lion";}
	else if((($month==8) 	 && ($day>23)) 	|| (($month==9) 	&& ($day<=23)))	{$signe = "vierge";}
	else if((($month==9) 	 && ($day>23)) 	|| (($month==10) 	&& ($day<=23)))	{$signe = "balance";}
	else if((($month==10)  && ($day>21)) 	|| (($month==11) 	&& ($day<=22)))	{$signe = "scorpion";}
	else if((($month==11)  && ($day>22)) 	|| (($month==12) 	&& ($day<=22)))	{$signe = "sagittaire";}
	else if((($month==12)  && ($day>22)) 	|| (($month==1) 	&& ($day<=20)))	{$signe = "capricorne";}
	else if((($month==1) 	 && ($day>20)) 	|| (($month==2) 	&& ($day<19)))	{$signe = "verseau";}
	else if((($month==2) 	 && ($day>=19)) || (($month==3) 	&& ($day<21)))	{$signe = "poissons";}

	return $signe;
}
/*
* function checkPhoneNumber
*	Vérifie la véracité d'un numéro de téléphone en fonction du pays d'entrée	
*   Doc : http://fr.wikipedia.org/wiki/Num%C3%A9ro_de_t%C3%A9l%C3%A9phone
*
*	@param string : tel
*	@param string : pays ( default = '') 
*	
*	return array
*/
function checkPhoneNumber($tel, $pays = ''){
	$formated_phone = '';
  $msg = NULL;
	$tel = preg_replace("#[^\d]#", "", $tel);
	switch ($pays) {
		case "FR":
			//------ Numéro Français ( on exclue les 08 )
   			if(!preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)?0?[12345679]{1}[0-9]{8}$#', $tel)){
   				$msg .= 'Numéro de téléphone (FR) incorrect<br />';
   			}
   			else{
   				if(preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)0{1}[12345679]{1}[0-9]{8}$#', $tel)){
   					$msg = 'Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays. <small><i>ex : 336xxxxxxxxx </i></small>';
   				}
   			}
   			$formated_phone = preg_replace("#^(330|5900|5940|2620|5960|2690|6870|6890|5900|5080|6810)(\d{8})$#","0$2",$tel);  // Pas d'indicatif pour les num français
   			$formated_phone = preg_replace("#^(33|590|594|262|596|269|687|689|590|508|681)(\d{8,9})$#","0$2",$formated_phone);
    	break;
    	case "CH" :
   			//------ Numéro Suisse
    		if(!preg_match('#(^0{1}[0-9]{9}$)#', $tel)){ // ex : 0794872254
    			if(preg_match('#^(0041|41){1}0{1}[0-9]{9}$#',$tel)){ // ex 410794872254
    				$msg = '(ERR 1) : Numéro de téléphone (CH) incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 4179xxxxxxx</i></small>';
    			}
    			else{
    				if(preg_match('#^(0041|41){1}[0-9]{9}$#',$tel)){ // 41794872254 
    					unset($msg);
    				}
    				else{
    					$msg = '(ERR 2) : Numéro de téléphone (CH) incorrect<br />';
    				}
   				}
   			}
   			
   			$formated_phone = preg_replace("#^(0041){1}(\d+)#", "41$2", $tel);
   			$formated_phone = preg_replace("#^(0){1}(\d+)#", "41$2", $formated_phone);

    	break;
    	case "CA" :
   			//------ Numéro Canadien
    		if(!preg_match('#(^1?[0-9]{10}$)#', $tel)){
   				$msg = 'Numéro de téléphone (CA) incorrect<br />';
   			}
   			if(strlen($tel) == 10){
   				$formated_phone = "1".$tel;
   			}
   			else{
   				$formated_phone = $tel;
   			}
    	break;
    	case "BE":
   			//------ Numéro Belge
    		switch(strlen($tel)){
    			case 9 :
	    			// 0ZZCCCCCC
	    			if(preg_match("#^0{1}(\d{8})$#",$tel)){
	    				$formated_phone = "32".substr($tel,1);
	    			}
	    			else{
	    				$msg = '(ERR 9) Numéro de téléphone (BE) incorrect<br />';
	    			}
    			break;
    			case 10 :
    				if(preg_match("#^(32){1}(\d{8})$#",$tel)){
    					// OK : 32 75 84 67 59
    					$formated_phone = $tel;
    				}
    				elseif(preg_match("#^(047|048|049){1}[0-9]{7}$#",$tel)){
    					// OK GSM : 0475 45 78 98
    					$formated_phone = "32".substr($tel,1);
    				}
    				else{
    					$msg = "(ERR 10) : Numéro de téléphone (BE) incorrect.";
    				}
    			break;
    			case 11 : 
    				if(preg_match("#^(320){1}(\d{8})$#",$tel)){
    					$msg = "(ERR 11) : Numéro de téléphone incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 3248xxxxxxx</i></small> ";
    				}
    				elseif(preg_match("#^(32){1}(47|48|49){1}(\d){7}#",$tel)){
    					$formated_phone = $tel;
    				}
    				else{
    					$msg = "(ERR 11) : Numéro de téléphone (BE) incorrect.";
    				}
    			break;
    			case 12 :
    				if(preg_match("#^(32){1}(047|048|049){1}\d{7}$#",$tel)){
    					$msg = "(ERR 12) : Numéro de téléphone incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 3248xxxxxxx</i></small> ";
    				}
    				else{
    					$msg = "(ERR 12) : Numéro de téléphone (BE) incorrect.";
    				}
    			break;
    			case 13 :
    			case 14 :
    				if(preg_match("#^(00320){1}#",$tel)){
    					$msg = "(ERR 1314) : Numéro de téléphone incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 003248xxxxxxx</i></small> ";
    				}
    			break;
    			default :
    				$msg = "(ERR D) : Numéro de téléphone (BE) incorrect.";
    			break;
    		}
    	break;
    	case "LU" :
   			//------ Numéro Luxembourgeois
    		if(!preg_match('#(^\d{5,6}$)|(^\d{8}$)|(^6\d{6}$)#', $tel)){
   				$msg = 'Numéro de téléphone (LUX) incorrect (Merci de ne pas donner l\'indicatif.)<br />';
   			}
   			$formated_phone = "352".$tel;
    	break;
    	default :
        // On regarde quand même s'il peut s'agir d'un numéro français
        if(preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)?0?[12345679]{1}[0-9]{8}$#', $tel)){
          $pays = 'FR';
          if(preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)0{1}[12345679]{1}[0-9]{8}$#', $tel)){
            $msg = 'Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays. <small><i>ex : 336xxxxxxxxx </i></small>';
          }
          else{
            $formated_phone = preg_replace("#^(330|5900|5940|2620|5960|2690|6870|6890|5900|5080|6810)(\d{8})$#","0$2",$tel);  // Pas d'indicatif pour les num français
            $formated_phone = preg_replace("#^(33|590|594|262|596|269|687|689|590|508|681)(\d{8,9})$#","0$2",$formated_phone); 
          }
        }
        else{
    		  // Sinon on traite pas, on save tel quel ( puisqu'on a enlevé les non-digits plus haut )
    		  $formated_phone = $tel;
        }
    	break;
	} // End switch
	
	return array(
			"error" => $msg,
			"phone"	=> $formated_phone,
      "pays"  => $pays
			);
}

/*
* function getuser_by
* Récupère un ou plusieurs utilisateurs grâce au params en entrée.
* @todo : Rajouter la possibilité d'utiliser différent opérateur ( autre que AND )
*
* @param array  : selector
* @param array  : condition 
* @param string : limit 
* 
* return array / boolean
*/
function getuser_by($selector=array(), $condition = array(),$limit=''){

  $return = array();
  $where = '';

  switch(count($selector)){
    case 0 :
      $select = '*';
    break;
    case 1 :
      $select = $selector['0'];
    break;
    default:
      $select = implode(',',$selector);
    break;
  }
  if(count($condition) > 0){
    foreach($condition as $champ => $value){
      $where .= ' AND '.$champ.' ="'.$value.'"';
    }
  }

  $request = 'SELECT '.$select.' FROM '. TABLE_USERS .' WHERE 1'.$where.' '.$limit;
  $res = mysql_query($request);
  if(!$res || mysql_num_rows($res) < 1){
    return false;
  }
  else{
    while($e = mysql_fetch_array($res)){
      $return[] = $e;
    }
    return $return;
  }
}

/*
* function return_date
* Renvoie le mois français d'une date au format YYYY/MM/JJ
*
* @param string  : date
* 
* return string
*/
function return_date($date, $mode ='html')
  {
    $mois = substr($date, 5, 2);
    $jour = substr($date, 8, 2);
    switch($mois){
      case '1':
        $mois = 'janvier';
        break;
      case '2':
        $mois = ($mode == 'html') ? 'f&eacute;vrier' : 'février';
        break;
      case '3':
        $mois = 'mars';
        break;
      case '4':
        $mois = 'avril';
        break;
      case '5':
        $mois = 'mai';
        break;
      case '6':
        $mois = 'juin';
        break;
      case '7':
        $mois = 'juillet';
        break;
      case '8':
        $mois = ($mode == 'html') ? 'ao&ucirc;t' : 'août';
        break;
      case '9':
        $mois = 'septembre';
        break;
      case '10':
        $mois = 'octobre';
        break;
      case '11':
        $mois = 'novembre';
        break;
      case '12':
        $mois = ($mode == 'html') ? 'd&eacute;cembre' : 'décembre';
        break;
    }
    $date = $jour.' '.$mois;
    return $date;
  } 

function prepare( $query, $args ) {
  if ( is_null( $query ) )
    return;

  $args = func_get_args();
  array_shift( $args );
  // If args were passed as an array (as in vsprintf), move them up
  if ( isset( $args[0] ) && is_array($args[0]) )
    $args = $args[0];
    $query = str_replace( "'%s'", '%s', $query ); // in case someone mistakenly already singlequoted it
    $query = str_replace( '"%s"', '%s', $query ); // doublequote unquoting
    $query = preg_replace( '|(?<!%)%f|' , '%F', $query ); // Force floats to be locale unaware
    $query = preg_replace( '|(?<!%)%s|', "'%s'", $query ); // quote the strings, avoiding escaped strings like %%s
    array_walk( $args, array( $this, 'escape_by_ref' ) );
  return @vsprintf( $query, $args );
}

/**
 * Return a comma separated string of functions that have been called to get to the current point in code.
 *
 * @link http://core.trac.wordpress.org/ticket/19589
 * @since 3.4.0
 *
 * @param string $ignore_class A class to ignore all function calls within - useful when you want to just give info about the callee
 * @param int $skip_frames A number of stack frames to skip - useful for unwinding back to the source of the issue
 * @param bool $pretty Whether or not you want a comma separated string or raw array returned
 * @return string|array Either a string containing a reversed comma separated trace or an array of individual calls.
 */
function wp_debug_backtrace_summary( $ignore_class = null, $skip_frames = 0, $pretty = true ) {
  if ( version_compare( PHP_VERSION, '5.2.5', '>=' ) )
    $trace = debug_backtrace( false );
  else
    $trace = debug_backtrace();

  $caller = array();
  $check_class = ! is_null( $ignore_class );
  $skip_frames++; // skip this function

  foreach ( $trace as $call ) {
    if ( $skip_frames > 0 ) {
      $skip_frames--;
    } elseif ( isset( $call['class'] ) ) {
      if ( $check_class && $ignore_class == $call['class'] )
        continue; // Filter out calls

      $caller[] = "{$call['class']}{$call['type']}{$call['function']}";
    } else {
      if ( in_array( $call['function'], array( 'do_action', 'apply_filters' ) ) ) {
        $caller[] = "{$call['function']}('{$call['args'][0]}')";
      } elseif ( in_array( $call['function'], array( 'include', 'include_once', 'require', 'require_once' ) ) ) {
        $caller[] = $call['function'] . "('" . str_replace( array( WP_CONTENT_DIR, ABSPATH ) , '', $call['args'][0] ) . "')";
      } else {
        $caller[] = $call['function'];
      }
    }
  }
  if ( $pretty )
    return join( ', ', array_reverse( $caller ) );
  else
    return $caller;
}

function __( $text, $domain = 'default' ) {
  return $text;
}

function login($login, $password){
    $error = false; $msg = null;
    
    if(empty($login) || empty($password)){
        $error = true;
        $msg = "Identifiant ou mot de passe vides.";
    } else {
        //echo DBLOGIN.' - '.DBPASS.' - '.DBNAME.' - '.DBHOST;
        $bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
        $sql = 'SELECT * FROM users WHERE login="'.$login.'"';
        $user = $bdd->get_row($sql);
        
        //echo $sql."<br>";
        //var_dump($user);
        if(!$user){
            $error = true;
            $msg = "Identifiant incorrect.";
        } else {
            if(md5($password) != $user->password){
                $error = true;
                $msg = 'Mot de passe incorrect.';
            }
            if($user->enable == 0){
                $error = true;
                $msg = 'Votre compte a été désactivé.';
            }
        }
    }
    if(!$error){
        load_session($user);
        return array('result'=>true);
    } else {
        return array(
            'result'=> false,
            'msg'=> $msg
        );
    }
}

function load_session($user){
    if(!$user){
        return;
    }

    $_SESSION['nom'] = $user->nom;
    $_SESSION['id'] = $user->id;
    $_SESSION['prenom'] = $user->prenom;
    $_SESSION['mail'] = $user->mail;
    $_SESSION['role'] = $user->role;
    $_SESSION['adminStatus'] = 'isConnected';
}

/**
 * autorise ou non la suite de l'exécution en fonction du role de l'utilisateur authentifié
 * @param array $auth roles autorisés
 */
function secure($auth){
    if(!in_array($_SESSION['role'], $auth)){
        echo '<p class="alert alert-danger">Vous nʼêtes pas authorisé à accéder à cette page.</p>';
        exit;
    }
}