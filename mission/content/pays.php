<?php
$pays = new PaysDAO($cnx);
$liste = $pays->getPays();
if($liste == null){
    print "<br> Pas de données";
}
else{
    foreach($liste as $value){
        print "pays : ".$value->nom_pays;
        print '<pre>';
        //var_dump($liste);
        print '</pre>';
    }

}
