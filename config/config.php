<?php
#Caminhos absolutos
$pastaInterna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

(substr($_SERVER['DOCUMENT_ROOT'],-1) == '/') ?$barra = "":$barra = "/";

define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}($barra){$pastaInterna}");
