<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 00:34:02
         compiled from "view\common\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12576593203fab95042-85988684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35cb11ba691a48083d41c646d619379d40c01080' => 
    array (
      0 => 'view\\common\\menu.tpl',
      1 => 1495918933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12576593203fab95042-85988684',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593203fab98ec8_86730799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593203fab98ec8_86730799')) {function content_593203fab98ec8_86730799($_smarty_tpl) {?><div class="mainmenu-area">
    <div class="container">
        <div class="row hidden-sm hidden-xs">
            <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                <div class="mainmenu">
                    <nav>
                        <ul id="nav">
                            <li class="current"><a href="/"><span><i class="fa fa-home"></i></span>Home</a></li>
                            <li><a href="#sobrewrap"><span><i class="fa fa-institution"></i></span>Sobre</a></li>
                            <li><a href="#contatowrap"><span><i class="fa fa-envelope"></i></span>Contato</a></li>
                            <li><a href="/eventos"><span><i class="fa fa-calendar"></i></span>Programa & Eventos</a></li>
                            <li>
                                <a href="#"><span><i class="fa fa-user"></i></span>Cadastre-se</a>
                                <div class="mega-menu">
                                    <span>
                                        <a href="/cadastro-instituicao">Instituição</a>
                                        <a href="/cadastro-voluntario">Voluntário</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-sign-in"></i></span>Login</a>
                                <div class="mega-menu">
                                    <span>
                                        <a href="/login-instituicao">Instituição</a>
                                        <a href="/login-voluntario">Voluntário</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Mobile -->
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav>
                        <ul id="mobile-menu" class="visible-sm visible-xs">
                            <li><a href="/">Home</a></li>
                            <li><a href="#sobrewrap">Sobre</a></li>
                            <li><a href="#contatowrap">Contato</a></li>
                            <li><a href="/eventos">Programas & Eventos</a></li>
                            <li>
                                <a href="#">Cadastre-se</a>
                                <ul>
                                    <a href="/cadastro-instituicao">Instituição</a>
                                    <a href="/cadastro-voluntario">Voluntário</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Login</a>
                                <ul>
                                    <a href="/login-instituicao">Instituição</a>
                                    <a href="/login-voluntario">Voluntário</a>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
