<?php
$pays = new LivreDAO($cnx);
$liste = $pays->getLivre();

if(is_null($liste)){
    print "<br>Pas de données";
}
else {
    print '<pre>';
var_dump($liste);
    print '</pre>';

}
