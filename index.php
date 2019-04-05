<?php
require('function.php');
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
	<!-- Calculatrice -->
	<script type="text/javascript" src="assets/js/calculatrice.js"></script>
    <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="assets/css/calculatrice.css" />
	<!-- Calculatrice [END] -->
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SEARCH | IslandGAME</title>
    <meta name="description" content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps.">
    <meta name="Keywords" content="islandgame,search,gratuit,free,outil,developper,dev,french,francais,gate,portail,vie,privée,open,source,duckduckgo">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
    <!-- OG -->
	<meta property="og:url" content="https://islandgame.fr/search">
	<meta property="og:image:alt" content="Search Logo Icon">
	<meta property="og:site_name" content="SEARCH | IslandGAME" />
	<meta property="og:title" content="SEARCH - IslandGAME"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://islandgame.fr/search/assets/img/favicon.png"/>
    <meta property="og:description" content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps."/>
    <!-- Twitter Card -->
    <meta name="twitter:url" content="https://islandgame.fr/search">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="SEARCH | IslandGAME" />
    <meta name="twitter:title" content="SEARCH - IslandGAME" />
    <meta name="twitter:description" content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps." />
    <meta name="twitter:image" content="https://islandgame.fr/search/assets/img/favicon.png" />

    <meta name="theme-color" content="#0b716b">
    <!-- Manifest -->
    <link rel="manifest" href="manifest.json">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="green">
    <meta name="apple-mobile-web-app-title" content="The Gate">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/img/favicon.png">
    <meta name="msapplication-TileColor" content="#0b716b">
    <!-- End colors and to homescreen -->
    <!-- Bootstrap Core-->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"  media="screen,projection"/>
    <!-- Fork Awesome V1 -->
    <link href="assets/css/fork-awesome.min.css" rel="stylesheet">
    <!-- Stylesheep custom -->
    <link async type="text/css" rel="stylesheet" href="assets/css/custom.css">
</head>
    
<body onLoad="Enter()">
    <div class="background d-block d-sm-none">
        <div class="container">
            <div class="row">
                <div class="col-md-8 aligned-to-quotes">
                    <form action="https://www.qwant.com/?q=" method="GET">
                        <input type="search" class="form-control card-shadow" placeholder="Recherche avec Qwant" name="q" autofocus autocomplete="on">
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-0">
                    <div class="card">
                        <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                        <div class="card-body card-shadow">
                            <blockquote class="blockquote mb-0">
                                <?= randCitation("quotes.json") ?>
                            </blockquote>
                            <a class="pointer" data-toggle="modal" data-target="#Quotes"><span class="color-gate-text btn-help"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
                        	<a href="quotes.php"><span class="color-gate-text blockquote-list"><i class="fa fa-list-ul" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gate-footer">
                <p>Background from Unsplash
                </p>
            </div>
        </div>
    </div>
    <div class="background d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 aligned-to-quotes">
                    <form action="https://www.qwant.com/?q=" method="GET" target="_blank">
                        <input type="search" class="form-control card-shadow" id="BarreDeRecherche" placeholder="Rechercher avec Qwant ou avec les réseaux sociaux ci-dessous" name="q" autofocus autocomplete="on">
                    </form>
                    <div class="row">
                        <div class="col-md-12 aligned-to-quotes text-center text-shadow">
                        	<a class="btn btn-lg wikipedia-color margin-to-2 card-shadow pointer"onclick="boutonWikipedia()" title="Wikipedia" target="_blank"><i class="fa fa-wikipedia-w"></i></a>
                        	<a class="btn btn-lg youtube-color margin-to-2 card-shadow pointer" onclick="boutonYoutube()" title="YouTube" target="_blank"><i class="fa fa-youtube-play"></i></a>
                        	<a class="btn btn-lg twitter-color margin-to-2 card-shadow pointer" onclick="boutonTwitter()" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        	<a class="btn btn-lg spotify-color margin-to-2 card-shadow pointer" onclick="boutonSpotify()" title="Spotify" target="_blank"><i class="fa fa-spotify"></i></a>
                        	<a class="btn btn-lg soundcloud-color margin-to-2 card-shadow pointer" onclick="boutonSoundcloud()" title="SoundCloud" target="_blank"><i class="fa fa-soundcloud"></i></a>
                            <a class="btn btn-lg reddit-color margin-to-2 card-shadow pointer" onclick="boutonReddit()" title="Reddit" target="_blank"><i class="fa fa-reddit"></i></a>
                            <!-- <a class="btn btn-lg unsplash-color margin-to-2 card-shadow pointer" onclick="boutonUnsplash()" title="Unsplash" target="_blank"><i class="fa fa-camera"></i></a> -->
                            <a class="btn btn-lg lastfm-color margin-to-2 card-shadow pointer" onclick="boutonLastfm()" title="LastFM" target="_blank"><i class="fa fa-lastfm"></i></a>
                            <a class="btn btn-lg devdocs-color margin-to-2 card-shadow pointer"onclick="boutonDevdocs()" title="DevDocs" target="_blank"><i class="fa fa-code"></i></a>
                            <a class="btn btn-lg stackoverflow-color margin-to-2 card-shadow pointer"onclick="boutonStackoverflow()" title="StackOverflow" target="_blank"><i class="fa fa-stack-overflow"></i></a>
                            <a class="btn btn-lg github-color margin-to-2 card-shadow pointer" onclick="boutonGithub()" title="GitHub" target="_blank"><i class="fa fa-github"></i></a>
                            <a class="btn btn-lg google-color margin-to-2 card-shadow pointer"onclick="boutonGoogle()" title="Google" target="_blank"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-0">
                    <div class="card d-none d-md-block">
                        <div class="card-body card-shadow horloge">
                            <span id="date_heure"></span>
                            <h6><noscript>Veuillez activer Javascript pour l'horloge et les boutons. </noscript></h6>
                            <a class="pointer" data-toggle="modal" data-target="#Time"><span class="color-gate-text btn-help"title="Informations"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <div class="card">
                        <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                        <div class="card-body card-shadow">
                            <blockquote class="blockquote mb-0">
                                <?= randCitation("quotes.json") ?>
                            </blockquote>
                            <a class="pointer" data-toggle="modal" data-target="#Quotes"><span class="color-gate-text btn-help" title="Informations"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
                        	<a href="quotes.php"><span class="color-gate-text blockquote-list" title="Liste des citations"><i class="fa fa-list-ul" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body card-shadow">
                            <a class="pointer" data-toggle="modal" data-target="#Calc"><span class="color-gate-text btn-calc" title="Calculatrice"><i class="fa fa-calculator" aria-hidden="true"></i></span></a>
                            <a class="pointer" data-toggle="modal" data-target="#Calendar"><span style="left: 75px" class="color-gate-text btn-calendar" title="Calendrier"><i class="fa fa-calendar-o" aria-hidden="true"></i></span></a>
                            <a class="pointer" data-toggle="modal" data-target="#News"><span style="left: 45px" class="color-gate-text btn-news" title="Actualité"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gate-footer">

                <p><a class="pointer" data-toggle="modal" data-target="#Settings"><span class="btn-settings"><i class="fa fa-cog" aria-hidden="true"></i></span></a>Background from Unsplash</p>
            </div>
        </div>
    </div>

    <!-- Page Info [DISABLE] -->
    <div class="modal fade" id="Info" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Informations</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <ul>
              <li>Developped by <a class="color-gate-text" href="https://thomasbnt.fr/" target="_blank">Thomas Bnt</a> - Version <span class="color-gate-text">1.0.1</span></li>
              <li>Background recovered randomly from <a class="color-gate-text" href="https://unsplash.com/collections/520359/paysages-background" target="_blank">Unsplash</a></li>
              <li>The project is <a class="color-gate-text" href="https://github.com/thomasbnt/The-Gate" target="_blank" rel="noopener">open source</a>, and <a class="color-gate-text" href="https://github.com/thomasbnt/The-Gate#how-to-use-the-gate" target="_blank" rel="noopener">help is at your fingertips</a>.</li>
              <li>See all quotes <a class="color-gate-text" href="quotes.php">here</a>.</li>
              <li>The CSS (stylesheet) is under <a href="https://thomasbnt.fr/cgu/" class="color-gate-text" target="_blank" rel="noopener">TOS</a>
              <li>Thanks to <a class="color-gate-text" href="https://github.com/thomasbnt/The-Gate/graphs/contributors">all contributors</a> !</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Citation Info -->
    <div class="modal fade" id="Quotes" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Citation Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            Les citations sont des phrases stockées dans un fichier.<br />
            Vous pouvez en rajouter ou en supprimer grâce à <a href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a>.<br />
            Vous pouvez voir la liste des citations <a href="quotes.php">ici</a>.
          </div>
        </div>
      </div>
    </div>

    <!-- Calendar -->
    <div class="modal fade" id="Calendar" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Calendrier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <strong>Patentiez !</strong>
            <p>Cela va arriver.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- News -->
    <div class="modal fade" id="News" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Actualité</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <strong>Patentiez !</strong>
            <p>Cela va arriver.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Calculatrice -->
    <div class="modal fade" id="Calc" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Calculatrice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <center>
            	<table class="calculatrice" id="calc">
            <tr>
                <td colspan="4" class="calc_td_resultat">
                    <input type="text" readonly="readonly" name="calc_resultat" id="calc_resultat" class="calc_resultat" onkeydown="javascript:key_detect_calc('calc',event);" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&larr;" onclick="javascript:f_calc('calc','nbs');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="-" onclick="javascript:f_calc('calc','-');" />
                </td>
            </tr>
                        <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="x" onclick="javascript:f_calc('calc','*');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&divide;" onclick="javascript:f_calc('calc','');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&plusmn;" onclick="javascript:f_calc('calc','+-');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="=" onclick="javascript:f_calc('calc','=');" />
                </td>
            </tr>
        </table>
        <script type="text/javascript">
                document.getElementById('calc').onload=initialiser_calc('calc');
        </script>
            </center>
          </div>
        </div>
      </div>
    </div>

    <!-- Horloge Info -->
    <div class="modal fade" id="Time" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Horloge Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            L'horloge affiche l'heure et la date actuelle.
          </div>
        </div>
      </div>
    </div>

    <!-- Settings Panel -->
    <div class="modal fade" id="Settings" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Paramètre(s)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <strong>Patentiez !</strong>
            <p>Cela va arriver.</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script defer src="assets/js/popper.min.js"></script>
    <script defer src="assets/js/bootstrap.min.js"></script>
    <script defer src="assets/js/cache-polyfill.js"></script>
    <!----- For Stats, delete me! ----->
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = _paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//analytics.thomasbnt.fr/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '3']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Code -->
    <script>
    if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js').then(function(registration) {
        console.log('Service worker registration succeeded:', registration);
    }, function(error) {
        console.log('Service worker registration failed:', error);
    });
    } else {
    console.log('Service workers are not supported.');
    }
    </script>
    <!-- Init -->
    <script type="text/javascript" src="assets/js/init.js"></script>
    <!-- L'heure tourne .. -->
    <script type="text/javascript">window.onload = date_heure('date_heure');</script>
</body>
</html>
