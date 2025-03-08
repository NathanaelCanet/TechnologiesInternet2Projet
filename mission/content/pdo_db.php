<?php
/*
$query = "select * from pays order by nom_pays";
$stmt = $cnx -> query($query);
if($stmt->rowCount() > 0){
    while($result = $stmt->fetch()){
        print "<br>- ".$result['nom_pays'];
    }
}


try{


print "<pre>";
$stmt = $cnx->query($query);
$result = $stmt-> fetchAll();
var_dump($result);
print "</pre>";
foreach($result as $row){
    print "<br>- ".$row['nom_pays'];
}
}catch(PDOException $e) {
    print "Erreur d'insertion". $e->getMessage();
}
//marche pas
*/
$query = "select ajout_pays(:nom_pays)";
$stmt=$cnx->prepare($query);
$stmt->bindValue(':nom_pays','Suisse');
$stmt->execute();
$id = $stmt->fetchColumn(0);
print"<br> Dernier identifiant : ".$id;
?>
