<?php
require('function.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Liste des citation - SEARCH | IslandGAME</title>
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
    <style>
        .card {
            margin: 7px !important;
        }
    </style>
</head>
<body onLoad="Enter()">
<!-- Get all quotes -->
<?php

$json = file_get_contents('quotes.json'); // Get JSON data
$quotes = json_decode($json,true); // Decoding JSON

foreach ($quotes as $key => $quote) {
// For each quotes, get the key and the content
?>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <?php echo '<b>' . $key . '.</b> '. $quote["quote"] . ' - ' . $quote["author"] . '<br>' ;?>
            </div>
        </div>
    </div>

<?php }; ?>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script defer src="assets/js/popper.min.js"></script>
<script defer src="assets/js/bootstrap.min.js"></script>
<!-- Init -->
<script type="text/javascript" src="assets/js/init.js"></script>
<!-- L'heure tourne .. -->
<script type="text/javascript">window.onload = date_heure('date_heure');</script>
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
<noscript><p><img src="//analytics.thomasbnt.fr/piwik.php?idsite=3&rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
</body>
</html>
