        <section class="modern-footer">
            <div class="container-fluid">
                <?php include('include/footer_reseaux_sociaux.php');?>
            </div>
            <!-- Copy Right Reserved Section & Social Icons -->
            <div class="footer-border-serpentsoft"></div>

            <footer class="f-copyright">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <nav class="span6 ">
                            <ul class="copyright-links">
                                <li>
                                    <a href="<?= PROTOCOL.'://'.ROOT_URL;?>/a-propos-de-myastro" rel="nofollow">À propos de Myastro</a>
                                    - <a href="<?= PROTOCOL.'://'.ROOT_URL;?>/politique-de-confidentialite" rel="nofollow">Politique de confidentialité</a>
                                    - <a href="<?= PROTOCOL.'://'.ROOT_URL;?>/mentions-legales" rel="nofollow">Mentions légales</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="span6">
                            <p class="pull-right"><?php include('include/footer_copyright.php');?></p>
                        </div>
                    </div>
                </div>
            </footer>
        </section>

        <script src="sscript.js" async defer></script>

        <!-- BLOC TWITTER -->
        <script async defer>
            !function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if(!d.getElementById(id)){
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");
        </script>

        <!-- BLOC FACEBOOK -->
        <script async defer>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- BLOC GOOGLE+ -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <!-- New Remarketing tags -->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 1024378253;
            var google_conversion_label = "ipnICMWfg2EQjYu76AM";
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
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