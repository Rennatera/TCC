<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-28 12:16:56
         compiled from "view\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26891592ae9e86187d2-42448048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ebf719d4deb14d3bda412804d159a329a842f6' => 
    array (
      0 => 'view\\common\\header.tpl',
      1 => 1495918940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26891592ae9e86187d2-42448048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ogSiteTitle' => 0,
    'siteKeywords' => 0,
    'siteDescription' => 0,
    'ogSiteUrl' => 0,
    'ogSiteDescription' => 0,
    'ogSiteImagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592ae9e86e6406_88101190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592ae9e86e6406_88101190')) {function content_592ae9e86e6406_88101190($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php if (isset($_smarty_tpl->tpl_vars['ogSiteTitle']->value)) {?>Aduvi | <?php echo $_smarty_tpl->tpl_vars['ogSiteTitle']->value;
} else { ?>Aduvi<?php }?></title>

    <meta name="keywords" content="<?php if (isset($_smarty_tpl->tpl_vars['siteKeywords']->value)) {
echo $_smarty_tpl->tpl_vars['siteKeywords']->value;
} else {
}?>" runat="server">
    <meta name="description" content="<?php if (isset($_smarty_tpl->tpl_vars['siteDescription']->value)) {
echo $_smarty_tpl->tpl_vars['siteDescription']->value;
} else { ?>Aduvi<?php }?>" runat="server">

    <meta property="fb:app_id" content="1537002183233567">

    <meta property="og:url" content="<?php if (isset($_smarty_tpl->tpl_vars['ogSiteUrl']->value)) {
echo $_smarty_tpl->tpl_vars['ogSiteUrl']->value;
} else { ?>http://<?php echo $_SERVER['HTTP_HOST'];
}?>">
    <meta property="og:title" content="<?php if (isset($_smarty_tpl->tpl_vars['ogSiteTitle']->value)) {?>Aduvi | <?php echo $_smarty_tpl->tpl_vars['ogSiteTitle']->value;
} else { ?>Aduvi<?php }?>">
    <meta property="og:site_name" content="Aduvi">
    <meta property="og:description" content="<?php if (isset($_smarty_tpl->tpl_vars['ogSiteDescription']->value)) {
echo $_smarty_tpl->tpl_vars['ogSiteDescription']->value;
} else { ?>Aduvi<?php }?>">
    <!-- <meta property="og:image" content="<?php if (isset($_smarty_tpl->tpl_vars['ogSiteImagem']->value)) {
echo $_smarty_tpl->tpl_vars['ogSiteImagem']->value;
} else { ?>http://<?php echo $_SERVER['HTTP_HOST'];
}?>"> -->

    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website">

    <link rel="canonical" href="<?php if (isset($_smarty_tpl->tpl_vars['ogSiteUrl']->value)) {
echo $_smarty_tpl->tpl_vars['ogSiteUrl']->value;
} else { ?>http://<?php echo $_SERVER['HTTP_HOST'];
}?>">

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

    <?php echo '<script'; ?>
 src="/view/js/modernizr.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="boxAlert" class="noDisplay">
        <button type="button" class="close close-alert">×</button>
        <h4><i class="fa"></i> <span class="title-message"></span></h4>
        <p class="message-alert"></p>
    </div><?php }} ?>
