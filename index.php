<?php
require('function.php');
?>
<!DOCTYPE HTML>
<html lang="fr">

<head>
  <!-- Calendar -->
  <link rel="stylesheet" type="text/css" href="assets/css/calendar.css">
  <script type="text/javascript" src="assets/js/calendar.js"></script>
  <!-- Calendar [END] -->
  <!-- Calculatrice -->
  <script type="text/javascript" src="assets/js/calculatrice.js"></script>
  <script type="text/javascript" async="" src="assets/js/mathjs.js"></script>
  <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="assets/css/calculatrice.css" />
  <!-- Calculatrice [END] -->
  <meta charset="utf-8">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FlashSearch | IslandGAME</title>
  <meta name="description"
    content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps.">
  <meta name="Keywords"
    content="islandgame,search,gratuit,free,outil,developper,dev,french,francais,gate,portail,vie,privée,open,source,duckduckgo">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <!-- OG -->
  <meta property="og:url" content="https://islandgame.fr/search">
  <meta property="og:image:alt" content="Search Logo Icon">
  <meta property="og:site_name" content="FlashSearch | IslandGAME" />
  <meta property="og:title" content="FlashSearch - IslandGAME" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://islandgame.fr/search/assets/img/favicon.png" />
  <meta property="og:description"
    content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps." />
  <!-- Twitter Card -->
  <meta name="twitter:url" content="https://islandgame.fr/search">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="FlashSearch | IslandGAME" />
  <meta name="twitter:title" content="FlashSearch - IslandGAME" />
  <meta name="twitter:description"
    content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps." />
  <meta name="twitter:image" content="https://islandgame.fr/search/assets/img/favicon.png" />

  <meta name="theme-color" content="#0b716b">
  <!-- Manifest -->
  <link rel="manifest" href="manifest.json">
  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="green">
  <meta name="apple-mobile-web-app-title" content="FlashSearch">
  <link rel="apple-touch-icon-precomposed" href="assets/img/favicon.png">
  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="assets/img/favicon.png">
  <meta name="msapplication-TileColor" content="#0b716b">
  <!-- End colors and to homescreen -->
  <!-- Bootstrap Core-->
  <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen,projection" />
  <!-- Fork Awesome V1 -->
  <link href="assets/css/fork-awesome.min.css" rel="stylesheet">
  <!-- OpenSearch -->
  <link title="FlashSearch" type="application/opensearchdescription+xml" rel="search"
    href="https://islandgame.fr/search/assets/opensearch.xml">
  <!-- Stylesheep custom -->
  <link async type="text/css" rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" async type="text/css" href="assets/css/add-component.min.css">
  <!-- Matomo -->
  <script type="text/javascript">
    var _paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
    _paq.push(["setCookieDomain", "*.islandgame.fr"]);
    _paq.push(["setDomains", ["*.islandgame.fr"]]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function () {
      var u = "https://islandgame.fr/analytics/";
      _paq.push(['setTrackerUrl', u + 'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d = document,
        g = d.createElement('script'),
        s = d.getElementsByTagName('script')[0];
      g.type = 'text/javascript';
      g.async = true;
      g.defer = true;
      g.src = u + 'matomo.js';
      s.parentNode.insertBefore(g, s);
    })();
  </script>
  <!-- End Matomo Code -->
</head>

<body onLoad="Enter()">
  <div class="background d-block d-sm-none">
    <div class="container">
      <div class="row">
        <div class="col-md-8 aligned-to-quotes">
          <form action="https://www.duckduckgo.com/?q=" method="GET">
            <input type="search" class="form-control card-shadow" placeholder="Recherche avec DuckDuckGo" name="q"
              autofocus autocomplete="on">
          </form>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-0">
          <div class="card">
            <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right"
                aria-hidden="true"></i></span>
            <div class="card-body card-shadow">
              <blockquote class="blockquote mb-0">
                <?= randCitation("quotes.json") ?>
              </blockquote>
              <a class="pointer" data-toggle="modal" data-target="#Quotes"><span class="color-gate-text btn-help"><i
                    class="fa fa-question-circle" aria-hidden="true"></i></span></a>
              <a href="quotes.php"><span class="color-gate-text blockquote-list"><i class="fa fa-list-ul"
                    aria-hidden="true"></i></span></a>
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
          <form action="https://www.duckduckgo.com/?q=" method="GET" target="_blank">
            <input type="search" class="form-control card-shadow" id="BarreDeRecherche"
              placeholder="Rechercher avec DuckDuckGo ou avec les réseaux sociaux ci-dessous" name="q" autofocus
              autocomplete="on">
          </form>
          <div class="row">
            <div class="col-md-12 aligned-to-quotes text-center text-shadow">
              <a class="btn btn-lg reddit-color margin-to-2 card-shadow pointer" onclick="boutonReddit()"
                title="Reddit"><i class="fa fa-reddit"></i></a>
              <a class="btn btn-lg twitter-color margin-to-2 card-shadow pointer" onclick="boutonTwitter()"
                title="Twitter"><i class="fa fa-twitter"></i></a>
              <a class="btn btn-lg youtube-color margin-to-2 card-shadow pointer" onclick="boutonYoutube()"
                title="YouTube"><i class="fa fa-youtube-play"></i></a>
              <a class="btn btn-lg unsplash-color margin-to-2 card-shadow pointer" onclick="boutonUnsplash()"
                title="Unsplash"><i class="fa fa-camera"></i></a>
              <a class="btn btn-lg wikipedia-color margin-to-2 card-shadow pointer" onclick="boutonWikipedia()"
                title="Wikipedia"><i class="fa fa-wikipedia-w"></i></a>

              <a class="btn btn-lg soundcloud-color margin-to-2 card-shadow pointer" onclick="boutonSoundcloud()"
                title="SoundCloud"><i class="fa fa-soundcloud"></i></a>
              <a class="btn btn-lg lastfm-color margin-to-2 card-shadow pointer" onclick="boutonLastfm()"
                title="LastFM"><i class="fa fa-lastfm"></i></a>
              <a class="btn btn-lg spotify-color margin-to-2 card-shadow pointer" onclick="boutonSpotify()"
                title="Spotify"><i class="fa fa-spotify"></i></a>

              <a class="btn btn-lg devdocs-color margin-to-2 card-shadow pointer" onclick="boutonDevdocs()"
                title="DevDocs"><i class="fa fa-code"></i></a>
              <a class="btn btn-lg stackoverflow-color margin-to-2 card-shadow pointer" onclick="boutonStackoverflow()"
                title="StackOverflow"><i class="fa fa-stack-overflow"></i></a>
              <a class="btn btn-lg github-color margin-to-2 card-shadow pointer" onclick="boutonGithub()"
                title="GitHub"><i class="fa fa-github"></i></a>
              <a class="btn btn-lg google-color margin-to-2 card-shadow pointer" onclick="boutonGoogle()" title="Google"
                target="_blank"><i class="fa fa-google"></i></a>
            </div>
          </div>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-warning"></i>Développement</h5>
            <h6>Cette page est en développement, elle va donc subir d'énorme mise à jour dans le futur !<br /> Vous
              pouvez suivre le dévellopement sur <a target="_blank"
                href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a></h6>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-0">
          <div class="card d-none d-md-block">
            <div class="card-body card-shadow horloge">
              <span id="date_heure"></span><br />
              <h6 class="Timer-Heure"><?= $date = date("d/m/Y"); ?></h6>
              <h6><noscript>Veuillez activer Javascript pour l'horloge et les boutons. </noscript></h6>
              <a class="pointer" data-toggle="modal" data-target="#Time"><span class="color-gate-text btn-help"
                  title="Informations"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
            </div>
          </div>
          <div class="card">
            <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right"
                aria-hidden="true"></i></span>
            <div class="card-body card-shadow">
              <blockquote class="blockquote mb-0">
                <?= randCitation("quotes.json") ?>
              </blockquote>
              <a class="pointer" data-toggle="modal" data-target="#Quotes"><span class="color-gate-text btn-help"
                  title="Informations"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
              <a href="quotes.php"><span class="color-gate-text blockquote-list" title="Liste des citations"><i
                    class="fa fa-list-ul" aria-hidden="true"></i></span></a>
            </div>
          </div>
          <div class="card">
            <div class="card-body card-shadow">
              <a class="pointer" data-toggle="modal" data-target="#Calc"><span class="color-gate-text btn-calc"
                  title="Calculatrice"><i class="fa fa-calculator" aria-hidden="true"></i></span></a>
              <!-- <a class="pointer" data-toggle="modal" data-target="#Calendar"><span style="left: 75px" class="color-gate-text btn-calendar" title="Calendrier"><i class="fa fa-calendar-o" aria-hidden="true"></i></span></a> -->
              <!-- <a class="pointer" data-toggle="modal" data-target="#News"><span style="left: 45px" class="color-gate-text btn-news" title="Actualité"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span></a> -->
              <!-- <a class="pointer" data-toggle="modal" data-target="#Maps"><span style="left: 105px" class="color-gate-text btn-maps" title="Carte"><i class="fa fa-map-o" aria-hidden="true"></i></span></a> -->
              <a class="pointer" data-toggle="modal" data-target="#Settings"><span style="right: 10px"
                  class="color-gate-text btn-settings"><i class="fa fa-cog" aria-hidden="true"></i></a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="gate-footer">

        <p>Background from Unsplash | Version <?php include('VERSION'); ?></p>
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
            <li>Developped by <a class="color-gate-text" href="https://thomasbnt.fr/" target="_blank">Thomas Bnt</a> &
              <a class="color-gate-text" href="https://luchack.fr/" target="_blank">Luc'HACK</a>- Version <span
                class="color-gate-text"><?php include('VERSION'); ?></span></li>
            <li>Background recovered randomly from <a class="color-gate-text"
                href="https://unsplash.com/collections/520359/paysages-background" target="_blank">Unsplash</a></li>
            <li>The project is <a class="color-gate-text" href="https://github.com/thomasbnt/The-Gate" target="_blank"
                rel="noopener">open source</a>, and <a class="color-gate-text"
                href="https://github.com/thomasbnt/The-Gate#how-to-use-the-gate" target="_blank" rel="noopener">help is
                at your fingertips</a>.</li>
            <li>See all quotes <a class="color-gate-text" href="quotes.php">here</a>.</li>
            <li>The CSS (stylesheet) is under <a href="https://thomasbnt.fr/cgu/" class="color-gate-text"
                target="_blank" rel="noopener">TOS</a>
            <li>Thanks to <a class="color-gate-text"
                href="https://github.com/thomasbnt/The-Gate/graphs/contributors">all contributors</a> !</li>
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
          Vous pouvez en rajouter ou en supprimer grâce à <a
            href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a>.<br />
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
          <div class="alert alert-warning">
            <h5><i class="icon fa fa-warning"></i>Développement</h5>
            <h6>Cette page est en développement, elle va donc subir d'énorme mise à jour dans le futur !<br /> Vous
              pouvez suivre le dévellopement sur <a target="_blank"
                href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a></h6>
          </div>
          <?php include('p/calendar.php') ?>
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
          <div class="alert alert-warning">
            <h5><i class="icon fa fa-warning"></i>Développement</h5>
            <h6>Cette page est en développement, elle va donc subir d'énorme mise à jour dans le futur !<br /> Vous
              pouvez suivre le dévellopement sur <a target="_blank"
                href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a></h6>
          </div>
          <?= include('/p/news.php') ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Carte -->
  <div class="modal fade" id="Maps" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Carte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-warning">
            <h5><i class="icon fa fa-warning"></i>Développement</h5>
            <h6>Cette page est en développement, elle va donc subir d'énorme mise à jour dans le futur !<br /> Vous
              pouvez suivre le dévellopement sur <a target="_blank"
                href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a></h6>
          </div>
          <?= include('p/maps.php') ?>
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
          <?php include('p/calc.php') ?>
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
          <div class="alert alert-warning">
            <h5><i class="icon fa fa-warning"></i>Développement</h5>
            <h6>Cette page est en développement, elle va donc subir d'énorme mise à jour dans le futur !<br /> Vous
              pouvez suivre le dévellopement sur <a target="_blank"
                href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a></h6>
          </div>
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
    var _paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
    _paq.push(["setCookieDomain", "*.islandgame.fr"]);
    _paq.push(["setDomains", ["*.islandgame.fr"]]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function () {
      var u = "https://analytics.islandgame.fr/";
      _paq.push(['setTrackerUrl', u + 'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d = document,
        g = d.createElement('script'),
        s = d.getElementsByTagName('script')[0];
      g.type = 'text/javascript';
      g.async = true;
      g.defer = true;
      g.src = u + 'matomo.js';
      s.parentNode.insertBefore(g, s);
    })();
  </script>
  <!-- End Matomo Code -->
  <script>
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('sw.js').then(function (registration) {
        console.log('Service worker registration succeeded:', registration);
      }, function (error) {
        console.log('Service worker registration failed:', error);
      });
    } else {
      console.log('Service workers are not supported.');
    }
  </script>
  <!-- Init -->
  <script type="text/javascript" src="assets/js/init.js"></script>
  <!-- L'heure tourne .. -->
  <script type="text/javascript">
    window.onload = date_heure('date_heure');
  </script>
</body>

</html>
