<!--    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
    
    <link rel="shortcut icon" href="favicon.ico"> -->
	<script type="text/javascript">
    function date_heure(id){
        date = new Date;
        annee = date.getFullYear();
        moi = date.getMonth();
        mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
        j = date.getDate();
        jour = date.getDay();
        jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        resultat = jours[jour]+' '+j+' '+mois[moi]+' '+annee+' - '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = resultat;
        setTimeout('date_heure("'+id+'");','1000');
        return true;
    }
    </script>
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
	<?php if(isset($_GET['categorie'])){
            if(    $_GET['categorie'] == 'voyance-gratuite'
                || $_GET['categorie'] == 'horoscope-gratuit-bellier-du-jour'
                || $_GET['categorie'] == 'horoscope-gratuit-bellier-du-jour/'
                || $_GET['categorie'] == 'sabonner'
                || $_GET['categorie'] == 'sexualite'
                || $_GET['categorie'] == 'astrologie/personnalite'
            ){ 
                echo '<meta name="robots" content="noindex,follow" />';
            }
        } ?>
    <?php if($_SERVER['PHP_SELF'] == '/index.php'){
     echo '<script type="application/ld+json">
            { "@context": "http://schema.org",
            "@type": "Organization",
            "name": "myastro »,
            "url": "http://'.ROOT_URL.'/",
            "logo": "http://'.ROOT_URL.'/images/logo-V3.png",
            "sameAs": [ "https://twitter.com/MYASTRO1",
            "https://www.facebook.com/pages/Myastro/437290166297323",
            "https://plus.google.com/+MyastroFr"]
            }
            </script>';
    }
    ?>
        <!-- SCRIPT HEATMAPS UPMYBIZ -->
        <script type="text/javascript">
            setTimeout(function(){
                var a=document.createElement("script");
                var b=document.getElementsByTagName("script")[0];
                a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0024/5553.js?"+Math.floor(new Date().getTime()/3600000);
                a.async=true;
                a.type="text/javascript";
                b.parentNode.insertBefore(a,b);
            }, 1);
        </script> 
        <!-- END SCRIPT HEATMAPS UPMYBIZ -->