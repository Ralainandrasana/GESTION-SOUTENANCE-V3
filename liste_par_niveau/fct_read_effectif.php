<?php
    //include('../lien_php_sql.php');
    function readEtudiantEff(&$niveau,&$effectif){
        $Bdd=lienPhpSql();
        $et=$Bdd->query('SELECT NIVEAU,COUNT(MATRICULE) as EFFECTIF from Etudiant group by NIVEAU order by NIVEAU');
        $niveau=$effectif=[];
        while($ETUDIANT=$et->fetch()){
            array_push($niveau, $ETUDIANT['NIVEAU']);
            array_push($effectif, $ETUDIANT['EFFECTIF']);
        }
    }
?>

