<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{if isset($ogSiteTitle)}Aduvi | {$ogSiteTitle}{else}Aduvi{/if}</title>

    <meta name="keywords" content="{if isset($siteKeywords)}{$siteKeywords}{else}{/if}" runat="server">
    <meta name="description" content="{if isset($siteDescription)}{$siteDescription}{else}Aduvi{/if}" runat="server">

    <meta property="fb:app_id" content="1537002183233567">

    <meta property="og:url" content="{if isset($ogSiteUrl)}{$ogSiteUrl}{else}http://{$smarty.server.HTTP_HOST}{/if}">
    <meta property="og:title" content="{if isset($ogSiteTitle)}Aduvi | {$ogSiteTitle}{else}Aduvi{/if}">
    <meta property="og:site_name" content="Aduvi">
    <meta property="og:description" content="{if isset($ogSiteDescription)}{$ogSiteDescription}{else}Aduvi{/if}">
    <!-- <meta property="og:image" content="{if isset($ogSiteImagem)}{$ogSiteImagem}{else}http://{$smarty.server.HTTP_HOST}{/if}"> -->

    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website">

    <link rel="canonical" href="{if isset($ogSiteUrl)}{$ogSiteUrl}{else}http://{$smarty.server.HTTP_HOST}{/if}">

    <!-- <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico"> -->
    <!-- <link type="image/x-icon" rel="icon" href="/favicon.ico"> -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/view/css/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/view/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/css/font-awesome.min.css">
    <link rel="stylesheet" href="/view/css/owl.carousel.css">
    <link rel="stylesheet" href="/view/css/animate.css">
    <link rel="stylesheet" href="/view/css/slicknav.css">
    <link rel="stylesheet" href="/view/css/normalize.css">
    <link rel="stylesheet" href="/view/css/main.css">
    <link rel="stylesheet" href="/view/css/set1.css">
    <link rel="stylesheet" href="/view/css/responsive.css">
    <link rel="stylesheet" href="/view/css/style.css">

    <script src="/view/js/modernizr.min.js"></script>
</head>
<body>
    <div id="boxAlert" class="noDisplay">
        <button type="button" class="close close-alert">×</button>
        <h4><i class="fa"></i> <span class="title-message"></span></h4>
        <p class="message-alert"></p>
    </div>