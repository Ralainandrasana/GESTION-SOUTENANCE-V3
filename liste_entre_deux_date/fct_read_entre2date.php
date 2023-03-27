<?php
    //include('../lien_php_sql.php');
    function readNoteEntre2date(&$matricule,&$note){
        $Bdd=lienPhpSql();
        $et=$Bdd->query('SELECT MATRICULE,NOTE from Soutenir order by ANNEE_UNIV');
        while($ETUDIANT=$et->fetch()){
            array_push($matricule, $ETUDIANT['MATRICULE']);
            array_push($note, $ETUDIANT['NOTE']);
        }
    }
?>

