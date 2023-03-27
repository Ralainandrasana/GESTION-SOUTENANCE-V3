<?php
    //include('../lien_php_sql.php');
    function readEtudiantPassout(&$matricule,&$nom,&$prenom){
        $Bdd=lienPhpSql();
        $et=$Bdd->query('SELECT MATRICULE,NOM,PRENOM from Etudiant WHERE MATRICULE NOT IN (SELECT MATRICULE from Soutenir)');
        while($ETUDIANT=$et->fetch()){
            array_push($matricule, $ETUDIANT['MATRICULE']);
            array_push($nom, $ETUDIANT['NOM']);
            array_push($prenom, $ETUDIANT['PRENOM']);
        }
    }
?>

