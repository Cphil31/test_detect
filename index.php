<?php
//si l'utilisateur est entrain d'utiliser un smartphone/tablette pendant la navigation sur votre site 
$useragent=$_SERVER['HTTP_USER_AGENT'];
var_dump($useragent);

/*
lien http
http://www.codeurjava.com/2017/01/php-detecter-si-un-terminal-est-un-mobile-tablette.html
*/

// adresse ip de la machine 
$server=$_SERVER['REMOTE_ADDR'];
var_dump($server);
/*
lien http 
http://devblog.fr/2017/08/22/connaitre-ladresse-ip-dun-visiteur-avec-php/#:~:text=Pour%20acc%C3%A9der%20%C3%A0%20cette%20information,SERVER%5B'REMOTE_ADDR'%5D.
*/