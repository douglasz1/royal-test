<?php
#Caminhos absolutos
$pastaInterna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

(substr($_SERVER['DOCUMENT_ROOT'],-1) == '/') ?$barra = "":$barra = "/";

define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}$barra{$pastaInterna}");

#Atalhos
define('DIRIMG', DIRPAGE.'img/');
define('DIRCSS', DIRPAGE.'lib/css/');
define('DIRJS', DIRPAGE.'lib/js');

#Acesso ao DB
define('HOST', "localhost");
define('DB',"sistema");
define('USER', "root");
define('PASS',"");