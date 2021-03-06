<!--
  -- CWClan HTML5 Theme for PHP-Fusion
  -- Version: 0.2
  --
  -- Copyright 2013 CWClan
  -- Licensed -/-
  --
  -- Homepage: http://www.cwclan.de
  -- Source: https://github.com/ununseptium/cwclan-html5-newish
  --
  -- made by ununseptium@github and globeFrEak@github
  -->

<!DOCTYPE html>
<!--[if lte IE 7]>	<script src="js/lte-ie7.js"></script><![endif]-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Additional Links -->
        <link rel="author" type="text/plain" href="humans.txt" />
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'  />

        <title>CWCLAN [CW] - PHP Fusion Theme HTML5 Draft</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/cwclan.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300|Open+Sans+Condensed:300,700|Droid+Serif:400,700">

        <!-- Scripts -->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- START OF CONTENT -->
        <div class="topbar navbar">
            <div class="title">CWClan <span class="subtitle">Clan & Community</span></div>
            <div class="navi_hint no-pc"><a data-toggle="collapse" data-target=".login"></a></div>
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".login">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                <div class="nav-collapse login collapse">
                    <div class="no-tabletbook no-mobile"> <!-- PC Resolution Login -->
<?php if(!isset($_GET['login_state']))
{
 echo '                 <form style="margin-top:-7px">
                            <input type="text" name="login-name" placeholder="Login"> 
                            <input type="password" name="password" placeholder="Passwort"> 
                            <input type="submit" class="cw-btn">
                        </form>
                        <div class="login-info"><a href="#">Registrieren</a>&nbsp;&nbsp;&nbsp;<a href="#">Passwort vergessen</a></div>';
}
else {
 echo '
                        <div class="logged_in_box">
                            <div class="user_avatar">
                                <a href="#"><img src="img/content/useravatar_small_nevo.png" class="tp" data-toggle="tooltip" title="Zu deinem Profil" width="40"></a>
                            </div>
                            <div class="user_login_content">
                                <div><a href="#">nevo</a></div>
                                <div class="user_login_icons">
                                    <a href="#" class="tp" data-toggle="tooltip" title="Einstellungen"><span class="icon-cog"></span></a> 
                                    | 
                                    <a href="#" class="tp" data-toggle="tooltip" title="Nachrichten"><span class="icon-envelop"></span></a>
                                    | 
                                    <a href="#" class="tp" data-toggle="tooltip" title="Logout"><span class="icon-switch"></span></a>
                                </div>
                            </div>
                        </div>
 ';
}
?>
                    </div>
                    <div class="no-pc"> <!-- Mobile / Tabletbook Resolution Login -->
                        <div class="responsive-login">
<?php if(!isset($_GET['login_state']))
{
    echo '
                            <div class="login-box-r">
                            <table class="table table-condensed">
                                <tr>
                                    <td>
                                        <div align="center">
                                            <input type="text" name="login-name" placeholder="Login">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div align="center">
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div align="center">
                                            <input type="submit" value="Einloggen" class="cw-btn">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div align="center">
                                            <a href="#">Registrieren</a>&nbsp;&nbsp;&nbsp;<a href="#">Passwort vergessen</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            </div>
                            ';
}
else {
    echo '              <div class="logged_in_box">
                            <div style="width: 75%;margin:0 auto;">
                                <div class="user_avatar">
                                    <a href="#"><img src="img/content/useravatar_small_nevo.png" class="tp2" data-toggle="tooltip" title="Zu deinem Profil" width="40"></a>
                                </div>
                                <div class="user_login_content">
                                    <div><a href="#">nevo</a></div>
                                    <div class="user_login_icons">
                                        <a href="#" class="tp2" data-toggle="tooltip" title="Einstellungen"><span class="icon-cog"></span></a>&nbsp;|&nbsp;<a href="#" class="tp2" data-toggle="tooltip" title="Nachrichten"><span class="icon-envelop"></span></a>&nbsp;|&nbsp;<a href="#" class="tp2" data-toggle="tooltip" title="Logout"><span class="icon-switch"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>';
}
?>
                        </div>
                    </div>
                </div>
        </div>

        <div class="wrapper clearfix">

            <div class="breadcrumb">Du bist hier: <span class="c_orange">Home</span></div>

            <div class="hero"></div>

            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-inner">
                        <div class="container">
                            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                            <div class="navi_hint no-pc"><a data-toggle="collapse" data-target=".nav-toggle">Navigation</a></div>
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-toggle">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-toggle nav-collapse collapse">
                                <ul class="nav">
                                    <li><a href="#">Startseite</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Fotogalerie
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Neue Bilder</a></li>
                                            <li><a href="#">Meist angesehene Bilder</a></li>
                                        </ul>
                                    </li> <!-- Dropdown End -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Server
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">HLStats</a></li>
                                            <li><a href="#">Map Bewertungen</a></li>
                                            <li><a href="#">Reserved Slots</a></li>
                                        </ul>
                                    </li> <!-- Dropdown End -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main clearfix">
                <div class="content">                  
                    <div class="infusion_forum no-tabletbook no-mobile">
                        <table class="table table-striped table-condensed">
                            <tbody>
                                <tr>
                                    <th>&nbsp;</th><th>Forum / Topic</th><th>Autor</th><th>Views</th><th>Antworten</th><th>letzter Post</th>
                                </tr>
                                <tr>
                                    <td><img src="http://www.cwclan.de/themes/TF2-Teamjoin/forum/folder.png" alt="folder.png"></td><td><div class="forum">Spam</div><span class="topic"><a href="#">Quote Thread</a></span></td><td><a href="#">dizAmbiguation</a></td><td>8488</td><td>101</td><td><div class="datetime">05.05.2013 22:08</div>
                                        <a href="#">UFeindschiff</a></td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.cwclan.de/themes/TF2-Teamjoin/forum/folder.png" alt="folder.png"></td><td><div class="forum">Gameserver</div><span class="topic"><a href="#">Minecraft Server News</a></span></td><td><a href="#">globeFrEak</a></td><td>289</td><td>0</td><td><div class="datetime">04.05.2013 12:33</div>
                                        <a href="#">globeFrEak</a></td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.cwclan.de/themes/TF2-Teamjoin/forum/folder.png" alt="folder.png"></td><td><div class="forum">Diskussion</div><span class="topic"><a href="#">Daily Ohrwurm</a></span></td><td><a href="#">the ELM</a></td><td>187648</td><td>2756</td><td><div class="datetime">03.05.2013 23:51</div>
                                        <a href="#">Oceanic</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <article>
                        <h3><a href="#">CWClan Stammtisch #1 - Jetzt geht's los!</a></h3>
                        <div class="article_submenu clearfix">
                            <span class="author">
                                Veröffentlicht von: <a href="#">nevo</a>
                            </span>
                            <span class="comments">
                                <a href="#">5 Kommentare</a> <span class="icons icon-bubbles"></span>
                            </span>
                        </div>
                        <p class="article">
                            <img src="http://www.cwclan.de/images/cwstammtisch_01.png"><br>
                            <p align="center">
                                CWClan - Stammtisch #1<br>
                            </p>
                            <p>
                                CWClan Geister erhebet euch... Okay, falscher Text. Passiert den besten... <br>
                                Nichts destrotrotz dürft auch ihr euch "erheben" und an unserem 1. CWClan Stammtisch teilnehmen...
                            </p>
                    </article>

                    <article>
                        <h3><a href="#">Wir sind ein Verein!</a></h3>                       
                        <div class="article_submenu clearfix">
                            <span class="author">
                                Veröffentlicht von: <a href="#">Indigo</a>
                            </span>
                            <span class="comments">
                                <a href="#">10 Kommentare</a> <span class="icons icon-bubbles"></span>
                            </span>
                        </div>
                        <p class="article">
                            <img src="http://www.cwclan.de/images/news/cwclan_logo_tf2_bw_klein.png" align="left" img="tf2_bw_klein">
                            Wie einige wissen, haben wir durchaus ab und an mal Finanzierungsprobleme und selbst Moody´s hat uns schon mit einer  Abwertung der Kreditwürdigkeit gedroht.<br>

                            <b>Also nun zum Thema:</b>
                            Ab dem 2. Quartal 2013, also ab heute, sind wir ein e.V. (eingetragener Verein), was uns in die Lage versetzt, durch Werbung sowohl auf dem Server als auch auf unserer Seite Geld zu verdienen.
                            weiteres findet ihr unter <a href="#">mehr lesen...</a>
                        </p>
                    </article>
                    <br><br><br>
                    <div class="pagination pagination-centered">
                        <ul>
                            <li class="disabled"><a href="#" title="Vorherige Seite">&laquo;</a></li>
                            <li class="active"><a href="#" title="Seite 1">1</a></li>
                            <li><a href="#" title="Seite 2">2</a></li>
                            <li><a href="#" title="Seite 3">3</a></li>
                            <li><a href="#" title="Seite 4">4</a></li>
                            <li><a href="#" title="Seite 5">5</a></li>
                            <li><a href="#" title="Nächste Seite">&raquo;</a></li>
                        </ul>
                    </div>
                </div>

                <div class="sidebar">
                    <div class="box">
                        <h3>Zufallsfoto</h3>
                        <p class="image_box">
                            <img src="http://www.cwclan.de/images/photoalbum/album_3/img_5741_t1.jpg"><br>
                            Kommentare: 18<br>
                            <a href="#">Clan Tower</a><br>
                            <a href="#">neue Fotos</a>
                        </p>
                    </div>
                    <div class="box">
                        <h3>Mumble</h3>
                        <div class="sidebar_div">
                            <div>
                                <a href="mumble://mumble.cwclan.de:64738/?version=1.2.0"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/mumble-icon.png" alt="Verbinden mit: mumble.cwclan.de Mumble" height="16" width="16"> mumble.cwclan.de</a> (168)<br>
                                <div>
                                    <a href="#"><img name="div_channel_1" src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_open.png" alt="Mumbleviewer" height="10" width="11"></a><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_channel.png" alt="Mumbleviewer" height="10" width="16"><a href="mumble://mumble.cwclan.de:64738/AFK/?version=1.2.0">AFK</a> (1)<br>
                                    <div>
                                        <div>
                                            <img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_line.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_end.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_player.png" alt="Spieler" title="Spieler" height="10" width="16">darktak3ger<img src="http://www.cwclan.de/infusions/mumbleview_panel/images/player_auth.png" alt="registrierter Spieler" title="registrierter Spieler" height="10" width="16"><br></div>
                                    </div>                                    
                                    <div>
                                        <img border="0" src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_line.gif" height="10" width="11" alt="Mumbleviewer"><a href="#"><img name="div_channel_6" src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_open.png" alt="Mumbleviewer" height="10" width="11"></a><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_channel.png" alt="Mumbleviewer" height="10" width="16"><a href="mumble://mumble.cwclan.de:64738/TF2/?version=1.2.0">TF2</a> (2)<br>
                                        <div>                                            
                                            <div>
                                                <img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_line.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_line.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_mid.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_player.png" alt="Spieler" title="Spieler" height="10" width="16">TANKCOM...<img src="http://www.cwclan.de/infusions/mumbleview_panel/images/player_auth.png" alt="registrierter Spieler" title="registrierter Spieler" height="10" width="16"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/player_selfmute.png" alt="stummer Spieler" title="stummer Spieler" height="10" width="16"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/player_selfdeaf.png" alt="tauber Spieler" title="tauber Spieler" height="10" width="16"><br></div>
                                            <div>
                                                <img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_line.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_line.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_tree_end.gif" alt="Mumbleviewer" height="10" width="11"><img src="http://www.cwclan.de/infusions/mumbleview_panel/images/list_player.png" alt="Spieler" title="Spieler" height="10" width="16">auRic<br></div>
                                        </div>                                        
                                    </div>                                    
                                </div>
                            </div>
                            <div style="border-top:1px solid #ccc;width:100%;position:relative;"><a href="mumble://mumble.cwclan.de:64738/?version=1.2.0" target="_blank">Verbinden</a><a href="seite_mumble_13.html" style="position:absolute;right:0px;">Hilfe</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">(c) 2013 <span class="c_orange">cwclan</span> - clan & community</div>

        <!-- END OF CONTENT -->

        <!-- Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script> 
            $('.tp').tooltip({
            placement : 'bottom'
            });
        </script>
        <script> 
            $('.tp2').tooltip({
            placement : 'right'
            });
        </script>
        <!-- INCLUDE GOOGLE ANALYTICS -->
        <script>
            var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
            (function(d, t) {
                var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g, s)
            }(document, 'script'));
        </script>
    </body>
</html>