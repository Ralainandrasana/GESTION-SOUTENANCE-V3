<?php
    //include('../lien_php_sql.php');
    function readSearch(&$matricule,&$nom,&$prenom,&$parcours,&$niveau,&$adr_mail){
        $Bdd=lienPhpSql();
        $stringSearch=$_GET['search'];
        if(ctype_digit($stringSearch)){
            $et=$Bdd->prepare('SELECT * from Etudiant WHERE MATRICULE LIKE ? ');
        }
        elseif(ctype_alpha($stringSearch)){
            $et=$Bdd->prepare('SELECT * from Etudiant WHERE NOM LIKE ? ');
        }
        else{
            echo "verifiez le syntaxe";
        }
        $et->execute(["%".$_GET['search']."%"]);
        while($ETUDIANT=$et->fetch()){
            array_push($matricule, $ETUDIANT['MATRICULE']);
            array_push($nom, $ETUDIANT['NOM']);
            array_push($prenom, $ETUDIANT['PRENOM']);
            array_push($parcours, $ETUDIANT['PARCOURS']);
            array_push($niveau, $ETUDIANT['NIVEAU']);
            array_push($adr_mail, $ETUDIANT['ADR_MAIL']);
        }
    }
?>

