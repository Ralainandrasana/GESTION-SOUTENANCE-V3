<?php
    //include('../lien_php_sql.php');
    function readEtudiantEff(&$annee_univ,&$effectif){
        $Bdd=lienPhpSql();
        $et=$Bdd->query('SELECT ANNEE_UNIV,COUNT(MATRICULE) as EFFECTIF from Soutenir group by ANNEE_UNIV order by ANNEE_UNIV');
        $annee_univ=$effectif=[];
        while($ETUDIANT=$et->fetch()){
            array_push($annee_univ, $ETUDIANT['ANNEE_UNIV']);
            array_push($effectif, $ETUDIANT['EFFECTIF']);
        }
    }
?>

